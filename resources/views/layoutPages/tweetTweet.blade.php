<form class="i_twit_form" action="/twitwrite/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="col-md-12" style="margin:0;padding:0;">
    <div class="col-md-1" style="margin:0;padding:0;">
      <div class="form_img">
        @if(empty(Auth::user()->profilephoto))
        <img style="width:32px;height:32px" src="images/default_profile_photo.png">
        @else
        <img style="width:32px;height:32px" src="{{ Auth::user()->profilephoto }}">
        @endif
      </div>
    </div>
    <div class="col-md-11">
      <textarea id="twit_input_one" name="twit_text" rows="4" cols="40"></textarea>
    </div>
  </div>
  <input  type="file" name="twit_image" id="tweetWrite_file" hidden='hidden'>
  <div class="col-md-11 col-md-offset-1">
    <i id="kamera-main" class="fa fa-camera" aria-hidden="true"></i>
  </div>
  <div class="col-md-12">
    <div class="col-md-6" style="margin:0;padding:0;">
      <ul>
        <li><i id="kamera_main_two" class="fa fa-camera" aria-hidden="true"></i></li>
        <li><i class="fa fa-gift" aria-hidden="true"></i>
        </li>
        <li><i class="fa fa-align-left" aria-hidden="true"></i></li>
        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
        </li>
      </ul>
    </div>
    <div class="col-md-6">
      <input type="submit" name="name" value="Tweet">
    </div>
  </div>
</form>