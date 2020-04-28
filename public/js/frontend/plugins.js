(function ($) {
	"use strict";

	// open and close mobile menu 
	$('#lb-mobile-header .navbar-toggler').click(function () {
		$(this).toggleClass('open');
		$('.navbar-collapse').slideToggle();
	});

})(jQuery);

// process booking 
var form = document.getElementById("booking_form")
var button = document.getElementById("booking_button")
var submit_text = document.getElementById("submit_text")
form.onsubmit = function(e) {
	e.preventDefault()
	
	var url = form.getAttribute("action")
	var data = new FormData(this)

	button.removeChild(submit_text)
	button.appendChild(document.createTextNode("ĐANG GỬI..."))
	
	axios.post(url, {
		service_id : data.get('service'),
		booking_date : data.get('booking_date'),
		booking_time : data.get('booking_time'),
		name : data.get('name'),
		email : data.get('email'),
		phone_number : data.get('phone_number'),
		request : data.get('request')
	})
	.then(function () {
		setTimeout(function() { 
			alert("CHÚC MỪNG BẠN ĐẶT LỊCH THÀNH CÔNG. CHÚNG TÔI SẼ LIÊN HỆ VỚI BẠN SỚM NHẤT. XIN CẢM ƠN!")
			location.reload()
		}, 3000)
	})
	.catch(error => {
		console.log('error.response ' + error.response)
	});
}