<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('patient_id');
            $table->string('date');
            $table->string('time');
            $table->string('fee');
            $table->string('language');
            $table->string('renarks');
            $table->string('status');
            $table->string('appointment_type');
            $table->string('payment_method');
            $table->string('therapist_comment');
            $table->string('appointment_history');
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
        Schema::dropIfExists('appointments');
    }
}
