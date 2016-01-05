<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['middleware' => 'sentinel.auth', 'uses' => 'UserController@LogUser']);
Route::get('/guest', [ 'uses' => 'UserController@GuestUser']);
Route::post('/guest/login', [ 'uses' => 'UserController@LogGuest']);
Route::get('/guest/register', [ 'uses' => 'UserController@RegisterGuest']);
//return view('welcome')
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => ['web']], function () {
    //
});
