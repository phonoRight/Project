<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    //sm, genres, label, mngmt id / band - musician (n:m) -zwischentabelle-

    protected $fillable = ['name', 'location', 'description', 'social_media_id', 'genres_id', 'musician_id'];

    /*
     * Relation: User - Band (1:n)
     * Only one can create/add a Band and is therefore the admin. Band Members are granted rights by the admin.
     */

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: Band - Labels (1:n)

    public function label()
    {
        return $this->belongsTo('App/Label');
    }

    //Relations: Band - Artist Manager (1:n)

    public function artist_manager()
    {
        return $this->belongsTo('App/ArtistManager');
    }

    //Relation: Band - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'genre_musician', 'genres_id', 'genres_id');
    }

    //Relation: Band - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'social_media_id', 'social_media_id');
    }

    //Relation: Band - Musician (m:n)

    public function musicians()
    {
        return $this->belongsToMany('App/Musician', 'musician_id', 'musician_id');
    }
}