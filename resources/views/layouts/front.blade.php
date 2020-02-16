<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="telephone=no" name="format-detection">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')

    <div class="fixedNavBut" id="fixed_nav_but" style="display:block;">
        <div class="navMoreBut_1">
            <i class="i-1"></i>
            <i class="i-2"></i>
            <i class="i-3"></i>
            <b class="b-1"></b>
            <b class="b-2"></b>
            <b class="b-3"></b>
        </div>
    </div>
    <div id="NMore" class="NMore_1002">
        <div class="moreSetup">
            <ul>
                @foreach($menu as $menuVal)
                    @if($menuVal['menus'])
                        <li class="hover_icon">
                            <a id="foot_index_link" href="{{ url("front/index?a={$menuVal['index']}") }}">
                                <span class="altIcon {{$menuVal['icon']}}" ></span>
                                <span>{{$menuVal['title']}}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <!-- 右侧菜单 -->
    <div class="Nzz" id="Nzz"></div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/jquery-1.7.1.min.js') }}"></script>
    <script src="{{ asset('js/semp.js') }}"></script>
</body>
</html>
