<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialistRetailers extends Model
{
    //sm
    protected $fillable = ['companyname', 'type', 'sector', 'location', 'description', 'social_media_id'];

    //Relation: Specialist Retailers - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia','retail_social','social_media_id','social_media_id');
    }
}
