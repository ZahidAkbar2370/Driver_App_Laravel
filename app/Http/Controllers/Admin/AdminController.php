<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Customer;

class AdminController extends Controller
{
    public function dashboard()
    {
        $total_customers = Customer::all()->count();

        $total_drivers = Driver::all()->count();
         
        return view("Admin/Dashboard/dashboard",["total_customers" => $total_customers , "total_drivers" => $total_drivers]);
    }


    public function all_customers()
    {
        $all_customers = Customer::all();

        return view("Admin/Customer/view_customer",["all_customers" => $all_customers]);
    }

    public function all_drivers()
    {
        $all_drivers = Driver::all();

        return view("Admin/Driver/view_driver",["all_drivers" => $all_drivers]);
    }
}
