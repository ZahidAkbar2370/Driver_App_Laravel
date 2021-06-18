<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('whatsapp_no')->nullable();
            $table->string('cnic_no')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('domicile')->nullable();
            $table->string('vehicle_no')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('license_no')->nullable();
            $table->string('image')->nullable();
            $table->string('publication_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
