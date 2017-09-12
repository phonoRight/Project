<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $fillable = ['name'];

    //Relation: Social Media - Musician (m:n)

    public function musicians()
    {
        return $this->belongsToMany('App/Musician', 'genre_musician', 'musician_id', 'musician_id');
    }

    public function artist_managers()
    {
        return $this->belongsToMany('App/ArtistManager', 'artist_manager_social', 'artist_manager_id','artist_manager_id');
    }

    public function bands()
    {
        return $this->belongsToMany('App/Band', 'band_social', 'band_id','band_id');
    }
}
