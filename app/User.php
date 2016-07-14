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
    public function twits()
    {
      return $this->hasMany(Twit::class);
    }

    protected $fillable = [
         'email', 'password','username','surname','profilephoto','coverphoto',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
  
}
