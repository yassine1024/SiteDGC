<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrivencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grivences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            //$table->string('prenom');
            $table->string('mail');
            $table->string('object');
            $table->longText('message');
            $table->integer('sector');

            $table->unsignedBigInteger('direction_id');
            $table->unsignedBigInteger('tw_id')->nullable()->unsigned();
            $table->unsignedBigInteger('town_id')->nullable()->unsigned();

            //faire référance au tableau street(commune) juste pour éviter la boucle dans le chainage des tableaux
            $table->foreign('direction_id')->references('id')->on('directions')->onDelete('cascade');
            $table->foreign('tw_id')->references('id')->on('tws')->onDelete('cascade');
            $table->foreign('town_id')->references('id')->on('towns')->onDelete('cascade');
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
        Schema::dropIfExists('grivences');
    }
}
