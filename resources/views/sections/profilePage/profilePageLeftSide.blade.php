<div class="coverImage"></div>
        <section class="stat">
            <ul class="col-md-12">
                    <li class="col-md-2 col-md-offset-1 img">
                    <a href=""><img src="images/p.jpeg"></a>
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
                         <button type="button" class="edit-button btn ">Edit profile</button>
                    </li>
            </ul>

        </section>



    <!-- body section } -->

   <!--Profile Page -->
            <section class="col-md-12" id="body">
              <div id="profile-column" class="col-md-3 col-md-offset-1">
                <div class="profileInfo">
                    <h1><a href="">{{ Auth::user()->username }}</a></h1>
                    <h2><a href=""><span>@</span>{{ Auth::user()->username }}</a></h2>
                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> Azerbaijan</div>
                    <div class="join"><i class="fa fa-calendar" aria-hidden="true"></i> Joined February 2012</div>
                    <div class="photos"><i class="fa fa-camera" aria-hidden="true"></i><a href=""> Photos and videos</a></div>
                    <div class="images"><img src="images/flag.jpg"></div>
                </div>
              </div>
              </section>
