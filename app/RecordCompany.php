<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecordCompany extends Model
{
    //sm

    protected $fillable = ['companyname', 'UID', 'ISRC', 'location', 'description', 'social_media_id', 'user_id'];

    //Relation: User - R. Company (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: R. Company - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'rcompany_social', 'social_media_id', 'social_media_id');
    }
}
