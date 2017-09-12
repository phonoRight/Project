<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeySArtist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solo_artists', function(Blueprint $table){

            $table->unsignedInteger('social_media_id');
            $table->foreign('social_media_id')->references('social_media_id')->on('social_media');

            $table->unsignedInteger('genres_id');
            $table->foreign('genres_id')->references('genres_id')->on('genres');

            $table->unsignedInteger('musician_id');
            $table->foreign('musician_id')->references('musician_id')->on('musicians');
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
