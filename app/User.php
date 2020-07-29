<?php

namespace App;

use App\Contestant;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function contestant()
    {
        return $this->hasOne(Contestant::class, 'contestant_id');
    }

    public static function allUsersForAdministrators()
    {
        return static::all();
    }

    public function setPasswordAttribute($password)
    {
        if ( trim($password) === '' )
        {
            return;
        }

        $this->attributes['password'] = Hash::make($password);
    }
}
