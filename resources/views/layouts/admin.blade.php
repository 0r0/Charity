<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="{{asset('css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/admin/bootstrap.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('css/admin/core.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/core/components.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/colors.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/change.css')}}" type="text/css">
@stack('css-header')
<!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{asset('js/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/blockui.min.js')}}"></script>

    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('js/nicescroll.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/form_inputs.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/layout_fixed_custom.js')}}"></script>

    <!-- /theme JS files -->

    @stack('js-header')


</head>

<body class="navbar-top">

<!-- Main navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('images/logo_light.png')}}" alt=""></a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            {{--<li><a href="#">Text link</a></li>--}}

            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icon-cog3"></i>--}}
            {{--<span class="visible-xs-inline-block position-right">Icon link</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            <li class="dropdown" id="notification_dropdown">
                <a href="#" class="dropdown-toggle notification-link" data-toggle="dropdown" aria-expanded="false">
                    <i class=" icon-bell2"></i>
                    <span class="visible-xs-inline-block position-right">Messages</span>
                    <span class="badge bg-warning-400 notification-count">

                       @auth('charity')
                            {{auth('charity')->user()->unreadNotifications()->count()}}
                        @endauth
                        @auth('volunteer')
                            {{auth('volunteer')->user()->unreadNotifications()->count()}}
                        @endauth
                    </span>
                </a>

                <div class="dropdown-menu dropdown-content width-350">
                    <div class="dropdown-content-heading">
                        Messages
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-compose"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body">

                        @auth('charity')
                            @foreach(Auth::guard('charity')->user()->unreadNotifications->chunk(10) as $notifications)
                                @foreach($notifications as $notification)
                                    <li class="media" style="background-color: #ebebeb">
                                        <div class="media-left">
                                            <img src="{{asset('images/placeholder.jpg')}}" class="img-circle img-sm"
                                                 alt="">
                                            {{--<span class="badge bg-danger-400 media-badge">5</span>--}}
                                        </div>

                                        <div class="media-body">
                                            @if($notification->type=='App\Notifications\CommentNotification')
                                                <a href="{{url('/project-more-info/'.$notification->data['id'])}}"
                                                   class="media-heading">
                                                      <span
                                                          class="text-semibold">دیدگاه جدید</span>
                                                    <span
                                                        class="media-annotation pull-right">{{$notification->created_at->format('H:i')}}</span>
                                                </a>
                                                <span class="text-muted">{{$notification->data['data']}}</span>
                                            @else
                                                <a href="{{url('/charity-dashboard')}}" class="media-heading">
                                            <span
                                                class="text-semibold">{{$notification->data['firstName']}} {{$notification->data['lastName']}}({{$notification->data['userName']}})</span>
                                                    <span
                                                        class="media-annotation pull-right">{{$notification->created_at->format('H:i')}}</span>
                                                </a>

                                                <span
                                                    class="text-muted">who knows, maybe that would be the best thing for me...{{$notification->data['data']}}</span>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            @endforeach
                                @foreach(Auth::guard('charity')->user()->readNotifications->chunk(10) as $notifications)
                                    @foreach($notifications as $notification)
                                        <li class="media">
                                            <div class="media-left">
                                                <img src="{{asset('images/placeholder.jpg')}}" class="img-circle img-sm"
                                                     alt="">
                                                {{--<span class="badge bg-danger-400 media-badge">5</span>--}}
                                            </div>

                                            <div class="media-body">
                                                @if($notification->type=='App\Notifications\CommentNotification')
                                                    <a href="{{url('/project-more-info/'.$notification->data['id'])}}"
                                                       class="media-heading">
                                                      <span
                                                          class="text-semibold">دیدگاه جدید</span>
                                                        <span
                                                            class="media-annotation pull-right">{{$notification->created_at->format('H:i')}}</span>
                                                    </a>
                                                    <span class="text-muted">{{$notification->data['data']}}</span>
                                                @else
                                                    <a href="{{url('/charity-dashboard')}}" class="media-heading">
                                            <span
                                                class="text-semibold">{{$notification->data['firstName']}} {{$notification->data['lastName']}}({{$notification->data['userName']}})</span>
                                                        <span
                                                            class="media-annotation pull-right">{{$notification->created_at->format('H:i')}}</span>
                                                    </a>

                                                    <span
                                                        class="text-muted">who knows, maybe that would be the best thing for me...{{$notification->data['data']}}</span>
                                                @endif
                                            </div>
                                        </li>
                                    @endforeach
                                @endforeach
                        @endauth

                        @auth('volunteer')
                            @foreach(Auth::guard('volunteer')->user()->unreadNotifications->chunk(10) as $notifications)
                                @foreach($notifications as $notification)
                                    <li class="media notification-body" style="background-color: #ebebeb">
                                        <div class="media-left">
                                            <img src="{{asset('images/placeholder.jpg')}}" class="img-circle img-sm"
                                                 alt="">
                                            <span class="badge bg-danger-400 media-badge">5</span>
                                        </div>

                                        <div class="media-body">

                                            @if($notification->type=='App\Notifications\CommentNotification')
                                                <a href="{{url('/project-more-info/'.$notification->data['id'])}}"
                                                   class="media-heading">
                                                      <span
                                                          class="text-semibold">دیدگاه جدید</span>
                                                    <span
                                                        class="media-annotation pull-right">{{$notification->created_at->format('H:i')}}</span>
                                                </a>
                                                <span class="text-muted">{{$notification->data['data']}}</span>
                                            @else
                                                {{--<a href="{{url('/volunteer-dashboard')}}" class="media-heading">--}}
                                                <a href="{{url('/volunteer-dashboard')}}" class="media-heading">
                                                            <span
                                                                class="text-semibold">{{$notification->data['title']}}</span>
                                                    <span
                                                        class="media-annotation pull-right">{{$notification->created_at->format('H:i')}}</span>
                                                </a>

                                                <span class="text-muted">{{$notification->data['data']}}</span>
                                            @endif
                                            {{--<a href="{{url('/volunteer-dashboard')}}" class="media-heading">--}}
                                            {{--<span--}}
                                            {{--class="text-semibold">{{$notification->data['title']}}</span>--}}
                                            {{--<span--}}
                                            {{--class="media-annotation pull-right">{{$notification->created_at->format('H:i')}}</span>--}}
                                            {{--</a>--}}

                                            {{--<span class="text-muted">{{$notification->data['data']}}</span>--}}
                                        </div>
                                    </li>
                                @endforeach
                            @endforeach
                                @foreach(Auth::guard('volunteer')->user()->readNotifications->chunk(5) as $notifications)
                                    @foreach($notifications as $notification)
                                        <li class="media notification-body">
                                            <div class="media-left">
                                                <img src="{{asset('images/placeholder.jpg')}}" class="img-circle img-sm"
                                                     alt="">
                                                <span class="badge bg-danger-400 media-badge">5</span>
                                            </div>

                                            <div class="media-body">

                                                @if($notification->type=='App\Notifications\CommentNotification')
                                                    <a href="{{url('/project-more-info/'.$notification->data['id'])}}"
                                                       class="media-heading">
                                                      <span
                                                          class="text-semibold">دیدگاه جدید</span>
                                                        <span
                                                            class="media-annotation pull-right">{{$notification->created_at->format('H:i')}}</span>
                                                    </a>
                                                    <span class="text-muted">{{$notification->data['data']}}</span>
                                                @else
                                                    {{--<a href="{{url('/volunteer-dashboard')}}" class="media-heading">--}}
                                                    <a href="{{url('/volunteer-dashboard')}}" class="media-heading">
                                                            <span
                                                                class="text-semibold">{{$notification->data['title']}}</span>
                                                        <span
                                                            class="media-annotation pull-right">{{$notification->created_at->format('H:i')}}</span>
                                                    </a>

                                                    <span class="text-muted">{{$notification->data['data']}}</span>
                                                @endif
                                                {{--<a href="{{url('/volunteer-dashboard')}}" class="media-heading">--}}
                                                {{--<span--}}
                                                {{--class="text-semibold">{{$notification->data['title']}}</span>--}}
                                                {{--<span--}}
                                                {{--class="media-annotation pull-right">{{$notification->created_at->format('H:i')}}</span>--}}
                                                {{--</a>--}}

                                                {{--<span class="text-muted">{{$notification->data['data']}}</span>--}}
                                            </div>
                                        </li>
                                    @endforeach
                                @endforeach

                            @endauth

                        {{--<li class="media">--}}
                        {{--<div class="media-left">--}}
                        {{--<img src="{{asset('images/placeholder.jpg')}}" class="img-circle img-sm" alt="">--}}
                        {{--<span class="badge bg-danger-400 media-badge">4</span>--}}
                        {{--</div>--}}

                        {{--<div class="media-body">--}}
                        {{--<a href="#" class="media-heading">--}}
                        {{--<span class="text-semibold">Margo Baker</span>--}}
                        {{--<span class="media-annotation pull-right">12:16</span>--}}
                        {{--</a>--}}

                        {{--<span class="text-muted">That was something he was unable to do because...</span>--}}
                        {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="media">--}}
                        {{--<div class="media-left"><img src="{{asset('images/placeholder.jpg')}}"--}}
                        {{--class="img-circle img-sm" alt=""></div>--}}
                        {{--<div class="media-body">--}}
                        {{--<a href="#" class="media-heading">--}}
                        {{--<span class="text-semibold">Jeremy Victorino</span>--}}
                        {{--<span class="media-annotation pull-right">22:48</span>--}}
                        {{--</a>--}}

                        {{--<span class="text-muted">But that would be extremely strained and suspicious...</span>--}}
                        {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="media">--}}
                        {{--<div class="media-left"><img src="{{asset('images/placeholder.jpg')}}"--}}
                        {{--class="img-circle img-sm" alt=""></div>--}}
                        {{--<div class="media-body">--}}
                        {{--<a href="#" class="media-heading">--}}
                        {{--<span class="text-semibold">Beatrix Diaz</span>--}}
                        {{--<span class="media-annotation pull-right">Tue</span>--}}
                        {{--</a>--}}

                        {{--<span class="text-muted">What a strenuous career it is that I've chosen...</span>--}}
                        {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="media">--}}
                        {{--<div class="media-left"><img src="{{asset('images/placeholder.jpg')}}"--}}
                        {{--class="img-circle img-sm" alt=""></div>--}}
                        {{--<div class="media-body">--}}
                        {{--<a href="#" class="media-heading">--}}
                        {{--<span class="text-semibold">Richard Vango</span>--}}
                        {{--<span class="media-annotation pull-right">Mon</span>--}}
                        {{--</a>--}}

                        {{--<span class="text-muted">Other travelling salesmen live a life of luxury...</span>--}}
                        {{--</div>--}}
                        {{--</li>--}}
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="" data-original-title="All messages"><i
                                class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    @yield('profile-image')
                    <span>@yield('user-login')</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    {{--<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>--}}
                    {{--<li><a href="#"><i class="icon-coins"></i> My balance</a></li>--}}
                    {{--<li><a href="#"><span class="badge badge-warning pull-right">58</span> <i--}}
                                {{--class="icon-comment-discussion"></i> Messages</a></li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>--}}
                    @auth('charity')
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                    class="icon-switch2"></i>خروج</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endauth
                    @auth('volunteer')
                        {{--<li>--}}
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                    class="icon-switch2"></i>خروج</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            {{--<a class="dropdown-item" href=""--}}
                            {{--onclick="event.preventDefault();--}}
                            {{--document.getElementById('logout-form').submit();">--}}
                            {{--خروج--}}
                            {{--</a>--}}

                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                            {{--@csrf--}}
                            {{--</form>--}}
                        </li>
                    @endauth

                    {{--===============================================--}}
                    {{--<li class="nav-item dropdown">--}}
                    {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                    {{--</a>--}}

                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                    {{--onclick="event.preventDefault();--}}
                    {{--document.getElementById('logout-form').submit();">--}}
                    {{--{{ __('Logout') }}--}}
                    {{--</a>--}}

                    {{----}}
                    {{--</div>--}}
                    {{--</li>--}}
                    {{--===================================================--}}
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main sidebar-fixed">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left">@yield('profile-image2')</a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">@yield('login-username')</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> &nbsp;{{$city}}, {{$country}}

                                </div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="#"><i class="icon-cog3"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->
                            <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i>
                            </li>
                            <li><a href="@yield('dashboard-address')"><i class="icon-home4"></i>
                                    <span>داشبورد</span></a></li>

                            <li><a href="@yield('info-url')"><i class="icon-list-unordered"></i>
                                    <span>ویرایش اطلاعات</span></a></li>
                            <li><a href="#"><i class=" icon-rocket"></i>
                                    <span>پروژه ها</span></a></li>
                        @yield('requests-url')

                        <!-- /main -->

                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-right6 position-left"></i> <span
                                class="text-semibold">@yield('header-page')</span></h4>
                    </div>

                    <div class="heading-elements">
                        @if(Request::is('charity-dashboard'))
                            <a href="{{route('create-project')}}"
                               class="btn btn-labeled btn-labeled-right bg-blue heading-btn">ایجاد پروژه <b><i
                                        class="icon-menu7"></i></b></a>
                        @endif
                        {{--@if(Request::is('project-more-info'))--}}
                        {{----}}
                        {{--@endif--}}
                        @yield('add-button-requirement')

                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        {{--<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>--}}
                        {{--<li><a href="layout_fixed.html">Starters</a></li>--}}
                        {{--<li class="active">Fixed layout</li>--}}
                    </ul>

                    <ul class="breadcrumb-elements">
                        {{--<li><a href="#"><i class="icon-comment-discussion position-left"></i> Link</a></li>--}}
                        {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="icon-gear position-left"></i>--}}
                        {{--Dropdown--}}
                        {{--<span class="caret"></span>--}}
                        {{--</a>--}}

                        {{--<ul class="dropdown-menu dropdown-menu-right">--}}
                        {{--<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>--}}
                        {{--<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>--}}
                        {{--<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="#"><i class="icon-gear"></i> All settings</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">
                @yield('body-content')
            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->
@stack('js-body')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.notification-link').on('click', function () {
            $.ajax({
                url: '{{route('read-notification')}}',
                method: 'GET',
            })
        });
        $('#notification_dropdown').on('hide.bs.dropdown', function () {
                $('.notification-count').text('0');
                $('.notification-body').css({'background-color': ""})
            }
        );
    })
</script>
</body>
</html>
