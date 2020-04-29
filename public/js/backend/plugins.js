
$('.lb-table tbody tr.booking').on('click', function() {
	const url = this.dataset.href;
	window.location.href = url;
});

$('.main ol.breadcrumb li:first-child').remove();

$('.show').on('click', function() {
	const show = $(this);
	const is_show = show.data('show');
	const url = show.data('url');
	axios.patch(url, {
		is_show : is_show
	})
	.then(function (response) {
		location.reload()
		// console.log('response ' + response)
	})
	.catch(error => {
		// console.log('error.response ' + error.response)
	});
})

$('.text_position_select').on('change', function() {
	const text_position = $(this);
	const text_position_val = text_position.val();
	const url = text_position.data('url');
	
	axios.patch(url, {
		text_position : text_position_val
	})
	.then(function () {
		location.reload()
	})
	.catch(error => {
		// console.log('error.response ' + error.response)
	});
})

$('#upload_banner').on('change', function(e) {

	const files = e.target.files || e.dataTransfer.files;
	if (!files.length) {
	}

	const formData = new FormData();
	formData.append('background', files[0], files[0].fileName);
	console.log(formData)
	
	const background = $(this);
	const url = background.data('url');
	
	axios.post(url, formData)
	.then(function (response) {
		if (response.data.error === true) {
			alert(response.data.message);
		} else {
			location.reload();
		}
	})
	.catch(error => {
		// console.log('error.response ' + error.response)
	});
})