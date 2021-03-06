<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<title>@yield('title')</title>
</head>
<body id="home">
	@include('partials.header')
	<div class="pusher">
		<div class="ui inverted masthead centered segment">
			<div class="ui page grid">
				<div class="column">
					<div class="ui secondary pointing menu">
						<a class="toc item">
							<i class="sidebar icon"></i>
						</a>
						<a class="logo item" href="{{ url('/') }}">
							Alchemist
						</a>
						<a class="item {{ (Request::is('/') ? 'active' : '') }}" href="{{ url('/') }}">
							{{ trans('messages.crm') }}
						</a>
						<a class="item {{ (Request::is('pms') ? 'active' : '') }}" href="{{ url('pms') }}">
							{{ trans('messages.pms') }}
						</a>
						<a class="item {{ (Request::is('scs') ? 'active' : '') }}" href="{{ url('scs') }}">
							{{ trans('messages.spend control & eprocurement') }}
						</a>
						<a class="item {{ (Request::is('projects') ? 'active' : '') }}" href="{{ url('projects') }}">
							{{ trans('messages.other projects') }}
						</a>
						<a class="item" href="http://nomadicbeargames.com" target="_blank">
							{{ trans('messages.nomadic bear games') }}
						</a>
						<div class="right menu">
							<a class="ui item" href="{{ url('change') }}">
								{{ trans('messages.language') }}
							</a>
							<a class="ui item" style="color:white;text-transform: uppercase;" href="http://platform.alchemist.mn/login">
								{{ trans('messages.login') }}
							</a>
						</div>
					</div>
					<div class="ui hidden transition information">
						@yield('masthead')
					</div>
					<div class="containerSlide">
						@yield('slider')
					</div>
				</div>
			</div>
		</div>
		@yield('content')
		@include('partials.footer')
	</div>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/calendar.min.js') }}"></script>
	<script src="{{ asset('js/lightslider.min.js') }}"></script>
	<script src="{{ asset('js/semantic.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	@stack('script')
</body>
</html>
