@extends('layouts.skeleton')
@push('body-script')
    <script>
        TweenMax.set(".play-circle-01", {
            rotation: 90,
            transformOrigin: "center"
        });

        TweenMax.set(".play-circle-02", {
            rotation: -90,
            transformOrigin: "center"
        });

        TweenMax.set(".play-perspective", {
            xPercent: 6.5,
            scale: .175,
            transformOrigin: "center",
            perspective: 1
        });

        TweenMax.set(".play-video", {
            visibility: "hidden",
            opacity: 0,
        });

        TweenMax.set(".play-triangle", {
            transformOrigin: "left center",
            transformStyle: "preserve-3d",
            rotationY: 10,
            scaleX: 2
        });

        const rotateTL = new TimelineMax({ paused: true })
            .to(".play-circle-01", .7, {
                opacity: .1,
                rotation: '+=360',
                strokeDasharray: "456 456",
                ease: Power1.easeInOut
            }, 0)
            .to(".play-circle-02", .7, {
                opacity: .1,
                rotation: '-=360',
                strokeDasharray: "411 411",
                ease: Power1.easeInOut
            }, 0);

        const openTL = new TimelineMax({ paused: true })
            .to(".play-backdrop", 1, {
                opacity: .95,
                visibility: "visible",
                ease: Power2.easeInOut
            }, 0)
            .to(".play-close", 1, {
                opacity: 1,
                ease: Power2.easeInOut
            }, 0)
            .to(".play-perspective", 1, {
                xPercent: 0,
                scale: 1,
                ease: Power2.easeInOut
            }, 0)
            .to(".play-triangle", 1, {
                scaleX: 1,
                ease: ExpoScaleEase.config(2, 1, Power2.easeInOut)
            }, 0)
            .to(".play-triangle", 1, {
                rotationY: 0,
                ease: ExpoScaleEase.config(10, .01, Power2.easeInOut)
            }, 0)
            .to(".play-video", 1, {
                visibility: "visible",
                opacity: 1
            }, .5);


        const button = document.querySelector(".play-button");
        const backdrop = document.querySelector(".play-backdrop");
        const close = document.querySelector(".play-close");

        button.addEventListener("mouseover", () => rotateTL.play());
        button.addEventListener("mouseleave", () => rotateTL.reverse());
        button.addEventListener("click", () => openTL.play());
        backdrop.addEventListener("click", () => openTL.reverse());
        close.addEventListener("click", e => {
            e.stopPropagation()
            openTL.reverse()
        });


    </script>
    @endpush
    @section('main-content')
        <!-- Page container -->
        <!-- /container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">
                <div class="content-wrapper ">
                    <div class="col-video">
                        <div class="play-backdrop"></div>
                        <div class="play-button">
                            <svg class="play-circles" viewBox="0 0 152 152">
                                <circle class="play-circle-01" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="343 343" cx="76" cy="76" r="72.7"/>
                                <circle class="play-circle-02" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="309 309" cx="76" cy="76" r="65.5"/>
                            </svg>
                            <div class="play-perspective">
                                <button class="play-close"></button>
                                <div class="play-triangle">
                                    <div class="play-video">
                                        <iframe width="600" height="400" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--header==>اخرین پروژه ها--}}
                    <div>
                        <!-- Page header -->
                        {{--<div class="page-header page-header-default">--}}
                        <div class="container">
                            <div class="page-title">
                                <hr class="style15">
                            </div>
                        </div>

                    </div>
                    {{--header==>اخرین پروژه ها--}}
                    {{--کروسال برای آخرین پروژه ها--}}
                    <div class="ht">
                        <div class="bd">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img  src="https://www.w3schools.com/bootstrap/la.jpg" alt="">Slide 1</div>
                                    <div class="swiper-slide">Slide 2</div>
                                    <div class="swiper-slide">Slide 3</div>
                                    <div class="swiper-slide">Slide 4</div>
                                    <div class="swiper-slide">Slide 5</div>
                                    <div class="swiper-slide">Slide 6</div>
                                    <div class="swiper-slide">Slide 7</div>
                                    <div class="swiper-slide">Slide 8</div>
                                    <div class="swiper-slide">Slide 9</div>
                                    <div class="swiper-slide">Slide 10</div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    {{--کروسال برای آخرین پروژه ها--}}

                    <br>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary btn-xlg" style="font-size: large">همه پروژه ها</button>
                    </div>
                    <br>

                    <div class="container"><div class="page-title">
                            <hr class="style14">
                        </div></div>

                </div>
                <!-- /page content -->

            </div>
        </div>
        <div class="container ">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="http://placehold.it/760x400/cccccc/ffffff">
                        <div class="carousel-caption">
                            <h4><a href="#">Lorem ipsum dolor sit amet consetetur sadipscing</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
                        </div>
                    </div><!-- End Item -->

                    <div class="item">
                        <img src="http://placehold.it/760x400/999999/cccccc">
                        <div class="carousel-caption">
                            <h4><a href="#">consetetur sadipscing elitr, sed diam nonumy eirmod</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
                        </div>
                    </div><!-- End Item -->

                    <div class="item">
                        <img src="http://placehold.it/760x400/dddddd/333333">
                        <div class="carousel-caption">
                            <h4><a href="#">tempor invidunt ut labore et dolore</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
                        </div>
                    </div><!-- End Item -->

                    <div class="item">
                        <img src="http://placehold.it/760x400/999999/cccccc">
                        <div class="carousel-caption">
                            <h4><a href="#">magna aliquyam erat, sed diam voluptua</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
                        </div>
                    </div><!-- End Item -->

                    <div class="item">
                        <img src="http://placehold.it/760x400/dddddd/333333">
                        <div class="carousel-caption">
                            <h4><a href="#">tempor invidunt ut labore et dolore magna aliquyam erat</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
                        </div>
                    </div><!-- End Item -->

                </div><!-- End Carousel Inner -->


                <ul class="list-group col-sm-4">
                    <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4>Lorem ipsum dolor sit amet consetetur sadipscing</h4></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>consetetur sadipscing elitr, sed diam nonumy eirmod</h4></li>
                    <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>tempor invidunt ut labore et dolore</h4></li>
                    <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>magna aliquyam erat, sed diam voluptua</h4></li>
                    <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4>tempor invidunt ut labore et dolore magna aliquyam erat</h4></li>
                </ul>

                <!-- Controls -->
                <div class="carousel-controls">
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

            </div><!-- End Carousel -->
        </div>
        <!-- /page container -->
        <br>
        <br>
        {{--footer--}}
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 footerleft ">
                        <div class="logofooter"> Logo</div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                        <p><i class="fa fa-map-pin"></i> 210, Aggarwal Tower, Rohini sec 9, New Delhi -        110085, INDIA</p>
                        <p><i class="fa fa-phone"></i> Phone (India) : +91 9999 878 398</p>
                        <p><i class="fa fa-envelope"></i> E-mail : info@webenlance.com</p>

                    </div>
                    <div class="col-md-2 col-sm-6 paddingtop-bottom">
                        <h6 class="heading7">GENERAL LINKS</h6>
                        <ul class="footer-ul">
                            <li><a href="http://kalarikendramdelhi.com"> Career</a></li>
                            <li><a href="http://kalarikendramdelhi.com"> Privacy Policy</a></li>
                            <li><a href="http://kalarikendramdelhi.com"> Terms & Conditions</a></li>
                            <li><a href="http://kalarikendramdelhi.com"> Client Gateway</a></li>
                            <li><a href="http://kalarikendramdelhi.com"> Ranking</a></li>
                            <li><a href="http://kalarikendramdelhi.com"> Case Studies</a></li>
                            <li><a href="http://kalarikendramdelhi.com"> Frequently Ask Questions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 paddingtop-bottom">
                        <h6 class="heading7">LATEST POST</h6>
                        <div class="post">
                            <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                            <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                            <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 paddingtop-bottom">
                        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer start from here-->

        <div class="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p>© 2016 - All Rights with Webenlance</p>
                </div>
                <div class="col-md-6">
                    <ul class="bottom_ul">
                        <li><a href="http://kalarikendramdelhi.com">webenlance.com</a></li>
                        <li><a href="http://kalarikendramdelhi.com">About us</a></li>
                        <li><a href="http://kalarikendramdelhi.com">Blog</a></li>
                        <li><a href="http://kalarikendramdelhi.com">Faq's</a></li>
                        <li><a href="http://kalarikendramdelhi.com">Contact us</a></li>
                        <li><a href="http://kalarikendramdelhi.com">Site Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{--end footer--}}

    @endsection
{{--<!DOCTYPE html>--}}
{{--<html lang="en" >--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>--}}

    {{--<!-- Global stylesheets -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{asset('css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">--}}

    {{--<link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{asset('css/core/components.css')}}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{asset('css/colors.css')}}" rel="stylesheet" type="text/css">--}}

    {{--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">--}}
    {{--======================================swiper slider css =====================================--}}
    {{--<link rel="stylesheet" href="{{asset('css/swiper/swiper.min.css')}}">--}}
    {{--======================================swiper slider css =====================================--}}

    {{--<!-- /global stylesheets -->--}}
    {{--<!-- /core JS files -->--}}
    {{--<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>--}}
    {{--<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>--}}
    {{--<!-- /core JS files -->--}}

    {{--<!-- Theme JS files -->--}}
    {{--<script type="text/javascript" src="{{asset('js/drilldown.js')}}"></script>--}}

    {{--<script type="text/javascript" src="{{asset('js/app.js')}}"></script>--}}

    {{--<!-- Theme JS files -->--}}


    {{--======================================================================--}}
    {{--<link rel="shortcut icon" href="../favicon.ico">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('slider/css/normalize.css')}}"/>--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('slider/css/demo.css')}}" type="text/css"/>--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('slider/css/component2.css')}}" type="text/css"/>--}}
    {{--<script src="{{asset('slider/js/snap.svg-min.js')}}"></script>--}}
    {{--<link rel="stylesheet" href="{{asset('css/change.css')}}" type="text/css">--}}
    {{--<link rel="stylesheet" href="{{asset('css/video-player.css')}}" type="text/css">--}}
    {{--========================================video player Js======================================================================--}}
    {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>--}}

    {{--========================================End Video player JS=====================================--}}




{{--</head>--}}

{{--<body class="norm" style="background-color: white">--}}

{{--<!-- Main navbar -->--}}
{{--<div class="navbar navbar-inverse">--}}
    {{--<div class="navbar-header">--}}
        {{--<a class="navbar-brand" href="index.html"><img src="{{asset('images/logo_light.png')}}" alt=""></a>--}}

        {{--<ul class="nav navbar-nav pull-right visible-xs-block">--}}
            {{--<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}

    {{--<div class="navbar-collapse collapse" id="navbar-mobile">--}}
        {{--<ul class="nav navbar-nav">--}}
            {{--<li><a href="#" class="menu-title"><i class="icon-arrow-left8 position-left"></i> پروژه ها</a></li>--}}

            {{--<li class="dropdown mega-menu mega-menu-wide">--}}
                {{--<a href="#" class="dropdown-toggle menu-title" data-toggle="dropdown">خیریه ها <span class="caret"></span></a>--}}

                {{--<div class="dropdown-menu dropdown-content">--}}
                    {{--<div class="dropdown-content-body">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-3">--}}
                                {{--<span class="menu-heading underlined">Column 1 title</span>--}}
                                {{--<ul class="menu-list">--}}
                                    {{--<li><a href="#">Link 1, column 1</a></li>--}}
                                    {{--<li><a href="#">Link 2, column 1</a></li>--}}
                                    {{--<li><a href="#">Link 3, column 1</a></li>--}}
                                    {{--<li><a href="#">Link 4, column 1</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-3">--}}
                                {{--<span class="menu-heading underlined">Column 2 title</span>--}}
                                {{--<ul class="menu-list">--}}
                                    {{--<li><a href="#">Link 1, column 2</a></li>--}}
                                    {{--<li><a href="#">Link 2, column 2</a></li>--}}
                                    {{--<li><a href="#">Link 3, column 2</a></li>--}}
                                    {{--<li><a href="#">Link 4, column 2</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-3">--}}
                                {{--<span class="menu-heading underlined">Column 3 title</span>--}}
                                {{--<ul class="menu-list">--}}
                                    {{--<li><a href="#">Link 1, column 3</a></li>--}}
                                    {{--<li><a href="#">Link 2, column 3</a></li>--}}
                                    {{--<li><a href="#">Link 3, column 3</a></li>--}}
                                    {{--<li><a href="#">Link 4, column 3</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-3">--}}
                                {{--<span class="menu-heading underlined">Column 4 title</span>--}}
                                {{--<ul class="menu-list">--}}
                                    {{--<li><a href="#">Link 1, column 4</a></li>--}}
                                    {{--<li><a href="#">Link 2, column 4</a></li>--}}
                                    {{--<li><a href="#">Link 3, column 4</a></li>--}}
                                    {{--<li><a href="#">Link 4, column 4</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}

            {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle menu-title" data-toggle="dropdown">داوطلبین <span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu dropdown-menu-right">--}}
                    {{--<li><a href="#">Second level</a></li>--}}
                    {{--<li class="dropdown-submenu">--}}
                        {{--<a href="#">Second level with child</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="#">Third level</a></li>--}}
                            {{--<li class="dropdown-submenu">--}}
                                {{--<a href="#">Third level with child</a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a href="#">Fourth level</a></li>--}}
                                    {{--<li><a href="#">Fourth level</a></li>--}}
                                    {{--<li><a href="#">Fourth level</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Third level</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="#">Second level</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        {{--</ul>--}}

        {{--<ul class="nav navbar-nav navbar-right">--}}
            {{--<li><a href="#" class="menu-title">ورود به حساب کاربری</a></li>--}}
            {{--<li><a href="#" class="menu-title">ساخت حساب کاربری</a></li>--}}

        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- /main navbar -->--}}


{{--<!-- Page container -->--}}
{{--<!-- /container -->--}}
{{--<div class="page-container">--}}

    {{--<!-- Page content -->--}}
    {{--<div class="page-content">--}}
        {{--<div class="content-wrapper ">--}}
            {{--<div class="col-video">--}}
            {{--<div class="play-backdrop"></div>--}}
            {{--<div class="play-button">--}}
                {{--<svg class="play-circles" viewBox="0 0 152 152">--}}
                    {{--<circle class="play-circle-01" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="343 343" cx="76" cy="76" r="72.7"/>--}}
                    {{--<circle class="play-circle-02" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="309 309" cx="76" cy="76" r="65.5"/>--}}
                {{--</svg>--}}
                {{--<div class="play-perspective">--}}
                    {{--<button class="play-close"></button>--}}
                    {{--<div class="play-triangle">--}}
                        {{--<div class="play-video">--}}
                            {{--<iframe width="600" height="400" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
{{--header==>اخرین پروژه ها--}}
            {{--<div>--}}
                {{--<!-- Page header -->--}}
                {{--<div class="page-header page-header-default">--}}
                    {{--<div class="container">--}}
                        {{--<div class="page-title">--}}
                            {{--<hr class="style15">--}}
                        {{--</div>--}}
                    {{--</div>--}}

            {{--</div>--}}
            {{--header==>اخرین پروژه ها--}}
            {{--کروسال برای آخرین پروژه ها--}}
            {{--<div class="ht">--}}
                {{--<div class="bd">--}}
                    {{--<div class="swiper-container">--}}
                        {{--<div class="swiper-wrapper">--}}
                            {{--<div class="swiper-slide"><img  src="https://www.w3schools.com/bootstrap/la.jpg" alt="">Slide 1</div>--}}
                            {{--<div class="swiper-slide">Slide 2</div>--}}
                            {{--<div class="swiper-slide">Slide 3</div>--}}
                            {{--<div class="swiper-slide">Slide 4</div>--}}
                            {{--<div class="swiper-slide">Slide 5</div>--}}
                            {{--<div class="swiper-slide">Slide 6</div>--}}
                            {{--<div class="swiper-slide">Slide 7</div>--}}
                            {{--<div class="swiper-slide">Slide 8</div>--}}
                            {{--<div class="swiper-slide">Slide 9</div>--}}
                            {{--<div class="swiper-slide">Slide 10</div>--}}
                        {{--</div>--}}
                        {{--<!-- Add Pagination -->--}}
                        {{--<div class="swiper-pagination"></div>--}}
                        {{--<!-- Add Arrows -->--}}
                        {{--<div class="swiper-button-next"></div>--}}
                        {{--<div class="swiper-button-prev"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--کروسال برای آخرین پروژه ها--}}

            {{--<br>--}}
            {{--<div class="text-center">--}}
            {{--<button type="button" class="btn btn-primary btn-xlg" style="font-size: large">همه پروژه ها</button>--}}
            {{--</div>--}}
            {{--<br>--}}

                {{--<div class="container"><div class="page-title">--}}
                    {{--<hr class="style14">--}}
                {{--</div></div>--}}

        {{--</div>--}}
    {{--<!-- /page content -->--}}

{{--</div>--}}
{{--</div>--}}
{{--<div class="container ">--}}
    {{--<div id="myCarousel" class="carousel slide" data-ride="carousel">--}}

        {{--<!-- Wrapper for slides -->--}}
        {{--<div class="carousel-inner">--}}

            {{--<div class="item active">--}}
                {{--<img src="http://placehold.it/760x400/cccccc/ffffff">--}}
                {{--<div class="carousel-caption">--}}
                    {{--<h4><a href="#">Lorem ipsum dolor sit amet consetetur sadipscing</a></h4>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>--}}
                {{--</div>--}}
            {{--</div><!-- End Item -->--}}

            {{--<div class="item">--}}
                {{--<img src="http://placehold.it/760x400/999999/cccccc">--}}
                {{--<div class="carousel-caption">--}}
                    {{--<h4><a href="#">consetetur sadipscing elitr, sed diam nonumy eirmod</a></h4>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>--}}
                {{--</div>--}}
            {{--</div><!-- End Item -->--}}

            {{--<div class="item">--}}
                {{--<img src="http://placehold.it/760x400/dddddd/333333">--}}
                {{--<div class="carousel-caption">--}}
                    {{--<h4><a href="#">tempor invidunt ut labore et dolore</a></h4>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>--}}
                {{--</div>--}}
            {{--</div><!-- End Item -->--}}

            {{--<div class="item">--}}
                {{--<img src="http://placehold.it/760x400/999999/cccccc">--}}
                {{--<div class="carousel-caption">--}}
                    {{--<h4><a href="#">magna aliquyam erat, sed diam voluptua</a></h4>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>--}}
                {{--</div>--}}
            {{--</div><!-- End Item -->--}}

            {{--<div class="item">--}}
                {{--<img src="http://placehold.it/760x400/dddddd/333333">--}}
                {{--<div class="carousel-caption">--}}
                    {{--<h4><a href="#">tempor invidunt ut labore et dolore magna aliquyam erat</a></h4>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>--}}
                {{--</div>--}}
            {{--</div><!-- End Item -->--}}

        {{--</div><!-- End Carousel Inner -->--}}


        {{--<ul class="list-group col-sm-4">--}}
            {{--<li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4>Lorem ipsum dolor sit amet consetetur sadipscing</h4></li>--}}
            {{--<li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>consetetur sadipscing elitr, sed diam nonumy eirmod</h4></li>--}}
            {{--<li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>tempor invidunt ut labore et dolore</h4></li>--}}
            {{--<li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>magna aliquyam erat, sed diam voluptua</h4></li>--}}
            {{--<li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4>tempor invidunt ut labore et dolore magna aliquyam erat</h4></li>--}}
        {{--</ul>--}}

        {{--<!-- Controls -->--}}
        {{--<div class="carousel-controls">--}}
            {{--<a class="left carousel-control" href="#myCarousel" data-slide="prev">--}}
                {{--<span class="glyphicon glyphicon-chevron-left"></span>--}}
            {{--</a>--}}
            {{--<a class="right carousel-control" href="#myCarousel" data-slide="next">--}}
                {{--<span class="glyphicon glyphicon-chevron-right"></span>--}}
            {{--</a>--}}
        {{--</div>--}}

    {{--</div><!-- End Carousel -->--}}
{{--</div>--}}
{{--<!-- /page container -->--}}
{{--<br>--}}
{{--<br>--}}
{{--footer--}}
{{--<footer>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4 col-sm-6 footerleft ">--}}
                {{--<div class="logofooter"> Logo</div>--}}
                {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>--}}
                {{--<p><i class="fa fa-map-pin"></i> 210, Aggarwal Tower, Rohini sec 9, New Delhi -        110085, INDIA</p>--}}
                {{--<p><i class="fa fa-phone"></i> Phone (India) : +91 9999 878 398</p>--}}
                {{--<p><i class="fa fa-envelope"></i> E-mail : info@webenlance.com</p>--}}

            {{--</div>--}}
            {{--<div class="col-md-2 col-sm-6 paddingtop-bottom">--}}
                {{--<h6 class="heading7">GENERAL LINKS</h6>--}}
                {{--<ul class="footer-ul">--}}
                    {{--<li><a href="http://kalarikendramdelhi.com"> Career</a></li>--}}
                    {{--<li><a href="http://kalarikendramdelhi.com"> Privacy Policy</a></li>--}}
                    {{--<li><a href="http://kalarikendramdelhi.com"> Terms & Conditions</a></li>--}}
                    {{--<li><a href="http://kalarikendramdelhi.com"> Client Gateway</a></li>--}}
                    {{--<li><a href="http://kalarikendramdelhi.com"> Ranking</a></li>--}}
                    {{--<li><a href="http://kalarikendramdelhi.com"> Case Studies</a></li>--}}
                    {{--<li><a href="http://kalarikendramdelhi.com"> Frequently Ask Questions</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 col-sm-6 paddingtop-bottom">--}}
                {{--<h6 class="heading7">LATEST POST</h6>--}}
                {{--<div class="post">--}}
                    {{--<p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>--}}
                    {{--<p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>--}}
                    {{--<p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 col-sm-6 paddingtop-bottom">--}}
                {{--<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">--}}
                    {{--<div class="fb-xfbml-parse-ignore">--}}
                        {{--<blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</footer>--}}
{{--<!--footer start from here-->--}}

{{--<div class="copyright">--}}
    {{--<div class="container">--}}
        {{--<div class="col-md-6">--}}
            {{--<p>© 2016 - All Rights with Webenlance</p>--}}
        {{--</div>--}}
        {{--<div class="col-md-6">--}}
            {{--<ul class="bottom_ul">--}}
                {{--<li><a href="http://kalarikendramdelhi.com">webenlance.com</a></li>--}}
                {{--<li><a href="http://kalarikendramdelhi.com">About us</a></li>--}}
                {{--<li><a href="http://kalarikendramdelhi.com">Blog</a></li>--}}
                {{--<li><a href="http://kalarikendramdelhi.com">Faq's</a></li>--}}
                {{--<li><a href="http://kalarikendramdelhi.com">Contact us</a></li>--}}
                {{--<li><a href="http://kalarikendramdelhi.com">Site Map</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--end footer--}}

{{--<script>--}}
    {{--(function () {--}}

        {{--function init() {--}}
            {{--var speed = 330,--}}
                {{--easing = mina.backout;--}}

            {{--[].slice.call(document.querySelectorAll('#grid > a')).forEach(function (el) {--}}
                {{--var s = Snap(el.querySelector('svg')), path = s.select('path'),--}}
                    {{--pathConfig = {--}}
                        {{--from: path.attr('d'),--}}
                        {{--to: el.getAttribute('data-path-hover')--}}
                    {{--};--}}

                {{--el.addEventListener('mouseenter', function () {--}}
                    {{--path.animate({'path': pathConfig.to}, speed, easing);--}}
                {{--});--}}

                {{--el.addEventListener('mouseleave', function () {--}}
                    {{--path.animate({'path': pathConfig.from}, speed, easing);--}}
                {{--});--}}
            {{--});--}}
        {{--}--}}

        {{--init();--}}

    {{--})();--}}
{{--</script>--}}
{{--<script>--}}
    {{--TweenMax.set(".play-circle-01", {--}}
        {{--rotation: 90,--}}
        {{--transformOrigin: "center"--}}
    {{--});--}}

    {{--TweenMax.set(".play-circle-02", {--}}
        {{--rotation: -90,--}}
        {{--transformOrigin: "center"--}}
    {{--});--}}

    {{--TweenMax.set(".play-perspective", {--}}
        {{--xPercent: 6.5,--}}
        {{--scale: .175,--}}
        {{--transformOrigin: "center",--}}
        {{--perspective: 1--}}
    {{--});--}}

    {{--TweenMax.set(".play-video", {--}}
        {{--visibility: "hidden",--}}
        {{--opacity: 0,--}}
    {{--});--}}

    {{--TweenMax.set(".play-triangle", {--}}
        {{--transformOrigin: "left center",--}}
        {{--transformStyle: "preserve-3d",--}}
        {{--rotationY: 10,--}}
        {{--scaleX: 2--}}
    {{--});--}}

    {{--const rotateTL = new TimelineMax({ paused: true })--}}
        {{--.to(".play-circle-01", .7, {--}}
            {{--opacity: .1,--}}
            {{--rotation: '+=360',--}}
            {{--strokeDasharray: "456 456",--}}
            {{--ease: Power1.easeInOut--}}
        {{--}, 0)--}}
        {{--.to(".play-circle-02", .7, {--}}
            {{--opacity: .1,--}}
            {{--rotation: '-=360',--}}
            {{--strokeDasharray: "411 411",--}}
            {{--ease: Power1.easeInOut--}}
        {{--}, 0);--}}

    {{--const openTL = new TimelineMax({ paused: true })--}}
        {{--.to(".play-backdrop", 1, {--}}
            {{--opacity: .95,--}}
            {{--visibility: "visible",--}}
            {{--ease: Power2.easeInOut--}}
        {{--}, 0)--}}
        {{--.to(".play-close", 1, {--}}
            {{--opacity: 1,--}}
            {{--ease: Power2.easeInOut--}}
        {{--}, 0)--}}
        {{--.to(".play-perspective", 1, {--}}
            {{--xPercent: 0,--}}
            {{--scale: 1,--}}
            {{--ease: Power2.easeInOut--}}
        {{--}, 0)--}}
        {{--.to(".play-triangle", 1, {--}}
            {{--scaleX: 1,--}}
            {{--ease: ExpoScaleEase.config(2, 1, Power2.easeInOut)--}}
        {{--}, 0)--}}
        {{--.to(".play-triangle", 1, {--}}
            {{--rotationY: 0,--}}
            {{--ease: ExpoScaleEase.config(10, .01, Power2.easeInOut)--}}
        {{--}, 0)--}}
        {{--.to(".play-video", 1, {--}}
            {{--visibility: "visible",--}}
            {{--opacity: 1--}}
        {{--}, .5);--}}


    {{--const button = document.querySelector(".play-button");--}}
    {{--const backdrop = document.querySelector(".play-backdrop");--}}
    {{--const close = document.querySelector(".play-close");--}}

    {{--button.addEventListener("mouseover", () => rotateTL.play());--}}
    {{--button.addEventListener("mouseleave", () => rotateTL.reverse());--}}
    {{--button.addEventListener("click", () => openTL.play());--}}
    {{--backdrop.addEventListener("click", () => openTL.reverse());--}}
    {{--close.addEventListener("click", e => {--}}
        {{--e.stopPropagation()--}}
        {{--openTL.reverse()--}}
    {{--});--}}


{{--</script>--}}
    {{--=========================================slider swiper js files===================================================--}}
    {{--<script src="{{asset('js/swiper/swiper.min.js')}}"></script>--}}
{{--=========================================end slider js files===================================================--}}
{{--<!-- Initialize Swiper -->--}}
{{--<script>--}}
    {{--var swiper = new Swiper('.swiper-container', {--}}
        {{--slidesPerView: 3,--}}
        {{--spaceBetween: 30,--}}
        {{--slidesPerGroup: 1,--}}
        {{--loop: true,--}}
        {{--loopFillGroupWithBlank: true,--}}
        {{--pagination: {--}}
            {{--el: '.swiper-pagination',--}}
            {{--clickable: true,--}}
        {{--},--}}
        {{--navigation: {--}}
            {{--nextEl: '.swiper-button-next',--}}
            {{--prevEl: '.swiper-button-prev',--}}
        {{--},--}}
    {{--});--}}

{{--</script>--}}

{{--Carousel--}}
{{--<script>--}}
    {{--$(document).ready(function(){--}}

        {{--var clickEvent = false;--}}
        {{--$('#myCarousel').carousel({--}}
            {{--interval:   4000--}}
        {{--}).on('click', '.list-group li', function() {--}}
            {{--clickEvent = true;--}}
            {{--$('.list-group li').removeClass('active');--}}
            {{--$(this).addClass('active');--}}
        {{--}).on('slid.bs.carousel', function(e) {--}}
            {{--if(!clickEvent) {--}}
                {{--var count = $('.list-group').children().length -1;--}}
                {{--var current = $('.list-group li.active');--}}
                {{--current.removeClass('active').next().addClass('active');--}}
                {{--var id = parseInt(current.data('slide-to'));--}}
                {{--if(count == id) {--}}
                    {{--$('.list-group li').first().addClass('active');--}}
                {{--}--}}
            {{--}--}}
            {{--clickEvent = false;--}}
        {{--});--}}
    {{--})--}}

    {{--$(window).load(function() {--}}
        {{--var boxheight = $('#myCarousel .carousel-inner').innerHeight();--}}
        {{--var itemlength = $('#myCarousel .item').length;--}}
        {{--var triggerheight = Math.round(boxheight/itemlength+1);--}}
        {{--$('#myCarousel .list-group-item').outerHeight(triggerheight);--}}
    {{--});--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}
