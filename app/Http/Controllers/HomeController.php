<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Twit;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;



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
     
        $followers = Auth::user()->followers;
        $following = Auth::user()->following;
        $followerMain = User::take(3)->get();
        $tweetsCount = count(Auth::user()->twits()->get());
        $user_id=Auth::user()->id;
            


        $gelenler=DB::select('CALL getalltwitsforuserid(?)', array($user_id));
        return view('main', compact('users', 'followerMain','followers', 'result', 'tweetsCount', 'following', 'gelenler','user_id'));

    }
}
