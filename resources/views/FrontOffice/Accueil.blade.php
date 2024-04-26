<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <!-- Standard Meta -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SeventhQueen" />
{{-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> --}}
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/less/base.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/less/header.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/less/theme.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/style.css') }}">
<link rel="icon" href="{{ asset('assets/images/ico/favicon.ico') }}">

<script src="{{ asset('assets/library/modernizr-custom.js') }}"></script>

    <title>Homepage</title>

</head>
<body class="no-transition">
<div id="page-wrapper">

        <!--

Default Header with a White Background & Dark text.

-->

<!--DEFAULT HEADER-->

<header class="header-section ths header-shadow equal-tablet-header-items equal-mobile-header-items header-sticky header-slide-up header-transparent is-transparent header-fullwidth">
    <div class="header-content">

        <div class="ui container grid">
            <div class="header-item header-left flex-order-tablet-second flex-order-mobile-second flex-grow-tablet-true flex-grow-mobile-true">

<a class="logo item" href="homepage.html">

	<img src="{{ asset('assets/images/betuli.png') }}" srcset="{{ asset('assets/images/betuli.png 2x') }}" alt="mytent logo" class="logo-transparent">

	<img src="{{ asset('assets/images/betuli.png') }}" srcset="{{ asset('assets/images/betuli.png 1x, assets/images/betuli.png 2x') }}" alt="mytent logo">

</a>



            </div>

            <div class="header-item header-center flex-align-left flex-order-tablet-first flex-order-mobile-first flex-grow-large-desktop-true flex-grow-desktop-true flex-grow-tablet-false flex-grow-mobile-false">

            </div>

            <div class="header-item header-right flex-order-tablet-third flex-order-mobile-third flex-shrink-true flex-align-right">

                <!-- Sidemenu Trigger -->
                <a class="sidemenu-trigger close-sq hamburger hamburger-spin item hidden-desktop hidden-large-desktop" data-trigger-for="menu01">

                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                </a>

                <!-- Include Menu -->

<!-- Header Menu-->

    <div class="item menu-default burger-mobile-sidemenu burger-tablet-sidemenu sidemenu-open-right icons-left profile-priority slide-out-sq dimmed flexMenu dropdown-open-right" data-burger="menu01">

        <ul class="main-menu">

            <li><a href="{{ route('chambre.liste') }}" class="item ">
                <span>Voir nos chambres</span>
                </a>
            </li>
        </ul>
    </div>

<!-- End of Header Menu-->

            </div>
        </div>

    </div>
</header>

    <!-- Hero Full Page -->
    <div class="hero-search-full-page next-sq">

       <!-- Hero Search -->
       <!-- .thin .animate .shadow .colored -->
       <div class="h-search-h animate-sq thin-sq colored-sq">
            <form action="{{ route('chambListing') }}" method="POST" class="hero-search-form">
                {!! csrf_field() !!}

                <div class="search-item">
                    <div class="fltp calendar-sq" id="rangestart">
                            <input type="text" name="debut" class="filter" value="" required placeholder="enter date">
                            <label class="placeholder"  data-big-placeholder="Arrivé" data-little-placeholder="Start"></label>
                    </div>

                    <i class="icon icon-little-arrow"></i>

                    <div class="fltp calendar-sq" id="rangeend">
                        <input type="text" name="fin" class="filter" value="" required placeholder="enter date">
                        <label class="placeholder"  data-big-placeholder="Départ" data-little-placeholder="End"></label>
                    </div>
                </div>

                <div class="search-item">
                    <div class="fltp">
                        <select name="dropdown" size="13" class="dropdown" required>
                            <option value="0" selected>invité(s)</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <label class="placeholder">invité(s)</label>
                    </div>
                </div>

                <div class="search-item">
                    <button class="button-sq hero-search-button">
                        <i class="icon icon-search"></i>
                    </button>
                </div>

            </form>
        </div>

       <!-- Hero Big - Slick -->
       <div class="sq-slick hero-big slide-up-sq" data-mobile-arrows="false" data-tablet-arrows="false" data-mobile-dots="true" data-tablet-dots="true" data-fade="true" data-speed="500" data-ease="linear">
            <!-- .slide-up .fade .top .bottom -->

            <!--Slide 01-->
            <div>
                <div class="caption-content">
                   <h1 class="font-weight-bold-sq">Hôtel Bethuli</h1>
                </div>

			   <div class="caption-outside">
                    <a class="button anchor-sq" href="#top">
                        <i class="icon big icon-compass"></i>
                        <span>start</span>
                    </a>
                </div>

                <div class="image-wrapper">
                    <div class="image-inner">
                        <img class="image-sq" src="assets/images/hero/hero_big_02.jpg" alt="">
                    </div>
                </div>
            </div>

            <!--Slide 02-->
            <div>
                <div class="caption-content">
                   <h1 class="font-weight-bold-sq">Agreable sejour au Cameroun</h1>
                </div>

                <div class="caption-outside">
                    <a class="button anchor-sq" href="#top">
                        <i class="icon big icon-compass"></i>
                        <span>start</span>
                    </a>
                </div>

                <div class="image-wrapper">
                    <div class="image-inner">
                        <img class="image-sq" src="assets/images/hero/hero_big_01.jpg" alt="">
                    </div>
                </div>
            </div>

            <!--Slide 03-->
            <div>
                <div class="caption-content">
                   <h1 class="font-weight-bold-sq">Profité de la diversité culturel made in 237</h1>
                </div>

                <div class="caption-outside">
                    <a class="button anchor-sq" href="#top">
                        <i class="icon big icon-compass"></i>
                        <span>start</span>
                    </a>
                </div>

                <div class="image-wrapper">
                    <div class="image-inner">
                        <img class="image-sq" src="{{ asset('assets/images/hero/hero_big_03.jpg') }}" alt="">
                    </div>
                </div>
            </div>

            <!--Slide 04-->
            <div>
                <div class="caption-content">
                   <h1 class="font-weight-bold-sq">Profité de vos vacances</h1>
                </div>
                <div class="caption-outside">
                    <a class="button anchor-sq" href="#top">
                        <i class="icon big icon-compass"></i>
                        <span>start</span>
                    </a>
                </div>

                <div class="image-wrapper">
                    <div class="image-inner">
                        <img class="image-sq" src="{{ asset('assets/images/hero/hero_big_04.jpg') }}" alt="">
                    </div>
                </div>
            </div>

          </div>

    </div>

    <div class="ui layout" id="top">
        <div class="ui grid container">

            <div class="row">
                <div class="ui column">

					<div class="typo-section-sq">
						<div class="typo-section-header-sq">
                    		<h2 class="text-align-center-sq">Chambres populaires</h2>
                    		<p class="heading-inline text-align-center-sq">
								<i class="icon icon-slim-arrow-left sq-prev-button"></i>
								<span>Trouver les chambres les plus aimées par nos clients.</span>
								<i class="icon icon-slim-arrow-right sq-next-button"></i>
							</p>

                    	</div>
					</div>

                </div>
            </div>

            <div class="row">

              <div class="sq-slick article-sq-slick fullwidth-sq arrows-top-sq" data-arrows="false" data-center-mode="true" data-center-padding="0px" data-desktop-center-padding="0px" data-show-slides="3" data-scroll-slides="3" data-tablet-show-slides="2" data-tablet-scroll-slides="2" data-mobile-show-slides="1" data-mobile-scroll-slides="1" data-tablet-center-padding="0px" data-mobile-center-padding="50px">

                @foreach ( $chambres as $chambre )

                        <!-- Slide 04-->
                        <div>
                        <div class="property-item">
                            <div class="property-item-inner">

                            <div class="price-tag-sq">{{ $chambre->PRIX }} XAF <span>/ nuit</span></div>
                            <a class="add-wishlist modal-ui-trigger" href="{{ route('chambresDetaile',  $chambre->ID_CHAMBRE ) }}" data-trigger-for="wishlist">
                                <i class="icon icon-add-wishlist"></i>
                            </a>

                                <a class="image-sq" href="{{ route('chambresDetaile',  $chambre->ID_CHAMBRE ) }}">
                                    <span class="image-wrapper">
                                        <span class="image-inner">
                                            <img src="/storage/{{ $chambre->IMAGE }}" alt="" class="">
                                        </span>
                                    </span>
                                </a>


                                <div class="main-details">
                                <div class="title-row">
                                    <a href="{{ route('chambresDetaile',  $chambre->ID_CHAMBRE ) }}" class="title-sq">{{ $chambre->NOM_CHAMBRE }}</a>
                                    <a href="{{ route('chambresDetaile',  $chambre->ID_CHAMBRE ) }}" class="avatar-sq">

                                    </a>
                                </div>

                                <div class="icons-row">
                                    <div class="icons-column">
                                        <i class="icon icon-account-group-5"></i> x {{ $chambre->NOMBRE_LITS }}
                                    </div>
                                    <div class="icons-column">
                                        <i class="icon icon-bed-double"></i> x {{ $chambre->NOMBRE_LITS }}
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                        </div>
                @endforeach
				</div>

              <div class="ui twelve wide mobile twelve wide tablet twelve wide computer twelve wide large screen twelve wide widescreen column">
					<div class="typo-section-sq bottom-big">
						<a href="{{ route('listesChambres') }}" class="more-trigger" data-more="voir toutes les chambres">
						   <i class="icon icon-arrow-down-122"></i>
						</a>
					</div>
			  </div>

            </div>

        </div>


        <div class="promo-section">

           <!-- content -->
            <div class="ui container grid centered">
                <div class="row">
                    <div class="ui twelve wide mobile ten wide tablet eight wide computer six wide large screen six wide widescreen column">
                        <div class="promo-content style-02">

                            <h2>Beautiful Experiences</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. Donec non quam vitae justo mattis vestibulum a nec nisi. Morbi mi felis, ultrices vitae risus consectetur, porta ultrices sapie.</p>

                        </div>

                    </div>
                </div>
            </div>

            <!-- picture -->
            <div class="image-wrapper">
                <div class="image-inner">
                    <img class="image-sq" src="{{ asset('assets/images/promo_section/promo_section_02.jpg') }}" alt="">
                </div>
            </div>
        </div>

        <div class="ui grid container">
            <div class="row">





            </div>
        </div>


       <div class="ui grid container">
       		<div class="row">



       		</div>
       </div>

    </div>

    <!-- Modals -->

    <!-- Sign Up -->
    <div class="ui full modal" data-for="modal01">
        <div class="modal-full-background">
            <img src="{{ asset('assets/images/modal/modal_background_001.jpg') }}" alt="">
        </div>

        <i class="icon icon-close close-modal"></i>

        <div class="header center">
            Sign Up Now
        </div>

        <div class="content">
            <a href="" class="button-sq fullwidth-sq modal-ui-trigger" data-trigger-for="modal03">
                <i class="icon icon-email-2"></i>
                <span>Sign Up with Email</span>
            </a>

            <a href="" class="button-sq fullwidth-sq facebook-button">
                <i class="icon icon-logo-facebook2"></i>
                <span>Sign Up with Facebook</span>
            </a>

            <a href="" class="button-sq fullwidth-sq google-button">
                <img src="assets/images/icon-google-plus.svg" alt="">
                <span>Sign Up with Google</span>
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>
        </div>

        <div class="actions">
            <div class="border-container">
                <div class="button-sq link-sq modal-ui-trigger" data-trigger-for="modal02">Already a member?</div>

                <div class="button-sq link-sq login-sq modal-ui-trigger" data-trigger-for="modal02">
                    Log In
                    <i class="icon icon-person-lock-2"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Log In -->
    <div class="ui full modal" data-for="modal02">
        <div class="modal-full-background">
            <img src="{{ asset('assets/images/modal/modal_background_001.jpg') }}" alt="">
        </div>

        <i class="icon icon-close close-modal"></i>

        <div class="header center">
            Log In
        </div>

        <div class="content">
            <form action="/ListeDesChambres">
                @method('post')
                {!! csrf_field() !!}
            <div class="div-c">
                <div class="divided-column">
                    <input type="text" placeholder="E-mail Adress">
                </div>
                <div class="divided-column">
                    <input type="text" placeholder="Password">
                </div>
            </div>

            <div >
                <button class="button-sq fullwidth-sq" type="submit">Sign Up</button>
            </div>
        </form>
        </div>

    </div>

    <!-- Sign Up with mail -->
    <div class="ui full modal" data-for="modal03">
        <div class="modal-full-background">
            <img src="{{ asset('assets/images/modal/modal_background_001.jpg') }}" alt="">
        </div>

        <i class="icon icon-close close-modal"></i>

        <div class="header center">
            Sign Up Now
        </div>

        <div class="content">

           <div class="div-c inline-2">
                <div class="divided-column">
                   <input type="text" placeholder="First Name">
                </div>
                <div class="divided-column">
                   <input type="text" placeholder="Last Name">
                </div>
            </div>

            <div class="div-c">
                <div class="divided-column">
                    <input type="text" placeholder="E-mail Adress">
                </div>
                <div class="divided-column">
                    <input type="text" placeholder="Password">
                </div>
            </div>

            <div class="div-c inline-3 one-label">
                <label>Birthday</label>
                <div class="divided-column">
                    <select name="dropdown"  class="dropdown">
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">...</option>
                    </select>
                </div>
                <div class="divided-column">
                    <select name="dropdown"  class="dropdown">
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">...</option>
                    </select>
                </div>
                <div class="divided-column">
                    <select name="dropdown"  class="dropdown">
                        <option value="1">1985</option>
                        <option value="2">1986</option>
                        <option value="3">1987</option>
                        <option value="4">1988</option>
                        <option value="5">1989</option>
                        <option value="6">...</option>
                    </select>
                </div>
            </div>

            <div class="button-sq fullwidth-sq">Sign Up</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

        </div>

        <div class="actions">
            <div class="border-container">
                <div class="button-sq link-sq"></div>

                <div class="button-sq link-sq login-sq modal-ui-trigger" data-trigger-for="modal01">
                    Log In
                    <i class="icon icon-person-lock-2"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Wishlist -->
    <div class="ui modal small" data-for="wishlist">
        <i class="icon icon-close close-modal"></i>

        <div class="header center">
            <h3>Wishlist</h3>
        </div>

        <div class="content">
            <p>Mauris malesuada leo libero, vitae tempor ante sagittis vitae. Suspendisse consectetur facilisis enim.</p>
            <br>
            <input type="checkbox" id="c01">
            <label for="c01">Beautiful Places</label>
            <input type="checkbox" id="c02">
            <label for="c02">For Summer</label>
            <input type="checkbox" id="c03">
            <label for="c03">Dream Houses</label>
        </div>

        <div class="actions">
            <div class="div-c inline-2">
                <div class="divided-column">
                	<div class="button-sq cancel-sq fullwidth-sq">Cancel</div>
                </div>

                <div class="divided-column">
                    <div class="button-sq fullwidth-sq">OK</div>
                </div>
            </div>

        </div>
    </div>



    <!--FOOTER-->
<div id="footer">

   <div class="footer-top">

       <div class="ui grid container">
           <div class="row">
               <div class="ui six wide tablet four wide computer column">
                   <h5>Hosting</h5>

                   <ul class="list-default-sq">
                       <li><a href="">Etiam consequat</a></li>
                       <li><a href="">Phasellus sed neque </a></li>
                       <li><a href="">Morbi suscipit convallis</a></li>
                       <li><a href="">Praesent diam</a></li>
                   </ul>

               </div>
               <div class="ui six wide tablet four wide computer column">
                   <h5>Useful Links</h5>

                   <ul class="list-default-sq">
                       <li><a href="">Aenean sit amet ipsum</a></li>
                       <li><a href="">Sed mollis</a></li>
                       <li><a href="">Aliquam porttitor</a></li>
                       <li><a href="">Nulla vitae</a></li>
                   </ul>
               </div>
               <div class="ui twelve wide tablet four wide computer column">
                   <h5>Title</h5>

                   <p><em>In hac habitasse platea dictumst. Integer quis tortor enim. Integer et elit nec magna ultricies convallis. In venenatis eu erat et facilisis. Vestibulum congue enim nisl. Fusce arcu enim, porta a auctor vel, hendrerit a libero. Vivamus vel dapibus sem.</em></p>
               </div>
           </div>
       </div>


   </div>

   <div class="footer-bottom">
       <div class="ui grid container">
           <div class="row">
               <div class="ui twelve wide mobile eight wide computer column">
                   <a href="" class="footer-logo">
                       <img src="{{ asset('assets/images/logo-mytent-transparent.png') }}" srcset="{{ asset('assets/images/logo-mytent-transparent.png 1x, assets/images/logo-mytent-transparent@2x.png 2x" alt="mytent logo') }}" >
                       © SeventhQueen 2018                   </a>
               </div>
               <div class="ui twelve wide mobile four wide computer column">
                   <ul class="social-links-sq list-style-inline-sq list-default-sq">
                        <li><a href="" class="fb"><i class="icon icon-logo-facebook2"></i></a></li>

                        <li><a href="" class="tw"><i class="icon icon-logo-twitter-bird2"></i></a></li>

                        <li><a href="" class="gp"><i class="icon icon-logo-circle-google-plus-22"></i></a></li>
                    </ul>
               </div>
           </div>
       </div>
   </div>

</div>


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
<script src="{{ asset('assets/library/sidebar.js') }}"></script>

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
