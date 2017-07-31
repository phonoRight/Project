<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musician extends Model
{
    protected $fillable = ['firstname','lastname','birthday','location','description', 'social_media_id', 'genres_id', 'band_id', 'solo_artist_id', 'sound_body_id'];

    //Relation: User - Musician (1:n)

    public function user()
    {
       return $this->belongsTo('App/User');
    }

    //Relation: Musician - Genres (m:n)

    public function genres()
    {
       return $this->belongsToMany('App/Genre', 'genre_musician', 'genres_id', 'genres_id');
    }

    //Relation: Musician - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'musician_social', 'social_media_id', 'social_media_id');
    }

    //Relation: Musician - Interpret (m:n)

    public function bands()
    {
       return $this->belongsToMany('App/Band', 'band_musician', 'band_id', 'band_id');
    }

    public function solo_artists()
    {
       return $this->belongsToMany('App/SoloArtist', 'musician_solo', 'solo_artist_id', 'solo_artist_id');
    }

    public function sound_bodies()
    {
       return $this->belongsToMany('App/SoundBody', 'musician_sound', 'sound_body_id', 'sound_body_id');
    }

}