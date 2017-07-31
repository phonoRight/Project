<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //genres, sm, verlag or edition id

    protected $fillable = [];


    //Relation: Author - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'author_genre', 'genres_id', 'genres_id');
    }

    //Relation: Author - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'author_social', 'social_media_id', 'social_media_id');
    }

}
