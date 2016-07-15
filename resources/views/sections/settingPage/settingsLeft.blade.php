          <div class="main_page_top">
              <div class=" col-md-3" >

                    <div class="card" style="height:180px">
                        <!--Cover Image -->
                        <div class="col-md-12 profileCover">
                            <a href="profile">
                       @if(empty(Auth::user()->coverphoto))
                      <img src="images/default_banner_photo.png">
                      @else
                      <img src="{{ Auth::user()->coverphoto }}" alt="" />
                      @endif
                      </a>
                        </div>
                        <!--Cover Image -->
                        <!--Profile info -->
                        <div class="info">
                            <ul class="col-md-3">
                                <li>
                                    <a href="/profile">
                                @if(empty(Auth::user()->profilephoto))
                                 <img id="egg" src="images/default_profile_photo.png">
                                @else 
                                 <img id="egg" src="{{Auth::user()->profilephoto}}">
                                @endif
                                    </a>
                                </li>
                            </ul>
                            <ul class="col-md-8 col-md-offset-1">
                                <li>
                                    <a href="/profile" id="blackMamba">{{ Auth::user()->name }}</a>
                                    <a href="/profile"><span>@</span>{{ Auth::user()->username }}</a>
                                </li>

                            </ul>
                        </div>

                  </div>
                  <div class="account">
                      <div class="accbox">Account
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                      </div>
                      <div class="accbox">Security and Privacy
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>
                      <div class="accbox">Password
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>
                      <div class="accbox">Cards andd Shipping
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>
                      <div class="accbox">Order history
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>
                      <div class="accbox">Mobile
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>
                      <div class="accbox">Email notifications
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>
                      <div class="accbox">Web notifications
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>
                      <div class="accbox">Find friends
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>
                      <div class="accbox">Muted accounts
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>
                      <div class="accbox">Blocked accounts
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>
                      <div class="accbox">Apps
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>
                      <div class="accbox">Widgets
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>
                      <div class="accbox">Your Twitter data
                      <div class="direcicon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>
                  </div>
              </div>
