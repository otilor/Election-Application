<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];

    public function polls() {
    	$this->hasMany('\App\Poll');
    }
}
