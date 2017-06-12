<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Storage;
use DB;
use Validator;
use Input;
use App\Http\Requests;

class FilesController extends Controller
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function handleUpload(Request $request)
    {


            $file = $request->file('file');
            $allowedFileTypes =  config('app.allowedFileTypes');
            $maxFileSize = config('app.maxFileSize');
            $rules = Validator::make($request->all(), [
                'file' =>'required',
                'file' =>'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize,
            ]);

            if($rules->fails())
            {
                return redirect()->back()->withErrors($rules->errors());
            }
             else
            {
                  $fileName = $file->getClientOriginalName();
                  $destinationPath = config('app.fileDestinationPath').'/'.$fileName;
                  $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));

                  $data = file_get_contents(Input::file('file')->getRealPath());
                  $ch= DB::table('tblattachments')->insert(array(
                    'attachFile'=> $data
                  ));
                  $userid = Input::get('userid');
                  $act = Input::get('actType');
                  $result = DB::table('users')->where('acctUsername', $userid)->pluck('id');
                  $result2 = $result[0];
                  DB::insert( DB::raw("INSERT INTO tblactivity(actType, id, username) VALUES ('$act','$result2', '$userid')"));
                  if($ch > 0)
                  {
                     return redirect('home');
                  }
            }


    }

    public function upload()
    {
        return view('/navigation/compose');
    }
}
