<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    //sm, urheber id, edition id, genres

    //Relation: User - Publisher (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
