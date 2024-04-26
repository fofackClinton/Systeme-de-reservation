@extends('./layouts/frontoffice/ReservationLayouts')
@section('page-content')

    <div class="ui layout">

        <!-- grid -->
        <div class="ui grid container fluid">
           <div class="row">



                    <div class="ui column variable">


                        <div class="ui grid narrow-sq">
                            <div class="row">
                                @forelse ( $chambres as $chambre )
                                    <!-- property item -->
                                    <div class="ui twelve wide mobile six wide tablet six wide computer four wide widescreen four wide large screen column">
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
                                    @empty
                                    <h3>Aucune chambres diponibles pour votre recherches</h3>
                                @endforelse

                            </div>
                        </div>
                    </div>

            </div>
        </div>
        <!--end ui container-->

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

 @endsection

