<div id="suggestion-column" class="col-md-3 col-xs-1">
  <div class="findFriends">
    <div class="row">
      <div class="col-md-12">
        <h3>Who to follow</h3>
        <h4><a href="#"> Refresh</a></h4>
        <h4><a href="#"> View all</a></h4>
      </div>
      @foreach($followerMain as $flw)
      <div class="col-md-12" style="margin:0;padding:0">
        <div class="follow_main">
          <div class="follow_sec">
            <div class="col-md-4" style="margin:0;padding:0">
              <div class="imgBox">
               @if(empty($flw->profilephoto))
              <img src="images/default_profile_photo.png">
              @else
              <img src="{{$flw->profilephoto }}">
              @endif

              </div>
            </div>
            <div class="col-md-8" style="margin:0;padding:0">
              <div class="text">
                <a href="#">{{ $flw->name }}</a><span>{{ $flw->email }}</span>
              </div>
              @if(!Auth::user()->followers()->get()->find($flw->id))
              <a href="/follow/{{$flw->id}}/{{Auth::user()->id}}"> <button class="btnFollow"><i class="fa fa-user-plus" aria-hidden="true"> Follow</i></button></a>
              @else
              <a href="/unfollow/{{$flw->id}}"> <button class="btnFollow"><i class="fa fa-user-plus" aria-hidden="true"> Unfollow</i></button></a>
              @endif
              
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <h4><a href="#"> Find Friends</a></h4>
  </div>
  <div class="footer">
    <ul>
      <li><i class="fa fa-copyright" aria-hidden="true"></i> 2016
      Twitter</li>
      <li>
        <a href="#">About</a>
      </li>
      <li>
        <a href="#">Help</a>
      </li>
      <li>
        <a href="#">Terms</a>
      </li>
      <li>
        <a href="#">Privacy</a>
      </li>
      <br>
      <li>
        <a href="#">Cookies</a>
      </li>
      <li>
        <a href="#">Ads info</a>
      </li>
      <li>
        <a href="#">Brand</a>
      </li>
      <li>
        <a href="#">Blog</a>
      </li>
      <li>
        <a href="#">Status</a>
      </li>
      <li>
        <a href="#">Apps</a>
      </li>
      <br>
      <li>
        <a href="#">Jobs</a>
      </li>
      <li>
        <a href="#">Businesses</a>
      </li>
      <li>
        <a href="#">Media</a>
      </li>
      <li>
        <a href="#">Developers</a>
      </li>
    </ul>
  </div>
  <div class="advertise">
    <p>
      <a href="#">Advertise with Twitter</a>
    </p>
  </div>
</div>