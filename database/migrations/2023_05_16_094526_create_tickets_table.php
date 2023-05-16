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
            $table->integer('role_id');
            $table->string('mono_multi_zd');
            $table->string('mono_multi_screening');
            $table->string('intake_or_therapist');
            $table->string('tresonit_number');
            $table->string('datum_intake');
            $table->string('datum_intake_2');
            $table->string('nd_account');
            $table->string('avc_alfmvm_sbg');
            $table->string('honos');
            $table->string('berha_intake');
            $table->string('Strike_history');
            $table->string('ticket_history');
            $table->date('rom_start');
            $table->date('rom_end');
            $table->date('berha_end');
            $table->date('vtcb_date');
            $table->date('closure');
            $table->date('aanm_intake_1 ');
            $table->string('location');
            $table->string('call_strike');
            $table->string('remarks');
            $table->string('comment');
            $table->string('language');
            $table->string('files');

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
