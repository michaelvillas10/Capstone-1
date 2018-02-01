<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clfname',50);
            $table->string('clmname',50)->nullable();
            $table->string('cllname',50);
            $table->string('clreligion',50);
            $table->string('clcitizenship',50);
            $table->text('claddress',150);
            $table->string('clemail',50);
            $table->smallInteger('clmonthly_net_income');
            $table->date('clbdate');
            $table->string('clgender',10);
            $table->string('clcivil_status',30);
            $table->string('cleducational_attainment',50);
            $table->string('cllanguage',50);
            $table->BigInteger('clcontact_no');
            
            $table->string('cldetained',5);
            $table->string('cldetained_since')->nullable();
            $table->string('clplace_of_detention')->nullable();
            $table->string('clspouse',50)->nullable();
            $table->text('claddress_of_spouse')->nullable();
            $table->BigInteger('clcontact_no_of_spouse')->nullable();
            $table->string('cl_status')->nullable()->default('Pending');
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
        Schema::dropIfExists('clients');
    }
}
