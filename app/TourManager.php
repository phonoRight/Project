<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourManager extends Model
{
    //genres, sm

    protected $fillable = ['user_id', 'firstname', 'lastname', 'companyname', 'location', 'description', 'social_media_id', 'genres_id'];

    //Relation: User - Tourmanager (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: Tourmanager - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'tourmanager_social', 'social_media_id', 'social_media_id');
    }

    //Relation: Tourmanager - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'tourmanager_genre', 'genres_id', 'genres_id');
    }
}
