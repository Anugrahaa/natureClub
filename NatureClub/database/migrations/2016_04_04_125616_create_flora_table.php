<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFloraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('picture');
            $table->string('commonName');
            $table->string('scientificName');
            $table->string('abundance');
            $table->string('trivia');
            $table->string('hotspot');
            $table->integer('images'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('floras');
    }
}
