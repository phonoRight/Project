<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyAuthor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('authors', function (Blueprint $table){
            $table->unsignedInteger('social_media_id');
            $table->foreign('social_media_id')->references('social_media_id')->on('social_media');

            $table->unsignedInteger('genres_id');
            $table->foreign('genres_id')->references('genres_id')->on('genres');

            $table->unsignedInteger('edition_id')->nullable();
            $table->foreign('edition_id')->references('edition_id')->on('editions');

            $table->unsignedInteger('publisher_id')->nullable();
            $table->foreign('publisher_id')->references('publisher_id')->on('publishers');
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
