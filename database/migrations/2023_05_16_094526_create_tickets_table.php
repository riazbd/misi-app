<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id')->nullable();
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->string('mono_multi_zd')->nullable();
            $table->string('mono_multi_screening')->nullable();
            $table->string('intake_or_therapist')->nullable();
            $table->string('tresonit_number')->nullable();
            $table->string('datum_intake')->nullable();
            $table->string('datum_intake_2')->nullable();
            $table->string('nd_account')->nullable();
            $table->string('avc_alfmvm_sbg')->nullable();
            $table->string('honos')->nullable();
            $table->string('berha_intake')->nullable();
            $table->string('strike_history')->nullable();
            $table->string('ticket_history')->nullable();
            $table->date('rom_start')->nullable();
            $table->date('rom_end')->nullable();
            $table->date('berha_end')->nullable();
            $table->date('vtcb_date')->nullable();
            $table->date('closure')->nullable();
            $table->date('aanm_intake_1')->nullable();
            $table->string('location')->nullable();
            $table->string('call_strike')->nullable();
            $table->string('remarks')->nullable();
            $table->string('comment')->nullable();
            $table->string('language')->nullable();
            $table->string('files')->nullable();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
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
        Schema::dropIfExists('tickets');
    }
}
