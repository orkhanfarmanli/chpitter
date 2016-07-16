<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Follower;
use App\Http\Requests;

class FollowerController extends Controller
{
     public function userOneFollowsTwo($id1,$id2)
    {   
        // Find user with ID 1
        $following = User::find($id2); //id that is followed

        // Find user with ID 2
        $follower = User::find($id1); //id of logged user

        if ($following && $follower) {           
            $follower->following()->save($following);
            return back();
        }

        
    }

         public function userOneUnfollowsTwo($id)
    {   

        Follower::where('following_id',$id)->delete();
        return back();
    }


}
