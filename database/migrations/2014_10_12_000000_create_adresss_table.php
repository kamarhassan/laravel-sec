<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdresssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresss', function (Blueprint $table) {
            $table->id();


            $table->string('country');
            $table->string('city');
            $table->string('street');
            $table->integer('nb_street');


            $table->timestamps();


        });

        Schema::table('adresss', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('adresss');


    }
}
