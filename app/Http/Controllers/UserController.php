<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\Controller;
use App\AcctUsers;
use App\Email;
use Auth;
use Validator;
use Storage;

class UserController extends Controller
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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user = AcctUsers::find(Auth::user()->id);
        return view('edit', compact('user', $user));
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
        $user = AcctUsers::find(Auth::user()->id);

        $user->acctName = $request->name;
        $user->acctUsername = $request->username;
        $user->acctContact = $request->contact;
        $user->email = $request->email;
        $user->save();
        $user = AcctUsers::find(Auth::user()->id);
        return redirect()->action('UserController@edit',compact('user', $user));
    }

    public function uploadPic()
    {
        return view('upload');
    }

     public function storePic(Request $request)
    {
            
            $allowedFileTypes =  config('app.allowedFileTypes2');
            $maxFileSize = config('app.maxFileSize');
            $rules = Validator::make($request->all(), [
                'image' =>'required',
                'image' =>'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize,
            ]);
             if($rules->fails())
            {
                \Session::flash('flash_message', 'File Selected is Empty or Incorrect File Format!');
                return redirect()->back()->withErrors($rules->errors());
            }
             else
            {   
                $file = $request->file('image');
                $fileName = $file->getClientOriginalName();
                $destinationPath = config('app.fileDestinationPath').'/'.$fileName;
                $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
                Storage::disk('uploads')->put($fileName, file_get_contents($file->getRealPath()));
                $id = Auth::user()->id; 
                $user = AcctUsers::find($id);
                $user->imagePath = $fileName;
                $user->save(); 

                return redirect()->action('UserController@edit', $user->id);
            }      
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    

     public function changePass(Guard $auth, Request $request, $id)
    {
        $rules = Validator::make($request->all(), [
            'old' =>'required',
            'password' =>'required|min:6',
            'password2' =>'required|min:6',
            ]);
        if($rules->fails())
        {
            return redirect()->back()->withErrors($rules->errors());
        }
        else
        {
            $password = $request->password;
            $password2 = $request->password2;
            $old = $request->old;

            if ($auth->attempt(['acctUsername' => Auth::user()->acctUsername, 'password' => $old])) 
            {
                if($password==$password2)
                {    
                    $user = acctUsers::find(Auth::user()->id);
                    $user->password = bcrypt($password);
                    $user->save();
                    return redirect()->action('UserController@edit');
                }
                else
                {
                    \Session::flash('flash_message', 'Passwords do not match!');
                    return redirect()->back()->withErrors($rules->errors());  
                }
            }
            else
            {
                \Session::flash('flash_message', 'Incorrect Password!');
                return redirect()->back()->withErrors($rules->errors());   
            }
        }
    }
}
