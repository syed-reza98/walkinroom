@extends('frontsite.partials.main')

@section('content')
<?php
$arr=$hotel->image;
$yummy = json_decode($arr, true);
?>

{{-- <a href="{{ route('roomdetail',['id'=>$room->id, 1, 1]) }}" target="_self">
	<img src="{{ Voyager::image( $yummy[0] ) }}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
    <img src="{{ Storage::url("{$value}") }}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
</a> --}}
		<div class="image-top">
		@include('frontsite.partials.imageshowhotel')
		</div>
		{{-- <div class="image-top"><img src="{{ Voyager::image( $yummy[0] ) }}" alt="tour" style="width:1920px; height:600px"></div> --}}
		<!-- Main Container  -->

		<div class="container product-detail tour-single">
			<div class="row">
				<div id="content" class="col-md-9 col-sm-12 col-xs-12">
					<a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>Sidebar</a>
					<div class="detail-content">
						<div class="view-top">
							<a href="#"><i class="fa fa-camera-retro" aria-hidden="true"></i>View photo</a>
							<a href="#"><i class="fa fa-play" aria-hidden="true"></i>View preview</a>
						</div>
						<div class="sticky-content">
							<h1>{{ $hotel->name }}</h1>
							<ul class="box-meta">
								<li><div class="star"><span style="width: 67px"></span></div><label>4.5</label></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i>3 day 2 nights</li>
								<li><i class="fa fa-male" aria-hidden="true"></i><a href="#">Holiday</a>, <a href="#">Adventure</a></li>
								<li><i class="fa fa-users" aria-hidden="true"></i>16 persion</li>
							</ul>
							<div class="top-tab" id="nav">
								<ul class="nav nav-tabs">
									<li><a href="#home">Overview</a></li>
									{{-- <li><a href="#menu1">Tour Plans</a></li> --}}
									<li><a href="#menu2">Map</a></li>
									<li><a href="#menu3">Amenities</a></li>
									<li><a href="#menu4">Review</a></li>
								</ul>
							</div>
						</div>
						<div class="content-tabs">
							<div class="tab-content">

									<p id="home">
										{!! $hotel->description !!}
									</p>
									<ul class="clearfix location-wee">
										<li>
											<label>Location</label>
											<div class="item"><a href="#">{{ $hotel->location->city }}</a></div>
										</li>
										<li>
											<label>Star</label>
											<div class="item">{{ $hotel->star }}</div>
										</li>

										{{-- @if($price)
                                        <li>
											<label>Price Per Night</label>
										</li>
										@endif --}}

										<li>
											<label>Price Included</label>
											<div class="item">
												<div class="info"><i class="fa fa-check" aria-hidden="true"></i>Air fares</div>
												<div class="info"><i class="fa fa-check" aria-hidden="true"></i>All transportation in destination location</div>
												<div class="info"><i class="fa fa-check" aria-hidden="true"></i>2 Nights Hotel Aaccomodation</div>
												<div class="info"><i class="fa fa-check" aria-hidden="true"></i>Tour guide</div>
											</div>
										</li>
										<li>
											<label>Price Excludes</label>
											<div class="item">
												<div class="info2"><i class="fa fa-times" aria-hidden="true"></i>Any private expenses</div>
												<div class="info2"><i class="fa fa-times" aria-hidden="true"></i>Room service fees</div>
												<div class="info2"><i class="fa fa-times" aria-hidden="true"></i>Souvenir</div>
											</div>
										</li>
									</ul>
									{{-- <div id="menu1" class="clearfix tour-plan">
										<h3>tour plans</h3>
										<div class="item-content">
											<div class="title"><span>1</span>Day 1 - Departure</div>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, tota rem aperia, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
											<ul>
												<li><label>09:30</label> - <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</span></li>
												<li><label>13:30</label> - <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</span></li>
												<li><label>17:30</label> - <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</span></li>
												<li><label>20:30</label> - <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</span></li>
											</ul>
											<div class="title"><span>2</span>Day 2 - Visting The Shire - the Hobbit’s Village</div>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, tota rem aperia, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
											<ul>
												<li><label>09:30</label> - <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</span></li>
												<li><label>13:30</label> - <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</span></li>
												<li><label>17:30</label> - <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</span></li>
												<li><label>20:30</label> - <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</span></li>
											</ul>
											<div class="title"><span>3</span>Day 3 - Return</div>
										</div>
									</div> --}}
									<div id="menu2" class="tour-map">
										<h3>Map Located</h3>
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5235.281234622878!2d-74.009579709455!3d40.71146597631483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2zVGjDoG5oIHBo4buRIE5ldyBZb3JrLCBUaeG7g3UgYmFuZyBOZXcgWW9yaywgSG9hIEvhu7M!5e0!3m2!1svi!2s!4v1572333240599!5m2!1svi!2s" width="900" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
									</div>
									<div id="menu3" class="clearfix tour-amen">
										<h3>Amenities</h3>
										<ul>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Swimming Pool</li>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Free Wifi</li>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Security cameras</li>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Hot Water</li>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Swimming Pool</li>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Free Wifi</li>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Security cameras</li>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Hot Water</li>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Swimming Pool</li>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Free Wifi</li>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Security cameras</li>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Hot Water</li>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Security cameras</li>
											<li><i class="fa fa-check-circle" aria-hidden="true"></i>Hot Water</li>
										</ul>
									</div>
									<div id="menu4" class="tour-review">
										<h3>Review</h3>
										<form method="post" class="clearfix">
											<div class="image"><img src="image/profile.png" alt="" class="img-responsive"></div>
											<div class="content-right">
												<textarea name="comment" placeholder="What are you thoughts about this tour?" id="comment" class="input-block-level" rows="4" tabindex="4" aria-required="true"></textarea>
												<div class="rate">
													<label>Your rate:</label><div class="star"><span style="width: 0px"></span></div>
												</div>
												<input name="submit" type="submit" id="submit" class="submit" value="Send Review">
											</div>
										</form>
										<div class="clearfix comment">
											<div class="clearfix item">
												<div class="image"><img src="image/profile2.png" alt="" class="img-responsive"></div>
												<div class="info">
													<div class="name">
														<div class="rate pull-left">
															<label>John wich</label><div class="star"><span style="width: 80px"></span></div>
														</div>
														<span class="pull-right">14 Jully 2018</span>
													</div>
													<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
											<div class="clearfix item">
												<div class="image"><img src="image/profile2.png" alt="" class="img-responsive"></div>
												<div class="info">
													<div class="name">
														<div class="rate pull-left">
															<label>John wich</label><div class="star"><span style="width: 80px"></span></div>
														</div>
														<span class="pull-right">14 Jully 2018</span>
													</div>
													<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
											<div class="clearfix item">
												<div class="image"><img src="image/profile2.png" alt="" class="img-responsive"></div>
												<div class="info">
													<div class="name">
														<div class="rate pull-left">
															<label>John wich</label><div class="star"><span style="width: 80px"></span></div>
														</div>
														<span class="pull-right">14 Jully 2018</span>
													</div>
													<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
				<aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
					<span id="close-sidebar" class="fa fa-times"></span>
					<div class="clearfix module-search2">
						<h3 class="modtitle"><label>$267.00</label><span>person</span></h3>
                        <br>
                        <div class="search-item button-submit pull-left">
                            <p>.</p>
                            <button id="checkout-button" type="button" class="button">Book Now<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            {{-- <button type="submit" class="button">Search Tour <i class="fa fa-angle-right" aria-hidden="true"></i></button> --}}
                        </div>
						{{-- <form method="get" class="search-pr">
							<div class="search-item date">
								<input type="text" class="tour-search-input datepicker hasDatepicker" id="date_from" placeholder="10/07/2019">
							</div>
							<div class="item-avai">Ticket Available: <span>4</span></div>
							<div class="search-item item-select">
								<select name="adult">
									<option value="1">Adult</option>
									<option value="2">2 people</option>
									<option value="3">3 people</option>
									<option value="4">4 people</option>
								</select>
							</div>
							<div class="search-item item-select">
								<select name="children">
									<option value="1">Children < 12 (-50%)</option>
									<option value="2">Children < 10 (-70%)</option>
									<option value="3">Children < 5 (-100%)</option>
								</select>
							</div>
							<ul>
								<li><span>Tax (+10%):</span><label>$26.00</label></li>
								<li><span>Discount (0%):</span><label>$0.00</label></li>
							</ul>
							<div class="button-submit">
								<button type="submit" class="button">book now</button>
							</div>
						</form> --}}
					</div>
					<div class="clearfix module-why">
						<h3>Why should travel with us?</h3>
						<ul>
							<li><i class="fa fa-usd" aria-hidden="true"></i>No-hassle best price guarantee</li>
							<li><i class="fa fa-star" aria-hidden="true"></i>Hand-picked Tours & Activities</li>
							<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i>Passenger service 24/7</li>
							<li><i class="fa fa-user" aria-hidden="true"></i>Professional tour guide</li>
						</ul>
					</div>
					<div class="clearfix module-ques">
						<h3>get a questions</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem que laudantium.</p>
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+1 2618 181 612</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i>travelsp@gmail.com</li>
						</ul>
					</div>
					<div class="clearfix module-pop">
						<h3>popular tours</h3>
						<div class="clearfix item">
							<div class="image">
								<a href="tour-detail.html"><img src="image/catalog/demo/product/travel/p1.jpg" alt="Bougainvilleas on Lombard Street" class="img-responsive"></a>
							</div>
							<div class="content">
								<h4><a href="tour-detail.html">7-Day Great Britain Tour Packag...</a></h4>
								<p>from $250</p>
							</div>
						</div>
						<div class="clearfix item">
							<div class="image">
								<a href="tour-detail.html"><img src="image/catalog/demo/product/travel/p2.jpg" alt="Bougainvilleas on Lombard Street" class="img-responsive"></a>
							</div>
							<div class="content">
								<h4><a href="tour-detail.html">7-Day Great Britain Tour Packag...</a></h4>
								<p>from $250</p>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>

		<!-- //Main Container -->
        <script src="https://js.stripe.com/v3/"></script>
        {{-- <script>
            const stripe = Stripe('pk_test_51Kuf40HO24BikBuGgtYllh7ztYY1kxRH9MFM3slzNpMAXgxS5BdU3OscZqOOUYPC3inSPLttEXTtaIv77ufbw3mJ00oTuo1EHs');
            const btn = document.getElementById("checkout-button")
            btn.addEventListener('click', function(e){
                e.preventDefault();
                stripe.redirectToCheckout({
                    sessionId: "<?php echo $session->id ?>"
                })
            })

        </script> --}}
@endsection
