<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Twit extends Model
{
  protected $fillable = [
      'name', 'like_count', 'twit_image',
  ];

  public function User()
  {
    return $this->belongsTo(User::class);
  }
}
