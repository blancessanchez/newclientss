<?php

namespace App\Http\Controllers;

use View;
use DB;
use App\Status;
use App\Bill;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;

class billController extends Controller
{
	

	public function index(Request $request, $ssrId)
    {
    	$bill = Bill::where('ssrId', $ssrId)->get();
    	
    	 View::share('bill', $bill);

        if($request->has('download')){
            $pdf = PDF::loadView('bill');

           return $pdf->setPaper('A4', 'landscape')->download('receipt.pdf');
        }

        return view('billinfo', compact('bill', $bill));
    }

    public function index2(Request $request, $ssrId)
    {
        $bill = Bill::where('mainId', $ssrId)->get();
        
         View::share('bill', $bill);

        if($request->has('download')){
            $pdf = PDF::loadView('bill');

           return $pdf->setPaper('A4', 'landscape')->download('receipt.pdf');
        }

        return view('billMaintenance', compact('bill', $bill));
    }



    

}