<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promoter extends Model
{
    protected $fillable = ['firstname', 'lastname', 'companyname', 'venue', 'description', 'genres_id', 'social_media_id'];

    //Relation: Promoter - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'genre_promotion', 'genres_id', 'genres_id');
    }

    //Relation: Promoter - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'promotion_social', 'social_media_id', 'social_media_id');
    }

}
