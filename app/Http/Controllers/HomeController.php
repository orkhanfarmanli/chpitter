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
    public function index()
    {
        $followerMain = User::take(3)->get();
        $useridMain=Auth::user()->id;
        $tweetMain = Twit::orderBy('created_at','desc')->where('user_id', $useridMain)->get();
        return view('main', compact('followerMain', 'tweetMain'));
    }
}
