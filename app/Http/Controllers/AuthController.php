<?php

namespace App\Http\Controllers;
namespace vendor\hybridauth\hybridauth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{


public function getFacebookLogin($auth=NULL)
{
  if($auth=='auth')
  {
    try
    {
      Hybrid_Endpoint::process();
    }
    catch (Exception $e)
    {
      return Redirect::to('fbauth');
    }
    return;
  }

  $oauth = new Hybrid_Auth(app_path() . '/config/fb_auth.php');
  $provider = $oauth->authenticate('Facebook');
  $profile = $provider->getUserProfile();
  return var_dump($profile).'<a href="logout">Log Out</a>';
}

public function getLoggedOut()
{
  $fauth = new Hybrid_Auth(app_path(). '/config/fb_auth.php');
  $fauth->logoutAllProviders();
  return View::make('login');
}
}
