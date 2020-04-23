<section id="lb-nav-bottom">
	<div class="row contact">
		<div class="col text-center">
			<a href="tel:{{ config('app.admin_phone') }}"><img src="theme/img/contact/phone.png" class="contact-ico" /></a>
		</div>
		<div class="col text-center">
			<a href="http://zalo.me/{{ config('app.admin_phone') }}"><img src="theme/img/contact/zalo.png" class="contact-ico" /></a>
		</div>
		<div class="col text-center">
			<a href="sms:{{ config('app.admin_phone') }}"><img src="theme/img/contact/sms.png" class="contact-ico" /></a>
		</div>
		<div class="col text-center">
			<a href="#"><img src="theme/img/contact/messenger.png" class="contact-ico" /></a>
		</div>
	</div>
	<div class="information text-center">
		<p class="help"><i><strong>Bạn cần giúp đỡ? Gọi cho chúng tôi: {{ config('app.admin_phone') }}</strong></i></p>
		<p class="email"><strong>Email: {{ config('app.admin_email') }}</strong></p>
	</div>
</section>