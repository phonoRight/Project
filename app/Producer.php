<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    protected $fillable = ['firstname','lastname','companyname', 'executive_producing','location','description', 'social_media_id', 'genres_id'];

    // Relation: Producer - User (1:n)

    public function users()
    {
        return $this->belongsTo('App/User');
    }


    // Relation: Producer - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'social_media_id', 'social_media_id');
    }

    // Relation: Producer - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'genre_producer', 'genres_id', 'genres_id');
    }
}
