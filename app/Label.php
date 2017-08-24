<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labels extends Model
{
    //Genres, sm, inerpret

    //Relation: User - Label (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
