<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers', function (Blueprint $table) {
            $table->increments('id');
            
            $table->foreign('employees_id')->references('id')->on('employees')->onDelete('cascade');
            $table->integer('employees_id')->unsigned()->nullable();
            $table->foreign('schedules_id')->references('id')->on('schedules')->onDelete('cascade');
            $table->integer('schedules_id')->unsigned()->nullable();
            $table->foreign('courts_id')->references('id')->on('courts')->onDelete('cascade');
            $table->integer('courts_id')->unsigned()->nullable();
            $table->integer('casecount')->unsigned()->nullable()->default('0');


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
        Schema::dropIfExists('lawyers');
    }
}
