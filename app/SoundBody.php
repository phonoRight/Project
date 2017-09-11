<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoundBody extends Model
{
    //sm, genres, label, / sb - musician (n:m) -zwischentabelle-

    protected  $fillable = ['name', 'location', 'description', 'genres_id', 'social_media_id', 'musician_id'];

    //Relation: User - Sound Bodies (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: Sound Bodies - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'genre_soundbody', 'genres_id', 'genres_id');
    }

    //Relation: Sound Bodies - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'social_soundbody', 'social_media_id', 'social_media_id');
    }

    //Relation: SB - Label (n:1)

    public function label()
    {
        return $this->belongsTo('App/Label');
    }

    public function musicians()
    {
        return $this->belongsToMany('App/Musician', 'musicians_soundbody', 'musician_id', 'musician_id');
    }
}
