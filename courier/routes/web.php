<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/login/admin', 'App\Http\Controllers\Auth\LoginController@showAdminLoginForm')->name('admin.login');
Route::post('/login/admin', 'App\Http\Controllers\Auth\LoginController@adminLogin');
Route::get('/register/admin', 'App\Http\Controllers\Auth\RegisterController@showAdminRegisterForm');
Route::post('/register/admin', 'App\Http\Controllers\Auth\RegisterController@createAdmin');

Route::get('/login/rider', 'App\Http\Controllers\Auth\LoginController@showRiderLoginForm');
Route::post('/login/rider', 'App\Http\Controllers\Auth\LoginController@riderLogin');
Route::get('/register/rider', 'App\Http\Controllers\Auth\RegisterController@showRiderRegisterForm');
Route::post('/register/rider', 'App\Http\Controllers\Auth\RegisterController@createRider');

Route::get('/login/merchant', 'App\Http\Controllers\Auth\LoginController@showMerchantLoginForm');
Route::post('/login/merchant', 'App\Http\Controllers\Auth\LoginController@merchantLogin');
Route::get('/register/merchant', 'App\Http\Controllers\Auth\RegisterController@showMerchantRegisterForm');
Route::post('/register/merchant', 'App\Http\Controllers\Auth\RegisterController@createMerchant');


Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'auth:web,admin'], function(){
    Route::view('/', 'admin.pages.dashboard');

});
