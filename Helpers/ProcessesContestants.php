<?php

namespace Helpers;

use App\Contestant;

trait ProcessesContestants
{
	public function __construct (Contestant $contestants)
	{
		$this->contestants = $contestants;
	}

	public static function numberOfVotes($contestants)
    {
        $noOfVotes = [];

        for ($i = 0; $i < count($contestants); $i++)
        {
            array_push($noOfVotes, $contestants[$i]["no_of_votes"]);
        }

        return $noOfVotes;
    }

	public static function mapVotesToContestants($votes, $contestants) : object
	{
		if (count ($votes) === count ($contestants))
		{
			for ($i = 0; $i < count($contestants); $i++)
			{
				$contestants[$i]->noOfVotes = $votes[$i];
			}
		}
		
		return $contestants;
	}
}
