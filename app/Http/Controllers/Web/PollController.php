<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Poll;

class PollController extends Controller
{
    function __construct(Poll $poll)
    {
        $this->poll = $poll;
        $this->middleware('gateman');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polls = Poll::all();
        return view('polls.index', compact('polls'));
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
        $poll = $this->poll->find($id); 
        return view('student.polls.index', compact('poll'));
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

    public function findAllUniquePositionsWithLink($link)
    {
        $selected_positions = \App\Link::where('id', $link)->first()->positions;
        $uniquePositions = array_values(array_unique($selected_positions));
        
        return $uniquePositions;
    }

    private function findPositionDetails($positions)
    {
        $position_details = [];
        for($i = 0; $i < count($positions); $i++)
        {
            $position_details[$i] = \App\Position::find($positions[$i]);
        }
        
        return $position_details;
    }

}
