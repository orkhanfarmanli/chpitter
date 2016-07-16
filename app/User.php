<?php
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Twit;
use App\User;
class User extends Authenticatable
{
/**
* The attributes that are mass assignable.
*
* @var array
*/

public function usersLike()
{
	return $this->hasMany(Like::class);
}

public function twits()
{
	return $this->hasMany(Twit::class);
}
public function followers()
{
	return $this->belongsToMany('App\User', 'followers', 'follower_id', 'following_id')->withTimestamps();
}
public function following()
{
	return $this->belongsToMany('App\User', 'followers', 'following_id', 'follower_id')->withTimestamps();
}
protected $fillable = [
  'name','email', 'password','username','surname','profilephoto','coverphoto',
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