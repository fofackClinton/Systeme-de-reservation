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
<body class="no-transition">
<div id="page-wrapper"> <!-- for background color & freeze on sidemenu visible -->

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



        <!-- End of Header Menu-->

            </div>
        </div>

    </div>
</header>











    <div class="ui layout">

    </div>

    <div class="ui grid container centered">
       <div class="row">
        <div class="ui ten wide computer twelve wide mobile column">

				   <div class="typo-section-sq top-default bottom-default">
						<h2>Reservation</h2>
				   </div>
                   <form action="{{ route('chambReserver') }}" method="post">
                    {!! csrf_field() !!}
				   <div class="white-section">
					   <h5>Information personnel </h5>

						<div class="div-c inline-2">
							<div class="divided-column">
								<label>Nom</label>
								<input name="nom" type="text" required placeholder="">
                                <input type="hidden" value="{{ $dateDebut }}" name="dateDebut">
                                <input type="hidden" value="{{ $dateFin }}" name="dateFin">
                                <input type="hidden" value="{{ $prix }}" name="prix">
                                <input type="hidden" value="{{ $durer }}" name="durer">
                                <input type="hidden" value="{{ $chambre->ID_CHAMBRE }}" name="chambre">
							</div>

							<div class="divided-column">
								<label>prenom</label>
								<input name="prenom" type="text" required placeholder=" ">
							</div>
						</div>

						<div class="div-c inline-2">
							<div class="divided-column">
								<label>E-mail</label>
								<input type="email" name="email" placeholder=" ">
							</div>

							<div class="divided-column">
								<label>Num de téléphone</label>
								<input type="number" name="tel" required placeholder=" ">
							</div>
						</div>

						<div class="div-c">
							<label>Num de piece d'identité</label>
							<input required type="text" name="cni" placeholder=" ">
						</div>

				   </div>
                        <div class="white-section">
                            <div class="ui grid stackable">
                                <div class="row">
                                    <div class="ui six wide computer column">
                                        <h5>Products</h5>

                                        <div class="product-payment-item">

                                            <div class="product-details">
                                                <img class="product-image" src="/storage/{{ $chambre->IMAGE }}" alt="">

                                                <p class="product-title">
                                                   Chambre {{ $chambre->NOM_CHAMBRE }}
                                                </p>
                                            </div>

                                            <div class="product-dates">
                                                <p class="product-from">
                                                    <span>Du:</span>{{ \Carbon\Carbon::parse($dateDebut)->translatedFormat('d F Y ') }}
                                                </p>
                                                <p class="product-to">
                                                    <span>Au:</span>{{ \Carbon\Carbon::parse($dateFin)->translatedFormat('d F Y ') }}
                                                </p>

                                            </div>

                                            <div class="product-extra">
                                                <div class="extra-row">
                                                    <p class="extra-title">Prix de la chambre par nuit</p>
                                                    <p class="extra-price">
                                                        {{ $chambre->PRIX }} XAF
                                                    </p>
                                                </div>
                                                <div class="extra-row">
                                                    <p class="extra-title ">Nombre de jours</p>
                                                    <p class="extra-price">
                                                        {{ $durer }} Jours
                                                    </p>
                                                </div>
                                                <div class="extra-row">
                                                    <p class="extra-title ">Prix total</p>
                                                    <p class="extra-price">
                                                    {{ $prix / 0.3 }} XAF
                                                    </p>
                                                </div>
                                                <div class="extra-row link-sq">
                                                    <p class="extra-title ">Frais de réservation</p>
                                                    <p class="extra-price">
                                                    30 % du prix total
                                                    </p>
                                                    </div>

                                                <div class="extra-row total-sq">
                                                    <p class="extra-title">Total</p>
                                                    <p class="extra-price">
                                                        {{ $prix }} XAF
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                    </div>

                                    <div class="ui six wide computer column">
                                        <h5>Payment Methods</h5>

                                            <div class="div-c payment-methods">

                                                <div class="divided-column">
                                                    <input type="radio" required id="radio2" name="radio-group-01">
                                                    <label for="radio2">Credit Card
                                                        <img src="{{ asset('assets/images/credit_card_image.jpg') }}" alt="">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class='form-row'>
                                                <div class='col-xs-4 form-group cvc'>
                                                    <label class='control-label'>CVC</label>
                                                    <input autocomplete='off' required class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' name="cvc">
                                                </div>
                                                <div class='col-xs-4 form-group expiration'>
                                                    <label class='control-label'>Expiration</label>
                                                    <input required class='form-control card-expiry-month' placeholder='MM' size='2' type='text' name="expiration_month">
                                                </div>
                                                <div class='col-xs-4 form-group expiration'>
                                                    <label  class='control-label'> </label>
                                                    <input class='form-control card-expiry-year' required placeholder='AAAA' size='4' type='text' name="expiration_year">
                                                </div>
                                            </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="ui column">
                                        <br>
                                        <button class="button-sq float-right-sq">Payer</button>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </form>

           </div>
       </div>

    </div>
    <!--end ui container-->



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
