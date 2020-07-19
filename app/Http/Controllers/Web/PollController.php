<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Poll;

class PollController extends Controller
{
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
        $poll = Poll::where('id', $id)->first();

        $link = $poll->link_id;
        $positions = $this->findAllUniquePositionsWithLink($link);

        $distinct_position = \App\Helpers\Position::getDistinctPositions($positions, false);
        $positions = $distinct_position;
        $positions = $this->findPositionDetails($positions);
        return view('polls.specific_poll', compact('poll', 'positions'));
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
