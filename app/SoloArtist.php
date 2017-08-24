<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoloArtist extends Model
{
    //SM, LABEL ID, mamgnt id, genres

    //Relation: User - Solo Artist (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
