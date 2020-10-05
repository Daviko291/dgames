<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ===================================== Meta site ================================================ -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <title>@yield('title')</title> <!-- Titulo dinamico segun la vista -->

    <!-- ====== Laravel description site edit delete from admin panel ================== -->
    <meta name="description" content="{{ Setting()->MetaDescription  }}">
    <!-- ====== Laravel author site edit delete from admin panel ====================== -->
    <meta name="author" content="{{ Setting()->Name  }}">
    <!-- ====== Laravel keywords site edit delete from admin panel ================== -->
    <meta name="keywords" content="{{ Setting()->MetaKeyWords  }}">
    <!-- ====== Laravel robots site edit delete from admin panel ================== -->
    <meta name="robots" content="{{ Setting()->SiteTitle  }}">
    <!-- ====== Laravel favicon icon ================== -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/Favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/Favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/Favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/Favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/Favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/Favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/Favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/Favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/Favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/img/Favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset(Setting()->FaviconOne) }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset(Setting()->FaviconTwo) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset(Setting()->FaviconThree) }}">
    <link rel="manifest" href="{{ asset('assets/img/Savicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- ====== Laravel favicon icon================== -->
    <!-- ====== Laravel title site edit delete from admin panel ================== -->
    @if(isset(Setting()->SiteTitle))
        <title>{{ Setting()->SiteTitle }}</title>
    @else
        <title>Site Title</title>
@endif
<!-- ============================== GOOGLE WEB FONT ========================== -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icons.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ionicons.min.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flickity.min.css') }}" media="all" />
    <!-- FontAwesome -->
    <script defer src="{{ asset('assets/js/all.js') }}"></script>
    <script defer src="{{ asset('assets/js/v4-shims.js') }}"></script>
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/photoswipe.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/default-skin.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-slider.min.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/xgame.css') }}" media="all" />
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    @yield('styles') <!-- Seccion de estilos de la vista -->

    @livewireStyles

</head>
<body>
<header class="xg-header xg-header-opaque">
    <nav class="xg-navbar xg-navbar-top xg-navbar-sticky xg-navbar-autohide">
        <div class="container">
            <div class="xg-nav-table">
                <a href="{{ url('/') }}" class="xg-nav-logo">
                    <img src="{{ asset(Setting()->LogoPicture) }}" alt="XGames" width="199">
                </a>
                <ul class="xg-nav xg-nav-right d-none d-lg-table-cell" data-nav-mobile="#xg-nav-mobile">
                    @foreach(Menus() as $Menu)
                        <li><a href="{{ $Menu->url }}" target="{{ $Menu->target }}">{{ $Menu->title }}</a></li>
                    @endforeach
                <!-- =============================== BASE ======================================== -->
                    @guest
                        <a href="{{ route('login') }}" class="xg-btn xg-btn-color-main-1"><i class="icon-feather-log-in"></i> {{ __('Login') }}</a>
                        <a href="{{ route('register') }}" class="xg-btn xg-btn-color-main-1"><i class="icon-feather-user"></i> Sign up</a>
                    @else
                    <!-- =============================== BASE ======================================== -->
                        @if(Auth::user()->role_id == '1')
                        <!-- =============================== BASE ======================================== -->
                            <a href="{{ url('admin') }}"  target="_blank" class="xg-btn xg-btn-color-main-1"><i class="icon-material-outline-dashboard"></i> Dashboard</a>
                            <!-- =============================== BASE ======================================== -->
                        @endif
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="xg-btn xg-btn-color-main-1"><i class="icon-feather-log-out"></i> {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <!-- =============================== BASE ======================================== -->
                    @endguest
                </ul>
                <ul class="xg-nav xg-nav-right xg-nav-icons">
                    <li class="single-icon d-lg-none">
                        <a href="#" class="no-link-effect" data-nav-toggle="#xg-nav-mobile">
                                <span class="xg-icon-burger">
                                    <span class="xg-t-1"></span>
                                    <span class="xg-t-2"></span>
                                    <span class="xg-t-3"></span>
                                </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->
</header>
<div id="xg-nav-mobile" class="xg-navbar xg-navbar-side xg-navbar-right-side xg-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="{{ url('/') }}" class="xg-nav-logo">
                <img src="{{ asset(Setting()->LogoPicture) }}" alt="XGames" width="120">
            </a>
            <div class="xg-navbar-mobile-content">
                <ul class="xg-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#xg-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!--=============================================================== End Header Area ===================-->
@yield('content')
<!--=============================================================== start footer Area =================-->
<footer class="xg-footer">

    <div class="container">
        <div class="xg-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">
                <div class="xg-widget">
                    <h4 class="xg-widget-title"><span class="text-main-1">
                        <a href="{{ url('/') }}" class="xg-nav-logo">
                            <img src="{{ asset(Setting()->LogoPicture) }}" alt="XGames" width="150">
                        </a>
                    </h4>
                    <div class="xg-widget-content">
                        <p>{{ Setting()->Home_en }}</p>
                        <a href="{{ url('English') }}" title="english"><img src="{{ asset('assets/images/english.png') }}"/></a>
                        <a href="{{ url('German') }}" title="german"><img src="{{ asset('assets/images/german.png') }}"/></a>
                        <a href="{{ url('arabic') }}" title="arabic"><img src="{{ asset('assets/images/arabic.png') }}"/></a>
                        <!-- =============================== BASE media ======================================== -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="xg-widget">
                    <h4 class="xg-widget-title"><span class="text-main-1">Features</span> Games</h4>
                    <div class="xg-widget-content">
                        <div class="row vertical-gap sm-gap">
                            @foreach(FeaturedPosts() as $FeaturedPost)
                                <div class="col-lg-3 col-xs-6">
                                    <div class="xg-widget-post-2">
                                        <a href="{{ url('Games') }}/{{ $FeaturedPost->slug }}" class="xg-post-image" style="width: 120px">
                                            <img src="{{ asset($FeaturedPost->image) }}" style="width: 100%">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="xg-gap-3"></div>
    </div>

    <div class="xg-copyright">
        <div class="container">
            <div class="xg-copyright-left">
                Copyright &copy; All rights reserved <a href="{{ url('/') }}" target="_blank">{{ Setting()->SiteTitle }}</a>
            </div>
            <div class="xg-copyright-right">
                <ul class="xg-social-Links-2">
                    <li><a class="xg-social-facebook" href="{{ Setting()->Facebook }}"><span class="fab fa-facebook"></span></a></li>
                    <li><a class="xg-social-twitter" href="{{ Setting()->Twitter }}" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li><a class="xg-social-google-plus" href="{{ Setting()->GitHub }}" target="_blank"><span class="fab fa-github"></span></a></li>
                    <li><a class="xg-social-rss" href="{{ Setting()->Slack }}" target="_blank"><span class="fab fa-slack"></span></a></li>
                    <li><a class="xg-social-twitch" href="{{ Setting()->Dribbble }}"><span class="fab fa-twitch"></span></a></li>
                    <li><a class="xg-social-steam" href="{{ Setting()->linkedIn }}"><span class="fab fa-steam"></span></a></li>
                    <li><a class="xg-social-pinterest" href="{{ Setting()->Behance }}"><span class="fab fa-pinterest-p"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->
</div>
<!-- START: Page Background -->
<img class="xg-page-background-top" src="{{ asset(Setting()->HomePicture) }}" alt="background">
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/photoswipe.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/photoswipe-ui-default.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.nanoscroller.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-slider.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/summernote-bs4.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/xgame.js') }}"></script>
<!-- =============================== javascript ================ -->

@livewireScripts

</body>
</html>
