<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    //sm, genres, label, mngmt id / band - musician (n:m) -zwischentabelle-

    protected $fillable = ['name', 'location', 'description', 'social_id', 'genre_id', 'musician_id'];


    //Relation: Band - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'genre_musician', 'genre_id', 'id');
    }

    //Relation: Producer - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'social_id', 'id');
    }

    //Relation: Band - Musician (m:n)

    public function musicians()
    {
        return $this->belongsToMany('App/Musician', 'musician_id', 'id');
    }
}