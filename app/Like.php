<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Twit;
use App\User;

class Like extends Model
{
	protected $fillable=['like_count'];
    public function tweets(){
    	return $this->belongsTo(Twit::class);
    }

    public function likeOwner()
    {
    	return $this->belongsTo(User::class);
    }
}
