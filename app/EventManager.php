<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventManager extends Model
{
    //sm, genres

    protected $fillable = ['user_id', 'companyname', 'location', 'description', 'genres_id', 'social_media_id'];

    //Relation: User - Event Manager (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: Event Manager - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'eventmanager_social', 'social_media_id', 'social_media_id');
    }

    //Relation: Event Manager - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'eventmanager_genre', 'genres_id', 'genres_id');
    }
}
