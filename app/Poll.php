<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    
    private function getPollIdentifier()
    {
        return $_GET["poll"];
    }
    protected $fillable = [
      'position_id',
      'session_id',
    ];

    public function link($id)
    {
    	$this->belongsTo('App\Link', $id);
    }

    public function getDetails()
    {
        return $this->whatIsTheCurrentPoll();
    }

    private function whatIsTheCurrentPoll()
    {
        $pollIdentifer = $this->getPollIdentifier();

        return $this->find($pollIdentifer);
    }
}
