@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
<!-- welcome section -->
<section id="lb-slider" class="beautypress-welcome-section beautypress-welcome-section-v1 welcome-height-calc-minus">
	<div class="beautypress-welcome-slider-wraper">
		<div class="beautypress-welcome-slider owl-carousel">

			@foreach($sliders as $slider)
			<div class="beautypress-welcome-slider-item @if($slider->text_position == 'right') {{ 'content-right' }} @else {{ 'content-left' }} @endif beautypress-bg"
				style='background-image: url({{ $slider->background }});'>
				<div class="container">
					<div class="beautypress-welcome-content-group">
						<div class="beautypress-welcome-container">
							<div class="beautypress-welcome-wraper">
								<h2 class="color-pink">{{ $slider->title }}</h2>
								<h3 class="color-purple"><i>{{ $slider->description }}</i></h3>
								<!-- <p class="color-black">Allow our team of beauty specialists to help you prepare
									for your wedding and enhance your special.</p>
								<div class="beautypress-btn-wraper">
									<a href="#" class="xs-btn bg-color-pink round-btn box-shadow-btn">learn more
										<span></span></a>
									<a href="#"
										class="xs-btn bg-color-purple round-btn box-shadow-btn">phurchase
										<span></span></a>
								</div> -->
							</div>
						</div><!-- .beautypress-welcome-container END -->
					</div><!-- .beautypress-welcome-content-group END -->
				</div>
			</div><!-- .beautypress-welcome-slider-item END -->
			@endforeach
			
		</div><!-- .beautypress-welcome-slider END -->
	</div>
</section><!-- .beautypress-welcome-section END -->
<!-- welcome section -->

<!-- About section -->
<section class="beautypress-about-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
				<div class="beautypress-new-about-text-gruop">
					<div class="beautypress-sub-heading beautypress-watermark-title">
						<h2 data-title="10+">10+ năm <br>kinh nghiệm</h2>
					</div><!-- .beautypress-sub-heading END -->
					<span class="beautypress-gradient-separetor"></span>
					<p>Đam mê và kiến ​​thức La Beauty tiếp tục cung cấp các dịch vụ tốt nhất trên thế giới.</p>
					<!-- <div class="beautypress-btn-wraper">
						<a href="#" class="xs-btn round-btn box-shadow-btn bg-color-purple">
							Appointment Now
							<span></span>
						</a>
					</div> -->
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<div class="beautypress-new-about-img-wraper">
					<div class="beautypress-new-about-img-group">
						<div class="beautypress-new-single-about-img-group">
							<div class="beautypress-new-single-about-img ">
								<div class="beautypress-3d-project-card">
									<img src="theme/img/ceo/tacgia1.jpg" alt="">
								</div>
							</div><!-- .beautypress-new-single-about-img .beautypress-3d END -->
						</div><!-- .beautypress-new-single-about-img-group END -->

						<div class="beautypress-new-single-about-img-group">
							<div class="beautypress-new-single-about-img beautypress-3d">
								<div class="beautypress-3d-project-card">
									<img src="theme/img/ceo/tacgia2.png" alt="">
								</div><!-- .beautypress-3d-project-card END -->
							</div><!-- .beautypress-new-single-about-img .beautypress-3d END -->
						</div><!-- .beautypress-new-single-about-img-group END -->
					</div><!-- .beautypress-new-about-img-group END -->

					<div class="beautypress-new-about-img-group">
						<div class="beautypress-new-single-about-img-group">
							<div class="beautypress-new-single-about-img beautypress-3d">
								<div class="beautypress-3d-project-card">
									<img src="theme/img/ceo/tacgia3.jpg" alt="">
								</div><!-- .beautypress-3d-project-card END -->
							</div><!-- .beautypress-new-single-about-img .beautypress-3d END -->
						</div><!-- .beautypress-new-single-about-img-group END -->

						<div class="beautypress-new-single-about-img-group">
							<div class="beautypress-new-single-about-img beautypress-3d">
								<div class="beautypress-3d-project-card">
									<img src="theme/img/ceo/tacgia4.jpg" alt="">
								</div><!-- .beautypress-3d-project-card END -->
							</div><!-- .beautypress-new-single-about-img .beautypress-3d END -->
						</div><!-- .beautypress-new-single-about-img-group END -->
					</div><!-- .beautypress-new-about-img-group END -->
				</div>
			</div>
		</div>
	</div>
</section><!-- .beautypress-about-section END -->
<!-- About section -->

<!-- Simple text with image-->
<section class="beautypress-simple-text-with-img-section bg-color-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xl-6 col-lg-6">
				<div class='twentytwenty-container beautypress-before-after'>
					<img src="theme/img/before-after-1.jpg" alt="">
					<img src="theme/img/before-after-2.jpg" alt="">
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
				<div class="beautypress-simple-text beautypress-version-2">
					<div class="beautypress-big-sub-heading">
						<h2>Secret of</h2>
						<h3>BeautyPress</h3>
					</div><!-- .beautypress-separetor-sub-heading END -->
					<div class="beautypress-simple-text-content">
						<p>After owning two successful salon locations they decided to move their passion to the
							small town of Gainesville.</p>
					</div>
					<div class="beautypress-spilit-container">
						<div class="beautypress-icon-with-text">
							<div class="beautypress-svg-ico">
								<img src="theme/img/cosmetics.svg" alt="">
							</div>
							<h3>Reflexology</h3>
							<p>Stimulates the movement of energy by applying pressure.</p>
						</div><!-- .beautypress-icon-with-text END -->
						<div class="beautypress-icon-with-text">
							<div class="beautypress-svg-ico">
								<img src="theme/img/nail.svg" alt="">
							</div>
							<h3>Nail Therapy</h3>
							<p>Wraps are intended to tone and tighten skin while helping.</p>
						</div><!-- .beautypress-icon-with-text END -->
					</div>
				</div><!-- .beautypress-simple-text END -->
			</div>
		</div>
	</div>
</section><!-- .beautypress-simple-text-with-img-section END -->
<!-- Simple text with image end -->

<!-- video section with text -->
<section class="beautypress-vedio-section-with-text section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
				<div class="beautypress-video-side-text">
					<div class="beautypress-big-sub-heading">
						<h2>Beauty Press suitable for</h2>
						<h3>Any spa, beauty, yoga website</h3>
					</div>
					<p> The bedding was hardly able to cover it and seemed ready to slide off any moment. His
						many legs, pitifully thin compared with the size of the rest of him, waved about
						helplessly as he looked. "What's happened to me.</p>
					<div class="beautypress-simple-iocn-list beautypress-version-2">
						<ul>
							<li><i class="fa fa-check"></i>Responsive</li>
							<li><i class="fa fa-check"></i>Customizeable</li>
							<li><i class="fa fa-check"></i>24/7 Online Support</li>
						</ul>
					</div><!-- .beautypress-simple-iocn-list .beautypress-version-2 END -->
					<div class="beautypress-btn-wraper">
						<a href="#" class="xs-btn bg-color-purple round-btn box-shadow-btn">learn more
							<span></span></a>
						<a href="#" class="xs-btn round-btn bg-color-pink box-shadow-btn">phurchase now
							<span></span></a>
					</div><!-- .beautypress-btn-wraper END -->
				</div><!-- .beautypress-video-side-text END -->
			</div>
			<div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
				<div class="beautypress-3d">
					<div class="beautypress-3d-project-card">
						<img src="theme/img/lady-with-floral.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- .beautypress-vedio-section-with-text END -->
<!-- video section with text -->

<!-- booking section -->
<section class="beautypress-booking-section beautypress-bg beautypress-padding-bottom parallax-bg"
	data-parallax="scroll" data-image-src="theme/img/get_appoinment.jpg">
	<div class="container">
		<div class="beautypress-section-headinig">
			<h2>We are awesome</h2>
			<h3>Get Appoinment</h3>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
				<div class="beautypress-booking-text-wraper">
					<div class="beautypress-booking-content-text beautypress-border beautypress-version-3">
						<div class="beautypress-booking-text">
							<h2>Time Shedule</h2>
							<h3>Working Hours</h3>
							<div class="beautypress-icon-bg-text">
								<p> A collection of textile samples lay spread out on the table - Samsa was a
									travelling salesman - and above it there hung a picture that he had recently
									cut out . </p>
							</div><!-- .beautypress-icon-bg-text END -->
							<ul>
								<li>Mon - Wed : 8:00am - 06:00pm</li>
								<li>Thu - Sat : 10:00am - 10:00pm</li>
								<li>Sunday: Close</li>
							</ul>
						</div><!-- .beautypress-booking-text END -->
					</div><!-- .beautypress-booking-content-text END -->
				</div><!-- .beautypress-booking-text-wraper END -->
			</div>
			<div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
				<div class="beautypress-booking-form-wraper">
					<form action="#" method="POST" id="beautypress-booking-form">
						<input type="hidden" name="action" value="send_appointment_form" />
						<div class="alert hidden" id="beautypress-form-msg"></div>
						<div class="beautypress-service-and-date">
							<h2>Service and Date</h2>
							<div class="beautypress-select">
								<div class="input-group">
									<select name="appointment-service" id="appointment-service"
										class="form-control">
										<option value="">Select your service</option>
										<option value="Oil Massage">Oil Massage ($59.00)</option>
										<option value="Relax Day">Relax Day ($199.00)</option>
										<option value="Spa & Beauty">Spa & Beauty ($299.00)</option>
										<option value="Relax Day (for Two)">Relax Day (for Two $399.00)</option>
									</select>
								</div>
							</div><!-- .beautypress-select END -->
							<div class="beautypress-spilit-container">
								<div class="beautypress-date-select beautypress-select">
									<div class="input-group">
										<input type="text" id="appointment-date" class="form-control datepicker"
											name="appointment-date" placeholder="Date Shedule">
									</div>
								</div><!-- .beautypress-date-select END -->
								<div class="beautypress-select">
									<div class="input-group">
										<select name="appointment-time" id="appointment-time"
											class="form-control">
											<option value="">Time Shedule</option>
											<option value="12:00 AM">12:00 AM</option>
											<option value="12:30 AM">12:30 AM</option>
											<option value="01:00 AM">01:00 AM</option>
											<option value="01:30 AM">01:30 AM</option>
											<option value="02:00 AM">02:00 AM</option>
											<option value="02:30 AM">02:30 AM</option>
											<option value="03:00 AM">03:00 AM</option>
											<option value="03:30 AM">03:30 AM</option>
											<option value="04:00 AM">04:00 AM</option>
											<option value="04:30 AM">04:30 AM</option>
											<option value="05:00 AM">05:00 AM</option>
											<option value="05:30 AM">05:30 AM</option>
											<option value="06:00 AM">06:00 AM</option>
											<option value="06:30 AM">06:30 AM</option>
											<option value="07:00 AM">07:00 AM</option>
											<option value="07:30 AM">07:30 AM</option>
											<option value="08:00 AM">08:00 AM</option>
											<option value="08:30 AM">08:30 AM</option>
											<option value="09:00 AM">09:00 AM</option>
											<option value="09:30 AM">09:30 AM</option>
											<option value="10:00 AM">10:00 AM</option>
											<option value="10:30 AM">10:30 AM</option>
											<option value="11:00 AM">11:00 AM</option>
											<option value="11:30 AM">11:30 AM</option>
											<option value="12:00 PM">12:00 PM</option>
											<option value="12:30 PM">12:30 PM</option>
											<option value="01:00 PM">01:00 PM</option>
											<option value="01:30 PM">01:30 PM</option>
											<option value="02:00 PM">02:00 PM</option>
											<option value="02:30 PM">02:30 PM</option>
											<option value="03:00 PM">03:00 PM</option>
											<option value="03:30 PM">03:30 PM</option>
											<option value="04:00 PM">04:00 PM</option>
											<option value="04:30 PM">04:30 PM</option>
											<option value="05:00 PM">05:00 PM</option>
											<option value="05:30 PM">05:30 PM</option>
											<option value="06:00 PM">06:00 PM</option>
											<option value="06:30 PM">06:30 PM</option>
											<option value="07:00 PM">07:00 PM</option>
											<option value="07:30 PM">07:30 PM</option>
											<option value="08:00 PM">08:00 PM</option>
											<option value="08:30 PM">08:30 PM</option>
											<option value="09:00 PM">09:00 PM</option>
											<option value="09:30 PM">09:30 PM</option>
											<option value="10:00 PM">10:00 PM</option>
											<option value="10:30 PM">10:30 PM</option>
											<option value="11:00 PM">11:00 PM</option>
											<option value="11:30 PM">11:30 PM</option>
										</select>
									</div>
								</div><!-- .beautypress-select END -->
							</div>
						</div><!-- .beautypress-service-and-date END -->
						<div class="beautypress-personal-information">
							<h2>Personal Information</h2>
							<div class="beautypress-spilit-container">
								<div class="form-group first-name-group">
									<input type="text" name="first-name" class="form-control" id="first-name"
										placeholder="First Name....">
								</div>
								<div class="form-group email-group">
									<input type="email" name="email" class="form-control" id="emaill"
										placeholder="Email Address....">
								</div>
							</div>
							<div class="form-group phone-group">
								<input type="number" name="phone" class="form-control" id="phone"
									placeholder="Phone Number....">
							</div>
							<div class="form-group massage-gropu">
								<textarea class="form-control" rows="5" id="appointment-comment"
									placeholder="Enter Message...."></textarea>
							</div>
							<div class="form-group button-group">
								<input type="submit" name="submit" value="submit" id="beautypress-submit">
							</div>
						</div><!-- .beautypress-personal-information END -->
					</form><!-- #beautypress-booking-form END -->
				</div>
			</div>
		</div>
	</div>
</section><!-- .beautypress-booking-section END -->
<!-- booking section end -->

<!-- Photo gallery -->
<section class="beautypress-photo-gallery-section beautypress-padding-bottom">
	<div class="container">
		<div class="beautypress-section-headinig">
			<h2>We are awesome</h2>
			<h3>Photo Gallery</h3>
		</div>
		<div class="beautypress-photo-gallery-wraper">
			<div class="beautypress-portfolio-nav portfolio-menu">
				<ul id="filters" class="option-set clearfix" data-option-key="filter">
					<li><a href="#" data-option-value="*" class="selected">All item</a></li>
					<li><a href="#" data-option-value=".hair">hair</a></li>
					<li><a href="#" data-option-value=".makeup">makeup</a></li>
					<li><a href="#" data-option-value=".facial">facial</a></li>
					<li><a href="#" data-option-value=".massage">massage</a></li>
				</ul>
			</div>
			<div class="beautypress-photo-gallery-grid">
				<div class="beautypress-photo-gallery-grid-item hair">
					<div class="beautypress-single-photo-gallery beautypress-3d">
						<div class="beautypress-3d-project-card">
							<img src="theme/img/gallery-1.jpg" alt="">
							<div class="beautypress-photo-gallery-content">
								<a href="img/gallery-1.jpg"
									class="beautypress-image-popup beautypress-iocn-btn full-round-btn bg-color-pink">
									<i class="fa fa-eye"></i>
								</a>
								<a href="#" class="beautypress-iocn-btn full-round-btn bg-color-purple">
									<i class="fa fa-link"></i>
								</a>
							</div><!-- .beautypress-photo-gallery-content END -->
							<div class="beautypress-gallery-overlay"></div>
						</div>
					</div><!-- .beautypress-single-photo-gallery END -->
				</div><!-- .beautypress-photo-gallery-grid-item END -->
				<div class="beautypress-photo-gallery-grid-item makeup">
					<div class="beautypress-single-photo-gallery beautypress-3d">
						<div class="beautypress-3d-project-card">
							<img src="theme/img/gallery-2.jpg" alt="">
							<div class="beautypress-photo-gallery-content">
								<a href="img/gallery-2.jpg"
									class="beautypress-image-popup beautypress-iocn-btn full-round-btn bg-color-pink">
									<i class="fa fa-eye"></i>
								</a>
								<a href="#" class="beautypress-iocn-btn full-round-btn bg-color-purple">
									<i class="fa fa-link"></i>
								</a>
							</div><!-- .beautypress-photo-gallery-content END -->
							<div class="beautypress-gallery-overlay"></div>
						</div>
					</div><!-- .beautypress-single-photo-gallery END -->
				</div><!-- .beautypress-photo-gallery-grid-item END -->
				<div class="beautypress-photo-gallery-grid-item facial">
					<div class="beautypress-single-photo-gallery beautypress-3d">
						<div class="beautypress-3d-project-card">
							<img src="theme/img/gallery-3.jpg" alt="">
							<div class="beautypress-photo-gallery-content">
								<a href="img/gallery-3.jpg"
									class="beautypress-image-popup beautypress-iocn-btn full-round-btn bg-color-pink">
									<i class="fa fa-eye"></i>
								</a>
								<a href="#" class="beautypress-iocn-btn full-round-btn bg-color-purple">
									<i class="fa fa-link"></i>
								</a>
							</div><!-- .beautypress-photo-gallery-content END -->
							<div class="beautypress-gallery-overlay"></div>
						</div>
					</div><!-- .beautypress-single-photo-gallery END -->
				</div><!-- .beautypress-photo-gallery-grid-item END -->
				<div class="beautypress-photo-gallery-grid-item massage">
					<div class="beautypress-single-photo-gallery beautypress-3d">
						<div class="beautypress-3d-project-card">
							<img src="theme/img/gallery-4.jpg" alt="">
							<div class="beautypress-photo-gallery-content">
								<a href="img/gallery-4.jpg"
									class="beautypress-image-popup beautypress-iocn-btn full-round-btn bg-color-pink">
									<i class="fa fa-eye"></i>
								</a>
								<a href="#" class="beautypress-iocn-btn full-round-btn bg-color-purple">
									<i class="fa fa-link"></i>
								</a>
							</div><!-- .beautypress-photo-gallery-content END -->
							<div class="beautypress-gallery-overlay"></div>
						</div>
					</div><!-- .beautypress-single-photo-gallery END -->
				</div><!-- .beautypress-photo-gallery-grid-item END -->
				<div class="beautypress-photo-gallery-grid-item hair">
					<div class="beautypress-single-photo-gallery beautypress-3d">
						<div class="beautypress-3d-project-card">
							<img src="theme/img/gallery-6.jpg" alt="">
							<div class="beautypress-photo-gallery-content">
								<a href="img/gallery-6.jpg"
									class="beautypress-image-popup beautypress-iocn-btn full-round-btn bg-color-pink">
									<i class="fa fa-eye"></i>
								</a>
								<a href="#" class="beautypress-iocn-btn full-round-btn bg-color-purple">
									<i class="fa fa-link"></i>
								</a>
							</div><!-- .beautypress-photo-gallery-content END -->
							<div class="beautypress-gallery-overlay"></div>
						</div>
					</div><!-- .beautypress-single-photo-gallery END -->
				</div><!-- .beautypress-photo-gallery-grid-item END -->
				<div class="beautypress-photo-gallery-grid-item beautypress-photo-gallery-grid-item-w2 makeup">
					<div class="beautypress-single-photo-gallery beautypress-3d">
						<div class="beautypress-3d-project-card">
							<img src="theme/img/gallery-5.jpg" alt="">
							<div class="beautypress-photo-gallery-content">
								<a href="img/gallery-5.jpg"
									class="beautypress-image-popup beautypress-iocn-btn full-round-btn bg-color-pink">
									<i class="fa fa-eye"></i>
								</a>
								<a href="#" class="beautypress-iocn-btn full-round-btn bg-color-purple">
									<i class="fa fa-link"></i>
								</a>
							</div><!-- .beautypress-photo-gallery-content END -->
							<div class="beautypress-gallery-overlay"></div>
						</div>
					</div><!-- .beautypress-single-photo-gallery END -->
				</div><!-- .beautypress-photo-gallery-grid-item END -->
			</div><!-- .beautypress-photo-gallery-grid END -->
		</div>
	</div>
</section><!-- .beautypress-photo-gallery-section END -->
<!-- Photo gallery -->

<!-- Pricing table -->
<section class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg"
	style="background-image: url(theme/img/pricing-bg.jpg)">
	<div class="container">
		<div class="beautypress-section-headinig beautypress-section-headinig-white">
			<h2>We are awesome</h2>
			<h3>Pricing Plan</h3>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
				<div class="beautypress-single-pricing-table">
					<div class="beautypress-pricing-header beautypress-purple-overlay">
						<img src="theme/img/pricing-1.jpg" alt="">
						<div class="beautypress-pricing-header-content">
							<div class="beautypress-pricing-title">
								<h2>Hair Cut</h2>
							</div>
							<div class="beautypress-pricing-price">
								<h4>Starting from</h4>
								<h5><span>$</span>50</h5>
							</div>
						</div>
					</div><!-- .beautypress-pricing-header END -->
					<div class="beautypress-pricing-footer">
						<ul class="beautypress-both-side-list">
							<li>Teen's haircut<span>$45</span></li>
							<li>Men's haircut<span>$42</span></li>
							<li>Children's haircut<span>$56</span></li>
							<li>Women's haircut<span>$76</span></li>
						</ul>

						<div class="beautypress-btn-wraper">
							<a href="#" class="xs-btn round-btn box-shadow-btn bg-color-purple">Appointment Now
								<span></span></a>
						</div>
					</div><!-- .beautypress-pricing-footer END -->
				</div><!-- .beautypress-single-pricing-table END -->
			</div>
			<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
				<div class="beautypress-single-pricing-table">
					<div class="beautypress-pricing-header beautypress-pink-overlay">
						<img src="theme/img/pricing-2.jpg" alt="">
						<div class="beautypress-pricing-header-content">
							<div class="beautypress-pricing-title">
								<h2>Makeup</h2>
							</div>
							<div class="beautypress-pricing-price">
								<h4>Starting from</h4>
								<h5><span>$</span>50</h5>
							</div>
						</div>
					</div><!-- .beautypress-pricing-header END -->
					<div class="beautypress-pricing-footer">
						<ul class="beautypress-both-side-list">
							<li>Just eyes<span>$45</span></li>
							<li>Bridal trail<span>$42</span></li>
							<li>Regular makeup<span>$56</span></li>
							<li>Quick fix makeup<span>$76</span></li>
						</ul>

						<div class="beautypress-btn-wraper">
							<a href="#" class="xs-btn round-btn box-shadow-btn bg-color-pink">Appointment Now
								<span></span></a>
						</div>
					</div><!-- .beautypress-pricing-footer END -->
				</div><!-- .beautypress-single-pricing-table END -->
			</div>
			<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
				<div class="beautypress-single-pricing-table">
					<div class="beautypress-pricing-header beautypress-sky-blue-overlay">
						<img src="theme/img/pricing-3.jpg" alt="">
						<div class="beautypress-pricing-header-content">
							<div class="beautypress-pricing-title">
								<h2>Hair Color</h2>
							</div>
							<div class="beautypress-pricing-price">
								<h4>Starting from</h4>
								<h5><span>$</span>50</h5>
							</div>
						</div>
					</div><!-- .beautypress-pricing-header END -->
					<div class="beautypress-pricing-footer">
						<ul class="beautypress-both-side-list">
							<li>Just eyes<span>$45</span></li>
							<li>Bridal trail<span>$42</span></li>
							<li>Regular makeup<span>$56</span></li>
							<li>Quick fix makeup<span>$76</span></li>
						</ul>

						<div class="beautypress-btn-wraper">
							<a href="#" class="xs-btn round-btn box-shadow-btn bg-color-sky-blue">Appointment
								Now <span></span></a>
						</div>
					</div><!-- .beautypress-pricing-footer END -->
				</div><!-- .beautypress-single-pricing-table END -->
			</div>
		</div>
	</div>
	<div class="beautypress-black-overlay"></div>
</section><!-- .beautypress-pricing-table-section END -->
<!-- Pricing table -->

<!-- Service section -->
<section class="beautypress-service-section beautypress-padding-bottom">
	<div class="container">
		<div class="beautypress-section-headinig">
			<h2>We are awesome</h2>
			<h3>Our Services</h3>
		</div>
		<div class="beautypress-tab">
			<div class="tabbable">
				<ul class="nav nav-tabs beautypress-top-nav">
					<li class="active"><a href="#makeup" data-toggle="tab"><i
								class="xsicon icon-cosmetics"></i><span>makeup</span></a></li>
					<li><a href="#facial" data-toggle="tab"><i
								class="xsicon icon-cream-3"></i><span>Facial</span></a></li>
					<li><a href="#haircut" data-toggle="tab"><i class="xsicon icon-hair-cut"></i><span>Hair
								Cut</span></a></li>
					<li><a href="#massage" data-toggle="tab"><i
								class="xsicon icon-massage"></i><span>massage</span></a></li>
					<li><a href="#nail" data-toggle="tab"><i class="xsicon icon-nail"></i><span>Nail
								care</span></a></li>
					<li><a href="#waxing" data-toggle="tab"><i
								class="xsicon icon-hair-removal"></i><span>waxing</span></a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="makeup">
						<div class="tabbable">
							<ul class="nav nav-tabs beautypress-side-nav">
								<li class="active"><a href="#mens_haircut" data-toggle="tab">Men's makeup</a>
								</li>
								<li><a href="#women_makeup" data-toggle="tab">Women's makeup</a></li>
								<li><a href="#child_makeup" data-toggle="tab">Children's makeup</a></li>
								<li><a href="#teens_makeup" data-toggle="tab">Teen's makeup</a></li>
								<li><a href="#layer_makeup" data-toggle="tab">Layer makeup</a></li>
								<li><a href="#stylish_makeup" data-toggle="tab">Stylish makeup</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane beautypress-tab-content active" id="mens_makeup">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-1.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Men's makeup</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #mens_makeup END -->

								<div class="tab-pane beautypress-tab-content" id="women_makeup">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-2.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Women's makeup</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #women_makeup END -->

								<div class="tab-pane beautypress-tab-content" id="child_makeup">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-3.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Children's makeup</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #child_makeup END -->

								<div class="tab-pane beautypress-tab-content" id="teens_makeup">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-4.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Teen's makeup</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #teens_makeup END -->

								<div class="tab-pane beautypress-tab-content" id="layer_makeup">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-5.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Layer makeup</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #layer_makeup END -->

								<div class="tab-pane beautypress-tab-content" id="stylish_makeup">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-6.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Stylish makeup</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #stylish_makeup END -->
							</div><!-- .tab-content END -->
						</div>
					</div><!-- #makeup END -->

					<div class="tab-pane" id="facial">
						<div class="tabbable tabs-left">
							<ul class="nav nav-tabs beautypress-side-nav">
								<li class="active"><a href="#mens_facial" data-toggle="tab">Men's Facial</a>
								</li>
								<li><a href="#women_facial" data-toggle="tab">Women's Facial</a></li>
								<li><a href="#child_facial" data-toggle="tab">Children's Facial</a></li>
								<li><a href="#teens_facial" data-toggle="tab">Teen's Facial</a></li>
								<li><a href="#layer_facial" data-toggle="tab">Layer Facial</a></li>
								<li><a href="#stylish_facial" data-toggle="tab">Stylish Facial</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane beautypress-tab-content active" id="mens_facial">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-1.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Men's Facial</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #mens_facial END -->

								<div class="tab-pane beautypress-tab-content" id="women_facial">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-2.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Women's Facial</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #women_facial END -->

								<div class="tab-pane beautypress-tab-content" id="child_facial">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-3.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Children's Facial</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #child_facial END -->

								<div class="tab-pane beautypress-tab-content" id="teens_facial">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-4.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Teen's Facial</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #teens_facial END -->

								<div class="tab-pane beautypress-tab-content" id="layer_facial">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-5.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Layer Facial</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #layer_facial END -->

								<div class="tab-pane beautypress-tab-content" id="stylish_facial">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-6.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Stylish Facial</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #stylish_facial END -->
							</div>
						</div>
					</div><!-- #facial END -->

					<div class="tab-pane" id="haircut">
						<div class="tabbable">
							<ul class="nav nav-tabs beautypress-side-nav">
								<li class="active"><a href="#mens_haircut111" data-toggle="tab">Men's
										Haircut</a></li>
								<li><a href="#women_haircut" data-toggle="tab">Women's Haircut</a></li>
								<li><a href="#child_haircut" data-toggle="tab">Children's Haircut</a></li>
								<li><a href="#teens_haircut" data-toggle="tab">Teen's Haircut</a></li>
								<li><a href="#layer_haircut" data-toggle="tab">Layer Haircut</a></li>
								<li><a href="#stylish_haircut" data-toggle="tab">Stylish Haircut</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane beautypress-tab-content active" id="mens_haircut">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-1.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Men's Haircut</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #mens_haircut END -->

								<div class="tab-pane beautypress-tab-content" id="women_haircut">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-2.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Women's Haircut</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #women_haircut END -->

								<div class="tab-pane beautypress-tab-content" id="child_haircut">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-3.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Children's Haircut</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #child_haircut END -->

								<div class="tab-pane beautypress-tab-content" id="teens_haircut">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-4.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Teen's Haircut</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #teens_haircut END -->

								<div class="tab-pane beautypress-tab-content" id="layer_haircut">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-5.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Layer Haircut</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #layer_haircut END -->

								<div class="tab-pane beautypress-tab-content" id="stylish_haircut">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-6.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Stylish Haircut</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #stylish_haircut END -->
							</div>
						</div>
					</div><!-- #haircut END -->

					<div class="tab-pane" id="massage">
						<div class="tabbable">
							<ul class="nav nav-tabs beautypress-side-nav">
								<li class="active"><a href="#mens_massage" data-toggle="tab">Men's massage</a>
								</li>
								<li><a href="#women_massage" data-toggle="tab">Women's massage</a></li>
								<li><a href="#child_massage" data-toggle="tab">Children's massage</a></li>
								<li><a href="#teens_massage" data-toggle="tab">Teen's massage</a></li>
								<li><a href="#layer_massage" data-toggle="tab">Layer massage</a></li>
								<li><a href="#stylish_massage" data-toggle="tab">Stylish massage</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane beautypress-tab-content active" id="mens_massage">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-1.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Men's massage</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #mens_massage END -->

								<div class="tab-pane beautypress-tab-content" id="women_massage">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-2.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Women's massage</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #women_massage END -->

								<div class="tab-pane beautypress-tab-content" id="child_massage">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-3.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Children's massage</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #child_massage END -->

								<div class="tab-pane beautypress-tab-content" id="teens_massage">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-4.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Teen's massage</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #teens_massage END -->

								<div class="tab-pane beautypress-tab-content" id="layer_massage">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-5.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Layer massage</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #layer_massage END -->

								<div class="tab-pane beautypress-tab-content" id="stylish_massage">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-6.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Stylish massage</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #stylish_massage END -->
							</div>
						</div>
					</div><!-- #massage END -->

					<div class="tab-pane" id="nail">
						<div class="tabbable">
							<ul class="nav nav-tabs beautypress-side-nav">
								<li class="active"><a href="#mens_nail" data-toggle="tab">Men's Nail care</a>
								</li>
								<li><a href="#women_nail" data-toggle="tab">Women's Nail care</a></li>
								<li><a href="#child_nail" data-toggle="tab">Children's Nail care</a></li>
								<li><a href="#teens_nail" data-toggle="tab">Teen's Nail care</a></li>
								<li><a href="#layer_nail" data-toggle="tab">Layer Nail care</a></li>
								<li><a href="#stylish_nail" data-toggle="tab">Stylish Nail care</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane beautypress-tab-content active" id="mens_nail">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-1.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Men's Nail care</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #mens_nail END -->

								<div class="tab-pane beautypress-tab-content" id="women_nail">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-2.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Women's Nail care</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #women_nail END -->

								<div class="tab-pane beautypress-tab-content" id="child_nail">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-3.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Children's Nail care</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #child_nail END -->

								<div class="tab-pane beautypress-tab-content" id="teens_nail">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-4.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Teen's Nail care</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #teens_nail END -->

								<div class="tab-pane beautypress-tab-content" id="layer_nail">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-5.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Layer Nail care</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #layer_nail END -->

								<div class="tab-pane beautypress-tab-content" id="stylish_nail">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-6.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Stylish Nail care</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #stylish_nail END -->
							</div>
						</div>
					</div><!-- #nail END -->

					<div class="tab-pane" id="waxing">
						<div class="tabbable">
							<ul class="nav nav-tabs beautypress-side-nav">
								<li class="active"><a href="#mens_waxing" data-toggle="tab">Men's waxing</a>
								</li>
								<li><a href="#women_waxing" data-toggle="tab">Women's waxing</a></li>
								<li><a href="#child_waxing" data-toggle="tab">Children's waxing</a></li>
								<li><a href="#teens_waxing" data-toggle="tab">Teen's waxing</a></li>
								<li><a href="#layer_waxing" data-toggle="tab">Layer waxing</a></li>
								<li><a href="#stylish_waxing" data-toggle="tab">Stylish waxing</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane beautypress-tab-content active" id="mens_waxing">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-1.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Men's waxing</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #mens_waxing END -->

								<div class="tab-pane beautypress-tab-content" id="women_waxing">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-2.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Women's waxing</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #women_waxing END -->

								<div class="tab-pane beautypress-tab-content" id="child_waxing">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-3.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Children's waxing</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #child_waxing END -->

								<div class="tab-pane beautypress-tab-content" id="teens_waxing">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-4.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Teen's waxing</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #teens_waxing END -->

								<div class="tab-pane beautypress-tab-content" id="layer_waxing">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-5.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Layer waxing</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #layer_waxing END -->

								<div class="tab-pane beautypress-tab-content" id="stylish_waxing">
									<div class="beautypress-spilit-container">
										<div class="beautypress-tab-image">
											<img src="theme/img/service-tab-img-6.jpg" alt="Image">
											<div class="beautypress-tab-image-content">
												<span
													class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
											</div>
										</div>
										<div class="beautypress-tab-text-content">
											<h3>Stylish waxing</h3>
											<p> It showed a lady fitted out with a fur hat and fur boa who sat
												upright, raising a heavy fur muff that covered the whole of her
												lower arm towards the viewer. </p>
											<p> A collection of textile samples lay spread out on the table -
												Samsa was a travelling salesman - and above it there</p>
											<div class="beautypress-btn-wraper">
												<a href="#"
													class="xs-btn round-btn box-shadow-btn bg-color-purple">get
													appointment <span></span></a>
											</div>
										</div>
									</div>
								</div><!-- #stylish_waxing END -->
							</div>
						</div>
					</div><!-- #waxing END -->
				</div>
			</div><!-- .tabbable END -->
		</div><!-- .beautypress-tab END -->
	</div>
</section><!-- .beautypress-service-section END -->
<!-- Service section closed -->

<!-- Call to action section -->
<section class="beautypress-call-to-action-section parallax-bg beautypress-bg" data-parallax="scroll"
	data-image-src="theme/img/call-to-action.jpg">
	<div class="container">
		<div class="beautypress-call-to-action-content">
			<div class="beautypress-content-headinig">
				<h2>Your Everyday Retreat</h2>
				<h3>Get Appoinment</h3>
			</div>
			<a href="#" class="xs-btn round-btn box-shadow-btn bg-color-purple">get appointment
				<span></span></a>
		</div><!-- .beautypress-call-to-action-content END -->
	</div>
</section><!-- .beautypress-call-to-action-section END -->
<!-- Call to action section -->

<!-- Team section -->
<section class="beautypress-team-section beautypress-padding-bottom">
	<div class="container">
		<div class="beautypress-section-headinig">
			<h2>We are awesome</h2>
			<h3>Expert Beauticians</h3>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
				<div class="beautypress-single-team beautypress-purple-overlay">
					<img src="theme/img/team-1.jpg" alt="">
					<div class="beautypress-team-content">
						<div class="beautypress-team-person-details">
							<h3>Jenny william</h3>
							<h4>Founder</h4>
						</div>
						<div class="beautypress-team-person-socail-details">
							<ul class="beautypress-social-list">
								<li><a href="" class="beautypress-facebook"><i class="fa fa-facebook"></i></a>
								</li>
								<li><a href="" class="beautypress-twitter"><i class="fa fa-twitter"></i></a>
								</li>
								<li><a href="" class="beautypress-pinterest"><i
											class="fa fa-pinterest-p"></i></a></li>
								<li><a href="" class="beautypress-dribbble"><i class="fa fa-dribbble"></i></a>
								</li>
							</ul><!-- .beautypress-social-list END -->
						</div>
					</div><!-- .beautypress-team-content END -->
				</div><!-- .beautypress-single-team END -->
			</div>
			<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
				<div class="beautypress-single-team beautypress-pink-overlay">
					<img src="theme/img/team-2.jpg" alt="">
					<div class="beautypress-team-content">
						<div class="beautypress-team-person-details">
							<h3>Rusana ranshaw</h3>
							<h4>C. E. O</h4>
						</div>
						<div class="beautypress-team-person-socail-details">
							<ul class="beautypress-social-list">
								<li><a href="" class="beautypress-facebook"><i class="fa fa-facebook"></i></a>
								</li>
								<li><a href="" class="beautypress-twitter"><i class="fa fa-twitter"></i></a>
								</li>
								<li><a href="" class="beautypress-pinterest"><i
											class="fa fa-pinterest-p"></i></a></li>
								<li><a href="" class="beautypress-dribbble"><i class="fa fa-dribbble"></i></a>
								</li>
							</ul><!-- .beautypress-social-list END -->
						</div>
					</div><!-- .beautypress-team-content END -->
				</div><!-- .beautypress-single-team END -->
			</div>
			<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
				<div class="beautypress-single-team beautypress-sky-blue-overlay">
					<img src="theme/img/team-3.jpg" alt="">
					<div class="beautypress-team-content">
						<div class="beautypress-team-person-details">
							<h3>Jennifar smith</h3>
							<h4>Senior Specialist</h4>
						</div>
						<div class="beautypress-team-person-socail-details">
							<ul class="beautypress-social-list">
								<li><a href="" class="beautypress-facebook"><i class="fa fa-facebook"></i></a>
								</li>
								<li><a href="" class="beautypress-twitter"><i class="fa fa-twitter"></i></a>
								</li>
								<li><a href="" class="beautypress-pinterest"><i
											class="fa fa-pinterest-p"></i></a></li>
								<li><a href="" class="beautypress-dribbble"><i class="fa fa-dribbble"></i></a>
								</li>
							</ul><!-- .beautypress-social-list END -->
						</div>
					</div><!-- .beautypress-team-content END -->
				</div><!-- .beautypress-single-team END -->
			</div>
		</div>
	</div>
	<div class="beautypress-icon-bg"></div>
	<div class="beautypress-round-icons-bg" style="background-image: url(theme/img/icons-bg-2.png);"></div>
</section><!-- .beautypress-team-section END -->
<!-- Team section -->

<!-- News feeds section -->
<section class="beautypress-newsfeed-section beautypress-padding-bottom bg-color-gray">
	<div class="container">
		<div class="beautypress-section-headinig">
			<h2>We are awesome</h2>
			<h3>News Feeds</h3>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xl-4 col-lg-4">
				<div class="beautypress-single-newsletter">
					<div
						class="beautypress-newsfeed-header beautypress-purple-overlay beautypress-light-overlay">
						<img src="theme/img/news-feed-1.jpg" alt="">
						<div class="beautypress-newsfeed-header-content">
							<div class="beautypress-newsfeed-img">
								<img src="theme/img/avatar-1.jpg" alt="">
								<a href="#">By William</a>
							</div>
							<div class="beautypress-dates">
								<p class="bg-color-purple">27<strong>Jan</strong></p>
							</div>
						</div><!-- .beautypress-newsfeed-header-content END -->
					</div><!-- .beautypress-newsfeed-header END -->
					<div class="beautypress-newsfeed-footer">
						<a href="#">There are many variations of v available.</a>
						<p>Randomised words which don't look even slightly believable. If you are going to use a
							passage you need to be sure.</p>
					</div><!-- .beautypress-newsfeed-footer END -->
				</div><!-- .beautypress-single-newsletter END -->
			</div>
			<div class="col-md-12 col-sm-12 col-xl-4 col-lg-4">
				<div class="beautypress-single-newsletter">
					<div class="beautypress-newsfeed-header beautypress-pink-overlay beautypress-light-overlay">
						<img src="theme/img/news-feed-2.jpg" alt="">
						<div class="beautypress-newsfeed-header-content">
							<div class="beautypress-newsfeed-img">
								<img src="theme/img/avatar-2.jpg" alt="">
								<a href="#">By James</a>
							</div>
							<div class="beautypress-dates">
								<p class="bg-color-purple">29<strong>aug</strong></p>
							</div>
						</div><!-- .beautypress-newsfeed-header-content END -->
					</div><!-- .beautypress-newsfeed-header END -->
					<div class="beautypress-newsfeed-footer">
						<a href="#">If you are going to use a you need to be sure can do it.</a>
						<p> A collection of textile samples lay spread out on the table - Samsa was a travelling
							salesman </p>
					</div><!-- .beautypress-newsfeed-footer END -->
				</div><!-- .beautypress-single-newsletter END -->
			</div>
			<div class="col-md-12 col-sm-12 col-xl-4 col-lg-4">
				<div class="beautypress-single-newsletter">
					<div
						class="beautypress-newsfeed-header beautypress-sky-blue-overlay beautypress-light-overlay">
						<img src="theme/img/news-feed-3.jpg" alt="">
						<div class="beautypress-newsfeed-header-content">
							<div class="beautypress-newsfeed-img">
								<img src="theme/img/avatar-3.jpg" alt="">
								<a href="#">By Jenny</a>
							</div>
							<div class="beautypress-dates">
								<p class="bg-color-purple">23<strong>dec</strong></p>
							</div>
						</div><!-- .beautypress-newsfeed-header-content END -->
					</div><!-- .beautypress-newsfeed-header END -->
					<div class="beautypress-newsfeed-footer">
						<a href="#">Looks reasonable. The generate is therefore always.</a>
						<p>Majority have suffered alteration in some form, by injected humour, or randomised
							words which don't look even slightly .</p>
					</div><!-- .beautypress-newsfeed-footer END -->
				</div><!-- .beautypress-single-newsletter END -->
			</div>
		</div>
	</div>
</section><!-- .beautypress-newsfeed-section END -->
<!-- News feeds section end -->

<!-- partner section -->
<section class="beautypress-partner-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="beautypress-partner-wraper">
					<ul class="beautypress-partner-list beautypress-version-4">
						<li><img src="theme/img/brands-1.png" alt=""></li>
						<li><img src="theme/img/brands-2.png" alt=""></li>
						<li><img src="theme/img/brands-3.png" alt=""></li>
						<li><img src="theme/img/brands-4.png" alt=""></li>
						<li><img src="theme/img/brands-5.png" alt=""></li>
						<li><img src="theme/img/brands-6.png" alt=""></li>
					</ul><!-- .beautypress-partner-list END -->
				</div><!-- .beautypress-partner-wraper END -->
			</div>
		</div>
	</div>
	<div class="beautypress-round-icons-bg" style="background-image: url(theme/img/icons-bg.png);"></div>
</section><!-- .beautypress-partner-section END -->
<!-- partner section end -->
@endsection
