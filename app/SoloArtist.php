<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoloArtist extends Model
{
    //SM, LABEL ID, mamgnt id, genres

    protected $fillable = ['name', 'locations', 'description' , 'genre_id', 'social_media', 'musician_id'];

    //Relation: User - Solo Artist (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: Solo Artist - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'genre_soloartist', 'genres_id', 'genres_id');
    }

    //Relation: Solo Artist - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'social_soloartist', 'social_media_id', 'social_media_id');
    }

    //Relation: Solo Artist- Label (n:1)

    public function label()
    {
        return $this->belongsTo('App/Label');
    }

    public function musicians()
    {
        return $this->belongsToMany('App/Musician', 'musicians_soloartist', 'musician_id', 'musician_id');
    }

    //Relation: Artist Manager - Solo Artist (n:1)

    public function artist_manager(){
        $this->belongsTo('App/ArtistManager');
    }
}
