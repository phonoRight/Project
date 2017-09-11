<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    //sm, urheber id, verlage (Lösung noch nicht gefunden), genres

    protected $fillable = ['name', 'location', 'description', 'genres_id', 'social_media_id'];

    //Relation: User - Edition (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: Edition - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'edition_genre', 'genres_id', 'genres_id');
    }

    //Relation: Edition - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'edition_social', 'social_media_id', 'social_media_id');
    }
}
