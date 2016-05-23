<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birds', function (Blueprint $table) {
            $table->string('picture');
            $table->string('commonName');
            $table->string('scientificName');
            $table->string('localStatus');
            $table->string('generalDescription');
            $table->string('diet');
            $table->string('localBreeding');
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
        Schema::drop('birds');
    }
}
