<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasetobehandledsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casetobehandleds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('casename',75);
             $table->string('interviewer',80);
            $table->string('nature_of_case',50);
          
            $table->string('clcase_involvement',50);
            $table->string('clcomplainant_victim_of',50);
             $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('clients_id')->unsigned();
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
        Schema::dropIfExists('casetobehandleds');
    }
}
