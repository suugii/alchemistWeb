<div class="ui top fixed hidden menu" >
	<div class="ui container">
		<div class="item">
			<img class="ui small  image" src="{{ asset('img/logo.png') }}">
		</div>
		<a class="item {{ (Request::is('/') ? 'active' : '') }}" href="{{ url('/') }}" style="color: rgba(81, 79, 79, 0.73);">{{ trans('messages.crm') }}</a>
		<a class="item {{ (Request::is('pms') ? 'active' : '') }}" href="{{ url('pms') }}" style="color: rgba(81, 79, 79, 0.73);">{{ trans('messages.pms') }}</a>
		<a class="item {{ (Request::is('scs') ? 'active' : '') }}" href="{{ url('scs') }}" style="color: rgba(81, 79, 79, 0.73);">{{ trans('messages.spend control & eprocurement') }}</a>
		<a class="item {{ (Request::is('projects') ? 'active' : '') }}" href="{{ url('projects') }}" style="color: rgba(81, 79, 79, 0.73);">{{ trans('messages.other projects') }}</a>
		<a class="item" href="http://nomadicbeargames.com" target="_blank" style="color: rgba(81, 79, 79, 0.73);">{{ trans('messages.nomadic bear games') }}</a>
		<div class="right menu">
			<div class="item">
				<a>+976-88021087</a>
			</div>
			<div class="item">
				<a>info@alchemist.mn</a>
			</div>
			<div class="item">
				<a class="ui button" href="http://platform.alchemist.mn/login">{{ trans('messages.login') }}</a>
			</div>
		</div>
	</div>
</div>
<div class="ui vertical inverted sidebar menu">
	<a class="item {{ (Request::is('/') ? 'active' : '') }}" href="{{ url('/') }}">{{ trans('crm') }}</a>
	<a class="item {{ (Request::is('pms') ? 'active' : '') }}" href="{{ url('pms') }}">{{ trans('pms') }}</a>
	<a class="item {{ (Request::is('scs') ? 'active' : '') }}" href="{{ url('scs') }}">{{ trans('messages.spend control & eprocurement') }}</a>
	<a class="item" href="http://nomadicbeargames.com" target="_blank">{{ trans('messages.nomadic bear games') }}</a>
	<a class="item {{ (Request::is('projects') ? 'active' : '') }}" href="{{ url('projects') }}">{{ trans('messages.other projects') }}</a>
	<a class="item" href="http://platform.alchemist.mn/login">{{ trans('messages.login') }}</a>
	<a class="item" href="{{ url('change') }}">{{ trans('messages.language') }}</a>
</div>
