<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->id('PK_patientId');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('fullname');
            $table->string('contact');
            $table->string('sex');
            $table->date('birthday');
            $table->string('civilstatus');
            $table->string('religion');
            $table->string('birthplace');
            $table->string('street');
            $table->string('barangay');
            $table->string('city');
            $table->string('ethnicity');
            $table->string('dialect');
            $table->string('guardian_name');
            $table->string('guardian_relationship');
            $table->string('FK_physicianId');
            $table->rememberToken();
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
        Schema::dropIfExists('patient');
    }
};
