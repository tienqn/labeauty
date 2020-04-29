
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
		// console.log('response ' + response)
	})
	.catch(error => {
		// console.log('error.response ' + error.response)
	});
})