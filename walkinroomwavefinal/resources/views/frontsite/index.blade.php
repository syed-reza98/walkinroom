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
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                @include('frontsite.partials.roomsearch')
                <section class="section-style4">
					<div class="container page-builder-ltr">
						<div class="row row-style row_a1">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_a1c">
								<div class="module so-deals-1tr home1_deals so-deals">
									<div class="clearfix head-title">
										<div class="block-title pull-left">
											<h3><span>popular Tour</span></h3>
										</div>
										<a href="{{route('roomlist')}}" class="pull-right">view all <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
									<div class="modcontent">
										<div class="grid clearfix so-deal modcontent products-list preset00-3 preset01-3 preset02-2 preset03-2 preset04-1 button-type1 style2">
											<div class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="3" data-items_column0="3" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
												@foreach ($rooms as $room)
                                                <div class="item">
													<div class="item-inner">
														<div class="transition product-layout">
															<div class="product-item-container ">
																<div class="item-block so-quickview">
																	<div class="image">
																		<?php
																		$arr=$room->image;
																		$yummy = json_decode($arr, true);
																		// dd($yummy[0]);
																		?>

																		<a href="{{ route('roomdetail',['id'=>$room->id, 1, 1]) }}" target="_self">
																			<img src="{{ Voyager::image( $yummy[0] ) }}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" style="width:370px; height:247px">
                                                                            {{-- <img src="{{ Storage::url("{$value}") }}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive"> --}}
                                                                        </a>
																	</div>
																	<div class="clearfix item-content">
																		<h3><a href="{{ route('roomdetail',['id'=>$room->id, 1, 1]) }}">{{ $room->title }}</a></h3>
																		<div class="reviews-content">
																			<div class="star">
																				<span style="width: 60px"></span>
																			</div>
																			<a href="#" class="review-link" rel="nofollow">(15 reviews)</a>
																		</div>
																		<ul>
																			<li><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $room->hotel->location->city }}</li>
																			<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																			<li><i class="fa fa-user-circle" aria-hidden="true"></i> {{ $room->capacity }} persons</li>
																		</ul>
																		<div class="clearfix item-bot">
																			<div class="price pull-left">
																				{{-- from <label>${{ $room->price }}</label><span>person</span> --}}
																			</div>
																			<a href="{{ route('booking.step',['id'=>$room->id]) }}" class="book-now btn-quickview quickview quickview_handler pull-right" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">Book now</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
                                                @endforeach
											</div>
										</div>
									</div>
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
									<div class="clearfix head-title">
										<div class="block-title pull-left">
											<h3><span>Last Minutes Room</span></h3>
											<p>Our best last minutes offers. Book now and go!</p>
										</div>
										<a href="{{route('roomlist')}}" class="pull-right">view all <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
									<div class="modcontent">
										<div class="grid clearfix so-deal modcontent products-list preset00-3 preset01-3 preset02-2 preset03-2 preset04-1 button-type1 style2">
											<div class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="4" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
												@foreach ($rooms as $room)
                                                <div class="item">
													<div class="transition product-layout">
														<div class="product-item-container ">
															<div class="item-block so-quickview">
																<div class="image">
																	<?php
																	$arr=$room->image;
																	$yummy = json_decode($arr, true);
																	?>
																	<a href="tour-detail.html" target="_self">

                                                                        <img src="{{ Voyager::image( $yummy[0] ) }}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" style="width:270px; height:380px">
                                                                    </a>
																	{{-- <span class="price">${{ $room->price }}</span> --}}
																	<span class="label-bolt"><i class="fa fa-bolt" aria-hidden="true"></i></span>
																</div>
																<div class="item-content">

																	<h3><a href="{{ route('roomdetail',['id'=>$room->id, 1, 1]) }}">{{ $room->title }}</a></h3>
																	<div class="reviews-content">
																		<div class="star">
																			<span style="width: 60px"></span>
																		</div>
																	</div>
																	<ul>
																		<li><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $room->hotel->location->city }}</li>
																		<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
																		<li><i class="fa fa-user-circle" aria-hidden="true"></i> 4 Pers</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
                                                @endforeach
												{{-- <div class="item">
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
												</div> --}}
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
									<div class="clearfix head-title">
										<div class="block-title pull-left">
											<h3><span>Choose By Property Type</span></h3>
										</div>
									</div>
									<div class="modcontent">
										<div class="grid clearfix so-deal modcontent products-list preset00-3 preset01-3 preset02-2 preset03-2 preset04-1 button-type1 style2">
											<div class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="4" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
												@foreach ($types as $type)
                                                <div class="item">
													<div class="transition product-layout">
														<div class="product-item-container ">
															<div class="item-block so-quickview">
																<div class="image">
																	<a href="destination-detail.html" target="_self">
																		<img src="{{ Voyager::image( $type->image ) }}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" style=" width:270px; height:380px">
																		{{-- <img src="image/catalog/demo/product/travel/chosse1.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive"> --}}
																	</a>
																</div>
																<div class="item-content">
																	<div class="clearfix item-title">
																		<h3 class="pull-left"><a href="destination-detail.html"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $type->title }}</a></h3>
																		@php
																			$count = App\Room::where('type_id', $type->id)->count();
																		@endphp
																		<span class="pull-right">Total Room: {{ $count }}</span>
																	</div>
																	<div class="view-all"><a href="destination-list.html">View all Rooms <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
                                                @endforeach
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
									<div class="clearfix head-title">
										<div class="block-title pull-left">
											<h3><span>Choose your destinations</span></h3>
										</div>
									</div>
									<div class="modcontent">
										<div class="grid clearfix so-deal modcontent products-list preset00-3 preset01-3 preset02-2 preset03-2 preset04-1 button-type1 style2">
											<div class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="4" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
												@foreach ($locations as $location)
                                                <div class="item">
													<div class="transition product-layout">
														<div class="product-item-container ">
															<div class="item-block so-quickview">
																<div class="image">
																	<a href="destination-detail.html" target="_self">
																		<img src="{{ Voyager::image( $location->image ) }}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" style=" width:270px; height:380px">
																		{{-- <img src="image/catalog/demo/product/travel/chosse1.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive"> --}}
																	</a>
																</div>
																<div class="item-content">
																	<div class="clearfix item-title">
																		<h3 class="pull-left"><a href="destination-detail.html"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $location->city }}</a></h3>
																		@php
																			$count = App\Hotel::where('location_id', $location->id)->count();
																		@endphp
																		<span class="pull-right">Total Hotel: {{ $count }}</span>
																	</div>
																	<div class="view-all"><a href="destination-list.html">View all Hotels <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
                                                @endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
                <section class="section-home2-style6">
					<div class="container page-builder-ltr">
						<div class="row row-style row_a1">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_a1c">
								<div class="module so-deals-1tr so-deals">
									<div class="head-title clearfix">
										<div class="block-title pull-left">
											<h3><span>Inspiration for your next Trip</span></h3>
										</div>
                                        <a href="{{route('roomlist')}}" class="pull-right">view all post<i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
									<div class="module custom-ourblog2 clearfix default-nav">
										<div class="modcontent">
											<div id="so_latest_blog_1" class="so-blog-external button-type2 button-type2">
												<div class="category-slider-inner products-list yt-content-slider blog-external clearfix " data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
													@foreach ($blogs as $blog)
                                                    <div class="media">
														<div class="item head-button">
															<div class="content-detail">
																<div class="media-content so-block">
																	<h4 class="media-heading head-item">
																		<a href="blog-detail.html" title="Aestibulum ipsum a ornare car" >{{ $blog->title }}</a>
																	</h4>
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
																	<div class="description">
                                                                        {!! substr(strip_tags($blog->description), 0, 200) !!}@if(strlen(strip_tags($blog->description)) > 200){{ '...' }}@endif
																		{{-- {!! $blog->description !!} --}}
																	</div>
																	<div class="readmore">
																		<a href="blog-detail.html" >Read more</a>
																	</div>
																</div>
															</div>
															<div class="content-img">
																<a href="#" >
																	<img src="{{ Voyager::image( $blog->image ) }}" alt="Aestibulum ipsum a ornare car" width="670" height="477">
																</a>
															</div>
														</div>
													</div>
                                                    @endforeach

													{{-- <div class="media">
														<div class="item head-button">
															<div class="content-detail">
																<div class="media-content so-block">
																	<h4 class="media-heading head-item">
																		<a href="blog-detail.html" title="Aestibulum ipsum a ornare car" >The 7 Best Ways To Travel Around Europe Cheap</a>
																	</h4>
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
																	<div class="description">
																		Traveling around Europe can be fairly expensive. Airline tickets, high-speed trains, overnight trains, ferries they can all eat into your limited and precious travel budget.  I mean, you came to spend money on delicious...
																	</div>
																	<div class="readmore">
																		<a href="blog-detail.html" >Read more</a>
																	</div>
																</div>
															</div>
															<div class="content-img">
																<a href="#" >
																	<img src="image/catalog/demo/blog/blogh22.jpg" alt="Aestibulum ipsum a ornare car" width="670" height="477">
																</a>
															</div>
														</div>
													</div>
													<div class="media">
														<div class="item head-button">
															<div class="content-detail">
																<div class="media-content so-block">
																	<h4 class="media-heading head-item">
																		<a href="blog-detail.html" title="Aestibulum ipsum a ornare car" >The 7 Best Ways To Travel Around Europe Cheap</a>
																	</h4>
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
																	<div class="description">
																		Traveling around Europe can be fairly expensive. Airline tickets, high-speed trains, overnight trains, ferries they can all eat into your limited and precious travel budget.  I mean, you came to spend money on delicious...
																	</div>
																	<div class="readmore">
																		<a href="blog-detail.html" >Read more</a>
																	</div>
																</div>
															</div>
															<div class="content-img">
																<a href="#" >
																	<img src="image/catalog/demo/blog/blogh23.jpg" alt="Aestibulum ipsum a ornare car" width="670" height="477">
																</a>
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
					</div>
				</section>
				<section class="section-style1">
					<div class="container page-builder-ltr">
						<div class="row row-style row_a1">
							<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col_a1c about-text">
								<h3><span>About us</span></h3>
								<p>Our business:</p>
                                <ul>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>Hotels</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>Employment Placement</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>Private Security</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>Cleaning Services</li>
                                    {{-- <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>Inclusive Packages</li> --}}
                                </ul>
								<div class="clearfix about-more"><a href="{{route('about-us')}}">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col_a1c about-video">
								<div class="ytvideo" data-video="ibuUmMhD2Pg" style="width:870px; height:420px; background-image:url(image/about-us.jpeg)">
									<div class="seo">Travel</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<!-- //Main Container -->
@endsection
