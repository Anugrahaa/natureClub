<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateButterflyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('butterflys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('picture');
            $table->string('commonName');
            $table->string('scientificName');
            $table->string('localStatus');
            $table->string('generalDescription');
            $table->string('hostPlants');
            $table->string('lifeCycle');
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
        Schema::drop('butterflys');
    }
}
