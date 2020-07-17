<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contestant;

class Vote extends Model
{
    public function incrementVoteFor($contestant_id) : bool
    {
    	$contestant = new Contestant;
    	if ( $contestant->findAndUpdateVoteFor($contestant_id) )
    	{
    		return true;
    	}

    	return false;
    	
    }
}
