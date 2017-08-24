<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renting extends Model
{
    //sm,

    protected $fillable = ['user_id', 'firstname', 'lastname', 'name', 'location', 'size', 'type', 'description', 'social_media_id'];

    //Relation: User - Renting (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: Renting - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'renting_social', 'social_media_id', 'social_media_id');
    }
}
