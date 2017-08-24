<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventLocation extends Model
{
    //sm
    protected $fillable = ['name', 'type', 'size', 'description', 'social_media_id', 'user_id'];

    //Relation: User - Eventlocation (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: Eventlocation - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'eventlocation_social', 'social_media_id', 'social_media_id');
    }
}
