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
        Schema::create('report', function (Blueprint $table) {
            $table->id('PK_reportId');   
            $table->integer('FK_userId'); //creator 
            $table->integer('reportId'); 
            $table->text('from')->nullable(); 
            $table->text('to')->nullable(); 
            $table->text('refer'); 
            $table->text('specialization'); 
            $table->integer('minage'); 
            $table->integer('maxage'); 
            $table->string('gender'); 
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
        Schema::dropIfExists('report');
    }
};
