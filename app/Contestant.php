<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Contestant extends Model
{
    protected $fillable = [
        'position_id',
        'user_id',
        'no_of_votes'
    ];
    public function findAndUpdateVoteFor($contestant_id) : bool
    {
        if ( $this->updateVotesForContestant($contestant_id) ) 
        {
            return true;
        }

        return false;
    }

    private function updateVotesForContestant($contestant_id) : bool
    {
        $user = new User;
        $contestantDetails = $user->find($contestant_id)->contestant;
        $contestantDetails->no_of_votes += 1;
        $contestantDetails->save();
        session(['voted' => true]);

        return true;
    }

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
