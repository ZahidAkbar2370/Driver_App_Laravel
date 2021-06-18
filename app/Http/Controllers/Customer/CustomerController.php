<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Auth;

class CustomerController extends Controller
{
    public function profile()
    {
        $customer = Customer::where("user_id",Auth::user()->id)->get();

        return view("Customer/Profile/profile",["customer" => $customer]);
    }

    public function store(Request $req)
    {
        $findCustomer = Customer::where("user_id",Auth::user()->id)->count();

        if($findCustomer>0)
        {
            $updateCustomer = Customer::where("user_id",Auth::user()->id)->update([

                'customer_name' => $req->customer_name,
                'mobile_no' => $req->mobile_no,
                'cnic_no' => $req->cnic_no,
                'date_of_birth' => $req->date_of_birth,
                'address' => $req->address,
            ]);
        }
        else
        {
            $updateDriver = Customer::create([

                'user_id' => Auth::user()->id,
                'customer_name' => $req->customer_name,
                'mobile_no' => $req->mobile_no,
                'cnic_no' => $req->cnic_no,
                'date_of_birth' => $req->date_of_birth,
                'address' => $req->address,
            ]);
        }
        
        return redirect("customer-profile");
    }
}
