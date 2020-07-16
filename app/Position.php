<?php

declare(strict_types = 1);

namespace App;

use Illuminate\Database\Eloquent\Model;


class Position extends Model
{
   public function getPositionDetails($token)
	{
		return  $this->where('token', $token)->first();
	}
}
