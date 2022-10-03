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
        Schema::create('case', function (Blueprint $table) {
            $table->id('PK_caseId');
            $table->text('caseId');
            $table->integer('FK_designation'); 
            $table->integer('FK_patientId'); 
            $table->string('active'); 
            $table->integer('FK_physicianId'); 
            $table->integer('FK_specializationId'); 
            $table->text('subspecialization'); 
            $table->string('temperature'); 
            $table->string('respiratory'); 
            $table->string('heart'); 
            $table->string('oxygen'); 
            $table->string('weight');
            $table->string('height');
            $table->string('cc');
            $table->text('hpi');
            $table->text('pmh');
            $table->text('ros');
            $table->text('pe');
            $table->text('wi');
            $table->text('imd');
            $table->text('reason');
            $table->rememberToken();
            $table->timestamps();
            //Add Follow Up () ,, Add Paraclinical (Object)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case');
    }
};
