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
                <div class="e-header-wrap ">
            <section class="col-md-10 col-md-offset-1 " id="header">
              <div class="main_page_top">
                <div class="col-md-5">
                  <div class="header_icons">
                        <ul>
                            <li>
                            <a href="/">
                                <span class='first Icon Icon--home'>
                                    <span class="text-e">Home</span>
                                </span>
                                </a>
                            </li>
                            <li>
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
                            </li>
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
                            <img id="egg" src="img/egg.png">
                            <div id="header_droptown">
                                <div class="F_triangle"></div>
                                <ul id="F_drpdown">
                                  <a href="/profile">
                                    <li>
                                        <b>Ismayil <p>
                                          view profile
                                        </p></b>
                                    </li>
                                    </a>
                                    <a href="/settings">
                                    <li>
                                        <b>Settings</b>
                                    </li>
                                    </a>
                                    <a>
                                    <li>
                                        <b>Log out</b>
                                    </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                       <a class="tweetbtn">
                            <span class='Icon Icon--tweet'></span>Tweet</a>
                    </div>
                </div>
              </div>
                <!-- Farid + Eldar -->
            </section>
        </div>
        

        <!-- body section  -->
        
            @yield('left')
         
       
        <!-- body section  -->






</div>
<script src="jQuery/jquery.js" charset="utf-8"></script>
<script src="scripts/app.js" charset="utf-8"></script>
</body>
</html>
