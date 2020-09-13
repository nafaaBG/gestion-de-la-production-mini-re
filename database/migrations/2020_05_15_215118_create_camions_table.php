<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camions', function (Blueprint $table) {
            $table->bigIncrements('NumCam');
            $table->string('Nom');
            $table->unsignedBigInteger('Code_Type');

            $table->foreign('Code_Type')->references('CodeType')->on('types');

            
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
        Schema::dropIfExists('camions');
    }
}
