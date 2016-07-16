<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Twit;
use App\Like;
use App\Http\Requests;

class LikeController extends Controller
{
    public function like(User $id, Twit $tweet_id)
    {
    	if (empty($tweet_id->like['like_count'])) {
    		$like = new Like;
    	$like->like_count = 1;
    	$like->user_id = $id->id;
    	$tweet_id->like()->save($like);
    	}
    	else{
    	$like=$tweet_id->like['like_count']+1;
    	 Like::where('user_id', $tweet_id->user_id)
          ->update(['like_count' => $like]);
    	}
    	
 
    	return back();
    	

    }

    public function unlike(User $id, Twit $tweet_id)
    {
    	if(!empty($tweet_id->like['like_count'])) {
    	$like=$tweet_id->like['like_count']-1;
    	 Like::where('twit_id', $tweet_id->id)
          ->update(['like_count' => $like,'twit_id'=>0]);
    	}

    	
 
    	return back();
    	

    }

}
