<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //sm
    protected $fillable = ['companyname', 'location', 'type', 'description', 'social_media_id'];

    //Relation: Service - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'service_social', 'social_media_id',  'social_media_id');
    }

    //Relation: User - Service (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
