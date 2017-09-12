<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labels extends Model
{
    //Genres, sm, inerpret

    protected $fillable = ['labelname', 'LC', 'type', 'genres_id', 'social_media_id', 'band_id', 'sound_body_id', 'solo_artist_id'];

    //Relation: User - Label (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: Label - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'genre_label', 'genres_id', 'genres_id');
    }

    //Relation: Label - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'label_social', 'social_media_id', 'social_media_id');
    }

    //Relation: Label - Interpret (m:n)

    public function bands()
    {
        return $this->belongsToMany('App/Band', 'band_label', 'band_id', 'band_id');
    }

    public function solo_artists()
    {
        return $this->belongsToMany('App/SoloArtist', 'label_solo', 'solo_artist_id', 'solo_artist_id');
    }

    public function sound_bodies()
    {
        return $this->belongsToMany('App/SoundBody', 'label_sound', 'sound_body_id', 'sound_body_id');
    }
}
