
$('.lb-table tbody tr').on('click', function() {
	const url = this.dataset.href;
	window.location.href = url;
});

$('.main ol.breadcrumb li:first-child').remove();