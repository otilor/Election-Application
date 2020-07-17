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
		$positionDetails = $this->fetchPositionDetailsUsingPositionIdentifier($id);
		$contestantDetails = $this->getContestantDetailsFromPositionIdentifier($positionDetails->id);
		$pollDetails = $this->getPollDetails();
		dump ($pollDetails);
	}

	private function getHalfBakedContestantDetailsFromPosition($positionIdentifier)
	{
		return Contestant::getContestantsVyingFor($positionIdentifier);
	}

	private function getContestantsVote($contestants)
	{
		return ProcessesContestants::numberOfVotes($contestants);
	}

	private function getContestantDetailsFromPositionIdentifier($positionIdentifier)
	{
		$contestants = $this->getHalfBakedContestantDetailsFromPosition($positionIdentifier);
		$votes = $this->getContestantsVote($contestants);

		return ProcessesContestants::mapVotesToContestants($votes, $contestants);
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
