<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contestant;

class Vote extends Model
{
    public function incrementVoteFor($contestant_id)
    {
    	$contestant = new Contestant;
    	$contestant->findAndUpdateVoteFor($contestant_id);
    }
}
