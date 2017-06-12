<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Input;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Requests;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;



    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'acctName' => 'required|max:255',
            'acctUsername' => 'required|max:255|unique:users',
            'acctContact' => 'required|numeric',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'acctName' => $data['acctName'],
            'acctType' => $data['acctType'],
            'acctUsername' => $data['acctUsername'],
            'acctContact' => $data['acctContact'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function authenticate(Guard $auth, Request $request)
    {
        $rules = Validator::make($request->all(), [
                'acctUsername' =>'required',
                'password' =>'required'
            ]);
         if($rules->fails())
        {
            return redirect()->back()->withErrors($rules->errors());
        }
         else
        {
            $userid = Input::get('acctUsername');
            $password = Input::get('password');
            if ($auth->attempt(['acctUsername' => $userid, 'password' => $password, 'acctType'=>'MEMBER'])) {
                 $act = Input::get('actType');
                 $result = DB::table('users')->where('acctUsername', $userid)->pluck('id');
                 $result2 = $result[0];
                 DB::insert( DB::raw("INSERT INTO tblactivity(actType, id, username) VALUES ('$act','$result2','$userid')"));
                // Authentication passed...
                return redirect()->intended('/');
            }
            \Session::flash('flash_message', 'Invalid username or password!');
            return view('auth/login');
        }
    }
}
