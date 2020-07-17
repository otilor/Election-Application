<?php 

/*
* Contains all the details needed by the users
* @see PositionDetials
*/

namespace Helpers\Details;

use App\Contestant;
use App\Poll;
use App\Position;

use Distillers\PositionDistiller;
use Interfaces\DetailsInterface;

use Helpers\ProcessesContestants;

class AllDetails implements DetailsInterface
{
	private function getAllDetails()
	{
		dump("getting...");
	}

	public function getAllDetailsFromPosition($id)
	{
		$allDetails = [];
		$positionDetails = $this->fetchPositionDetailsUsingPositionIdentifier($id);
		$contestantDetails = $this->getContestantDetailsFromPositionIdentifier($positionDetails->id);
		$pollDetails = $this->getPollDetails();
		
		$allDetails["positions"] = $positionDetails;
		$allDetails["contestants"] = $contestantDetails;

		return $allDetails;
	}

	private function getHalfBakedContestantDetailsFromPosition($positionIdentifier)
	{
		return Contestant::getContestantsVyingFor($positionIdentifier);
	}

	private function getContestantsVote($contestants)
	{
		return ProcessesContestants::numberOfVotes($contestants);
	}

	private function getContestantIdentifiers($contestants)
	{
		$contestantIdentifiers = [];
		foreach ($contestants as $contestant)
		{
			array_push($contestantIdentifiers, $contestant->contestant_id);
		}

		return $contestantIdentifiers;
	}

	private function getContestantDetailsFromPositionIdentifier($positionIdentifier)
	{
		$contestants = $this->getHalfBakedContestantDetailsFromPosition($positionIdentifier);
		$votes = $this->getContestantsVote($contestants);

		$contestantIdentifiers = $this->getContestantIdentifiers($contestants);

		$fullContestantDetails = $this->whoAreThese($contestantIdentifiers);
		
		return ProcessesContestants::mapVotesToContestants($votes, $fullContestantDetails);
	}

	private function whoAreThese($contestantIdentifiers)
    {
    	//dump ($people);
        $theyAre = [];
        
        foreach ($contestantIdentifiers as $contestantIdentifier) {
        	array_push($theyAre, \App\User::find($contestantIdentifier));
        }

        return $theyAre;
    }

	private function getPollDetails()
	{
		$poll = new Poll;
		return $poll->getDetails();
	}

	private function getSessionDetailsFromPollIdentifier($pollIdentifier)
	{
		//
	}

	private function fetchPositionDetailsUsingPositionIdentifier($id)
	{
		return Position::getPositionDetails($id);
	}

	private function details()
	{
		//
	}

	public function detailsFromId($id)
	{
		//
	}
}
