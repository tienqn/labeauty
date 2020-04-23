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
		<link rel="icon" type="image/png" href="favicon.ico">

        @stack('before-styles')

		<link rel="stylesheet" href="css/labeauty.css" />

        @stack('after-styles')
    </head>
    <body>
		<main class="xs-main-content">
			@include('frontend.includes.nav')
			@include('frontend.includes.mobile_nav')
			
			@yield('content')
			
			@include('frontend.includes.footer')
		</main>
		@include('frontend.includes.mobile_nav_bottom')

        <!-- Scripts -->
        @stack('before-scripts')
		<script src="js/labeauty.js"></script>
        @stack('after-scripts')

    </body>
</html>
