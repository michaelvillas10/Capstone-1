<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasetobehandledsHasApprovedcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casetobehandleds_has_approvedcases', function (Blueprint $table) {
             $table->foreign('casetobehandleds_id')->references('id')->on('casetobehandleds')->onDelete('cascade');
            $table->integer('casetobehandleds_id')->unsigned();
             $table->foreign('approvedcases_id')->references('id')->on('approvedcases')->onDelete('cascade');
            $table->integer('approvedcases_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casetobehandleds_has_approvedcases');
    }
}
