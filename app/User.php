<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Twit;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'twit_text', 'email', 'password','username','surname','profilephoto','coverphoto',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function twits()
    {
      return $this->hasMany(Twit::class);
    }
}
