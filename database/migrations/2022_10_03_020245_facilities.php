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
        Schema::create('facilities', function (Blueprint $table) {
            $table->id('PK_facilityId');
            $table->string('facility');
            $table->text('street'); 
            $table->text('city'); 
            $table->text('barangay'); 
            $table->text('users'); //Populate saving by userIDS .. ex. 1,2,3 
            $table->text('specializations'); //Populate saving by specializationIDS .. ex. 1,2,3 
            //Attachment . picture
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
        Schema::dropIfExists('facilities');
    }
};
