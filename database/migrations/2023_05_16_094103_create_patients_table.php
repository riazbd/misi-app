<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('patient_source');
            $table->string('blood_group');
            $table->string('country');
            $table->string('residential_address')->nullable();
            $table->string('insurance_number');
            $table->string('occupation')->nullable();
            $table->string('status');
            $table->string('alternative_phone')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('remarks')->nullable();
            $table->string('city_or_state');
            $table->string('area')->nullable();
            $table->string('DOB_number')->nullable();
            $table->string('BSN_number')->nullable();
            $table->string('file_type')->nullable();
            $table->string('refferal_file')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
