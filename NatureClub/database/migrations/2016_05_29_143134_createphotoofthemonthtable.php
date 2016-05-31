<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createphotoofthemonthtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_of_the_months', function (Blueprint $table) {
            $table->string('photo');
            $table->string('month');
            $table->string('year');
            $table->string('photo-by');
            $table->string('caption');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('photo_of_the_months');
    }
}
