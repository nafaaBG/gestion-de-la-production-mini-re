<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrets', function (Blueprint $table) {
            $table->bigIncrements('CodeAr');
            $table->string('DescAr');	
            $table->unsignedBigInteger('Cd_Typ');
            $table->foreign('Cd_Typ')->references('CdTyp')->on('types_arrets');
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
        Schema::dropIfExists('arrets');
    }
}
