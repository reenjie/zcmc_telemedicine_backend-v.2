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
        Schema::create('tele_notification', function (Blueprint $table) {
            $table->id('PK_notificationId');
            $table->integer('active'); // 0 = false , 1 = true
            $table->integer('FK_specialization'); 
            $table->integer('FK_userId');  // from
            $table->integer('FK_patientId'); //patient
            $table->integer('FK_caseId');  // case
            $table->string('title'); 
            $table->text('body'); 
            $table->string('link');
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
        Schema::dropIfExists('tele_notification');
    }
};
