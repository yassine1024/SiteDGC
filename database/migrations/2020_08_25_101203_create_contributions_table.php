<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gender');
            $table->string('last_name');
            $table->string('first_name');
            $table->date('birth_day');
            $table->string('degree');
            $table->string('function');
            $table->string('organization');
            $table->string('phone_number');
            $table->string('publication_theme');
            $table->text('description_publication');
            $table->string('file_name')->nullable();
            $table->string('file_path')->nullable();
            $table->string('check');

            //foreign key to the users table -> who did create these contributions?
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


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
        Schema::dropIfExists('contributions');
    }
}
