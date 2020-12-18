<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagGrivencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_grivences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('boss_comment');
            $table->string('employee_comment');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('grivence_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('grivence_id')->references('id')->on('grivences')->onDelete('cascade');

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
        Schema::dropIfExists('tag_grivences');
    }
}
