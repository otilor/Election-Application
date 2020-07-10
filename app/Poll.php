<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = [
      'position_id',
      'session_id',
    ];

    public function positions()
    {
    	$this->hasMany('App\Position');
    }
}
