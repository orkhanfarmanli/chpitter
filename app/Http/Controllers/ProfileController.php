<?php

namespace App\Http\Controllers;
use App\User;
use App\Twit;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Http\Requests;

class ProfileController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function showProfile(Request $request)
  {

    $follow = User::take(3)->get();

    

    $user_id=Auth::user()->id;
    $tweets = Twit::orderBy('created_at','desc')->where('user_id', $user_id)->get();
    
    return view('profile',compact('tweets','follow'));
    


  }

  public function uploadFile(Request $request, User $userId)
  {

    if ($request->hasFile('cover_photo') )
     {
        $file = $request->file('cover_photo');
        $ext=$file->getClientOriginalExtension();
        $destinationPath=public_path().'/images';

        $fileName="$userId->id.coverPhoto.$ext";
        $file->move($destinationPath, $fileName);
        $userId->coverphoto='images'.'/'.$fileName;
        $userId->save();
    }

    if($request->hasFile('profile_photo')){

        $file = $request->file('profile_photo');
        $ext=$file->getClientOriginalExtension();
        $destinationPath=public_path().'/images';

        $fileName="$userId->id.profilePhoto.$ext";
        $file->move($destinationPath, $fileName);
        $userId->profilephoto='images'.'/'.$fileName;
        $userId->save();
    }

    return back();
  }

  public function addTwit(Request $req,User $user)
  {

      $newTwit=new Twit;
      $newTwit->twit_text=$req->twit_text;
      

        if($req->hasFile('twit_image')){
        $file = $req->file('twit_image');
        
        $ext=$file->getClientOriginalExtension();
        $destinationPath=public_path().'/images/tweetImages';

        $fileName="$user->id".rand()."tweetPhoto.$ext";
        $file->move($destinationPath, $fileName);
        $newTwit->twit_image='images/tweetImages'.'/'.$fileName;
       }

        $user->twits()->save($newTwit);
        return back();
  }


 


  //

}
