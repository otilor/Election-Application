<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Helpers\Poll;
use App\Contestant;
use App\Position;

class PositionController extends Controller
{
    use \Helpers\ProcessesPoll;
    use \Helpers\FetchesContestantsDetails;
    use \Helpers\ProcessesSessions;
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
            // Full data structure for the application's use.
            // It contains the session, contestants and positions details
            
            $all_details = [];

            $allDetails = new \Helpers\Details\AllDetails;
            $all_details = $allDetails->getAllDetailsFromPosition($id);
        }

        catch (\Exception $e)
        {
            // return redirect('/polls');
        }

        if (!empty($all_details))
        {
            return view('polls.vote', compact('all_details'));    
        } 

        else {
            // return redirect('/polls');
        }
        
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
