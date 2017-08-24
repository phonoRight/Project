<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //genres, sm, verlag or edition id

    protected $fillable = ['firstname', 'lastname', 'birthday', 'location', 'description', 'genres_id', 'social_media_id', 'editon_id', 'publisher_id'];


    //Relation: Author - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'author_genre', 'genres_id', 'genres_id');
    }

    //Relation: Author - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'author_social', 'social_media_id', 'social_media_id');
    }

    //Relation: Author - Edition (m:n)

    public function editions()
    {
        return $this->belongsToMany('App/Edition', 'author_edition', 'edition_id', 'edition_id');
    }

    //Relation: Author - Publisher (m:n)

    public function publishers()
    {
        return $this->belongsToMany('App/Publishers', 'author_publisher', 'publisher_id', 'publisher_id');
    }

    //Relation: User - Author (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
