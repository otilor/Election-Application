<?php

declare(strict_types = 1);

namespace App;

use Illuminate\Database\Eloquent\Model;


class Position extends Model
{
	public function poll()
	{
		return $this->belongsTo('\App\Poll');
	}
	public function contestants()	
	{
		return $this->hasMany('\App\Contestant');
	}
	
   public static function getPositionDetails($token)
	{
		return  self::where('token', $token)->first();
	}

	protected $fillable = [
		'title',
		'description',
		'poll_id',
	];
}
