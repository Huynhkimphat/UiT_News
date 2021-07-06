<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>News</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<base href="{{ asset('') }}">
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{asset('admin_assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['admin_assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('admin_assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin_assets/css/atlantis.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('admin_assets/css/demo.css')}}">

	<link href="{{asset('admin_assets/css/select2.min.css')}}" rel="stylesheet" />

	<style type="text/css">
		body{
			background: #ffffff!important;
		}
	</style>

	@yield('kethuaCSS')
</head>
<body>
	<div class="wrapper">
		
        {{-- @include('admin.layout.header') --}}
		<!-- Sidebar -->
        {{-- @include('admin.layout.sidebar') --}}
		<!-- End Sidebar -->

        @yield('content')

		{{-- @include('admin.layout.tuychon') --}}
		
	</div>
	@include('admin.layout.script')


	@yield('kethuaJS')
</body>
</html>