<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chpitter</title>
    <!-- <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico'> -->
    <link rel='stylesheet' type='text/css' href='/css/styles.css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css" media="screen" title="no title"
      charset="utf-8">
    </head>
    <body>
      <div class="container-fluid">
        <div class="e-header-wrap navbar-fixed-top">
          <section class="col-md-10 col-md-offset-1 " id="header">
            <div class="main_page_top">
              <div class="col-md-5">
                <div class="header_icons">
                  <ul>
                    <li>
                      <a href="/main">
                        <span class='first Icon Icon--home'>
                          <span class="text-e">Home</span>
                        </a>
                      </li>
                     <!--  <li>
                        <a href="/notifications">
                          <span class='second Icon Icon--discover'>
                            <span class="text-e">Notifications</span>
                          </span>
                        </a>
                      </li>
                      <li>
                        <span class='second Icon Icon--message'>
                          <span class="text-e">Messages</span>
                        </span>
                      </li> -->
                    </ul>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="col-md-4 col-md-offset-4">
                    <img class="e-bird" src="img/twitter-icon.png">
                  </div>
                </div>
                <div class="col-md-3 col-md-offset-1">
                  <div class="header_right_side">
                  </div>
                  <div class="col-md-6">
                    <input class="e-search" type="search" name="search" placeholder="Search Twitter ">
                  </div>
                  <div class="col-md-1">
                    <div class="e-egg">
                      @if(empty(Auth::user()->profilephoto))
                      <img id="egg" src="images/default_profile_photo.png">
                      @else
                      <img id="egg" src="{{Auth::user()->profilephoto}}">
                      @endif
                      <div id="header_droptown">
                        <div class="F_triangle"></div>
                        <ul id="F_drpdown">
                          <a href="/profile">
                            <li>
                              <b>{{ Auth::user()->username }} <p>
                                view profile
                              </p></b>
                            </li>
                          </a>
                         <!--  <a href="/settings">
                            <li>
                              <b>Settings</b>
                            </li>
                          </a> -->
                          <a href="{{ url('/logout') }}">
                            <li>
                              <b>Log out</b>
                            </li>
                          </a>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 ">
                    <a id="pop_open" class="tweetbtn">
                      <span class='Icon Icon--tweet'></span>Tweet</a>
                    </div>
                  </div>
                </div>
                <!-- Farid + Eldar -->
              </section>
              <div class="pop_back">
              </div>
              <div class="pop">
                <div class="i_main">
                  <div class="row">
                    <div id="" class="i_twitWrite_onfocus_pop">
                      <form class="i_twit_form" action="" method="post">
                        <div class="col-md-12" style="margin:0;padding:0;">
                          <div class="col-md-12">
                            <textarea id="twit_input" name="name" rows="4" cols="40"></textarea>
                          </div>
                        </div>
                        <input type="file" name="image_src" id="image_src" hidden='hidden'>
                      </form>
                      <div class="col-md-11 col-md-offset-1">
                        <i name="kamera" class="fa fa-camera" aria-hidden="true"></i>
                      </div>
                      <div class="col-md-12">
                        <div class="col-md-6" style="margin:0;padding:0;">
                          <ul>
                            <li><i class="fa fa-camera" aria-hidden="true"></i></li>
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
                    </div>
                  </div>
                </div
              </div>
            </div>
          </div>
          <section class="col-md-10 col-md-offset-1" id="body">
            <div class="main_page">
              @yield('left')
              @yield('middle')
              @yield('right')
              <div>
                <section>
                </div>
                <script src="jQuery/jquery.js" charset="utf-8"></script>
                <script src="scripts/app.js" charset="utf-8"></script>
              </body>
            </html>