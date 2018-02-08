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
