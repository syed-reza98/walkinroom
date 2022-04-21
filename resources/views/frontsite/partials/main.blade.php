<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs
	============================================ -->
	<title>Walkinroom</title>
	<meta charset="utf-8">
	<meta name="keywords" content="Hotel Site" />
	<meta name="description" content="Walkinroom is a beautiful and creative hotel booking site" />
	<meta name="author" content="Magentech">
	<meta name="robots" content="index, follow" />
<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Favicon
	============================================ -->

<!-- Libs CSS
	============================================ -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
	<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
	<link href="{{ asset('js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
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
	<link href="{{ asset('css/themecss/so-category-slider.css') }}" rel="stylesheet">
	<link href="{{ asset('css/themecss/so-newletter-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('css/footer/footer1.css') }}" rel="stylesheet">
	<link href="{{ asset('css/header/header1.css') }}" rel="stylesheet">
	<link id="color_scheme" href="{{ asset('css/theme.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
	<link href="{{ asset('css/quickview/quickview.css') }}" rel="stylesheet">
<!-- Google web fonts
	============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800&display=swap" rel="stylesheet">
	<style type="text/css">
		body{font-family: 'Libre Franklin', sans-serif;}
	</style>
</head>
<body class="common-home res layout-1">
	<div id="wrapper" class="wrapper-fluid banners-effect-10">
		<!-- Header Container  -->
		<header id="header" class=" typeheader-1">
			<!-- Header Top -->
			<div class="header-bonus">
				<div class="container">
					<ul class="bonus-phone pull-left">
						<li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:0123456789">+44 7404 945085</a></li>
						<li><i class="fa fa-map-marker" aria-hidden="true"></i> London</li>
					</ul>
					<ul class="bonus-social pull-left">
						<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>
					<div class="bonus-language pull-right">
						<form action="#" method="post" enctype="multipart/form-data">
							<div class="btn-group">
								<button class="btn-link dropdown-toggle" data-toggle="dropdown">
									<img src="image/catalog/flags/gb.png" alt="English" title="English">
									<span class="hidden-xs hidden-sm hidden-md"></span> <i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu">
									{{-- <li>
										<button class="btn-block language-select" type="button" name="ar-ar"><img src="image/catalog/flags/ar.png" alt="Arabic" title="Arabic" /> Arabic</button>
									</li> --}}
									<li>
										<button class="btn-block language-select" type="button" name="en-gb"><img src="image/catalog/flags/gb.png" alt="English" title="English" /> English</button>
									</li>
								</ul>
							</div>
							<input type="hidden" name="code" value="" />
							<input type="hidden" name="redirect" value="#" />
						</form>
					</div>
                    <div class="bonus-login pull-right">
						<a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> Sign in</a>
					</div>
					{{-- <div class="bonus-login pull-right">
						<a data-toggle="modal" data-target="#so_sociallogin" href="#"><i class="fa fa-user" aria-hidden="true"></i> Sign in</a>
					</div> --}}
				</div>
			</div>
			<div class="header-top hidden-compact">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-xs-3 header-logo pull-left">
							<div class="navbar-logo">
								<a href="{{route('index')}}" ><img src="{{asset('image/catalog/demo/logo/lg.png')}}" alt="Your Store" width="118" height="36" title="Your Store"></a>
							</div>
						</div>
						<div class="book pull-right">
							<a href="{{route('contact-us')}}">inquiry</a>
						</div>
						<div class="search-top pull-right">
							<div class="icon-search"><i class="fa fa-search" aria-hidden="true"></i></div>
							<form method="get" action="#">
								<div id="sw_search" class="search input-group">
									<div class="content-search">
										<input class="autosearch-input" type="text" value="" size="50" autocomplete="off" placeholder="Search..." name="s">
										<span class="input-group-btn">
											<button type="submit" class="fa fa-search button-search-pro form-button"></button>
										</span>
									</div>
								</div>
							</form>
						</div>
						<!-- Menuhome -->
						<div class="header-menu pull-right">
							<div class="megamenu-style-dev megamenu-dev">
								<div class="responsive">
									<nav class="navbar-default">
										<div class="container-megamenu horizontal">
											<div class="navbar-header">
												<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>
											<div class="megamenu-wrapper">
												<span id="remove-megamenu" class="fa fa-times"></span>
												<div class="megamenu-pattern">
													<div class="container">
														<ul class="megamenu" data-transition="slide" data-animationtime="500">
															<li class="menu-home with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="{{route('index')}}" class="clearfix">
																	<strong>
																		Home
																	</strong>
																</a>
															</li>

                                                            <li class="style-page with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="{{route('roomlist')}}" class="clearfix">
																	<strong>
																		Room List
																	</strong>
																	<span class="labelwordpress"></span>
																</a>
															</li>

															<li class="style-page with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="{{route('about-us')}}" class="clearfix">
																	<strong>
																		About Us
																	</strong>
																	<span class="labelwordpress"></span>
																</a>
															</li>

                                                            <li class="style-page with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="{{route('contact-us')}}" class="clearfix">
																	<strong>
																		Contact Us
																	</strong>
																	<span class="labelwordpress"></span>
																</a>
															</li>
															{{-- <li class="style-page with-sub-menu hover">
																<p class="close-menu"></p>
																<a  class="clearfix">
																	<strong>
																		Destination
																	</strong>
																	<span class="labelNew"></span>
																</a>
																<div class="sub-menu" style="width: 90%;">
																	<div class="content">
																		<div class="row">
																			<div class="col-md-6">
																				<h3>Top destinations</h3>
																				<ul class="row-list">
																					<li><a class="subcategory_item" href="destination-detail.html">Viet Nam</a></li>
																					<li><a class="subcategory_item" href="destination-detail.html">New Zeland</a></li>
																					<li><a class="subcategory_item" href="destination-detail.html">United State</a></li>
																					<li><a class="subcategory_item" href="destination-detail.html">Iceland</a></li>
																				</ul>
																			</div>
																			<div class="col-md-6">
																				<h3>destinations layout</h3>
																				<ul class="row-list">
																					<li><a class="subcategory_item" href="destination-list.html">destinations Fullwidth</a></li>
																					<li><a class="subcategory_item" href="destination-detail.html">destinations single</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="style-page with-sub-menu hover">
																<p class="close-menu"></p>
																<a  class="clearfix">
																	<strong>
																		Travel styles
																	</strong>
																</a>
																<div class="sub-menu" style="width: 40%;">
																	<div class="content">
																		<div class="row">
																			<div class="col-md-12">
																				<ul class="row-list">
																					<li><a class="subcategory_item" href="#">Adventure</a></li>
																					<li><a class="subcategory_item" href="#">Holiday</a></li>
																					<li><a class="subcategory_item" href="#">Family Tour</a></li>
																					<li><a class="subcategory_item" href="#">Cheap Trip</a></li>
																					<li><a class="subcategory_item" href="#">Open Tour</a></li>
																					<li><a class="subcategory_item" href="#">Historical</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="style-page with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<strong>
																		Blog
																	</strong>
																</a>
																<div class="sub-menu" style="width: 40%;">
																	<div class="content" >
																		<div class="row">
																			<div class="col-md-12">
																				<ul class="row-list">
																					<li><a class="subcategory_item" href="blog-grid.html">Blog Fullwidth</a></li>
																					<li><a class="subcategory_item" href="blog-list.html">Blog List</a></li>
																					<li><a class="subcategory_item" href="blog-sidebar.html">Blog Grid</a></li>
																					<li><a class="subcategory_item" href="blog-detail.html">Blog Single</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="style-page with-sub-menu hover">
																<p class="close-menu"></p>
																<a  class="clearfix">
																	<strong>
																		Pages
																	</strong>
																</a>
																<div class="sub-menu" style="width: 40%;">
																	<div class="content" >
																		<div class="row">
																			<div class="col-md-12">
																				<ul class="row-list">
																					<li><a class="subcategory_item" href="about-us.html">About us</a></li>
																					<li><a class="subcategory_item" href="contact-us-v1.html">Contact us</a></li>
																					<li><a class="subcategory_item" href="contact-us-v2.html">Contact us v2</a></li>
																					<li><a class="subcategory_item" href="404.html">404 Error</a></li>
																					<li><a class="subcategory_item" href="faq.html">Faq</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li> --}}
														</ul>
													</div>
												</div>
											</div>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header Top -->
		</header>
		<!-- //Header Container  -->
		<div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true" >
			<div class="modal-dialog block-popup-login">
				<a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a>
				<div class="tt_popup_login"><strong>Sign in Or Register</strong></div>
				<div class="block-content">
					<div class=" col-reg registered-account">
						<div class="block-content">
							<form class="form form-login" action="#" method="post" id="login-form">
								<fieldset class="fieldset login" data-hasrequired="* Required Fields">
									<div class="field email required email-input">
										<div class="control">
											<input name="email" value="" autocomplete="off" id="email" type="email" class="input-text" title="Email" placeholder="E-Mail Address">
										</div>
									</div>
									<div class="field password required pass-input">
										<div class="control">
											<input name="password" type="password" autocomplete="off" class="input-text" id="pass" title="Password" placeholder="Password">
										</div>
									</div>
									<div class=" form-group">
										<label class="control-label">Login with your social account</label>
										<div>
											<a href="#" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>

											<a href="#" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>

											<a href="#" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>

											<a href="#" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>
										</div>
									</div>
									<div class="secondary ft-link-p"><a class="action remind" href="#"><span>Forgot Your Password?</span></a></div>
									<div class="actions-toolbar">
										<div class="primary">
											<button type="submit" class="action login primary" name="send" id="send2"><span>Login</span></button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
					<div class="col-reg login-customer">
						<h2>NEW HERE?</h2>
						<p class="note-reg">Registration is free and easy!</p>
						<ul class="list-log">
							<li>Faster checkout</li>
							<li>Save multiple shipping addresses</li>
							<li>View and track orders and more</li>
						</ul>
						<a class="btn-reg-popup" title="Register" href="#">Create an account</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
		</div>
		<!-- Main Container  -->
		@yield('content')
		<!-- //Main Container -->
		<!-- Footer Container -->
		<footer class="footer-container typefooter-1">
			<div class="footer-has-toggle" id="collapse-footer">
				<div class="so-page-builder">
					<div class="container-fluid page-builder-ltr">
						<div class="row row_mvtd footer--center2 row-color ">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6fdl float_none container">
								<div class="row row_hwmc  ">
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col_6ps1 footer--link">
										<div class="footer-logo">
											<a href="{{route('index')}}"><img src="{{asset('image/logo/lg-footer.png')}}" alt="Your Store" width="194" height="59" title="Your Store"></a>
										</div>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form...</p>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col_6ps1 footer--link">
										<h3 class="title-footer">
											Address
										</h3>
										<ul class="about-list">
											<li><i class="fa fa-map-marker" aria-hidden="true"></i><span class="ab-pd">Ranelagh Place, Liverpool, L3 5UL, England</span></li>
											<li class="call-mail"><i class="fa fa-paper-plane" aria-hidden="true"></i><a class="ab-pd" href="mailto:contact@wpthemego.com">contact@wpthemego.com</a></li>
											<li class="call-phone"><i class="fa fa-mobile" aria-hidden="true"></i><a class="ab-pd" href="#"> +44 7404 945085</a></li>
										</ul>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col_6ps1 footer--link">
										<h3 class="title-footer">
											Useful Links
										</h3>
										<ul class="links">
											<li>
												<a href="{{route('index')}}">Home</a>
											</li>
											<li>
												<a href="{{route('about-us')}}">About</a>
											</li>
											<li>
												<a href="#">Privacy Policy</a>
											</li>
											<li>
												<a href="#">Terms & Condition</a>
											</li>
											<li>
												<a href="#">Latest News</a>
											</li>
										</ul>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col_6ps1 footer--link">
										<h3 class="title-footer">
											Contact
										</h3>
										<ul class="links">
											<li>
												<a href="{{route('about-us')}}">About Us</a>
											</li>
											<li>
												<a href="{{route('contact-us')}}">Contact Us</a>
											</li>
											<li>
												<a href="blog-grid.html">Blog</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-toggle hidden-lg hidden-md">
				<a class="showmore collapsed" data-toggle="collapse" href="#collapse-footer" aria-expanded="false" aria-controls="collapse-footer">
					<span class="toggle-more"><i class="fa fa-angle-double-down"></i>Show More</span>
					<span class="toggle-less"><i class="fa fa-angle-double-up"></i>Show less</span>
				</a>
			</div>
			<div class="footer-bottom ">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 copyright">
							Sw PortKey ©2019. All Rights Reserved. Designed by <a href="https://wpthemego.com/" target="_blank">wpthemego.Com</a>
						</div>
						<div class="col-md-6 col-sm-6 social">
							<h3>Follows Us:</h3>
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
		</footer>
		<!-- //end Footer Container -->
	</div>
	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
	<!-- End Color Scheme
		============================================ -->
	<!-- Include Libs & Plugins
		============================================ -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script type="text/javascript" src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/themejs/so_megamenu.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/slick-slider/slick.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/themejs/libs.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/unveil/jquery.unveil.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/countdown/jquery.countdown.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/datetimepicker/moment.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/modernizr/modernizr-2.6.2.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/minicolors/jquery.miniColors.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/quickview/jquery.magnific-popup.min.js') }}"></script>
	<!-- Theme files
		============================================ -->
		<script type="text/javascript" src="{{ asset('js/themejs/application.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/themejs/homepage.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/themejs/custom_h1.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/themejs/nouislider.js') }}"></script>
	</body>
</html>
