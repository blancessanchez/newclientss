<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Swatkins\LaravelGantt\Gantt;
use App\Status;
use App\AcctUsers;
use App\Order;
use App\Maintenance;
use App\Project;
use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Gantts;
use App\Http\Controllers\Controller;

class deployController extends Controller
{
	

	 public function index($id)
    {
    	$orders = Order::where('id', $id)->get();
    	return view('deployment', compact('orders', $orders));
    }

    public function show($ssrId)
    {
    	$stats = Status::where('ssrId', $ssrId)->get();
        $ordId = DB::select(DB::raw("SELECT ordId FROM tblorder WHERE ssrId = $ssrId"));
        $id = $ordId[0];
        $projId = DB::select(DB::raw("SELECT projectId FROM tblproject WHERE ordId = $id->ordId"));
        $ctr = count($projId);
        if($ctr==0)
        {
            $status = "Pending";
            $gantt = " ";
             return view('status', compact('stats', $stats), compact('status', $status))->with([ 'gantt' => $gantt ]);
        }
        else{

            $projectId = $projId[0];
            $select = 'title as label, DATE_FORMAT(start, \'%Y-%m-%d\') as start, DATE_FORMAT(end, \'%Y-%m-%d\') as end';
            $projects = Gantts::select(DB::raw($select))
                            ->where('projectId', $projectId->projectId)
                            ->orderBy('start', 'asc')
                            ->orderBy('end', 'asc')
                            ->get();
            $proJ = Project::find($projectId->projectId);
            $status = $proJ->status;
            $count = $projects->count();
            if($count==0) {
                $gantt = "No Activities Yet";
            }
            else{
                 $gantt = new Gantt($projects->toArray(), array(
                'title'      => 'Activities',
                'cellwidth'  => 25,
                'cellheight' => 35
            ));
            }
        }
        return view('status', compact('stats', $stats), compact('status', $status))->with([ 'gantt' => $gantt ]);
        
    }

    public function reqMain($id)
    {
        return view('maintenance', compact('id', $id));
    }

    public function addReq(Request $request,$id)
    {
         $rules = Validator::make($request->all(), [
            'address' => 'required',
            'maintenance' => 'required',
        ]);
       
        if($rules->fails())
        {
            \Session::flash('flash_message', 'No date inputted.');
            return redirect()->back()->withErrors($rules->errors());
        }
        else
        {
            $order = Order::find($id);
            $user = AcctUsers::find($order->id);
            $main = new Maintenance;
            $main->ordId = $id;
            $main->email = $user->email;
            $main->contact = $user->acctContact;
            $main->systemname = $order->ordProd;
            $main->datePurchased = $order->created_at;
            $main->address = $request->address;
            $main->category = $request->category;
            $main->request = $request->maintenance;
            $main->userid = Auth::user()->id;
            $main->user = Auth::user()->acctName;
            $main->save();
            \Session::flash('flash_message', 'Request Sent');
            return redirect()->action('deployController@index', $id);
        }
    }

    public function viewReq($id)
    {
        $mains = Maintenance::where('ordId', $id)->get();
        return view('viewReq', compact('mains', $mains));
    }

    public function editReq($id)
    {
        $main = Maintenance::find($id);
        return view('editReq', compact('main', $main));
    }

    public function updateReq(Request $request, $id)
    {
        $main = Maintenance::find($id);
        $main->request = $request->maintenance;
        $main->category = $request->category;
        $main->address = $request->address;
        $main->save();

        return redirect()->action('deployController@viewReq', $main->ordId);
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        Order::destroy($id);
        $ssrId = $order->ssrId;
        DB::delete( DB::raw("DELETE  FROM tblssr WHERE ssrId = $ssrId"));
        DB::delete( DB::raw("DELETE  FROM tblbilling WHERE ssrId = $id"));
        DB::delete( DB::raw("DELETE  FROM tblmaintenance WHERE ordId = $id"));
        return redirect()->action('deployController@index', Auth::user()->id);
    }

     public function destroy2($id)
    {
        $main = Maintenance::find($id);
        Maintenance::destroy($id);
        DB::delete( DB::raw("DELETE  FROM tblbilling WHERE mainId = $id"));
        return redirect()->action('deployController@viewReq', $main->ordId);
    }

}