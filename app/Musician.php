<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musician extends Model
{
    protected $fillable = ['firstname','lastname','birthday','location','description', 'genres_id', 'sound_bodies_id', 'bands_id', 'solo_artists_id']; // ?

    //Relation: User - Musician (1:n)

    public function user(){
        $this->belongsTo('App/User');
    }

    //Relation: Musician - Genres (m:n)

    public function genres(){
        $this->belongsToMany('App/Genre');
    }

    // Relation: Musician - Interpret (m:n)

    public function bands(){
        $this->belongsToMany('App/Band');
    }

    public function solo_artists(){
        $this->belongsToMany('App/SoloArtist');
    }

    public function sound_bodies(){
        $this->belongsToMany('App/SoundBody');
    }

}