<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesHasLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_has_lawyers', function (Blueprint $table) {
            $table->foreign('employees_id')->references('id')->on('employees')->onDelete('cascade');
            $table->integer('employees_id')->unsigned();
             $table->foreign('lawyers_id')->references('id')->on('lawyers')->onDelete('cascade');
            $table->integer('lawyers_id')->unsigned();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees_has_lawyers');
    }
}
