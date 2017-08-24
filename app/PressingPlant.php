<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PressingPlant extends Model
{
    //sm

    protected $fillable = ['companyname', 'type', 'pressing', 'social_media_id'];

    //Relation: Pressing Plant - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia','pressing_plant_social','social_media_id','social_media_id');
    }

    //Relation: User - Pressing Plant (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
