<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Helpers\Poll;

class PositionController extends Controller
{
    use \Helpers\ProcessesPoll;
    use \Helpers\FetchesContestantsDetails;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        try {
            /* Full data structure for the application's use.
            * It contains the session, contestants and positions details
            * 
            */
            $all_details = [];


            $poll = self::whatIsTheCurrentPoll();
            $poll_details = self::find($poll);
            $position_details = \App\Position::where('token',$id)->first();


            // Session details
            $current_session = \App\Session::find($poll_details->session_id);


            // Contestant details
            $contestants = \App\Contestant::where('vying_for', $position_details->id)->get();
        
            
            $position_id = $position_details["id"];


            /*
            * Get all the votes for each contestants. 
            *
            * @param $contestants
            * @var $numberOfVotes
            */
            $numberOfVotes = $this->numberOfVotes($contestants);


            // Get all the contestants id and get their details e.g. name, email
            $contestants = $this->findAllTheContestantsIdentifiers($contestants);
            $contestants = $this->whoAreThese($contestants);

            // Map the votes gotten from the database to each contestant
            self::mapVotesToContestants($numberOfVotes, $contestants);

            // Append to the all_details array
            $all_details["polls"] = $poll_details;
            $all_details["positions"] = $position_details;
            $all_details["session"] = $current_session;  
            $all_details["contestants"] = $contestants;  

        }
        catch (\Exception $e)
        {
            // return redirect('/polls');
        }
        if (!empty($all_details))
        {
            return view('polls.vote', compact('all_details'));    
        } else {
            // return redirect('/polls');
        }
        
    }

    private function findAllTheContestantsIdentifiers($contestants)
    {
        $contestants_identifiers = [];
        // Iterate through the array and print everything



        for ($i = 0; $i < count($contestants); $i++)
        {
            array_push($contestants_identifiers, $contestants[$i]["contestant_id"]);
        }

        return $contestants_identifiers;
    }

    private function whoAreThese($people)
    {
        $theyAre = [];
        
        for ($i = 0; $i < count($people); $i++)
        {
            array_push($theyAre, \App\User::find($people[$i]));
        }
        return $theyAre;
    }

    private function numberOfVotes($contestants)
    {
        $noOfVotes = [];

        for ($i = 0; $i < count($contestants); $i++)
        {
            array_push($noOfVotes, $contestants[$i]["no_of_votes"]);
        }
        return $noOfVotes;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
