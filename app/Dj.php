<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dj extends Model
{
    // sm, genres
    protected $fillable = ['name', 'type', 'location', 'description', 'social_media_id', 'genres_id'];

    //Relation: DJ - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia','dj_social','social_media_id','social_media_id');
    }

    //Relation: DJ - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'genre_musician', 'genres_id', 'genres_id');
    }
}
