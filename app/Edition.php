<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    //sm, urheber id, verlage, genres

    //Relation: User - Edition (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
