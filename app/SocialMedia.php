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

}
