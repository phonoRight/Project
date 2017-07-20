<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    protected $fillable = ['firstname','lastname','companyname', 'executive_producing','location','description', 'social_id', 'genre_id'];

    // Relation: Producer - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'social_id', 'id');
    }

    // Relation: Producer - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'genre_producer', 'genre_id', 'id');
    }
}
