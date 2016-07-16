<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Like;

class Twit extends Model
{
  protected $fillable = [
      'name', 'like_count', 'twit_image','twit_text'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function like()
  {
  	return $this->hasOne(Like::class);
  }
}
