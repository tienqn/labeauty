<!-- Modal HTML embedded directly into document -->
<div id="booking_modal" class="modal">
	<form id="booking_form" method="POST" action="{{ route('frontend.booking.book') }}">
		<div class="beautypress-booking-form-wraper">
			<div class="beautypress-service-and-date">
				<h2 class="bk-title">Dịch vụ</h2>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<!-- <select 
								name="appointment-service" 
								id="appointment-service"
								class="form-control lb-select"
							>
								<option value="">Oil Massage ($59.00)</option>
							</select> -->

							<select class="form-control lb-select" name="service">
								<option selected value="0">@lang('header.booking_form.place_holder.service')</option>
								@foreach($lb_services as $lb_service)
									<option value="{{ $lb_service->id }}">{{ $lb_service->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div><!-- .beautypress-select END -->
				<div class="row">
					<div class="col">
						<div class="input-group">
							<input 
								type="date"
								id="booking_date" 
								class="form-control lb-input"
								name="booking_date" 
								value='{{ date("Y-m-d", strtotime("+1 day")) }}'/>
						</div>
					</div><!-- .beautypress-date-select END -->
					<div class="col">
						<div class="input-group appointment-time">
							<input 
								type="time"
								name="booking_time" 
								id="booking_time"
								class="form-control lb-input"
								value="08:00"/>
							
						</div>
					</div><!-- .beautypress-select END -->
				</div>
			</div><!-- .beautypress-service-and-date END -->
			<div class="beautypress-personal-information">
				<h2 class="bk-title">Thông tin cá nhân</h2>
				<div class="form-group phone-group">
					<input 
						type="number" 
						name="phone_number" 
						class="form-control lb-input" 
						id="phone_number"
						placeholder="Số điện thoại"
						required>
				</div>
				<div class="beautypress-spilit-container">
					<div class="form-group first-name-group">
						<input 
							type="text" 
							name="name" 
							class="form-control lb-input" 
							id="name"
							placeholder="Họ và tên"/>
					</div>
					<div class="form-group email-group">
						<input 
							type="email" 
							name="email" 
							class="form-control lb-input" 
							id="email"
							placeholder="Email">
					</div>
				</div>
				<div class="form-group massage-gropu">
					<textarea 
						class="form-control lb-textarea" 
						rows="3" 
						id="request"
						name="request"
						placeholder="Yêu cầu"></textarea>
				</div>
				<div class="form-group button-group text-center">
					<button type="submit" class="lb-submit" id="booking_button"><img src="theme/img/icon/send.svg" class="lb-icon"/><span id="submit_text">Gửi ngay</span></button>
					<script>
						/* code from qodo.co.uk */ 
						function toggleFormElements(bDisabled) { 
							var inputs = document.getElementsByTagName("input")
							for (var i = 0; i < inputs.length; i++) { 
								inputs[i].disabled = bDisabled
							} 
							var selects = document.getElementsByTagName("select")
							for (var i = 0; i < selects.length; i++) {
								selects[i].disabled = bDisabled;
							}
							var textareas = document.getElementsByTagName("textarea")
							for (var i = 0; i < textareas.length; i++) { 
								textareas[i].disabled = bDisabled
							}
							// var buttons = document.getElementsByTagName("button")
							// for (var i = 0; i < buttons.length; i++) {
							// 	buttons[i].disabled = bDisabled
							// }
						}

						var form = document.getElementById("booking_form")
						var button = document.getElementById("booking_button")
						var submit_text = document.getElementById("submit_text")
						form.onsubmit = function(e) {
							e.preventDefault()
							
							var url = form.getAttribute("action")
							var data = new FormData(this)

							toggleFormElements(true)
							button.removeChild(submit_text)
							button.appendChild(document.createTextNode("@lang('header.booking_form.submiting')"))
							
							axios.post(url, {
								service_id : data.get('service'),
								booking_date : data.get('booking_date'),
								booking_time : data.get('booking_time'),
								name : data.get('name'),
								email : data.get('email'),
								phone_number : data.get('phone_number'),
								request : data.get('request')
							})
							.then(function (response) {
								setTimeout(function() { 
									alert("@lang('header.booking_form.booking_ok')")
									$('#modalBooking').modal('hide')
									location.reload()
								}, 3000)
							})
						}
					</script>
				</div>
			</div><!-- .beautypress-personal-information END -->
		</div>
	</form><!-- #beautypress-booking-form END -->
</div>
<!-- Link to open the modal -->
<a href="#booking_modal" rel="modal:open" class="bk_modal lb-submit"><img src="theme/img/icon/calendar.svg" class="lb-icon"/> <span>Đặt lịch</span></a>