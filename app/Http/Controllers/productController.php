<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Products;
use DB;
use App\Email;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Image;


class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addEmail(Request $request)
    {
        $email = New Email;
        $email->email = $request->email;
        $email->save();
        return redirect()->action('productController@index');
    }

    public function index()
    {   

        $products = Products::where('catId',1)->get();
        $services = Products::where('catId',2)->get();

        return view('main', compact('products', $products), compact('services', $services));
        
       
    }

    public function pic($prodId)
    {
        $product = Products::findOrFail($prodId);
        $pic = Image::make($product->image);
        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }
    
    public function showp()
    {   

        $products = Products::where('catId',1)->get();

        return view('product', compact('products', $products));
        
       
    }

     public function shows()
    {   

        $services = Products::where('catId',2)->get();

        return view('services', compact('services', $services));
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showProd($prodId)
    {
        $product = Products::find($prodId);
        return view('info', compact('product', $product));
    }

     public function showServ($prodId)
    {
        $product = Products::find($prodId);
        return view('info', compact('product', $product));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	}
    public function edit()
    {
        
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewSS($id)
    {
    	$product = Products::find($id);
        return view('screenshots', compact('product', $product));
    }
}
