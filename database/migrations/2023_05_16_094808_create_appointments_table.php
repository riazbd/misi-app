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
            $table->string('ticket_id')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('fee')->nullable();
            $table->string('language')->nullable();
            $table->string('renarks')->nullable();
            $table->string('status')->nullable();
            $table->string('appointment_type')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('therapist_comment')->nullable();
            $table->string('appointment_history')->nullable();
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
