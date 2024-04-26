<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <!-- Standard Meta -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SeventhQueen" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/less/base.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/less/header.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/less/theme.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/style.css') }}">
<link rel="icon" href="{{ asset('assets/images/ico/favicon.ico') }}">

<script src="{{ asset('assets/library/modernizr-custom.js') }}"></script>

    <title>Checkout Page</title>

</head>
<body class="44">
<div id="page-wrapper"> <!-- for background color & freeze on sidemenu visible -->

        <!--DEFAULT HEADER-->

<header class="header-section ths header-shadow equal-tablet-header-items equal-mobile-header-items header-sticky header-slide-up">
    <div class="header-content">

        <div class="ui container grid">
            <div class="header-item header-left flex-order-tablet-second flex-order-mobile-second flex-grow-tablet-true flex-grow-mobile-true">

<a class="logo item" href="homepage.html">

	<img src="{{ asset('assets/images/betuli.png') }}" srcset="{{ asset('assets/images/betuli.png 2x') }}" alt="mytent logo" class="logo-transparent">

	<img src="{{ asset('assets/images/betuli.png') }}" srcset="{{ asset('assets/images/betuli.png 1x, assets/images/betuli.png 2x') }}" alt="mytent logo">

</a>



 </div>

            <div class="header-item header-center flex-align-left flex-order-tablet-first flex-order-mobile-first flex-grow-large-desktop-true flex-grow-desktop-true flex-grow-tablet-false flex-grow-mobile-false">

                <!-- Search Floating Placeholder -->
                <div class="fltp item search-sq">
                    <i class="icon icon-search"></i>

                    <input id="search" type="text" value="" required>
                    <label class="placeholder" data-big-placeholder="Search" data-little-placeholder="Where to go?"></label>
                </div>

            </div>

            <div class="header-item header-right flex-order-tablet-third flex-order-mobile-third flex-shrink-true flex-align-right">

                <!-- Sidemenu Trigger -->
                <a class="sidemenu-trigger close-sq hamburger hamburger-spin item hidden-desktop hidden-large-desktop" data-trigger-for="menu01">

                    <!--
                       hamburger-3dx
                       hamburger-3dx-r
                       hamburger-arrow
                       hamburger-arrow-r
                       hamburger-arrow-alt
                       hamburger-arrow-alt-r
                       hamburger-collapse
                       hamburger-collapse-r
                       hamburger-elastic
                       hamburger-elastic-r
                       hamburger-emphatic
                       hamburger-emphatic-r
                       hamburger-slider
                       hamburger-slider-r
                       hamburger-spring
                       hamburger-spring-r
                       hamburger-stand
                       hamburger-stand-r
                       hamburger-spin
                       hamburger-spin-r
                       hamburger-squeeze
                       hamburger-vortex
                       hamburger-vortex-r
                    -->

                    <!--<i class="icon icon-navigation-show-more-22"></i>-->
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                </a>

                <!-- Include Menu -->
                <!-- Header Menu-->

    <div class="item menu-default burger-mobile-sidemenu burger-tablet-sidemenu sidemenu-open-right icons-left profile-priority slide-out-sq dimmed flexMenu dropdown-open-right" data-burger="menu01">

    </div>

<!-- End of Header Menu-->

            </div>
        </div>

    </div>
</header>

    @yield('page-content')

</div><!--end #page-wrapper-->
<script src="{{ asset('assets/library/jquery-2.2.0.min.js') }}"></script>
<script src="{{ asset('assets/library/flexmenu.js') }}"></script>
<script src="{{ asset('assets/library/nouislider.min.js') }}"></script>

<script src="{{ asset('assets/library/wNumb.js') }}"></script>

<script src="{{ asset('assets/library/jrespond.min.js') }}"></script>
<script src="{{ asset('assets/library/scrollspy.min.js') }}"></script>

<script src="{{ asset('assets/library/visibility.js') }}"></script>

<script src="{{ asset('assets/library/accordion.js') }}"></script>
<script src="{{ asset('assets/library/dropdown-custom.js') }}"></script>
<script src="{{ asset('assets/library/sticky.js') }}"></script>

<script src="{{ asset('assets/library/page-transition.js') }}"></script>
<script src="{{ asset('assets/library/checkbox.js') }}"></script>
<script src="{{ asset('assets/library/transition.js') }}"></script>
<script src="a{{ asset('ssets/library/sidebar.js') }}"></script>

<script src="{{ asset('assets/library/modal.js') }}"></script>
<script src="{{ asset('assets/library/dimmer.js') }}"></script>

<!-- Datepicker -->
<script src="{{ asset('assets/library/popup.js') }}"></script>
<script src="{{ asset('assets/library/calendar.js') }}"></script>

<!-- Slick -->
<script src="{{ asset('assets/library/slick.js') }}"></script>

<script src="{{ asset('assets/library/header.js') }}"></script>
<script src="{{ asset('assets/library/functions.js') }}"></script>

</body>

</html>
