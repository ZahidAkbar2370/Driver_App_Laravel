<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Driver
Route::get("driver-profile","Driver\DriverController@profile");
Route::post("save-driver-profile","Driver\DriverController@store");

// Customer
Route::get("customer-profile","Customer\CustomerController@profile");
Route::post("save-customer-profile","Customer\CustomerController@store");

// App (User)
Route::get("/","AppController@customers");
Route::get("view-driver-deatail/{id}","AppController@driver_detail");

// Admin Panel
Route::get("admin-dashboard","Admin\AdminController@dashboard");
Route::get("admin-view-customers","Admin\AdminController@all_customers");
Route::get("admin-view-drivers","Admin\AdminController@all_drivers");