<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('efname',50);
            $table->string('emname',50)->nullable()->default('none');
            $table->string('elname',50);
            $table->string('email',50);
            $table->string('position',50);
            $table->bigInteger('contact');
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('clients_id')->unsigned()->nullable();
            $table->foreign('schedules_id')->references('id')->on('schedules')->onDelete('cascade');
            $table->integer('schedules_id')->unsigned()->nullable();
            $table->foreign('courts_id')->references('id')->on('courts')->onDelete('cascade');
            $table->integer('courts_id')->unsigned()->nullable();
            $table->integer('casecount')->unsigned()->nullable()->default('0');
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
            $table->integer('position_id')->unsigned()->nullable();
            $table->tinyint('status')->unsigned()->default('1');
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
        Schema::dropIfExists('employees');
    }
}
