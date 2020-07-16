<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    // contestant is extending a class of user -> it belongs to a user
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public static function whoAreThese($contestants)
    {
        $theyAre = [];
        
        for ($i = 0; $i < count($contestants); $i++)
        {
            array_push($theyAre, \App\User::find($contestants[$i]));
        }

        return $theyAre;
    }
}
