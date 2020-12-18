<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('towns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tw_id');
            $table->string('organisation_titre');
            $table->string('organisation_adresse');
            $table->string('organisation_tel');
            $table->string('organisation_fax');
            $table->string('organisation_mail');
            $table->string('organisation_remarque');
            $table->string('organisation_visible');
            $table->string('organisation_nom');

            $table->foreign('tw_id')->references('id')->on('tws')->onDelete('cascade');;
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('towns');
    }
}
