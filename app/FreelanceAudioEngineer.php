<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreelanceAudioEngineer extends Model
{
    protected $fillable = ['firstname', 'lastname', 'companyname', 'location', 'type', 'description', 'social_media_id'];

    //Relation: Audio Engineer - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'Audio_engineer_social', 'social_media_id', 'social_media_id');
    }

    //Relation: User - F. Audio Engineer (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

}
