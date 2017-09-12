<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyLabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('labels', function (Blueprint $table){
            $table->unsignedInteger('social_media_id');
            $table->foreign('social_media_id')->references('social_media_id')->on('social_media');

            $table->unsignedInteger('genres_id');
            $table->foreign('genres_id')->references('genres_id')->on('genres');

            $table->unsignedInteger('band_id');
            $table->foreign('band_id')->references('band_id')->on('bands');

            $table->unsignedInteger('sound_body_id');
            $table->foreign('sound_body_id')->references('sound_body_id')->on('sound_bodies');

            $table->unsignedInteger('solo_artist_id');
            $table->foreign('solo_artist_id')->references('solo_artist_id')->on('solo_artists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
