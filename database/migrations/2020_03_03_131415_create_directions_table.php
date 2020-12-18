<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directions', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('direction_titre');
            $table->string('direction_remarque');
            $table->string('direction_visible');
//            $table->bigInteger('organisation_wilaya_id');
            $table->string('direction_adresse');
            $table->string('direction_tel');
            $table->string('direction_fax');
            $table->string('direction_mail');
            $table->string('direction_nom');
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
        Schema::dropIfExists('directions');
    }
}
