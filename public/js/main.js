(function ($) {
	"use strict";

	$('#lb-mobile-header .navbar-toggler').click(function () {
		$(this).toggleClass('open');
		$('.navbar-collapse').slideToggle();
	});

	$("#booking_modal").modal({
		fadeDuration: 100
	});

})(jQuery);