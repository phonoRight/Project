<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecordingStudio extends Model
{
    //sm
    protected $fillable = ['companyname', 'location', 'type', 'description', 'vintage', 'social_media_id'];

    //Relation: Recording Studio - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia','studio_social','social_media_id','social_media_id');
    }

    //Relation: User - R. Studio (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
