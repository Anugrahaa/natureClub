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
        Schema::create('flora', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Picture');
            $table->string('Common Name');
            $table->string('Scientific Name');
            $table->string('Abundance');
            $table->string('Trivia');
            $table->string('Hotspot');
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
        Schema::drop('flora');
    }
}
