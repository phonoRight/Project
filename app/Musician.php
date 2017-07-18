<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musician extends Model
{
    protected $fillable = ['firstname','lastname','birthday','location','description', 'genre_id', 'band_id', 'solo_artist_id', 'sound_body_id'];

    //Relation: User - Musician (1:n)

    public function user(){
        $this->belongsTo('App/User');
    }

    //Relation: Musician - Genres (m:n)

    public function genres(){
        $this->belongsToMany('App/Genre', 'genre_musician', 'genre_id', 'id');
    }

    // Relation: Musician - Interpret (m:n)

    public function bands(){
        $this->belongsToMany('App/Band', 'band_musician', 'band_id', 'id');
    }

    public function solo_artists(){
        $this->belongsToMany('App/SoloArtist', 'musician_solo', 'solo_artist_id', 'id');
    }

    public function sound_bodies(){
        $this->belongsToMany('App/SoundBody', 'musician_sound', 'sound_body_id', 'id');
    }

}