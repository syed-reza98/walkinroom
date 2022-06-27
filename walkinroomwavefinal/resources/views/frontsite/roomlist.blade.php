@extends('frontsite.partials.main')

@section('content')
		<!-- Main Container  -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="title-breadcrumb">
					Rooms
				</div>
				<ul class="breadcrumb-cate">
					<li><a href="{{route('index')}}">Home</a></li>
					<li><a href="{{route('roomlist')}}">Rooms</a></li>
				</ul>
			</div>
		</div>
		<div class="container product-detail">
			<div class="row">
                @include('frontsite.partials.leftcontent')
				<div id="content" class="col-md-9 col-sm-12 col-xs-12">
					<a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>Sidebar</a>
					<div class="products-category">
						<div class="product-filter filters-panel">
							<div class="row">
								<div class="col-md-2 col-sm-2 view-mode hidden-xs">
									<div class="list-view">
										<button class="grid btn btn-default active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th-large"></i></button>
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
						<div class="grid section-style4 products-list row number-col-3 so-filter-gird">
                            @foreach ($rooms as $room)
							<div class="product-layout col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="product-item-container item">
									<div class="item-block so-quickview">
										<div class="image">
											<?php
											$arr=$room->image;
											$yummy = json_decode($arr, true);
											?>
											<a href="tour-detail.html" target="_self">

												<img src="{{ Voyager::image( $yummy[0] ) }}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" style="width:500px; height:300px">
											</a>
											<span class="label-hot"><i class="fa fa-fire" aria-hidden="true"></i>Hot tour</span>
											<span class="label-rate style2"><i class="fa fa-star" aria-hidden="true"></i>high rate</span>
										</div>
										<div class="clearfix item-content">
											<h3><a href="{{ route('roomdetail',['id'=>$room->id, 0, 0]) }}">{{ $room->title }}</a></h3>
											<div class="reviews-content">
												<div class="star">
													<span style="width: 60px"></span>
												</div>
												<a href="#" class="review-link" rel="nofollow">(15 reviews)</a>
											</div>
											<ul>
												<li><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $room->hotel->location->city }}</li>
												<li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Day</li>
												<li><i class="fa fa-user-circle" aria-hidden="true"></i> {{ $room->capacity }}</li>
											</ul>
											<div class="des">Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusantium dolorem que laudantium, ...</div>
											<div class="clearfix item-bot">
												<div class="price pull-left">
													{{-- from <label>${{ $room->price }}</label><span>person</span> --}}
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
