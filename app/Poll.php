<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    private static $pollIdentifer = $_GET["poll"];

    protected $fillable = [
      'position_id',
      'session_id',
    ];

    public function link($id)
    {
    	$this->belongsTo('App\Link', $id);
    }

    public static function getCurrentPoll()
    {
    	return $_GET["poll"];
    }

    public function getPollDetails($poll_id)
    {
        return $this->whatIsTheCurrentPoll();
    }

    private function whatIsTheCurrentPoll()
    {
        $pollIdentifer = self::$pollIdentifer;
        
        return $this->find($pollIdentifer);
    }
}
