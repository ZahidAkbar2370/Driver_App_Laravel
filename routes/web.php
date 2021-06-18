<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("driver-profile","Driver\DriverController@profile");
Route::post("save-driver-profile","Driver\DriverController@store");


Route::get("customer-profile","Customer\CustomerController@profile");
Route::post("save-customer-profile","Customer\CustomerController@store");

Route::get("/","AppController@customers");
Route::get("view-driver-deatail/{id}","AppController@driver_detail");