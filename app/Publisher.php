<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    /*sm, genres -> urheber id, edition id (Lösung noch nicht gefunden)*/

    protected $fillable = ['companyname', 'location', 'description', 'genres_id', 'social_media_id'];

    //Relation: User - Publisher (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: Publisher - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'genre_publisher', 'genres_id', 'genres_id');
    }

    //Relation: Publisher - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'social_publisher', 'social_media_id', 'social_media_id');
    }
}
