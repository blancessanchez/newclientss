<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use App\Message;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $message = new Message;
        $message->message = $request->message;
        $message->userid = $request->userid;
        $message->id = $request->userid;
        $message->sentBy = Auth::user()->acctName;
        $message->save();
        return view('home');
    }
}
