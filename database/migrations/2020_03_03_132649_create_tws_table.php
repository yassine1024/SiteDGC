<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('organisation_mere_titre');
            $table->string('organisation_mere_remarque');
            $table->string('organisation_mere_visible');
            $table->unsignedBigInteger('direction_id');
            $table->string('organisation_mere_adresse');

            $table->string('organisation_mere_tel');
            $table->string('organisation_mere_fax');
            $table->string('organisation_mere_mail');
            $table->string('organisation_mere_nom');

            $table->foreign('direction_id')->references('id')->on('directions')->onDelete('cascade');
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
        Schema::dropIfExists('tws');
    }
}
