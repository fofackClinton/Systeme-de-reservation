@extends('./layouts/frontoffice/ReservationLayouts')
@section('page-content')

    <!--BASIC LAYOUT-->

    <div class="property-section-default">

        <div class="image-wrapper">
            <div class="image-inner">
                <img class="image-sq slick-img" src="/storage/{{ $chambre->IMAGE }}" alt="" data-gallery="gallery" data-caption="Cover Photo">
            </div>
        </div>

        <div class="property-main-content">
           <!-- revino!-->
            <div class="ui grid container stackable app layout right side">
                <div class="row">
                    <div class="ui column main-column">


                    </div>

                    <div class="ui column side-column">

                        <div class="property-sticky-box-wrapper">

                            <div class="sticky-element sticky-desktop sticky-large-desktop under-ths burger-mobile-modal search-visible" data-burger="menu04">

                                <a href="" class="modal-trigger close-sq hamburger hamburger-spin item hidden-tablet hidden-desktop hidden-large-desktop" data-trigger-for="menu04">
                                        <span class="hamburger-box">
                                          <span class="hamburger-inner"></span>
                                        </span>
                                </a>

                                <div class="property-sticky-box">
                                   <div class="price-tag-sq">
                                       <span class="price-sq">{{ $chambre->PRIX }} XAF</span>
                                       <span class="per-sq" data-text-mobile="/ " data-text="par ">nuit</span>
                                   </div>

                                   <div class="button-sq font-weight-bold-sq mobile-fixed-trigger hidden-desktop hidden-large-desktop hidden-tablet modal-trigger" data-trigger-for="menu04">Instant Booking</div>
                                        <form action="{{ route('chambDispo', $chambre->ID_CHAMBRE) }}" method="post">
                                            {!! csrf_field() !!}
                                            <div class="mobile-fixed-section">
                                                <div class="sticky-box-content">
                                                        <form action="checkout_page.html">
                                                            <div class="main-infos inline-check-in">
                                                                <div class="check-in calendar-sq" id="sticky-box-rangestart">
                                                                    <label class="placeholder"  data-placeholder="Arriver"></label>

                                                                    <div class="relative">
                                                                        <input type="text" name="debut" class="filter" value="" required placeholder="date">
                                                                        <i class="icon icon-little-arrow filters-arrow"></i>
                                                                    </div>

                                                                </div>

                                                                <div class="check-out calendar-sq" id="sticky-box-rangeend">

                                                                <label class="placeholder"  data-placeholder="Départ"></label>

                                                                    <input type="text" name="fin" class="filter" value="" required placeholder="date">

                                                                </div>

                                                                <div class="guests">
                                                                <label class="placeholder"  data-placeholder="Guests"></label>

                                                                    <select name="dropdown" size="12" class="dropdown" required>
                                                                        <option value="1" selected>1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="calculations">
                                                                <div class="calc-row">
                                                                    <div class="calc-column"><p class="desc">Wifi</p></div>
                                                                    <div class="calc-column"><p class="price-sq">0 XAF</p></div>
                                                                </div>

                                                                <div class="calc-row">
                                                                    <div class="calc-column"><p class="desc">Netoyage</p></div>
                                                                    <div class="calc-column"><p class="price-sq">0 XAF</p></div>
                                                                </div>

                                                                <div class="calc-row">
                                                                    <div class="calc-column"><p class="desc">Total</p></div>
                                                                    <div class="calc-column"><p class="price-sq">{{ $chambre->PRIX }} XAF</p></div>
                                                                </div>
                                                            </div>

                                                            <button class="button-sq fullwidth-sq font-weight-bold-sq">Réserver</button>

                                                        </form>
                                                </div>
                                            </div>
                                        </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <header class="header-section mhs header-sticky header-is-bottom is-half">
        <div class="header-content">
            <div class="ui container stackable grid">

                <div class="header-item header-left">
                </div>

                <div class="header-item header-center ">
                </div>

                <div class="header-item header-right flex-align-left flex-grow-true">

                   <div class="menu-default menu-mobile-vertical" data-burger="menu02">

                        <ul class="main-menu anchor-menu">

                            <li class="active"><a href="#section-01" class="item">
                                    <span>A propos de cette chambre</span>
                                </a>
                            </li>

                        </ul>
                   </div>

                </div>
            </div>
        </div>
    </header>

    <!-- grid -->
    <div class="ui grid container stackable app layout right side">

       <div class="row">

            <div class="ui column main-column" role="main">

                <div class="section-container" id="section-01">

                  <div class="typo-section-sq top-default bottom-default ">
                       <h3>{{ $chambre->NOM_CHAMBRE }}</h3>

                        {{-- <div class="button-sq small-sq see-through-sq modal-ui-trigger" data-trigger-for="contact">message us</div> --}}

                   </div>

                   <div class="typo-section-sq bottom-default">
                       <h5>repartition de l'espace</h5>
                       <div class="ui grid moved">
                          <div class="twelve wide mobile six wide tablet six wide computer column">
                               <ul class="description-list">
                                   <li>
                                       <i class="icon icon-account-group-5"></i>
                                       <div>
                                           <p>Nombre de personne:</p>
                                           <strong>{{ $chambre->NOMBRE_LITS }}</strong>
                                       </div>
                                   </li>

                                   <li>
                                       <i class="icon icon-bath-tub"></i>
                                       <div>
                                              <p>Douche:</p>
                                               <strong>Oui</strong>
                                      </div>
                                   </li>

                                   <li>
                                       <i class="icon icon-bed-double"></i>
                                       <div><p>Nombre de lits:</p>
                                           <strong>{{ $chambre->NOMBRE_LITS }}</strong>
                                       </div>
                                   </li>
                               </ul>


                          </div>

                          <div class="twelve wide mobile six wide tablet six wide computer column">
                              <ul class="description-list">
                                   <li>
                                       <i class="icon icon-tent"></i>
                                       <div>
                                           <p>Type de chambre:</p>
                                           <strong>{{ $chambre->TYPE_CHAMBRE }}</strong>
                                       </div>
                                   </li>


                                   <li>
                                       <i class="icon icon-circus-tent"></i>
                                       <div><p>Arrivé / Départ:</p>
                                           <strong>12h:00</strong> / <strong>12:00 </strong></div>
                                   </li>

                               </ul>
                          </div>
                       </div>

                   </div>

                   <div class="typo-section-sq bottom-default">
                       <h5>Aménagement</h5>

                       <div class="ui grid moved">

                          <div class="twelve wide mobile six wide tablet six wide computer column">
								<ul class="description-list">
								   <li>
									   <i class="icon icon-radio-2"></i>
									   <div><p>wifi</p></div>
								   </li>

								   <li>
									   <i class="icon icon-television"></i>
									   <div><p>TV</p></div>
								   </li>
							   </ul>
						  </div>

                       </div>

                   </div>

                   <div class="typo-section-sq bottom-default">
                       <h5>Description</h5>

                       <div class="ui grid moved">
                          <div class="twelve wide column">

							  <strong>The Space</strong>
                              <br>
                                <p>{{ $chambre->DESCRIPTION }}</p>

                          </div>
                       </div>
                   </div>
                </div>

                   </div>


                </div>

            </div>

            <div class="ui column side-column"></div>

        </div>
    </div>

   <!--end ui container-->

    <!-- Contact -->
    <div class="ui modal small" data-for="contact">
        <i class="icon icon-close close-modal"></i>
        <div class="header center">
        	<h3>Contact Form</h3>
        </div>

        <div class="content">
           <p>Donec non quam vitae justo mattis vestibulum a nec nisi. Morbi mi felis, ultrices vitae risus consectetur, porta ultrices sapien.</p>
            <div class="div-c inline-2">
                <div class="divided-column">
                    <label>Name</label>
                    <input type="text" placeholder=" ">
                </div>

                <div class="divided-column">
                    <label>Title</label>
                    <input type="text" placeholder=" ">
                </div>
            </div>

            <div class="div-c">
                <label>Message</label>
                <textarea  cols="30" rows="10" placeholder=" "></textarea>
            </div>
        </div>

        <div class="actions">
            <div class="button-sq cancel-sq">Cancel</div>
            <div class="button-sq">Send</div>
        </div>
    </div>


    @endsection
</div><!--end #page-wrapper-->

