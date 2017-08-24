<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoundBody extends Model
{
    //sm, genres, label, / sb - musician (n:m) -zwischentabelle-

    //Relation: User - Sound Bodies (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
