<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use Auth;
use DB;

class DriverController extends Controller
{
    public function profile()
    {
        $driver = Driver::where("user_id",Auth::user()->id)->get();

        return view("Driver/Profile/profile",["driver" => $driver]);
    }

    public function store(Request $req)
    {
        $findDriver = Driver::where("user_id",Auth::user()->id)->count();

        if($findDriver>0)
        {
            if($req->hasFile("image"))
            {
                $image=$req->input("image");

                if($req->hasFile("image"))
                {
                     $image=$req->file("image");
                     $image->move("images",$image->getClientOriginalName());
                }

                $updateDriver = Driver::where("user_id",Auth::user()->id)->update([

                'name' => $req->driver_name,
                'mobile_no' => $req->mobile_no,
                'whatsapp_no' => $req->whatsapp_no,
                'cnic_no' => $req->cnic_no,
                'date_of_birth' => $req->date_of_birth,
                'domicile' => $req->domicile,
                'vehicle_no' => $req->vehicle_no,
                'license_no' => $req->license_no,
                'vehicle_type' => $req->vehicle_type,
                'image' => $req->image->getClientOriginalName(),
            ]);
            }
            else
            {
                $updateDriver = Driver::where("user_id",Auth::user()->id)->update([

                'name' => $req->driver_name,
                'mobile_no' => $req->mobile_no,
                'whatsapp_no' => $req->whatsapp_no,
                'cnic_no' => $req->cnic_no,
                'date_of_birth' => $req->date_of_birth,
                'domicile' => $req->domicile,
                'vehicle_no' => $req->vehicle_no,
                'license_no' => $req->license_no,
                'vehicle_type' => $req->vehicle_type,
                // 'image' => $req->image->getClientOriginalName(),
            ]);
            }
            
        }
        else
        {
            $updateDriver = Driver::create([

                'user_id' => Auth::user()->id,
                'name' => $req->driver_name,
                'mobile_no' => $req->mobile_no,
                'whatsapp_no' => $req->whatsapp_no,
                'cnic_no' => $req->cnic_no,
                'date_of_birth' => $req->date_of_birth,
                'domicile' => $req->domicile,
                'vehicle_no' => $req->vehicle_no,
                'license_no' => $req->license_no,
                'vehicle_type' => $req->vehicle_type,
                // 'image' => $req->image->getClientOriginalName(),
            ]);
        }
        
        return redirect("driver-profile");
    }
}
