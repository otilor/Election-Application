<?php

namespace App\Http\Controllers\Web\Admin\PollSessionLink;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Poll;

class PollController extends Controller
{
    function __construct(Poll $poll)
    {
        $this->poll = $poll;
    }

    public function all()
    {
        $polls =  $this->poll->all();
        $positions = $this->poll->find(1)->positions;
        dd ($positions);
        return view ('admin.polls-sessions-links.polls.all', compact('polls'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.polls-sessions-links.polls.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.polls-sessions-links.polls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->poll->create($request->all());
        return back()->with('success', 'Poll created!');
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
        return view ('admin.polls-sessions-links.polls.show', compact('poll'));
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
