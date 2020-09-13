<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArretCamionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arret_camions', function (Blueprint $table) {
            $table->unsignedBigInteger('Num_Cam');
            $table->unsignedBigInteger('Code_Ar');
            $table->unsignedBigInteger('Num_Poste');
            $table->date('Date');
            $table->foreign('Num_Cam')->references('NumCam')->on('camions');
            $table->foreign('Code_Ar')->references('CodeAr')->on('arrets');
            $table->foreign('Num_Poste')->references('NumPoste')->on('poste');


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
        Schema::dropIfExists('arret_camions');
    }
}
