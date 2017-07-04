<?php

use App\User;
use App\UserRole;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

	// $roles = App\UserRole::find(1)->userType;

	// if(App\UserRole::find(1)->userType()->where('role','modifier')){

	// 	return $roles;
	// }
	// return $roles;
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
