<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PickupController;
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

Route::view('/', 'anonymous.home')->name('home');

Auth::routes();

Route::get('/login/admin', 'App\Http\Controllers\Auth\LoginController@showAdminLoginForm')->name('admin.login');
Route::post('/login/admin', 'App\Http\Controllers\Auth\LoginController@adminLogin');
Route::get('/register/admin', 'App\Http\Controllers\Auth\RegisterController@showAdminRegisterForm')->name('admin.register');
Route::post('/register/admin', 'App\Http\Controllers\Auth\RegisterController@createAdmin');

Route::get('/login/rider', 'App\Http\Controllers\Auth\LoginController@showRiderLoginForm')->name('rider.login');
Route::post('/login/rider', 'App\Http\Controllers\Auth\LoginController@riderLogin');
Route::get('/register/rider', 'App\Http\Controllers\Auth\RegisterController@showRiderRegisterForm')->name('rider.register');
Route::post('/register/rider', 'App\Http\Controllers\Auth\RegisterController@createRider');

Route::get('/login/merchant', 'App\Http\Controllers\Auth\LoginController@showMerchantLoginForm')->name('merchant.login');
Route::post('/login/merchant', 'App\Http\Controllers\Auth\LoginController@merchantLogin');
Route::get('/register/merchant', 'App\Http\Controllers\Auth\RegisterController@showMerchantRegisterForm')->name('merchant.register');
Route::post('/register/merchant', 'App\Http\Controllers\Auth\RegisterController@createMerchant');



Route::get('/track', 'App\Http\Controllers\ParcelController@track')->name('parcel.track');
Route::view('/services', 'anonymous.services')->name('services');
Route::view('/faqs', 'anonymous.faq')->name('faqs');

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'auth:web,admin'], function(){
    Route::view('/', 'admin.pages.dashboard')->name('admin.dashboard');
    Route::resource('parcels', ParcelController::class);
    Route::resource('payment', PaymentController::class);
    Route::post('/parcel/status', 'App\Http\Controllers\ParcelController@changeStatus')->name('parcel.status');
    Route::resource('pickup', PickupController::class);
});
Route::group(['prefix'=>'merchant','as'=>'merchant.','middleware'=>'auth:web,merchant'], function(){
    Route::view('/', 'merchant.pages.dashboard')->name('merchant.dashboard');
    Route::view('/rates', 'merchant.pages.rate')->name('merchant.rate');
    Route::view('/profile/edit', 'merchant.pages.edit_profile')->name('edit.profile');
    Route::post('/profile/edit', 'App\Http\Controllers\MerchantController@store')->name('merchant.edit');
    Route::resource('parcels', ParcelController::class);
    Route::resource('payment', PaymentController::class);
    Route::resource('pickup', PickupController::class);
});
Route::group(['prefix'=>'rider','as'=>'rider.','middleware'=>'auth:web,rider'], function(){
    Route::view('/', 'rider.pages.dashboard')->name('rider.dashboard');
    Route::resource('parcels', ParcelController::class);
});