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
					<div class="contact-top clearfix">
						<div class="container">
							<div class="row">
								<div class="item col-lg-4 col-md-4 col-sm-12">
									<div class="item-wrap">
										<span><img src="image/icon/icon-phone.png" alt="phone" class="img-responsive"></span>
										<div class="content">
											<h3>Call Us Now</h3>
											<p>Line: +00 1357 631</p>
											<p>Emergency: +00 1357 631</p>
										</div>
									</div>
								</div>
								<div class="item item2 col-lg-4 col-md-4 col-sm-12">
									<div class="item-wrap">
										<span><img src="image/icon/icon-mail.png" alt="mail" class="img-responsive"></span>
										<div class="content">
											<h3>Email</h3>
											<p>Line: +00 1357 631</p>
											<p>Emergency: +00 1357 631</p>
										</div>
									</div>
								</div>
								<div class="item item3 col-lg-4 col-md-4 col-sm-12">
									<div class="item-wrap">
										<span><img src="image/icon/icon-add.png" alt="add" class="img-responsive"></span>
										<div class="content">
											<h3>Location</h3>
											<p>Line: +00 1357 631</p>
											<p>Emergency: +00 1357 631</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5235.281234622878!2d-74.009579709455!3d40.71146597631483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2zVGjDoG5oIHBo4buRIE5ldyBZb3JrLCBUaeG7g3UgYmFuZyBOZXcgWW9yaywgSG9hIEvhu7M!5e0!3m2!1svi!2s!4v1572333240599!5m2!1svi!2s" width="1920" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="contact-bot clearfix">
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
					<section class="section-home2-style7">
						<div class="container page-builder-ltr">
							<div class="head-title clearfix">
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
					</section>
				</div>
				<!-- //Main Container -->
@endsection
