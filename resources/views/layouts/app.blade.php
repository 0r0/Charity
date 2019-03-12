<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
@if(Request::is('login/charity'))
    <title>ورود کاربر خیریه</title>
    @elseif(Request::is('register/charity'))
        <title>ثبت نام کاربر خیریه</title>

@elseif(Request::is('login/volunteer'))
        <title>ورود کاربر داوطلب</title>

@elseif(Request::is('register/volunteer'))
        <title>ثبت نام کاربر داوطلب</title>

@endif
    <!-- Scripts -->
    <script src="{{ asset('js/app_theme.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{--{{ config('app.name', 'Laravel') }}--}}
                    صفحه اصلی
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if(Request::is('register/charity'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('login/charity') }}">ورود</a>
                            </li>
                            @elseif(Request::is('register/volunteer'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('login/volunteer') }}">ورود</a>
                                </li>
                                @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    @if(Request::is('login/charity'))
                                        <a class="nav-link" href="{{ url('/register/charity') }}">ثبت نام</a>
                                        @elseif(Request::is('login/volunteer'))
                                        <a class="nav-link" href="{{ url('/register/volunteer') }}">ثبت نام</a>

                                        @endif

                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
