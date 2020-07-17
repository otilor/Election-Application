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

    public static function getContestantsVyingFor($position_id)
    {
        return \App\Contestant::where('vying_for', $position_id)->get();
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

    public static function findAllTheContestantsIdentifiers($contestants)
    {
        $contestants_identifiers = [];

        for ($i = 0; $i < count($contestants); $i++)
        {
            array_push($contestants_identifiers, $contestants[$i]["contestant_id"]);
        }

        return $contestants_identifiers;
    }
}
