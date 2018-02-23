<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprovedcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvedcases', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('casetobehandled_id')->references('id')->on('casetobehandleds')->onDelete('cascade');
            $table->integer('casetobehandled_id')->unsigned();
            $table->foreign('lawyer_id')->references('id')->on('lawyers')->onDelete('cascade');
            $table->integer('lawyer_id')->unsigned();
            $table->foreign('statuses_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->integer('statuses_id')->unsigned()->nullable();
            $table->string('case_status');
            $table->string('control_number',15)->nullable();
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
        Schema::dropIfExists('approvedcases');
    }
}
