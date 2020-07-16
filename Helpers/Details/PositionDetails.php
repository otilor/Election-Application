<?php

namespace Helpers\Details;

use App\Poll;
use Interfaces\DetailsInterface;

class  PositionDetails implements DetailsInterface 
{
	public function details()
	{
		dump ("Work is about to start!");
	}

	private function blaBlaBla()
	{
			$poll = Poll::getCurrentPoll();
            $poll_details = Poll::detailsFromId($poll);
            $position_details = Position::getPositionDetails($id);

            // Session details
            $current_session = self::getSessionDetails($poll_details->session_id);

            // Contestant details
            $contestants = self::getContestantsDetailsViaPosition($position_details->id);
        
            $position_id = $position_details["id"];

            $numberOfVotes = $this->numberOfVotes($contestants);

            // Get all the contestants id and get their details e.g. name, email
            $contestants = \Helpers\ProcessesContestants::resolveContestants($contestants);

            // Map the votes gotten from the database to each contestant
            self::mapVotesToContestants($numberOfVotes, $contestants);

            // Append to the all_details array
            $all_details["polls"] = $poll_details;
            $all_details["positions"] = $position_details;
            $all_details["session"] = $current_session;  
            $all_details["contestants"] = $contestants;  
	}
}
