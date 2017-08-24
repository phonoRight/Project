<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreelanceLightTechnician extends Model
{
    //sm

    protected $fillable = ['user_id', 'firstname', 'lastname', 'location', 'description', 'social_media_id'];

    //Relation: User - F. Light Technician (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: Light Technician - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'lighttech_social', 'social_media_id', 'social_media_id');
    }
}
