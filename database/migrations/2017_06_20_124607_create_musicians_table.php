<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusiciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicians', function (Blueprint $table) {
            $table->increments('musician_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birthday');
            $table->string('location');
            $table->text('description');
          /*$table->foreign('social_media_id')->references('social_media_id')->on('social_media');
            $table->foreign('genres_id')->references('genres_id')->on('genres');
            $table->foreign('band_id')->references('band_id')->on('bands');
            $table->foreign('sound_body_id')->references('sound_body_id')->on('sound_bodies');
            $table->foreign('solo_artist_id')->references('solo_artist_id')->on('solo_artists');
            */$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musicians');
    }
}
