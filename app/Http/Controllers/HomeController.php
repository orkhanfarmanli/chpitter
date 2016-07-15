<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Twit;
use App\Http\Requests;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public  function arraySorter($a, $b)
    {
        return strcmp($b->created_at, $a->created_at);
    }


    public function index()
    {
        $users = [];
        $tweets = [];
        $followers = Auth::user()->followers;
        $followerMain = User::take(3)->get();
        

        foreach ($followers as $follower) {
            array_push($users, User::find($follower->id));
        }


        for ($i=0; $i < count($users); $i++) { 


            array_push($tweets, json_decode(Twit::orderBy('created_at')->where('user_id', $users[$i]->id)->get()));

        }

        $result = array_reduce($tweets, 'array_merge', array());

       

        usort($result, array($this, "arraySorter"));

        
        
        return view('main', compact('users', 'followerMain','followers', 'result'));

        // $alltweets= Twit::orderBy('created_at','desc')->get();
        // $useridMain=Auth::user()->id;
        // $tweetMain = Twit::orderBy('created_at','desc')->where('user_id', $useridMain)->get();
        // return view('main', compact('followerMain', 'tweetMain', 'alltweets','screen_users'));
    }
}
