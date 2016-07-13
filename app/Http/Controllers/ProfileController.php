<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Http\Requests;

class ProfileController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function showProfile()
  {
    return view('profile');
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
  //

}
