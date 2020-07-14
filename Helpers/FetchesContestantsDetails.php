<?php

namespace Helpers;

trait FetchesContestantsDetails {

	public function getContestantsDetailsViaPosition($position_id)
	{
		return \App\Contestant::where('vying_for', $position_id)->get();
	}

	public static function greet()
	{
		dd("Hey");
	}

	public static function mapVotesToContestants($votes, $contestants) : array
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

	protected function findAllTheContestantsIdentifiers($contestants)
    {
        $contestants_identifiers = [];
        // Iterate through the array and print everything

        for ($i = 0; $i < count($contestants); $i++)
        {
            array_push($contestants_identifiers, $contestants[$i]["contestant_id"]);
        }

        return $contestants_identifiers;
    }
}
