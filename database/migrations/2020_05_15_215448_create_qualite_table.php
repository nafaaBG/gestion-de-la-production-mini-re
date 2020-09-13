<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualite', function (Blueprint $table) {
            $table->bigIncrements('CodeQ');
            $table->string('Nom');
            $table->unsignedBigInteger('Code_Typ');
            $table->foreign('Code_Typ')->references('CodeTyp')->on('types_qualite');


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
        Schema::dropIfExists('qualite');
    }
}
