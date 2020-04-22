<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700%7CNiconne" rel="stylesheet">
		<link rel="icon" type="image/png" href="favicon.ico">

		<!-- Bootstrap.css -->
		<link rel="stylesheet" href="theme/css/bootstrap.min.css">
		<!-- Date pixker -->
		<link rel="stylesheet" href="theme/css/bootstrap-datepicker.min.css">
		<!-- Font awesome -->
		<link rel="stylesheet" href="theme/css/font-awesome.min.css">
		<!-- XS Icon -->
		<link rel="stylesheet" href="theme/css/xs-icon.css">
		<!-- Owl slider -->
		<link rel="stylesheet" href="theme/css/owl.carousel.min.css">
		<!-- theme switcher -->
		<link rel="stylesheet" href="theme/css/themeSwither.css">
		<!-- Isotope -->
		<link rel="stylesheet" href="theme/css/isotope.css">
		<!-- magnific-popup -->
		<link rel="stylesheet" href="theme/css/magnific-popup.css">
		<!--For Plugins external css-->
		<link rel="stylesheet" href="theme/css/plugins.css" />

		<!--Theme custom css -->
		<link rel="stylesheet" href="theme/css/style.css">

		<!--Theme Responsive css-->
		<link rel="stylesheet" href="theme/css/responsive.css" />

		<link rel="stylesheet" href="css/labeauty.css" />

        @stack('after-styles')
    </head>
    <body>
		@yield('content')

        <!-- Scripts -->
        @stack('before-scripts')
        <script src="theme/js/jquery-3.2.1.min.js"></script>
		<script src="theme/js/plugins.js"></script>
		<script src="theme/js/bootstrap.min.js"></script>
		<script src="theme/js/bootstrap-datepicker.min.js"></script>
		<script src="theme/js/isotope.pkgd.min.js"></script>
		<script src="theme/js/jquery.ajaxchimp.min.js"></script>
		<script src="theme/js/owl.carousel.min.js"></script>
		<script src="theme/js/jquery.magnific-popup.min.js"></script>
		<script src="theme/js/appear.js"></script>
		<script src="theme/js/spectragram.min.js"></script>
		<script src="theme/js/themeSwither.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
		<script src="theme/js/main.js"></script>
		<script src="js/labeauty.js"></script>
        @stack('after-scripts')

    </body>
</html>
