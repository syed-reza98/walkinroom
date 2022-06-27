<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs
	============================================ -->
	<title>Booking step</title>
	<meta charset="utf-8">
	<meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
	<meta name="description" content="PortKey is a beautiful and creative travel booking HTML template for any travel designs" />
	<meta name="author" content="Magentech">
	<meta name="robots" content="index, follow" />
<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Favicon
	============================================ -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    {{-- <script src="scripts/jquery.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

<!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
	<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
	<link href="{{ asset('js/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/themecss/lib.css') }}" rel="stylesheet">
	<link href="{{ asset('js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
	<link href="{{ asset('js/minicolors/miniColors.css') }}" rel="stylesheet">
<!-- Theme CSS
	============================================ -->
	<link href="{{ asset('css/themecss/so_sociallogin.css') }}" rel="stylesheet">
	<link href="{{ asset('css/themecss/so_searchpro.css') }}" rel="stylesheet">
	<link href="{{ asset('css/themecss/so_megamenu.css') }}" rel="stylesheet">
	<link href="{{ asset('css/themecss/so-categories.css') }}" rel="stylesheet">
	<link href="{{ asset('css/themecss/so-listing-tabs.css') }}" rel="stylesheet">
	<link href="{{ asset('css/themecss/so-category-slider.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/themecss/so-newletter-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('css/footer/footer1.css') }}" rel="stylesheet">
	<link href="{{ asset('css/header/header1.min.css') }}" rel="stylesheet">
	<link id="color_scheme" href="{{ asset('css/theme.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/quickview/quickview.css') }}" rel="stylesheet">
<!-- Google web fonts
	============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800&display=swap" rel="stylesheet">
	<style type="text/css">
	body{font-family: 'Libre Franklin', sans-serif;}
</style>


</head>

<body class="loaded layout-bookstep">
	<div id="wrapper" class="wrapper-fluid banners-effect-10">
		<!-- Main Container  -->
		<form method="get" class="form-bookingstep clearfix">
			<div id="wizard" onchange="myFun()">
				<h3>Choose date</h3>
				<section class="clearfix">
					<div class="conten-left pull-left">
						<div class="item">
							<div class="item-block clearfix">
								<div class="image">
                                    <?php
                                    $arr=$room->image;
                                    $yummy = json_decode($arr, true);
                                    // dd($yummy[0]);
                                    ?>
									<a href="#" target="_self">
										<img src="{{ Voyager::image( $yummy[0] ) }}" alt="Tokyo" class="img-responsive">
									</a>
									{{-- <span class="price">$230</span> --}}
								</div>
								<div class="item-content">
									<h3><a href="#">{{ $room->title }}</a></h3>
									<div class="reviews-content">
										<div class="star">
											<span style="width: 60px"></span>
										</div>
									</div>
									{{-- <div class="des"><i class="fa fa-clock-o" aria-hidden="true"></i>4 day 3 night</div> --}}
								</div>
							</div>
						</div>
					</div>
					<div class="conten-right pull-left">
						<div class="choose-top clearfix">
							<h4>Choose Your Tour</h4>
							<div class="form-item required">
								<label class="control-label" for="input-number">Check-in</label>
                                <input type="date" name="cin" id="cin" placeholder="Check-in date" required="True">
								{{-- <input type="text" class="tour-search-input datepicker-booking" id="date_arrival" placeholder="DD/MM/YY"> --}}
							</div>
							<div class="form-item required">
								<label class="control-label" for="input-number">Check-out</label>
                                <input type="date" name="cout" id="cout" placeholder="Check-Out date" required="True">
								{{-- <input type="text" class="tour-search-input datepicker-booking" id="date_departure" placeholder="DD/MM/YY"> --}}
							</div>
							<div class="form-item item1 number required">
								<label class="control-label" for="input-adult">Adult</label>
								<input type="number" name="budget" value="" min="1" placeholder="2" id="adult">
							</div>
							<div class="form-item number">
								<label class="control-label" for="input-childrens">Childrens</label>
								<input type="number" name="budget" value="" min="1" placeholder="1" id="input-childrens">
							</div>
                            <button type="button" id="datebtn" class="button">Update Price <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            {{-- <button id="datebtn" type='button'>Update Price</button> --}}
                            <input type="hidden" name="nowDate" id="nowDate">
                            <input type="hidden" name="price" id="price" value="{{ $room->price }}">
                            <input type="hidden" name="result" id="result" value="">
                            <input type="hidden" name="pp" id="pp" value="">
                            <input type="hidden" name="redate" id="redate" value="">

						</div>
						<ul class="total clearfix">
							{{-- <li>
								<span>2 Adult & 1 Child</span>
								<label>$625.0</label>
							</li>
							<li>
								<span>Tax (10%)</span>
								<label>+ $60.0</label>
							</li>
							<li>
								<span>Tour Discount (-10%)</span>
								<label>- $60.0</label>
							</li> --}}
							<li>
								<span>Total price</span>
								<label id='demo'></label>
							</li>
						</ul>
					</div>
				</section>
				<h3>PAssenger info</h3>
				<section class="clearfix">
					<div class="conten-left pull-left">
						<div class="item clearfix">
							<div class="item-block clearfix">
								<div class="image">
									<a href="#" target="_self">
										<img src="image/catalog/demo/product/travel/p6.jpg" alt="Tokyo" class="img-responsive">
									</a>
									{{-- <span class="price">$230</span> --}}
								</div>
								<div class="item-content">
									<h3><a href="#">2 Day 1 Night Trip to Santorini, Greece</a></h3>
									<div class="reviews-content">
										<div class="star">
											<span style="width: 60px"></span>
										</div>
									</div>
									<div class="des"><i class="fa fa-clock-o" aria-hidden="true"></i>4 day 3 night</div>
								</div>
							</div>
							<ul class="check clearfix">
								<li>
									<span>Check-in:</span>
									<label>Tue, Jan 15 2019</label>
								</li>
								<li>
									<span>Check-out:</span>
									<label>Sat, Jan 19 2019</label>
								</li>
								<li>
									<span>Tour for</span>
									<label>2 Adults & 1 Child</label>
								</li>
							</ul>
							<ul class="total clearfix">
								{{-- <li>
									<span>2 Adult & 1 Child</span>
									<label>$625.0</label>
								</li>
								<li>
									<span>Tax (10%)</span>
									<label>+ $60.0</label>
								</li>
								<li>
									<span>Tour Discount (-10%)</span>
									<label>- $60.0</label>
								</li> --}}
								<li>
									<span>Total price</span>
									<label id='demo1'></label>
								</li>
							</ul>
						</div>
					</div>
					<div class="conten-right pull-left">
						<div class="choose-top clearfix">
							<h4>Your Booking Detail</h4>
							<div class="form-item item1 required">
								<label class="control-label" for="input-firstname">First Name</label>
								<input type="text" name="firstname" value="" placeholder="" id="input-firstname">
							</div>
							<div class="form-item required">
								<label class="control-label" for="input-lastname">Last Name</label>
								<input type="text" name="lastname" value="" placeholder="" id="input-lastname">
							</div>
							<div class="form-item item1 required">
								<label class="control-label" for="input-email">Email</label>
								<input type="email" name="email" value="" placeholder="" id="input-email">
							</div>
							<div class="form-item number2 required">
								<label class="control-label" for="input-telephone">Phone number</label>
								<input type="number" name="telephone" value="" placeholder="" id="input-telephone">
							</div>
							<div class="form-item item-add">
								<label class="control-label" for="input-adddress">Address</label>
								<input type="text" name="adddress" value="" placeholder="" id="input-adddress">
							</div>
							<div class="form-item item-add">
								<label class="control-label" for="input-requirement">Requirement Note </label>
								<textarea name="accomodations" rows="6" id="input-requirement"></textarea>
							</div>
						</div>
					</div>
				</section>
				<h3>check-out</h3>
				<section class="clearfix">
					<div class="conten-left pull-left">
						<div class="item clearfix">
							<div class="item-block clearfix">
								<div class="image">
									<a href="#" target="_self">
										<img src="image/catalog/demo/product/travel/p6.jpg" alt="Tokyo" class="img-responsive">
									</a>
									<span class="price">$230</span>
								</div>
								<div class="item-content">
									<h3><a href="#">2 Day 1 Night Trip to Santorini, Greece</a></h3>
									<div class="reviews-content">
										<div class="star">
											<span style="width: 60px"></span>
										</div>
									</div>
									<div class="des"><i class="fa fa-clock-o" aria-hidden="true"></i>4 day 3 night</div>
								</div>
							</div>
							<ul class="check clearfix">
								<li>
									<span>Check-in:</span>
									<label>Tue, Jan 15 2019</label>
								</li>
								<li>
									<span>Check-out:</span>
									<label>Sat, Jan 19 2019</label>
								</li>
								<li>
									<span>Tour for</span>
									<label>2 Adults & 1 Child</label>
								</li>
							</ul>
							<ul class="total clearfix">
								{{-- <li>
									<span>2 Adult & 1 Child</span>
									<label>$625.0</label>
								</li>
								<li>
									<span>Tax (10%)</span>
									<label>+ $60.0</label>
								</li>
								<li>
									<span>Tour Discount (-10%)</span>
									<label>- $60.0</label>
								</li> --}}
								<li>
									<span>Total price</span>
									<label id='demo2'></label>
								</li>
							</ul>
						</div>
					</div>
					<div class="conten-right pull-left">
						<div class="choose-top clearfix">
							<h4>Your Payment Detail</h4>
							<ul class="sw_payment_methods">
								<li>
									<label class="contain" for="payment_method_payment">Payment upon check-in <i>(2 days duration)</i>
										<input id="payment_method_payment" type="radio" class="input-radio" name="payment_method" value="payment" data-order_button_text="">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="contain" for="payment_method_credit">Via credit card
										<input id="payment_method_credit" type="radio" class="input-radio" name="payment_method" value="credit" checked="checked" data-order_button_text="">
										<span class="checkmark"></span>
										<img src="image/icon/icon-payment.png" alt="payment" class="img-responsive pull-right">
									</label>
									<div class="payment_method_credit">
										<div class="form-item item1 required">
											<label class="control-label" for="input-payment">Payment Method</label>
											<select name="payment">
												<option value="1">Visa</option>
												<option value="2">Visa 2</option>
												<option value="3">Visa 3</option>
											</select>
										</div>
										<div class="form-item required">
											<label class="control-label" for="input-cardnumb">Card number</label>
											<input type="text" name="cardnumb" value="" placeholder="" id="input-cardnumb">
										</div>
										<div class="form-item item1 required">
											<label class="control-label" for="input-cardname">Card Holder Name</label>
											<input type="text" name="cardname" value="" placeholder="" id="input-cardname">
										</div>
										<div class="form-item item2 date required">
											<label class="control-label" for="input-number">Expiry Date</label>
											<input type="text" class="tour-search-input datepicker-booking" id="date_exp" placeholder="DD/MM/YY">
										</div>
										<div class="form-item item3 required">
											<label class="control-label" for="input-cvc">CVC/CVV</label>
											<input type="text" name="cvc" value="" placeholder="" id="input-cvc">
										</div>
									</div>
								</li>
								<li>
									<label class="contain" for="payment_method_paypal">Via Paypal
										<input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="">
										<span class="checkmark"></span>
										<img src="image/icon/icon-payment2.png" alt="payment" class="img-responsive pull-right">
									</label>
								</li>
							</ul>
						</div>
					</div>
				</section>
				<h3>Complete!</h3>
				<section class="clearfix">
					<div class="conten-left pull-left">
						<div class="item clearfix">
							<div class="item-block clearfix">
								<div class="image">
									<a href="#" target="_self">
										<img src="image/catalog/demo/product/travel/p6.jpg" alt="Tokyo" class="img-responsive">
									</a>
									<span class="price">$230</span>
								</div>
								<div class="item-content">
									<h3><a href="#">2 Day 1 Night Trip to Santorini, Greece</a></h3>
									<div class="reviews-content">
										<div class="star">
											<span style="width: 60px"></span>
										</div>
									</div>
									<div class="des"><i class="fa fa-clock-o" aria-hidden="true"></i>4 day 3 night</div>
								</div>
							</div>
							<ul class="check clearfix">
								<li>
									<span>Check-in:</span>
									<label>Tue, Jan 15 2019</label>
								</li>
								<li>
									<span>Check-out:</span>
									<label>Sat, Jan 19 2019</label>
								</li>
								<li>
									<span>Tour for</span>
									<label>2 Adults & 1 Child</label>
								</li>
							</ul>
							<ul class="total clearfix">
								{{-- <li>
									<span>2 Adult & 1 Child</span>
									<label>$625.0</label>
								</li>
								<li>
									<span>Tax (10%)</span>
									<label>+ $60.0</label>
								</li>
								<li>
									<span>Tour Discount (-10%)</span>
									<label>- $60.0</label>
								</li> --}}
								<li>
									<span>Total price</span>
									<label id='demo3'></label>
								</li>
							</ul>
						</div>
					</div>
					<div class="conten-right pull-left">
						<div class="choose-top clearfix">
							<h4>Comfirm Information</h4>
							<div class="title clearfix">
								<span class="pull-left">Traveller Information</span>
								<a class="pull-right" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
							</div>
							<ul class="confirm">
								<li>
									<span>Booking Number</span>
									<label>#342</label>
								</li>
								<li>
									<span>First Name</span>
									<label>Smith</label>
								</li>
								<li>
									<span>Last Name</span>
									<label>John</label>
								</li>
								<li>
									<span>Email Address</span>
									<label>johnsmith324@gmail.com</label>
								</li>
								<li>
									<span>Phone Number</span>
									<label>+1 265 472 374</label>
								</li>
								<li>
									<span>Address</span>
									<label>4001 Avenue K, Brooklyn, NY 11210</label>
								</li>
								<li>
									<span>Requirement Note</span>
									<label>Empty</label>
								</li>
							</ul>
							<div class="title clearfix">
								<span class="pull-left">Payment Method</span>
							</div>
							<ul class="sw_payment_methods style2">
								<li>
									<label class="contain" for="payment_method_paypal2"> 4422-xxxx-5314-2345
										<input id="payment_method_paypal2" type="radio" checked="checked" class="input-radio" name="payment_method" value="paypal" data-order_button_text="">
										<span class="checkmark"></span>
										<img src="image/icon/icon-payment2.png" alt="payment" class="img-responsive pull-left">
									</label>
									<a class="pull-right" href="#"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Add new card</a>
								</li>
							</ul>
						</div>
					</div>
				</section>
                <script>
                    $(document).ready( function() {
                        let now = new Date();

                        let day = ("0" + now.getDate()).slice(-2);
                        let month = ("0" + (now.getMonth() + 1)).slice(-2);

                        let today = now.getFullYear()+"-"+ (month)+"-"+(day);


                    $('#nowDate').val(today);
                        $('#cin').val(today);
                        $('#cout').val(today);

                        $('#wizard').click(function(){

                            testClicked();
                            myPer();
                            myDate();
                            myPrice();

                        });
                    });
                    function myFun()
                    {
                        var date1 = new Date(document.getElementById("nowDate").value);
                        var date2 = new Date(document.getElementById("cin").value);
                        var date3 = new Date(document.getElementById("cout").value);
                        var re = parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10);
                        var days = parseInt((date3 - date2) / (1000 * 60 * 60 * 24), 10);
                        var price = document.getElementById("price").value;
                        var per = 0;
                        if(re == 1){
                            per = 0.5;
                        }else if(re == 2){
                            per = 0.25;
                        }else if(re == 0){
                            per = 0.5;
                        }else{
                            per = 0.15;
                        }
                        let gun = price * per;
                        let newprice = (Number(price) + Number(gun)).toFixed(2);
                        let totalprice = (Number(days) * Number(newprice)).toFixed(2);
                        // var date2 = new Date(document.getElementById("cout").value);
                        // var diffDay = parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10);
                        $('#pp').val(totalprice);
                        // document.getElementById("demo").innerHTML = "$" + totalprice;
                        // document.getElementById("pp").value = re;
                    }
                    function myClick()
                    {
                        testClicked();
                        myPer();
                        myDate();
                        myPrice();
                    }
                    function testClicked()
                    {
                    $('.getDate').html($('#nowDate').val());
                    $('.cinDate').html($('#cin').val());
                    $('.coutDate').html($('#cout').val());
                    }
                    function myPer() {
                        var date1 = new Date(document.getElementById("nowDate").value);
                        var date2 = new Date(document.getElementById("cin").value);
                        var diffDays = parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10);
                        // document.getElementById("result").value = diffDays;
                        $('#result').val(diffDays);
                    }
                    function myDate() {
                        var date1 = new Date(document.getElementById("cin").value);
                        var date2 = new Date(document.getElementById("cout").value);
                        var diffDay = parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10);
                        // document.getElementById("redate").value = diffDay;
                        $('#redate').val(diffDay);
                    }
                    function myPrice() {
                        var re = document.getElementById("result").value;
                        var days = document.getElementById("redate").value;
                        var price = document.getElementById("price").value;
                        var per = 0;
                        if(re == 1){
                            per = 0.5;
                        }else if(re == 2){
                            per = 0.25;
                        }else if(re == 0){
                            per = 0.5;
                        }else{
                            per = 0.15;
                        }
                        let gun = price * per;
                        let newprice = (Number(price) + Number(gun)).toFixed(2);
                        let totalprice = (Number(days) * Number(newprice)).toFixed(2);
                        // var date2 = new Date(document.getElementById("cout").value);
                        // var diffDay = parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10);
                        $('#pp').val(newprice);
                        document.getElementById("demo").innerHTML = "$" + totalprice;
                        document.getElementById("demo1").innerHTML = "$" + totalprice;
                        document.getElementById("demo2").innerHTML = "$" + totalprice;
                        document.getElementById("demo3").innerHTML = "$" + totalprice;
                        // document.getElementById("pp").value = re;
                    }
                </script>
            </div>
		</form>
		<!-- //Main Container -->
	</div>

    <script type="text/javascript">
		$(function (){
		  $("#wizard").steps({
		    headerTag: "h3",
		    bodyTag: "section",
		    transitionEffect: "slideLeft"
		  });
		  $('.datepicker-booking').datetimepicker({
			format: 'dd/MM/YYYY'
		  });
		});
	</script>



    <script type="text/javascript" src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/so_megamenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick-slider/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/libs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/unveil/jquery.unveil.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/countdown/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/datetimepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr/modernizr-2.6.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/minicolors/jquery.miniColors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.nav.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/quickview/jquery.magnific-popup.min.js') }}"></script>
<!-- Theme files
    ============================================ -->
    <script type="text/javascript" src="{{ asset('js/themejs/application.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/homepage.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/jquery.steps.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/custom_h1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/nouislider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/searchprice.js') }}"></script>

</body>
</html>
