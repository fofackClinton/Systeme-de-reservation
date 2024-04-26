@extends('./layouts/frontoffice/ReservationLayouts')
@section('page-content')


    <div class="ui layout">

    </div>

    <div class="ui grid container centered">
       <div class="row">
        <div class="ui ten wide computer twelve wide mobile column">

				   <div class="typo-section-sq top-default bottom-default">
						<h2>Checkout</h2>
				   </div>

				   <div class="white-section">
					   <h5>Billing Details</h5>

						<div class="div-c inline-2">
							<div class="divided-column">
								<label>Name</label>
								<input type="text" placeholder="">
							</div>

							<div class="divided-column">
								<label>Company</label>
								<input type="text" placeholder=" ">
							</div>
						</div>

						<div class="div-c inline-2">
							<div class="divided-column">
								<label>E-mail</label>
								<input type="text" placeholder=" ">
							</div>

							<div class="divided-column">
								<label>Phone</label>
								<input type="text" placeholder=" ">
							</div>
						</div>

				   </div>

				   <div class="white-section">
					   <div class="ui grid stackable">
						   <div class="row">
							   <div class="ui six wide computer column">
								   <h5>Products</h5>

								   <div class="product-payment-item">

									   <div class="product-details">
										   <img class="product-image" src="{{ asset('assets/images/property/property_little_01.jpg') }}" alt="">

										   <p class="product-title">
											   Vama Veche La Elena
										   </p>
									   </div>

									   <div class="product-dates">
										   <p class="product-from">
											   <span>From:</span>12 november 2016
										   </p>
										   <p class="product-to">
											   <span>To:</span>16 november 2016
										   </p>
										   <p class="total-per">4 x $24</p>
									   </div>

									   <div class="product-extra">
										   <div class="extra-row">
											   <p class="extra-title">Cleaning Fee</p>
											   <p class="extra-price">
												   $12
											   </p>
										   </div>
										   <div class="extra-row link-sq">
											   <p class="extra-title ">Discount 4 days - 30%</p>
											   <p class="extra-price">
												  -$42
											   </p>
										   </div>
										   <div class="extra-row">
											   <p class="extra-title">Subtotal</p>
											   <p class="extra-price">
												   $40
											   </p>
										   </div>
										   <div class="extra-row total-sq">
											   <p class="extra-title">Total</p>
											   <p class="extra-price">
												   $40
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
											<input type="radio" id="radio1" name="radio-group-01">
											<label for="radio1">PayPal
												<img src="{{ asset('assets/images/paypal_image.jpg') }}" alt="">
											</label>
										</div>

										<div class="divided-column">
											<input type="radio" id="radio2" name="radio-group-01">
											<label for="radio2">Credit Card
												<img src="{{ asset('assets/images/credit_card_image.jpg') }}" alt="">
											</label>
										</div>

										<div class="divided-column">
											<input type="radio" id="radio3" name="radio-group-01">
											<label for="radio3">Other</label>
										</div>
									</div>

							   </div>
						   </div>

						   <div class="row">
							   <div class="ui column">
								   <br>
								   <a href="homepage.html" class="button-sq float-right-sq">Place Order</a>
							   </div>
						   </div>
					   </div>



				   </div>

           </div>
       </div>

    </div>
    @endsection
    <!--end ui container-->
