@extends('frontsite.partials.main')

@section('content')
		<!-- Main Container  -->
		<div id="content">
			<div class="so-page-builder">
				<div class="page-builder-ltr">
					<div class="row row_a90w row-style">
						<!--- SLider right-->
						<div class="module sohomepage-slider so-homeslider-ltr">
							<div class="modcontent">
								<div id="sohomepage-slider1" class="slider-home1">
									<div class="so-homeslider sohomeslider-inner-1">
										<div class="item">
											<a href="#" title="slide 1 - 1" target="_self">
												<img class="responsive" src="{{asset('image/catalog/demo/slider/index/1.jpg')}}" alt="slide 1-1">
											</a>
											<div class="info">
												<div class="top">discover</div>
												<h3>London</h3>
												<p>London is a world by itself. We daily discover in it more new countries,<br>and surprising singularities, than in all the universe besides.</p>
												<a href="#">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											</div>
											{{-- <div class="info-right">
												<img class="responsive" src="{{asset('image/catalog/demo/slider/home1/text-right.png')}}" alt="slide 1v1">
											</div> --}}
										</div>
                                        <div class="item">
											<a href="#" title="slide 1 - 1" target="_self">
												<img class="responsive" src="{{asset('image/catalog/demo/slider/index/1.jpg')}}" alt="slide 1-1">
											</a>
											<div class="info">
												<div class="top">discover</div>
												<h3>London</h3>
												<p>London is a world by itself. We daily discover in it more new countries,<br>and surprising singularities, than in all the universe besides.</p>
												<a href="#">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											</div>
											{{-- <div class="info-right">
												<img class="responsive" src="{{asset('image/catalog/demo/slider/home1/text-right.png')}}" alt="slide 1v1">
											</div> --}}
										</div>
                                        <div class="item">
											<a href="#" title="slide 1 - 1" target="_self">
												<img class="responsive" src="{{asset('image/catalog/demo/slider/index/3.jpg')}}" alt="slide 1-1">
											</a>
											<div class="info">
												<div class="top">discover</div>
												<h3>London</h3>
												<p>London is a world by itself. We daily discover in it more new countries,<br>and surprising singularities, than in all the universe besides.</p>
												<a href="#">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											</div>
											{{-- <div class="info-right">
												<img class="responsive" src="{{asset('image/catalog/demo/slider/home1/text-right.png')}}" alt="slide 1v1">
											</div> --}}
										</div>
										<div class="item">
											<a href="#" title="slide 1 - 2" target="_self">
												<img class="responsive" src="{{asset('image/catalog/demo/slider/index/6.jpg')}}" alt="slide 1-2">
											</a>
											<div class="info">
												<div class="top">discover</div>
												<h3>London</h3>
												<p>London is a world by itself. We daily discover in it more new countries,<br>and surprising singularities, than in all the universe besides.</p>
												<a href="#">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											</div>
											{{-- <div class="info-right">
												<img class="responsive" src="{{asset('image/catalog/demo/slider/home1/text-right.png')}}" alt="slide 1v2">
											</div> --}}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="travel-search-content">
					<div class="container page-builder-ltr">
						<div class="row">
							<form action="{{ route('roomsearch') }}" method="post" class="travl-search-advanced clearfix">
								@csrf
                                <div class="search-item city pull-left">
									<p>Destinations</p>
                                    <select name="location" id="location">
                                        <option>Location</option>
                                        @foreach ($locations as $location)
                                            <option value={{$location->id}}>{{$location->city}}</option>
                                        @endforeach
                                    </select>
									{{-- <input type="text" class="tour-search-input" id="city" placeholder="City, region or anywhere"> --}}
								</div>
								<div class="search-item pull-left">
									<p>Check in</p>
                                    <input type="date" name="cin" placeholder="Check-in date" required="True">
									{{-- <input type="date" name="cin" id="cin"> --}}
                                    {{-- <input type="text" class="tour-search-input datepicker hasDatepicker" name="cin" id="cin" placeholder="DD/MM/YY"> --}}
								</div>
								<div class="search-item pull-left">
									<p>Check out</p>
                                    <input type="date" name="cout" placeholder="Check-in date" required="True">
                                    {{-- <input type="date" name="cout" id="cout"> --}}
									{{-- <input type="text" class="tour-search-input datepicker hasDatepicker" name="cout" id="cout" placeholder="DD/MM/YY"> --}}
								</div>
								<div class="search-item item-select pull-left">
									<p>People</p>
									<select name="people">
										<option value="1">1 people</option>
										<option value="2">2 people</option>
										<option value="3">3 people</option>
										<option value="4">4 people</option>
									</select>
								</div>
								<div class="search-item item-budget pull-left">
									<p>Max Budget</p>
									<input type="number" class="hotel-budget-input" id="budget" placeholder="$1000">
								</div>
								<div class="search-item button-submit pull-left">
									<p>.</p>
									<button type="submit" class="button">Search Room <i class="fa fa-angle-right" aria-hidden="true"></i></button>
									{{-- <input type="hidden" name="s">
									<input type="hidden" name="search_tour" value="1"> --}}
								</div>
							</form>
						</div>
					</div>
				</div>
                <section class="section-style4">
					<div class="container page-builder-ltr">
						<div class="row row-style row_a1">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_a1c">
								<div class="module so-deals-1tr home1_deals so-deals">
									<div class="head-title clearfix">
										<div class="block-title pull-left">
											<h3><span>popular Tour</span></h3>
										</div>
										<a href="tour.html" class="pull-right">view all <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
									<div class="modcontent">
										<div class="so-deal modcontent products-list grid clearfix clearfix preset00-3 preset01-3 preset02-2 preset03-2 preset04-1  button-type1  style2">
											<div class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="3" data-items_column0="3" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
												@foreach ($rooms as $room)
                                                <div class="item">
													<div class="item-inner">
														<div class="transition product-layout">
															<div class="product-item-container ">
																<div class="item-block so-quickview">
																	<div class="image">
                                                                        @php
                                                                        $value = \App\Models\Photo::where(['room_id' => $room->id])->pluck('path')->first()

                                                                        @endphp
																		<a href="tour-detail.html" target="_self">

                                                                            <img src="{{ Storage::url("{$value}") }}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
                                                                        </a>
																		{{-- <span class="label-hot"><i class="fa fa-fire" aria-hidden="true"></i>Hot tour</span>
																		<span class="label-rate style2"><i class="fa fa-star" aria-hidden="true"></i>high rate</span> --}}
																	</div>
																	<div class="item-content clearfix">
																		<h3><a href="{{route('roomdetail', ['id' => $room->id])}}">{{ $room->title }}</a></h3>
																		<div class="reviews-content">
																			<div class="star">
																				<span style="width: 60px"></span>
																			</div>
																			<a href="#" class="review-link" rel="nofollow">(15 reviews)</a>
																		</div>
																		<ul>
																			<li><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $room->hotel->location }}</li>
																			<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																			<li><i class="fa fa-user-circle" aria-hidden="true"></i> {{ $room->capacity }} persons</li>
																		</ul>
																		<div class="item-bot clearfix">
																			<div class="price pull-left">
																				from <label>${{ $room->price }}</label><span>person</span>
																			</div>
																			<a href="booking-step.html" class="book-now btn-quickview quickview quickview_handler pull-right" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">Book now</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													{{-- <div class="item-inner">
														<div class="transition product-layout">
															<div class="product-item-container ">
																<div class="item-block so-quickview">
																	<div class="image">
																		<a href="tour-detail.html" target="_self">
																			<img src="image/catalog/demo/product/travel/p4.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																		</a>
																		<span class="label-hot"><i class="fa fa-fire" aria-hidden="true"></i>Hot tour</span>
																	</div>
																	<div class="item-content clearfix">
																		<h3><a href="tour-detail.html">2 Day 1 Night Trip to Santorini, Greece</a></h3>
																		<div class="reviews-content">
																			<div class="star">
																				<span style="width: 60px"></span>
																			</div>
																			<a href="#" class="review-link" rel="nofollow">(20 reviews)</a>
																		</div>
																		<ul>
																			<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																			<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																			<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 persons</li>
																		</ul>
																		<div class="item-bot clearfix">
																			<div class="price pull-left">
																				from <label>$230</label><span>person</span>
																			</div>
																			<a href="booking-step.html" class="book-now btn-quickview quickview quickview_handler pull-right" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">Book now</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div> --}}
												</div>
                                                @endforeach
												{{-- <div class="item">
													<div class="item-inner">
														<div class="transition product-layout">
															<div class="product-item-container ">
																<div class="item-block so-quickview">
																	<div class="image">
																		<a href="tour-detail.html" target="_self">
																			<img src="image/catalog/demo/product/travel/p2.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																		</a>
																		<span class="label-rate"><i class="fa fa-star" aria-hidden="true"></i>high rate</span>
																	</div>
																	<div class="item-content clearfix">
																		<h3><a href="tour-detail.html">The Windmills of Schie-dam, Holland</a></h3>
																		<div class="reviews-content">
																			<div class="star">
																				<span style="width: 60px"></span>
																			</div>
																			<a href="#" class="review-link" rel="nofollow">(10 reviews)</a>
																		</div>
																		<ul>
																			<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																			<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																			<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 persons</li>
																		</ul>
																		<div class="item-bot clearfix">
																			<div class="price pull-left">
																				from <label>$230</label><span>person</span>
																			</div>
																			<a href="booking-step.html" class="book-now btn-quickview quickview quickview_handler pull-right" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">Book now</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="item-inner">
														<div class="transition product-layout">
															<div class="product-item-container ">
																<div class="item-block so-quickview">
																	<div class="image">
																		<a href="tour-detail.html" target="_self">
																			<img src="image/catalog/demo/product/travel/p3.jpg" alt="Bougainvilleas on Lombard Street, San Francisco, Tokyo" class="img-responsive">
																		</a>
																		<span class="label-rate"><i class="fa fa-star" aria-hidden="true"></i>high rate</span>
																	</div>
																	<div class="item-content clearfix">
																		<h3><a href="tour-detail.html">The Windmills of Schie-dam, Holland</a></h3>
																		<div class="reviews-content">
																			<div class="star">
																				<span style="width: 60px"></span>
																			</div>
																			<a href="#" class="review-link" rel="nofollow">(10 reviews)</a>
																		</div>
																		<ul>
																			<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																			<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																			<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 persons</li>
																		</ul>
																		<div class="item-bot clearfix">
																			<div class="price pull-left">
																				from <label>$670</label><span>person</span>
																			</div>
																			<a href="booking-step.html" class="book-now btn-quickview quickview quickview_handler pull-right" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">Book now</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="item-inner">
														<div class="transition product-layout">
															<div class="product-item-container ">
																<div class="item-block so-quickview">
																	<div class="image">
																		<a href="tour-detail.html" target="_self">
																			<img src="image/catalog/demo/product/travel/p3.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																		</a>
																		<span class="label-rate"><i class="fa fa-star" aria-hidden="true"></i>high rate</span>
																	</div>
																	<div class="item-content clearfix">
																		<h3><a href="tour-detail.html">2 Day 1 Night Trip to Santorini, Greece</a></h3>
																		<div class="reviews-content">
																			<div class="star">
																				<span style="width: 60px"></span>
																			</div>
																			<a href="#" class="review-link" rel="nofollow">(15 reviews)</a>
																		</div>
																		<ul>
																			<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																			<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																			<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 persons</li>
																		</ul>
																		<div class="item-bot clearfix">
																			<div class="price pull-left">
																				from <label>$800</label><span>person</span>
																			</div>
																			<a href="booking-step.html" class="book-now btn-quickview quickview quickview_handler pull-right" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">Book now</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="item-inner">
														<div class="transition product-layout">
															<div class="product-item-container ">
																<div class="item-block so-quickview">
																	<div class="image">
																		<a href="tour-detail.html" target="_self">
																			<img src="image/catalog/demo/product/travel/p6.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																		</a>
																		<span class="label-hot"><i class="fa fa-fire" aria-hidden="true"></i>Hot tour</span>
																	</div>
																	<div class="item-content clearfix">
																		<h3><a href="tour-detail.html">2 Day 1 Night Trip to Santorini, Greece</a></h3>
																		<div class="reviews-content">
																			<div class="star">
																				<span style="width: 60px"></span>
																			</div>
																			<a href="#" class="review-link" rel="nofollow">(15 reviews)</a>
																		</div>
																		<ul>
																			<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																			<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																			<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 persons</li>
																		</ul>
																		<div class="item-bot clearfix">
																			<div class="price pull-left">
																				from <label>$130</label><span>person</span>
																			</div>
																			<a href="booking-step.html" class="book-now btn-quickview quickview quickview_handler pull-right" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">Book now</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div> --}}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section-style1">
					<div class="container page-builder-ltr">
						<div class="row row-style row_a1">
							<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col_a1c about-text">
								<h3><span>About us</span></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisc ingelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								<ul>
									<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>5 Star Accommodations</li>
									<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>Hanpick Hotels</li>
									<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>Accesibility Managment</li>
									<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>First Class Flights</li>
									<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>Inclusive Packages</li>
								</ul>
								<div class="about-more clearfix"><a href="about-us.html">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col_a1c about-video">
								<div class="ytvideo" data-video="ibuUmMhD2Pg" style="width:870px; height:420px; background-image:url(image/bg-video.jpg)">
									<div class="seo">Travel</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section-style2">
					<div class="container page-builder-ltr">
						<div class="row row-style row_a1">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_a1c">
								<div class="module so-deals-1tr home1_deals so-deals">
									<div class="head-title clearfix">
										<div class="block-title pull-left">
											<h3><span>Flash deal</span></h3>
											<p>Our best last minutes offers. Book now and go!</p>
										</div>
										<a href="tour.html" class="pull-right">view all <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
									<div class="modcontent">
										<div class="so-deal modcontent products-list grid clearfix clearfix preset00-3 preset01-3 preset02-2 preset03-2 preset04-1  button-type1  style2">
											<div class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="4" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
												<div class="item">
													<div class="transition product-layout">
														<div class="product-item-container ">
															<div class="item-block so-quickview">
																<div class="image">
																	<a href="tour-detail.html" target="_self">
																		<img src="image/catalog/demo/product/travel/t1.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																	</a>
																	<span class="price">$230</span>
																	<span class="label-bolt"><i class="fa fa-bolt" aria-hidden="true"></i></span>
																</div>
																<div class="item-content">
																	<h3><a href="tour-detail.html">2 Day 1 Night Trip to Santorini, Greece</a></h3>
																	<div class="reviews-content">
																		<div class="star">
																			<span style="width: 60px"></span>
																		</div>
																	</div>
																	<ul>
																		<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																		<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																		<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 Pers</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="transition product-layout">
														<div class="product-item-container ">
															<div class="item-block so-quickview">
																<div class="image">
																	<a href="tour-detail.html" target="_self">
																		<img src="image/catalog/demo/product/travel/t2.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																	</a>
																	<span class="price">$230</span>
																	<span class="label-bolt"><i class="fa fa-bolt" aria-hidden="true"></i></span>
																</div>
																<div class="item-content">
																	<h3><a href="tour-detail.html">The Windmills of Schie-dam, Holland</a></h3>
																	<div class="reviews-content">
																		<div class="star">
																			<span style="width: 60px"></span>
																		</div>
																	</div>
																	<ul>
																		<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																		<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																		<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 Pers</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="transition product-layout">
														<div class="product-item-container ">
															<div class="item-block so-quickview">
																<div class="image">
																	<a href="tour-detail.html" target="_self">
																		<img src="image/catalog/demo/product/travel/t3.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																	</a>
																	<span class="price">$230</span>
																	<span class="label-bolt"><i class="fa fa-bolt" aria-hidden="true"></i></span>
																</div>
																<div class="item-content">
																	<h3><a href="tour-detail.html">2 Day 1 Night Trip to Santorini, Greece</a></h3>
																	<div class="reviews-content">
																		<div class="star">
																			<span style="width: 60px"></span>
																		</div>
																	</div>
																	<ul>
																		<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																		<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																		<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 Pers</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="transition product-layout">
														<div class="product-item-container ">
															<div class="item-block so-quickview">
																<div class="image">
																	<a href="tour-detail.html" target="_self">
																		<img src="image/catalog/demo/product/travel/t4.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																	</a>
																	<span class="price">$230</span>
																	<span class="label-bolt"><i class="fa fa-bolt" aria-hidden="true"></i></span>
																</div>
																<div class="item-content">
																	<h3><a href="tour-detail.html">The Windmills of Schie-dam, Holland</a></h3>
																	<div class="reviews-content">
																		<div class="star">
																			<span style="width: 60px"></span>
																		</div>
																	</div>
																	<ul>
																		<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																		<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																		<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 Pers</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section-style3">
					<div class="promotion clearfix">
						<div class="container page-builder-ltr">
							<div class="head-title clearfix">
								<div class="block-title">
									<h3><span>Why Travel with travol</span></h3>
								</div>
							</div>
						</div>
						<div class="container page-builder-ltr">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
									<img src="image/icon/promo1.png" alt="stay safe" class="img-responsive">
									<h3>Stay Safe</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
									<img src="image/icon/promo2.png" alt="Quality Services" class="img-responsive">
									<h3>Quality Services</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
									<img src="image/icon/promo3.png" alt="Save Money" class="img-responsive">
									<h3>Save Money</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section-style4">
					<div class="container page-builder-ltr">
						<div class="row row-style row_a1">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_a1c">
								<div class="module so-deals-1tr home1_deals so-deals">
									<div class="head-title clearfix">
										<div class="block-title pull-left">
											<h3><span>popular Tour</span></h3>
										</div>
										<a href="tour.html" class="pull-right">view all <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
									<div class="modcontent">
										<div class="so-deal modcontent products-list grid clearfix clearfix preset00-3 preset01-3 preset02-2 preset03-2 preset04-1  button-type1  style2">
											<div class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="3" data-items_column0="3" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
												<div class="item">
													<div class="item-inner">
														<div class="transition product-layout">
															<div class="product-item-container ">
																<div class="item-block so-quickview">
																	<div class="image">
																		<a href="tour-detail.html" target="_self">
																			<img src="image/catalog/demo/product/travel/p1.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																		</a>
																		<span class="label-hot"><i class="fa fa-fire" aria-hidden="true"></i>Hot tour</span>
																		<span class="label-rate style2"><i class="fa fa-star" aria-hidden="true"></i>high rate</span>
																	</div>
																	<div class="item-content clearfix">
																		<h3><a href="tour-detail.html">2 Day 1 Night Trip to Santorini, Greece</a></h3>
																		<div class="reviews-content">
																			<div class="star">
																				<span style="width: 60px"></span>
																			</div>
																			<a href="#" class="review-link" rel="nofollow">(15 reviews)</a>
																		</div>
																		<ul>
																			<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																			<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																			<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 persons</li>
																		</ul>
																		<div class="item-bot clearfix">
																			<div class="price pull-left">
																				from <label>$230</label><span>person</span>
																			</div>
																			<a href="booking-step.html" class="book-now btn-quickview quickview quickview_handler pull-right" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">Book now</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="item-inner">
														<div class="transition product-layout">
															<div class="product-item-container ">
																<div class="item-block so-quickview">
																	<div class="image">
																		<a href="tour-detail.html" target="_self">
																			<img src="image/catalog/demo/product/travel/p4.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																		</a>
																		<span class="label-hot"><i class="fa fa-fire" aria-hidden="true"></i>Hot tour</span>
																	</div>
																	<div class="item-content clearfix">
																		<h3><a href="tour-detail.html">2 Day 1 Night Trip to Santorini, Greece</a></h3>
																		<div class="reviews-content">
																			<div class="star">
																				<span style="width: 60px"></span>
																			</div>
																			<a href="#" class="review-link" rel="nofollow">(20 reviews)</a>
																		</div>
																		<ul>
																			<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																			<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																			<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 persons</li>
																		</ul>
																		<div class="item-bot clearfix">
																			<div class="price pull-left">
																				from <label>$230</label><span>person</span>
																			</div>
																			<a href="booking-step.html" class="book-now btn-quickview quickview quickview_handler pull-right" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">Book now</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="item-inner">
														<div class="transition product-layout">
															<div class="product-item-container ">
																<div class="item-block so-quickview">
																	<div class="image">
																		<a href="tour-detail.html" target="_self">
																			<img src="image/catalog/demo/product/travel/p2.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																		</a>
																		<span class="label-rate"><i class="fa fa-star" aria-hidden="true"></i>high rate</span>
																	</div>
																	<div class="item-content clearfix">
																		<h3><a href="tour-detail.html">The Windmills of Schie-dam, Holland</a></h3>
																		<div class="reviews-content">
																			<div class="star">
																				<span style="width: 60px"></span>
																			</div>
																			<a href="#" class="review-link" rel="nofollow">(10 reviews)</a>
																		</div>
																		<ul>
																			<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																			<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																			<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 persons</li>
																		</ul>
																		<div class="item-bot clearfix">
																			<div class="price pull-left">
																				from <label>$230</label><span>person</span>
																			</div>
																			<a href="booking-step.html" class="book-now btn-quickview quickview quickview_handler pull-right" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">Book now</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="item-inner">
														<div class="transition product-layout">
															<div class="product-item-container ">
																<div class="item-block so-quickview">
																	<div class="image">
																		<a href="tour-detail.html" target="_self">
																			<img src="image/catalog/demo/product/travel/p3.jpg" alt="Bougainvilleas on Lombard Street, San Francisco, Tokyo" class="img-responsive">
																		</a>
																		<span class="label-rate"><i class="fa fa-star" aria-hidden="true"></i>high rate</span>
																	</div>
																	<div class="item-content clearfix">
																		<h3><a href="tour-detail.html">The Windmills of Schie-dam, Holland</a></h3>
																		<div class="reviews-content">
																			<div class="star">
																				<span style="width: 60px"></span>
																			</div>
																			<a href="#" class="review-link" rel="nofollow">(10 reviews)</a>
																		</div>
																		<ul>
																			<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																			<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																			<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 persons</li>
																		</ul>
																		<div class="item-bot clearfix">
																			<div class="price pull-left">
																				from <label>$670</label><span>person</span>
																			</div>
																			<a href="booking-step.html" class="book-now btn-quickview quickview quickview_handler pull-right" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">Book now</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="item-inner">
														<div class="transition product-layout">
															<div class="product-item-container ">
																<div class="item-block so-quickview">
																	<div class="image">
																		<a href="tour-detail.html" target="_self">
																			<img src="image/catalog/demo/product/travel/p3.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																		</a>
																		<span class="label-rate"><i class="fa fa-star" aria-hidden="true"></i>high rate</span>
																	</div>
																	<div class="item-content clearfix">
																		<h3><a href="tour-detail.html">2 Day 1 Night Trip to Santorini, Greece</a></h3>
																		<div class="reviews-content">
																			<div class="star">
																				<span style="width: 60px"></span>
																			</div>
																			<a href="#" class="review-link" rel="nofollow">(15 reviews)</a>
																		</div>
																		<ul>
																			<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																			<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																			<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 persons</li>
																		</ul>
																		<div class="item-bot clearfix">
																			<div class="price pull-left">
																				from <label>$800</label><span>person</span>
																			</div>
																			<a href="booking-step.html" class="book-now btn-quickview quickview quickview_handler pull-right" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">Book now</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="item-inner">
														<div class="transition product-layout">
															<div class="product-item-container ">
																<div class="item-block so-quickview">
																	<div class="image">
																		<a href="tour-detail.html" target="_self">
																			<img src="image/catalog/demo/product/travel/p6.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																		</a>
																		<span class="label-hot"><i class="fa fa-fire" aria-hidden="true"></i>Hot tour</span>
																	</div>
																	<div class="item-content clearfix">
																		<h3><a href="tour-detail.html">2 Day 1 Night Trip to Santorini, Greece</a></h3>
																		<div class="reviews-content">
																			<div class="star">
																				<span style="width: 60px"></span>
																			</div>
																			<a href="#" class="review-link" rel="nofollow">(15 reviews)</a>
																		</div>
																		<ul>
																			<li><i class="fa fa-map-marker" aria-hidden="true"></i> New Zealand</li>
																			<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																			<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 persons</li>
																		</ul>
																		<div class="item-bot clearfix">
																			<div class="price pull-left">
																				from <label>$130</label><span>person</span>
																			</div>
																			<a href="booking-step.html" class="book-now btn-quickview quickview quickview_handler pull-right" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">Book now</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section-style5">
					<div class="container page-builder-ltr">
						<div class="row row-style row_a1">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_a1c">
								<div class="module so-deals-1tr home1_deals so-deals">
									<div class="head-title clearfix">
										<div class="block-title pull-left">
											<h3><span>Choose your destinations</span></h3>
										</div>
									</div>
									<div class="modcontent">
										<div class="so-deal modcontent products-list grid clearfix clearfix preset00-3 preset01-3 preset02-2 preset03-2 preset04-1  button-type1  style2">
											<div class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="4" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
												<div class="item">
													<div class="transition product-layout">
														<div class="product-item-container ">
															<div class="item-block so-quickview">
																<div class="image">
																	<a href="destination-detail.html" target="_self">
																		<img src="image/catalog/demo/product/travel/chosse1.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																	</a>
																</div>
																<div class="item-content">
																	<div class="item-title clearfix">
																		<h3 class="pull-left"><a href="destination-detail.html"><i class="fa fa-map-marker" aria-hidden="true"></i> England</a></h3>
																		<span class="pull-right">14 tours</span>
																	</div>
																	<div class="view-all"><a href="destination-list.html">View all tour <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="transition product-layout">
														<div class="product-item-container ">
															<div class="item-block so-quickview">
																<div class="image">
																	<a href="destination-detail.html" target="_self">
																		<img src="image/catalog/demo/product/travel/chosse2.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																	</a>
																</div>
																<div class="item-content">
																	<div class="item-title clearfix">
																		<h3 class="pull-left"><a href="destination-detail.html"><i class="fa fa-map-marker" aria-hidden="true"></i> France</a></h3>
																		<span class="pull-right">14 tours</span>
																	</div>
																	<div class="view-all"><a href="destination-list.html">View all tour <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="transition product-layout">
														<div class="product-item-container ">
															<div class="item-block so-quickview">
																<div class="image">
																	<a href="destination-detail.html" target="_self">
																		<img src="image/catalog/demo/product/travel/chosse3.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																	</a>
																</div>
																<div class="item-content">
																	<div class="item-title clearfix">
																		<h3 class="pull-left"><a href="destination-detail.html"><i class="fa fa-map-marker" aria-hidden="true"></i> Australia</a></h3>
																		<span class="pull-right">14 tours</span>
																	</div>
																	<div class="view-all"><a href="destination-list.html">View all tour <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="transition product-layout">
														<div class="product-item-container ">
															<div class="item-block so-quickview">
																<div class="image">
																	<a href="destination-detail.html" target="_self">
																		<img src="image/catalog/demo/product/travel/chosse4.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																	</a>
																</div>
																<div class="item-content">
																	<div class="item-title clearfix">
																		<h3 class="pull-left"><a href="destination-detail.html"><i class="fa fa-map-marker" aria-hidden="true"></i> Laos</a></h3>
																		<span class="pull-right">14 tours</span>
																	</div>
																	<div class="view-all"><a href="destination-list.html">View all tour <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="transition product-layout">
														<div class="product-item-container ">
															<div class="item-block so-quickview">
																<div class="image">
																	<a href="destination-detail.html" target="_self">
																		<img src="image/catalog/demo/product/travel/chosse5.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																	</a>
																</div>
																<div class="item-content">
																	<div class="item-title clearfix">
																		<h3 class="pull-left"><a href="destination-detail.html"><i class="fa fa-map-marker" aria-hidden="true"></i> Italy</a></h3>
																		<span class="pull-right">14 tours</span>
																	</div>
																	<div class="view-all"><a href="destination-list.html">View all tour <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section-style6">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6fdl float_none container">
						<div class="head-title clearfix">
							<div class="block-title pull-left">
								<h3><span>Tourist's shared photo</span></h3>
							</div>
						</div>
						<div class="sw-gallery products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="5" data-items_column0="5" data-items_column1="5" data-items_column2="3"  data-items_column3="3" data-items_column4="2" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
							<div class="item">
								<div class="content-img">
									<a class="image-popup" href="image/catalog/demo/banners/home1/gallery1.jpg"><img class="responsive" src="image/catalog/demo/banners/home1/gallery1.jpg" alt="gallery1"></a>
								</div>
								<div class="content-img">
									<a class="image-popup" href="image/catalog/demo/banners/home1/gallery2.jpg"><img class="responsive" src="image/catalog/demo/banners/home1/gallery2.jpg" alt="gallery2"></a>
								</div>
							</div>
							<div class="item">
								<div class="content-img">
									<a class="image-popup" href="image/catalog/demo/banners/home1/gallery3.jpg"><img class="responsive" src="image/catalog/demo/banners/home1/gallery3.jpg" alt="gallery3"></a>
								</div>
								<div class="content-img">
									<a class="image-popup" href="image/catalog/demo/banners/home1/gallery4.jpg"><img class="responsive" src="image/catalog/demo/banners/home1/gallery4.jpg" alt="gallery4"></a>
								</div>
							</div>
							<div class="item">
								<div class="content-img">
									<a class="image-popup" href="image/catalog/demo/banners/home1/gallery5.jpg"><img class="responsive" src="image/catalog/demo/banners/home1/gallery5.jpg" alt="gallery5"></a>
								</div>
								<div class="content-img">
									<a class="image-popup" href="image/catalog/demo/banners/home1/gallery6.jpg"><img class="responsive" src="image/catalog/demo/banners/home1/gallery6.jpg" alt="gallery6"></a>
								</div>
							</div>
							<div class="item">
								<div class="content-img">
									<a class="image-popup" href="image/catalog/demo/banners/home1/gallery7.jpg"><img class="responsive" src="image/catalog/demo/banners/home1/gallery7.jpg" alt="gallery7"></a>
								</div>
								<div class="content-img">
									<a class="image-popup" href="image/catalog/demo/banners/home1/gallery8.jpg"><img class="responsive" src="image/catalog/demo/banners/home1/gallery8.jpg" alt="gallery8"></a>
								</div>
							</div>
							<div class="item">
								<div class="content-img">
									<a class="image-popup" href="image/catalog/demo/banners/home1/gallery9.jpg"><img class="responsive" src="image/catalog/demo/banners/home1/gallery9.jpg" alt="gallery9"></a>
								</div>
								<div class="content-img">
									<a class="image-popup" href="image/catalog/demo/banners/home1/gallery10.jpg"><img class="responsive" src="image/catalog/demo/banners/home1/gallery10.jpg" alt="gallery10"></a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section-style7">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6fdl float_none container">
						<div class="head-title clearfix">
							<div class="block-title pull-left">
								<h3><span>Travel tip</span></h3>
							</div>
							<a href="blog-sidebar.html" class="pull-right">view all <i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col_cfay block block_11">
								<div class="module custom-ourblog clearfix default-nav">
									<div class="modcontent">
										<div id="so_latest_blog_1" class="so-blog-external button-type2 button-type2">
											<div class="category-slider-inner products-list yt-content-slider blog-external clearfix " data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="2" data-items_column0="2" data-items_column1="2" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
												<div class="media">
													<div class="item head-button">
														<div class="content-img">
															<a href="blog-detail.html" target="_self">
																<img src="image/catalog/demo/blog/blog1.jpg" alt="Aestibulum ipsum a ornare car">
															</a>
														</div>
														<div class="content-detail">
															<div class="media-content so-block">
																<div class="entry-meta clearfix">
																	<div class="entry-date font-ct date-bottom">
																		<i class="fa fa-calendar" aria-hidden="true"></i>11/11/2019
																	</div>
																	<div class="entry-comment">
																		<i class="fa fa-commenting" aria-hidden="true"></i>2 Comments
																	</div>
																	<div class="entry-social">
																		<i class="fa fa-share-alt" aria-hidden="true"></i><a href="#">Share</a>
																	</div>
																</div>
																<h4 class="media-heading head-item">
																	<a href="blog-detail.html" title="Aestibulum ipsum a ornare car" target="_self">Aestibulum ipsum a ornare car</a>
																</h4>
																<div class="description">
																	Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusantium dolorem.que lau...
																</div>
																<div class="readmore">
																	<a href="blog-detail.html" target="_self">Read more</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="media">
													<div class="item head-button">
														<div class="content-img">
															<a href="blog-detail.html" target="_self">
																<img src="image/catalog/demo/blog/blog2.jpg" alt="Aestibulum ipsum a ornare car">
															</a>
														</div>
														<div class="content-detail">
															<div class="media-content so-block">
																<div class="entry-meta clearfix">
																	<div class="entry-date font-ct date-bottom">
																		<i class="fa fa-calendar" aria-hidden="true"></i>11/11/2019
																	</div>
																	<div class="entry-comment">
																		<i class="fa fa-commenting" aria-hidden="true"></i>2 Comments
																	</div>
																	<div class="entry-social">
																		<i class="fa fa-share-alt" aria-hidden="true"></i><a href="#">Share</a>
																	</div>
																</div>
																<h4 class="media-heading head-item">
																	<a href="blog-detail.html" title="Aestibulum ipsum a ornare car" target="_self">Aestibulum ipsum a ornare car</a>
																</h4>
																<div class="description">
																	Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusantium dolorem.que lau...
																</div>
																<div class="readmore">
																	<a href="blog-detail.html" target="_self">Read more</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="media">
													<div class="item head-button">
														<div class="content-img">
															<a href="blog-detail.html" target="_self">
																<img src="image/catalog/demo/blog/blog3.jpg" alt="Aestibulum ipsum a ornare car">
															</a>
														</div>
														<div class="content-detail">
															<div class="media-content so-block">
																<div class="entry-meta clearfix">
																	<div class="entry-date font-ct date-bottom">
																		<i class="fa fa-calendar" aria-hidden="true"></i>11/11/2019
																	</div>
																	<div class="entry-comment">
																		<i class="fa fa-commenting" aria-hidden="true"></i>2 Comments
																	</div>
																	<div class="entry-social">
																		<i class="fa fa-share-alt" aria-hidden="true"></i><a href="#">Share</a>
																	</div>
																</div>
																<h4 class="media-heading head-item">
																	<a href="blog-detail.html" title="Aestibulum ipsum a ornare car" target="_self">Aestibulum ipsum a ornare car</a>
																</h4>
																<div class="description">
																	Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusantium dolorem.que lau...
																</div>
																<div class="readmore">
																	<a href="blog-detail.html" target="_self">Read more</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="sw-newletter">
									<h3>Sign up</h3>
									<p>...to get newletter & receive our best offer</p>
									<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-838" method="post" data-id="838" data-name="">
										<div class="mc4wp-form-fields">
											<input class="frm-email" type="email" name="EMAIL" placeholder="Enter Your email..." required="">
											<button class="frm-submit" type="submit" value="subscribe">Sign up</button>
										</div>
									</form>
									<ul>
										<li><a href="https://www.facebook.com/wpthemego" title="Face Book"><span class="fa fa-facebook"></span></a></li>
										<li><a href="https://twitter.com/wpthemego" title="Twitter"><span class="fa fa-twitter"></span></a></li>
										<li><a href="https://www.pinterest.com/wpthemego/" title="pinterest"><span class="fa fa-pinterest"></span></a></li>
										<li><a href="#" title="Instagram"><span class="fa fa-instagram"></span></a></li>
										<li><a href="https://plus.google.com/u/0/117616422700848151321" title="Google Plus"><span class="fa fa-google-plus"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<!-- //Main Container -->
@endsection
