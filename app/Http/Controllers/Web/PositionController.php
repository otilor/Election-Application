<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Poll;
use App\Contestant;
use App\Position;
use App\User;
// use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
// use RuntimeException;

class PositionController extends Controller
{
    function __construct(Poll $poll, User $user)
    {
        $this->poll = $poll;
        $this->user = $user;
    }
    use \Helpers\ProcessesPoll;
    use \Helpers\FetchesContestantsDetails;
    use \Helpers\ProcessesSessions;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pollId)
    {
        $positions = $this->poll->find($pollId)->positions;
        return view('student.positions.index', compact('positions'));
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
    public function show($pollId, $positionId)
    { 
        $position = $this->poll
        ->find($pollId)
            ->positions
            ->find($positionId) ?? abort(404);
        
        $users = [];
        foreach ($position->contestants as $contestant) {
            $users[$contestant->id] = $this->user->find($contestant->user_id);
        }
        
        return view('student.positions.show', compact('position', 'users'));
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
