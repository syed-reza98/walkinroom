@extends('frontsite.partials.main')

@section('content')
		<!-- Main Container  -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="title-breadcrumb">
					Tour
				</div>
				<ul class="breadcrumb-cate">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Tour</a></li>
				</ul>
			</div>
		</div>
		<div class="container product-detail">
			<div class="row">
				<aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column sidebar-offcanvas">
					<span id="close-sidebar" class="fa fa-times"></span>
					<div class="module-search clearfix">
						<h3 class="modtitle">Tour searching</h3>
						<form method="get" class="search-pr">
							<div class="search-item city">
								<input type="text" class="tour-search-input" id="city" placeholder="Your Destination">
							</div>
							<div class="search-item date">
								<input type="text" class="tour-search-input datepicker hasDatepicker" id="date_from" placeholder="Day start">
							</div>
							<div class="search-item date">
								<input type="text" class="tour-search-input datepicker hasDatepicker" id="date_to" placeholder="Day end">
							</div>
							<div class="search-item item-select">
								<select name="people">
									<option value="1">Number</option>
									<option value="2">2 people</option>
									<option value="3">3 people</option>
									<option value="4">4 people</option>
								</select>
							</div>
							<div class="search-item item-budget">
								<input type="number" class="hotel-budget-input" id="budget" placeholder="Max budget">
							</div>
							<div class="button-submit">
								<button type="submit" class="button">Search Tour <i class="fa fa-angle-right" aria-hidden="true"></i></button>
								<input type="hidden" name="s">
								<input type="hidden" name="search_tour" value="1">
							</div>
						</form>
					</div>
					<div class="module-travel clearfix">
						<h3>travel style</h3>
						<ul>
							<li class="active"><a href="#"><span>Holiday</span><label>15</label></a></li>
							<li><a href="#"><span>Adventure</span><label>20</label></a></li>
							<li><a href="#"><span>Family Tour</span><label>5</label></a></li>
							<li><a href="#"><span>Cheap Trip</span><label>30</label></a></li>
							<li><a href="#"><span>Open Tour</span><label>18</label></a></li>
							<li><a href="#"><span>Classic Tour</span><label>6</label></a></li>
						</ul>
					</div>
					<div class="module-rate clearfix">
						<h3>star rating</h3>
						<ul>
							<li class="active"><a href="#"><div class="star"><span style="width: 75px"></span></div><label>15</label></a></li>
							<li><a href="#"><div class="star"><span style="width: 60px"></span></div><label>35</label></a></li>
							<li><a href="#"><div class="star"><span style="width: 45px"></span></div><label>20</label></a></li>
							<li><a href="#"><div class="star"><span style="width: 30px"></span></div><label>8</label></a></li>
							<li><a href="#"><div class="star"><span style="width: 15px"></span></div><label>4</label></a></li>
						</ul>
					</div>
					<div class="module-ques clearfix">
						<h3>get a questions</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem que laudantium.</p>
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+1 2618 181 612</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i>travelsp@gmail.com</li>
						</ul>
					</div>
					<div class="module-pop clearfix">
						<h3>popular tours</h3>
						<div class="item clearfix">
							<div class="image">
								<a href="tour-detail.html"><img src="image/catalog/demo/product/travel/p1.jpg" alt="Bougainvilleas on Lombard Street" class="img-responsive"></a>
							</div>
							<div class="content">
								<h4><a href="tour-detail.html">7-Day Great Britain Tour Packag...</a></h4>
								<p>from $250</p>
							</div>
						</div>
						<div class="item clearfix">
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
				<div id="content" class="col-md-9 col-sm-12 col-xs-12">
					<a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>Sidebar</a>
					<div class="products-category">
						<div class="product-filter filters-panel">
							<div class="row">
								<div class="col-md-2 col-sm-2 view-mode hidden-xs">
									<div class="list-view">
										<button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th-large"></i></button>
										<button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
									</div>
								</div>
								<div class="short-by-show form-inline col-md-10 col-sm-10">
									<div class="form-group">
										<label class="control-label" for="input-limit">Show 1-6 of 8 results</label>
									</div>
									<div class="form-group short-by">
										<select id="input-sort" class="form-control" onchange="location = this.value;">
											<option value="" selected="selected">Sort By</option>
											<option value="">Name (A - Z)</option>
											<option value="">Name (Z - A)</option>
											<option value="">Price (Low &gt; High)</option>
											<option value="">Price (High &gt; Low)</option>
											<option value="">Rating (Highest)</option>
											<option value="">Rating (Lowest)</option>
											<option value="">Model (A - Z)</option>
											<option value="">Model (Z - A)</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="section-style4 products-list grid row number-col-3 so-filter-gird">
                            @foreach ($rooms as $room)
							<div class="product-layout col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="product-item-container item">
									<div class="item-block so-quickview">
										<div class="image">
                                            @php
                                            $value = \App\Models\Photo::where(['room_id' => $room->id])->pluck('path')->first()

                                            @endphp
											<a href="tour-detail.html" target="_self">

												<img src="{{ Storage::url("{$value}") }}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
											</a>
											<span class="label-hot"><i class="fa fa-fire" aria-hidden="true"></i>Hot tour</span>
											<span class="label-rate style2"><i class="fa fa-star" aria-hidden="true"></i>high rate</span>
										</div>
										<div class="item-content clearfix">
											<h3><a href="{{route('roomdetail', ['id' => $room->id])}}">{{ $room->title }}</a></h3>
                                            @php
                                            $value = \App\Models\Photo::where(['room_id' => $room->id])->pluck('path')->first()
                                            @endphp
                                            {{-- <h3>{{ \App\Photo::where(['room_id' => $room->id])->pluck('title')->first() }}</h3> --}}
                                            <h3>{{ Storage::url("{$value}") }}</h3>
											<div class="reviews-content">
												<div class="star">
													<span style="width: 60px"></span>
												</div>
												<a href="#" class="review-link" rel="nofollow">(15 reviews)</a>
											</div>
											<ul>
												<li><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $room->hotel->location }}</li>
												<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
												<li><i class="fa fa-user-circle" aria-hidden="true"></i> {{ $room->capacity }}</li>
											</ul>
											<div class="des">Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusantium dolorem que laudantium, ...</div>
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
                            @endforeach
						</div>
						<div class="product-filter product-filter-bottom filters-panel">
							<ul class="pagination">
								<li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
								<li class="active"><span>1</span></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- //Main Container -->
@endsection
