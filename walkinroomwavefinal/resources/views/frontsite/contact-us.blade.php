@extends('frontsite.partials.main')

@section('content')
				<!-- Main Container  -->
				<div class="breadcrumbs">
					<div class="container">
						<div class="title-breadcrumb">
							Contact Us
						</div>
						<ul class="breadcrumb-cate">
							<li><a href="index.html">Home</a></li>
							<li><a href="#">Pages</a></li>
							<li><a href="contact-us-v1.html">Contact Us V1</a></li>
						</ul>
					</div>
				</div>
				<div class="contact_us">
					<div class="clearfix contact-top">
						<div class="container">
							<div class="row">
								<div class="item col-lg-4 col-md-4 col-sm-12">
									<div class="item-wrap">
										<span><img src="image/icon/icon-phone.png" alt="phone" class="img-responsive"></span>
										<div class="content">
											<h3>Call Us Now</h3>
											<p>Line:  +44 7000 000085</p>
											<p>Emergency:  +44 7000 000085</p>
										</div>
									</div>
								</div>
								<div class="item item2 col-lg-4 col-md-4 col-sm-12">
									<div class="item-wrap">
										<span><img src="image/icon/icon-mail.png" alt="mail" class="img-responsive"></span>
										<div class="content">
											<h3>Email</h3>
											<p>demo@hotmail.com</p>
											{{-- <p>Emergency:  +44 7404 945085</p> --}}
										</div>
									</div>
								</div>
								<div class="item item3 col-lg-4 col-md-4 col-sm-12">
									<div class="item-wrap">
										<span><img src="image/icon/icon-add.png" alt="add" class="img-responsive"></span>
										<div class="content">
											<h3>Location</h3>
											<p>United Kingdom</p>
											{{-- <p>Emergency:  +44 7404 945085</p> --}}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="map">
						<iframe src="https://maps.google.com/maps?q=51%C2%B033'34.6%22N%200%C2%B004'36.5%22E&t=&z=13&ie=UTF8&iwloc=&output=embed" width="1920" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="clearfix contact-bot">
						<form action="#" method="post" enctype="multipart/form-data" class="form-contact">
							<h3>Drop us a line</h3>
							<p>Contact us now and let your journey begin.</p>
							<div class="form-group required">
								<input type="text" name="name" value="" id="input-name" class="form-control" placeholder="Your Name">
							</div>
							<div class="form-group required">
								<input type="text" name="email" value="" id="input-email" class="form-control" placeholder="Your Email">
							</div>
							<div class="form-group required">
								<input type="text" name="email" value="" id="input-phone" class="form-control" placeholder="Your Phone">
							</div>
							<div class="form-group required">
								<textarea name="enquiry" rows="8" id="input-enquiry" placeholder="Your Message" class="form-control"></textarea>
							</div>
							<div class="buttons">
								<button class="btn btn-info" type="submit">Send Message</button>
							</div>
						</form>
					</div>
					{{-- <section class="section-home2-style7">
						<div class="container page-builder-ltr">
							<div class="clearfix head-title">
								<div class="block-title pull-left">
									<h3><span>Join the newsletter</span></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="sw-newletter">
								<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-838" method="post" data-id="838" data-name="">
									<div class="mc4wp-form-fields">
										<input class="frm-email" type="email" name="EMAIL" placeholder="Enter Your email..." required="">
										<button class="frm-submit" type="submit" value="subscribe">SUBSCRIBE</button>
									</div>
								</form>
							</div>
						</div>
					</section> --}}
				</div>
				<!-- //Main Container -->
@endsection
