<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConducteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conducteurs', function (Blueprint $table) {
            $table->unsignedBigInteger('Matricule');
            $table->string('Nom');
            $table->string('Prenom');
            $table->primary('Matricule');	

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
        Schema::dropIfExists('conducteurs');
    }
}
