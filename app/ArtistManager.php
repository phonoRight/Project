<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistManager extends Model
{
    //1:m km - interpret (3x) , sm, genres,

    protected $fillable = ['user_id', 'firstname', 'lastname', 'companyname', 'location', 'description', 'social_media_id', 'genres_id'];

    //Relation: User - Musician (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: Artist Manager - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'artistmanager_social', 'social_media_id', 'social_media_id');
    }

    //Relation: Artist Manager - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'artistmanager_genre', 'genres_id', 'genres_id');
    }

    //Relation: AM - Interpret (1:n)

    public function band()
    {
        return $this->belongsTo('App/Band');
    }

    public function solo_artist()
    {
        return $this->belongsTo('App/SoloArtist');
    }

    public function sound_body()
    {
        return $this->belongsTo('App/SoundBody');
    }

}
