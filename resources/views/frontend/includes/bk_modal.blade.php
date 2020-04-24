<!-- Modal HTML embedded directly into document -->
<div id="booking_modal" class="modal">
	<form action="#" method="POST" id="beautypress-booking-form">
		<div class="beautypress-booking-form-wraper">
			<div class="beautypress-service-and-date">
				<h2>Dịch vụ</h2>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<select 
								name="appointment-service" 
								id="appointment-service"
								class="form-control lb-select"
							>
								<option value="">Oil Massage ($59.00)</option>
							</select>
						</div>
					</div>
				</div><!-- .beautypress-select END -->
				<div class="row">
					<div class="col">
						<div class="input-group">
							<input 
								type="date"
								id="appointment-date" 
								class="form-control lb-input"
								name="appointment-date" />
						</div>
					</div><!-- .beautypress-date-select END -->
					<div class="col">
						<div class="input-group">
							<input 
								type="time"
								name="appointment-time" 
								id="appointment-time"
								class="form-control lb-input"/>
							
						</div>
					</div><!-- .beautypress-select END -->
				</div>
			</div><!-- .beautypress-service-and-date END -->
			<div class="beautypress-personal-information">
				<h2>Thông tin cá nhân</h2>
				<div class="form-group phone-group">
					<input 
						type="number" 
						name="phone" 
						class="form-control lb-input" 
						id="phone"
						placeholder="Số điện thoại"
						required>
				</div>
				<div class="beautypress-spilit-container">
					<div class="form-group first-name-group">
						<input 
							type="text" 
							name="first-name" 
							class="form-control lb-input" 
							id="first-name"
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
						rows="5" 
						id="appointment-comment"
						placeholder="Yêu cầu"></textarea>
				</div>
				<div class="form-group button-group text-center">
					<button type="submit" class="lb-submit">Gửi ngay</button>
				</div>
			</div><!-- .beautypress-personal-information END -->
		</div>
	</form><!-- #beautypress-booking-form END -->
</div>
<!-- Link to open the modal -->
<a href="#booking_modal" rel="modal:open" class="bk_modal lb-submit">Đặt lịch</a>