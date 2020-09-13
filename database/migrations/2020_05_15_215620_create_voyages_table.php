<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->bigIncrements('NumVoy');
            $table->unsignedBigInteger('Num_Cam');
            $table->unsignedBigInteger('Code_Q');
            $table->unsignedBigInteger('Matricule');
            $table->unsignedBigInteger('Code_Sc');
            $table->unsignedBigInteger('Code_Ld');
            $table->double('Distance', 8, 2);
            $table->date('Date_Debut');
            $table->date('Date_Fin');
            $table->double('Poids', 8, 2);
            $table->unsignedBigInteger('Num_Poste');

            $table->foreign('Num_Cam')->references('NumCam')->on('camions');
            $table->foreign('Code_Q')->references('CodeQ')->on('qualite');
            $table->foreign('Matricule')->references('Matricule')->on('conducteurs');
            $table->foreign('Code_Sc')->references('CodeSc')->on('sources');
            $table->foreign('Code_Ld')->references('CodeLd')->on('ld');
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
        Schema::dropIfExists('voyages');
    }
}
