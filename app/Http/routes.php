<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/loginfailed', function()
{
    return view('/auth/loginfailed');
});
Route::group(['middleware' => ['web']], function () {
    Route::get('payPremium/{prodId}', ['as'=>'payPremium','uses'=>'PaypalController@payPremium']);
    Route::post('getCheckout', ['as'=>'getCheckout','uses'=>'PaypalController@getCheckout']);
    Route::get('getDone', ['as'=>'getDone','uses'=>'PaypalController@getDone']);
    Route::get('getCancel', ['as'=>'getCancel','uses'=>'PaypalController@getCancel']);
    Route::post('save/{ordId}', 'PaypalController@bill');
});
Route::group(array('before' =>'auth'), function()
{
Route::post('subscribe', 'productController@addEmail');
Route::get('/', 'productController@index');
Route::get('services', 'productController@shows');
Route::get('products', 'productController@showp');
Route::get('about', function()
{
    return view('about');
});
Route::get('contactUs', function()
{
    return view('contact');
});
Route::get('/request/{prodId}', 'ssrController@index');
Route::get('500', function()
{
    abort(500);
});

Route::get('/messaging', function()
{
    return view('/navigation/messaging');
});
Route::get('/compose', function()
{
    return view('/navigation/compose');
});


Route::get('fbauth/{auth?}', array('as'=>'facebookAuth', 'uses'=>'AuthController@getFacebookLogin'));
Route::get('logout', array('as'=>'logout', 'uses'=>'AuthController@getLoggedOut'));
Route::auth();

Route::get('/home', 'HomeController@index');
Route::post('/ssrform', 'ssrController@insert');
Route::post('/login', 'Auth\AuthController@authenticate');

Route::group(['middleware' => ['web']], function()
{
	Route::get('upload', 'FilesController@upload');
	Route::post('/handleUpload', 'FilesController@handleUpload');
});

Route::get('edit', 'UserController@edit');
Route::patch('update', [
	'as'=>'userupdate',
	'uses'=>'UserController@update'
	]);
});
Route::get('/homes', 'messageController@index');
Route::get('/orders/{id}', 'deployController@index');
Route::get('pdfview/{prodId}',['as'=>'pdfview','uses'=>'PayPalController@pdfview']);
Route::get('pdfview2/{prodId}',['as'=>'pdfview2','uses'=>'PayPalController@pdfview2']);
Route::get('contract/{ordId}',['as'=>'contract','uses'=>'PayPalController@contract']);
Route::get('/status/{ssrId}', 'deployController@show');

Route::get('productInfo/{prodId}', 'productController@showProd');
Route::get('serviceInfo/{prodId}', 'productController@showServ');
Route::get('ssrview/{ssrId}', 'ssrController@show');
Route::get('ssrupdate/{ssrId}', 'ssrController@update');
Route::post('ssrupdate/{ssrId}', 'ssrController@store');
Route::get('billinfo/{ssrId}', 'billController@index');
Route::get('image/{id}', 'productController@pic');
Route::get('uploadPic', 'UserController@uploadPic');
Route::post('addPic', 'UserController@storePic');
Route::get('editssr/{ssrId}/{prodId}', 'ssrController@editssr');
Route::get('save/{ordId}', 'ssrController@bill');
Route::get('reqMaintenance/{id}', 'deployController@reqMain');
Route::post('addReq/{id}', 'deployController@addReq');
Route::get('viewReq/{id}', 'deployController@viewReq');
Route::get('editReq/{id}', 'deployController@editReq');
Route::post('updateReq/{id}', 'deployController@updateReq');
Route::get('billMaintenance/{ssrId}', 'billController@index2');
Route::post('changePass/{id}', 'UserController@changePass');
Route::get('deleteOrder/{id}', 'deployController@destroy');
Route::get('deleteReq/{id}', 'deployController@destroy2');
Route::get('screenShots/{id}', 'productController@viewSS');
Route::get('logmaster', function()
{
    return view('logmaster');
});
Route::get('payrollwizard', function()
{
    return view('payrollwizard');
});
Route::get('salesguru', function()
{
    return view('salesguru');
});