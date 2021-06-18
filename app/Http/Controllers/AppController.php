<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class AppController extends Controller
{
   public function customers()
   {
       $all_drivers = Driver::all();

       return view("welcome",["all_drivers" => $all_drivers]);
   }

   public function driver_detail($id)
   {
       $driver_detail = Driver::find($id);

       return view("view_driver_detail",["driver_detail" => $driver_detail]);
   }

}
