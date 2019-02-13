<!DOCTYPE html>
<html lang="en" dir="rtl" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/core/components.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/colors.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    {{--======================================swiper slider css =====================================--}}
    <link rel="stylesheet" href="{{asset('css/swiper/swiper.min.css')}}">
    {{--======================================swiper slider css =====================================--}}

<!-- /global stylesheets -->
    {{--<!-- /core JS files -->--}}
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    {{--<!-- /core JS files -->--}}

    {{--<!-- Theme JS files -->--}}
    <script type="text/javascript" src="{{asset('js/drilldown.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

    {{--<!-- Theme JS files -->--}}


    {{--======================================================================--}}
    <link rel="shortcut icon" href="../favicon.ico">
    {{--<link rel="stylesheet" type="text/css" href="{{asset('slider/css/normalize.css')}}"/>--}}
    <link rel="stylesheet" type="text/css" href="{{asset('slider/css/demo.css')}}" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('slider/css/component2.css')}}" type="text/css"/>
    <script src="{{asset('slider/js/snap.svg-min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/change.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/video-player.css')}}" type="text/css">
    {{--========================================video player Js======================================================================--}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>

    {{--========================================End Video player JS=====================================--}}

    @stack('head-script')


</head>

<body  style="background-color: white">

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo_light.png')}}" alt=""></a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a href="{{url('/all-projects')}}" class="menu-title"><i class="icon-arrow-left8 position-left"></i> پروژه ها</a></li>

            <li class="dropdown mega-menu mega-menu-wide">
                <a href="#" class="dropdown-toggle menu-title" data-toggle="dropdown">خیریه ها <span class="caret"></span></a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-body">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Column 1 title</span>
                                <ul class="menu-list">
                                    <li><a href="#">Link 1, column 1</a></li>
                                    <li><a href="#">Link 2, column 1</a></li>
                                    <li><a href="#">Link 3, column 1</a></li>
                                    <li><a href="#">Link 4, column 1</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Column 2 title</span>
                                <ul class="menu-list">
                                    <li><a href="#">Link 1, column 2</a></li>
                                    <li><a href="#">Link 2, column 2</a></li>
                                    <li><a href="#">Link 3, column 2</a></li>
                                    <li><a href="#">Link 4, column 2</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Column 3 title</span>
                                <ul class="menu-list">
                                    <li><a href="#">Link 1, column 3</a></li>
                                    <li><a href="#">Link 2, column 3</a></li>
                                    <li><a href="#">Link 3, column 3</a></li>
                                    <li><a href="#">Link 4, column 3</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Column 4 title</span>
                                <ul class="menu-list">
                                    <li><a href="#">Link 1, column 4</a></li>
                                    <li><a href="#">Link 2, column 4</a></li>
                                    <li><a href="#">Link 3, column 4</a></li>
                                    <li><a href="#">Link 4, column 4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <a href="{{url('/all-volunteers')}}" class="menu-title">داوطلبین </a>
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
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#modal-login">ورود به حساب کاربری</a></li>
            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#modal-registration">ساخت حساب کاربری</a></li>

        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<!-- /container -->
@yield('main-content')

<!-- Login form -->
<div id="modal-login" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content login-form">

            <!-- Form -->
            <form class="modal-body" action="index.html">
                <div class="text-center">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                    <h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" class="form-control" placeholder="Username">
                    <div class="form-control-feedback">
                        <i class="icon-user text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="form-control-feedback">
                        <i class="icon-lock2 text-muted"></i>
                    </div>
                </div>

                <div class="form-group login-options">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="checkbox-inline">
                                <input type="checkbox" class="styled" checked="checked">
                                Remember
                            </label>
                        </div>

                        <div class="col-sm-6 text-right">
                            <a href="login_password_recover.html">Forgot password?</a>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-left13 position-right"></i></button>
                </div>

                <div class="content-divider text-muted form-group"><span>or sign in with</span></div>
                <ul class="list-inline form-group list-inline-condensed text-center">
                    <li><a href="#" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded"><i class="icon-facebook"></i></a></li>
                    <li><a href="#" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded"><i class="icon-dribbble3"></i></a></li>
                    <li><a href="#" class="btn border-slate-600 text-slate-600 btn-flat btn-icon btn-rounded"><i class="icon-github"></i></a></li>
                    <li><a href="#" class="btn border-info text-info btn-flat btn-icon btn-rounded"><i class="icon-twitter"></i></a></li>
                </ul>

                <div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
                <a href="login_registration.html" class="btn btn-default btn-block content-group">Sign up</a>
                <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
            </form>
            <!-- /form -->

        </div>
    </div>
</div>
<!-- /login form -->
<!-- Registration form -->
<div id="modal-registration" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content login-form">

            <!-- Form -->
            <form class="modal-body" action="index.html">
                <div class="text-center">
                    <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                    <h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>
                </div>

                <div class="content-divider text-muted form-group"><span>Your credentials</span></div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" class="form-control" placeholder="Eugene">
                    <div class="form-control-feedback">
                        <i class="icon-user-check text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="password" class="form-control" placeholder="Create password">
                    <div class="form-control-feedback">
                        <i class="icon-user-lock text-muted"></i>
                    </div>
                </div>

                <div class="content-divider text-muted form-group"><span>Your privacy</span></div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" class="form-control" placeholder="Your email">
                    <div class="form-control-feedback">
                        <i class="icon-mention text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" class="form-control" placeholder="Repeat email">
                    <div class="form-control-feedback">
                        <i class="icon-mention text-muted"></i>
                    </div>
                </div>

                <div class="content-divider text-muted form-group"><span>Additions</span></div>

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="styled" checked="checked">
                            Send me <a href="#">test account settings</a>
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="styled" checked="checked">
                            Subscribe to monthly newsletter
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="styled">
                            Accept <a href="#">terms of service</a>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn bg-blue btn-block">Register <i class="icon-circle-left2 position-right"></i></button>
                    <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
                </div>

                <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
            </form>
            <!-- /form -->

        </div>
    </div>
</div>
<!-- /registration form -->
<script>
    (function () {

        function init() {
            var speed = 330,
                easing = mina.backout;

            [].slice.call(document.querySelectorAll('#grid > a')).forEach(function (el) {
                var s = Snap(el.querySelector('svg')), path = s.select('path'),
                    pathConfig = {
                        from: path.attr('d'),
                        to: el.getAttribute('data-path-hover')
                    };

                el.addEventListener('mouseenter', function () {
                    path.animate({'path': pathConfig.to}, speed, easing);
                });

                el.addEventListener('mouseleave', function () {
                    path.animate({'path': pathConfig.from}, speed, easing);
                });
            });
        }

        init();

    })();
</script>

{{--=========================================slider swiper js files===================================================--}}
<script src="{{asset('js/swiper/swiper.min.js')}}"></script>
{{--=========================================end slider js files===================================================--}}
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

</script>

{{--Carousel--}}
<script>
    $(document).ready(function(){

        var clickEvent = false;
        $('#myCarousel').carousel({
            interval:   4000
        }).on('click', '.list-group li', function() {
            clickEvent = true;
            $('.list-group li').removeClass('active');
            $(this).addClass('active');
        }).on('slid.bs.carousel', function(e) {
            if(!clickEvent) {
                var count = $('.list-group').children().length -1;
                var current = $('.list-group li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if(count == id) {
                    $('.list-group li').first().addClass('active');
                }
            }
            clickEvent = false;
        });
    });

    $(window).load(function() {
        var boxheight = $('#myCarousel .carousel-inner').innerHeight();
        var itemlength = $('#myCarousel .item').length;
        var triggerheight = Math.round(boxheight/itemlength+1);
        $('#myCarousel .list-group-item').outerHeight(triggerheight);
    });
</script>
@stack('body-script')
</body>
</html>
