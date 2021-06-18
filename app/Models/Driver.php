<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $table = "drivers";

    protected $fillable = [

        'user_id',
        'mobile_no',
        'whatsapp_no',
        'cnic_no',
        'date_of_birth',
        'domicile',
        'vehicle_no',
        'vehicle_type',
        'license_no',
        'image',
        'publication_status',
        

    ];
}
