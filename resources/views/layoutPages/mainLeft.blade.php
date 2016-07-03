@extends('layoutPages.layout')
<section class="col-md-10 col-md-offset-1" id="body"> 
<div class="main_page">
@section('left')
<div id="profile-column" class="col-md-3 col-xs-3">
                    <!-- Nurgul -->

                    <div class="card">
                        <!--Cover Image -->
                        <div class="col-md-12 profileCover">
                            <a href=""><img nrc="images/1058.jpg"></a>
                        </div>
                        <!--Cover Image -->
                        <!--Profile info -->
                        <div class="info">
                            <ul class="col-md-3">
                                <li>
                                    <a href="">
                                        <img src="images/p.jpeg">
                                    </a>
                                </li>
                            </ul>
                            <ul class="col-md-8 col-md-offset-1">
                                <li>
                                    <a href="#" id="blackMamba">Ağ Qarğa</a>
                                    <a href="">@AgGarga</a>
                                </li>

                            </ul>
                        </div>
                        <!--Profile info -->



                        <!--Statistics of follows -->

                        <div class="stat">
                            <ul class="stat col-md-12">
                                <li class="col-md-4">
                                    <a class="statistics" href="#">Tweets</a>
                                    <a href="">577</a>
                                </li>
                                <li class="col-md-4">
                                    <a class="statistics" href="#">Following</a>
                                    <a href="">317</a>
                                </li>
                                <li class="col-md-4">
                                    <a class="statistics" href="">Followers</a>
                                    <a href="">235</a>
                                </li>
                            </ul>
                        </div>

                        <!--Statistics of follows -->

                    </div>

                    <div class="trends">
                        <div class="hashtag">
                            <h2>Trends</h2>
                            <h2>.</h2>
                            <h2><a href="#">change</a></h2>
                        </div>
                        <div class="hashtag">
                            <h2><a href="#">#FRAIRL</a></h2>
                            <h6>417K Tweets</h6>
                        </div>
                        <div class="hashtag">
                            <h2><a href="#">#COYBIG</a></h2>
                            <h6>89.7K Tweets</h6>
                        </div>
                        <div class="hashtag">
                            <h2><a href="#">#Griezmann</a></h2>
                            <h6>10.8K Tweets</h6>
                        </div>
                        <div class="hashtag">
                            <h2><a href="#">Gignac</a></h2>
                            <h6>89.7K Tweets</h6>

                        </div>
                        <div class="hashtag">
                            <h2><a href="#">França</a></h2>
                            <h6>89.7K Tweets</h6>

                        </div>
                        <div class="hashtag">
                            <h2><a href="#">트친에게_물어보자_나에게_의외였던점</a></h2>
                            <h6>894.7 Tweets</h6>

                        </div>
                        <div class="hashtag">
                            <h2><a href="#">Matuidi</a></h2>
                            <h6>89.7K Tweets</h6>
                        </div>
                        <div class="hashtag">
                            <h2><a href="#">#unidosPodemos26J</a></h2>
                            <h6>230.7K Tweets</h6>
                        </div>
                        <div class="hashtag">
                            <h2><a href="#">#FelizDomingo</a></h2>
                            <h6>26.8K Tweets</h6>
                        </div>
                        <div class="hashtag">
                            <h2><a href="#">Deschamps</a></h2>
                            <h6>89.7K Tweets</h6>
                        </div>
                    </div>
                </div>
@yield('middle') 
@stop




