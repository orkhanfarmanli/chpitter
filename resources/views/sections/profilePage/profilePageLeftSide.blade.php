<div class="coverImage">  

    @if(empty(Auth::user()->coverphoto))
    <img src="images/default_banner_photo.png">
    @else
    <img src="{{ Auth::user()->coverphoto }}" alt="" />
    @endif
      
  <i id="kamra-cover-profile" class="fa fa-camera fa-3x cover-fa" aria-hidden="true"></i>
  </div>
        <section class="stat">
            <ul class="col-md-12">
                    <li class="col-md-2 col-md-offset-1 img">
                    <a href="">
                    @if(empty(Auth::user()->profilephoto))
                     <img src="images/default_profile_photo.png">
                    @else 
                     <img src="{{ Auth::user()->profilephoto }}">
                    @endif
                    
                   
                    </a>
                    </li>
                    <li class="col-md-1 b">
                        <a class="statistics" href="#">Tweets</a>
                        <a href="">577</a>
                    </li>
                    <li class="col-md-1 b">
                        <a class="statistics" href="#">Following</a>
                        <a href="">317</a>
                    </li>
                    <li class="col-md-1 b">
                        <a class="statistics" href="">Followers</a>
                        <a href="">235</a>
                    </li>
                    <li class="col-md-1 b">
                        <a class="statistics" href="">Likes</a>
                        <a href="">3,200</a>
                    </li>
                    <li class="col-md-offset-3">
                      <form class="" action="/uploadfile/{{Auth::user()->id }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <button type="submit" class="edit-button btn ">Edit profile</button>
                        <input type="file" name="cover_photo" id="cover_photo" hidden="hidden">
                        <input type="file" name="profile_photo" id="profile_photo" >
                      </form>

                    </li>
            </ul>

        </section>
          <i id="profile_kamera" class="fa fa-camera fa-2x profile-photo-fa" aria-hidden="true"></i>




    <!-- body section } -->

   <!--Profile Page -->
            <section class="col-md-12" id="body">
              <div id="profile-column" class="col-md-3 col-md-offset-1">
                <div class="profileInfo">
                    <h1><a href="">{{ Auth::user()->name }} {{ Auth::user()->surname }}</a></h1>
                    <h2><a href=""><span>@</span>{{ Auth::user()->username }}</a></h2>
                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> Azerbaijan</div>
                    <div class="join"><i class="fa fa-calendar" aria-hidden="true"></i> Joined February 2012</div>
                    <div class="photos"><i class="fa fa-camera" aria-hidden="true"></i><a href=""> Photos and videos</a></div>
                    <div class="images"><img src="images/flag.jpg"></div>
                </div>
              </div>
              </section>
