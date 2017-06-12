<?php

namespace App\Http\Controllers;


use App\User;
use App\Ssr;
use App\Order;
use Input;
use Storage;
use App\Downpayment;
use DB;
use Auth;
use App\Bill;
use View;
use App\Products;
use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;

class ssrController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

	 public function index($prodId)
    {

    	$id = $prodId;
    	$products = Products::lists('prodDesc', 'prodId');
        return View::make('navigation/servicerequest', compact('products', $products), compact('id', $id));
    }

	public function insert(Request $request)
	{
		$prodId = $request->prod;
		$product = Products::find($prodId);
		
		$file = $request->file('file');
		$size = $file->getSize();
        $allowedFileTypes =  config('app.allowedFileTypes');
        $maxFileSize = config('app.maxFileSize');
		$post = $request->all();

		$v = Validator::make($request->all(),
			[
				'ssrName' => 'required|max:255',
				'ssrLocation' => 'required|max:255',
				'ssrContact' => 'required|numeric',
				'ssrProblem' => 'required|max:255',
				'ssrServicereq' => 'required',
				'file' =>'required',
                'file' =>'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize,
			
		
			]
		);

		if($v->fails())
		{
			return redirect()->back()->withErrors($v->errors());
		}
		else
		{
			$fileName = $file->getClientOriginalName();
			$fileType = $file->getClientOriginalExtension();
            $destinationPath = config('app.fileDestinationPath').'/'.$fileName;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
             $sfile = file_get_contents(Input::file('file')->getRealPath());
         
     
			$data = array(
					'ssrName' => $post['ssrName'],
					'ssrLocation' => $post['ssrLocation'],
					'ssrContact' => $post['ssrContact'],
					'ssrProblem' => $post['ssrProblem'],
					'ssrServicereq' => $post['ssrServicereq'],
					'custName' => $post['userid'],
				    'prod' => $product->prodDesc,
				    'id' => $post['id'],
				    'attachment' => $sfile,
				    'fileName' => $fileName,
				    'fileSize' => $size,
				);
			$userid = Input::get('userid');
			$act = Input::get('actType');
			$result = DB::table('users')->where('acctUsername', $userid)->pluck('id');
			$result2 = $result[0];
			
			
			$ch = DB::table('tblssr')->insert($data);
			DB::insert( DB::raw("INSERT INTO tblactivity(actType, id, username) VALUES ('$act','$result2', '$userid')"));
			if($ch > 0)
			{
				

				$usid = $request->id;
				$prodName = $product->prodDesc;

				
				$ssrId = DB::select(DB::raw("SELECT ssrId FROM tblssr WHERE prod = '$prodName' AND id = '$usid' order by ssrId desc "));
				
				$idssr = $ssrId[0];
				$prodId = $request->prod;
				$prod = Products::find($prodId);
				$order = new Order;
				$order->ordProd = $prod->prodDesc;
				$order->price = $prod->flatRate;
				$order->ssrId = $idssr->ssrId;
				$order->ordName = $request->userid;
				$order->id = $request->id;
				$order->save();
				$ordId = DB::select(DB::raw("SELECT ordId FROM tblorder WHERE ordProd = '$prodName' AND id = '$usid' order by ordId desc "));
				$Idord = $ordId[0];
				

        		$downpayments = Downpayment::where('prodId', $prodId)->get();
    
				return view('payPremium', compact('downpayments', $downpayments), compact('idssr', $idssr))->with([ 'prodId' => $prodId ]);
			}
		}
	}

	public function show($ssrId)
	{
		$ssr = Ssr::find($ssrId);
		return view('view', compact('ssr', $ssr));
	}

	public function update($ssrId)
	{
		$ssr = Ssr::find($ssrId);

		return view('update', compact('ssr', $ssr));
	}

	public function store(Request $request, $ssrId)
	{
		$ssr = Ssr::find($ssrId);

        $ssr->ssrName = $request->ssrName;
        $ssr->ssrLocation = $request->ssrLocation;
        $ssr->ssrContact = $request->ssrContact;
        $ssr->ssrServicereq = $request->ssrServicereq;
        $ssr->ssrProblem = $request->ssrProblem;
        $ssr->save();
        return view('view', compact('ssr', $ssr));
	}

	public function editssr($ssrId, $prodId)
	{
		$id = $prodId;
		$products = Products::lists('prodDesc', 'prodId');
		$array = array($id,$products);
		$ssr = Ssr::find($ssrId);
		return view('navigation/editssr', compact('ssr', $ssr), compact('array', $array));
	}

	public function bill(Request $request, $ordId)
    {
        $down = $request->check_list;
        $newPay = Downpayment::find($down);
        $product = Products::find($newPay->prodId);
       
        if($newPay->downpayment==$product->flatRate){
        	$newBill = new Bill;
			$newBill->user = Auth::user()->acctUsername;
			$newBill->item = $product->prodDesc;
			$newBill->billCategory = "Final Payment";
			$newBill->billAmount = $product->flatRate;
			$newBill->ssrId = $ordId;
			$newBill->id = Auth::user()->id;
			$newBill->save();
        	return view('pay',compact('newBill',$newBill));
        }
        
        else
        {
        	$newBill2 = new Bill;
			$newBill2->user = Auth::user()->acctUsername;
			$newBill2->item = $product->prodDesc;
			$newBill2->billCategory = "Final Payment";
			$newBill2->billAmount = $product->flatRate;
			$newBill2->ssrId = $ordId;
			$newBill2->id = Auth::user()->id;
			$newBill2->save();
	        $newBill = new Bill;
	        $newBill->ssrId = $ordId;
	        $newBill->paymentStatus = "Not Paid";
	        $newBill->billAmount = $newPay->downpayment;
	        $newBill->item = $product->prodDesc;
	        $newBill->user = Auth::user()->acctName;
	        $newBill->id = Auth::user()->id;       
	        $newBill->billCategory = "Partial Downpayment";	
	        $newBill->save();

	        return view('pay',compact('newBill',$newBill));
    	}
    }
}

