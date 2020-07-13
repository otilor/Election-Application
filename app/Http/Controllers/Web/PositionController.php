<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PositionController extends Controller
{
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
            $all_details = [];
            $current_poll = $_GET["poll"];
            $poll_details = \App\Poll::find($current_poll);
            $position_details = \App\Position::where('token',$id)->first();


            // Session details
            $current_session = \App\Session::find($poll_details->session_id);

            // Contestant details
            $contestants = \App\Contestant::where('vying_for', $position_details->id)->get();

            // Append to the all_details array
            $all_details["polls"] = $poll_details;
            $all_details["positions"] = $position_details;
            $all_details["session"] = $current_session;  
            $all_details["contestants"] = $contestants;  

            $position_id = $position_details["id"];

            
            $this->findAllTheContestantsIdentifiers($contestants);
        }
        catch (\Exception $e)
        {
            // return redirect('/polls');
        }
        // return view('polls.vote', compact('all_details'));
    }

    public function findAllTheContestantsIdentifiers($contestants)
    {
        $contestants_identifiers = [];
        // Iterate through the array and print everything



        for ($i = 0; $i < count($contestants); $i++)
        {
            array_push($contestants_identifiers, $contestants[$i]["id"]);
        }

        return $contestants_identifiers;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
