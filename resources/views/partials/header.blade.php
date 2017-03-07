<div class="ui top fixed hidden menu" >
	<div class="ui container">
		<div class="item">
			<img class="ui small  image" src="{{ asset('img/logo.png') }}">
		</div>
		<a class="active item" href="{{ url('/') }}">{{ trans('messages.crm') }}</a>
		<a class="item" href="{{ url('pms') }}" style="color: rgba(81, 79, 79, 0.73);" >PMS</a>
		<a class="item" href="{{ url('eprocurement') }}" style="color: rgba(81, 79, 79, 0.73);">{{ trans('messages.spend control & eprocurement') }}</a>
		<a class="item" href="{{ url('projects') }}" style="color: rgba(81, 79, 79, 0.73);">{{ trans('messages.other projects') }}</a>
		<a class="item" style="color: rgba(81, 79, 79, 0.73);">{{ trans('messages.nomadic bear games') }}</a>
		<div class="right menu">
			<div class="item">
				<a href="#">+976-88021087</a>
			</div>
			<div class="item">
				<a href="#">info@alchemist.mn</a>
			</div>
			<div class="item">
				<a class="ui button">{{ trans('messages.login') }}</a>
			</div>
		</div>
	</div>
</div>
<div class="ui vertical inverted sidebar menu">
	<a class="active item" href="{{ url('/') }}">{{ trans('crm') }}</a>
	<a class="item" href="{{ url('pms') }}">{{ trans('pms') }}</a>
	<a class="item" href="{{ url('eprocurement') }}">{{ trans('messages.spend control & eprocurement') }}</a>
	<a class="item">{{ trans('messages.nomadic bear games') }}</a>
	<a class="item" href="{{ url('projects') }}">{{ trans('messages.other projects') }}</a>
	<a class="item">{{ trans('messages.login') }}</a>
	<a class="item" href="{{ url('change') }}">{{ trans('messages.language') }}</a>
</div>
