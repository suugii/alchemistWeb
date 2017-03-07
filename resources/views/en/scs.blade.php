@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<h1 class="ui inverted centered header">Spend Control System 
	<small style="font-size: 12px">powered by 
		<a href="#">Odoo</a>
	</small>
</h1>
<p class="ui centered lead">Customized for Mongolian <strong>enterpriese</strong> companies<br/>to control and manage their daily expense and spends.</p>
<div class="ui stackable grid relaxed">
	<div class="four wide column"></div>
	<div class="four wide column"> 
		<a class="large basic inverted animated fade ui button" onclick="$('#request-demo').modal('show')">
			<div class="visible content">REQUEST A DEMO</div>
			<div class="hidden content">14 days Trail</div>
		</a>
	</div>
	<div class="four wide column">
		<a href="#" class="large basic inverted animated fade ui button">
			<div class="visible content">INTRODUCTION</div>
			<div class="hidden content">Download PDF</div>
		</a>
	</div>
	<div class="four wide column"></div>
</div>
 <div class="ui centerted image">
	<img src="{{ asset('img/banner3.png') }}"/>
</div>
@endsection

@section('content')
<form class="ui form" id="price-offer">
	{{ csrf_field() }}
	<div class="ui vertical feature segment">
		<div class="ui centered page grid">
			<div class="fourteen wide column">
				<div class="ui three column center aligned stackable divided grid">
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-layers icon"></i>
							BUDGET MANAGEMENT
						</div>
						<p><strong>Track your budget estimation </strong> with concrete values. Make more feasable budgets per month to yearly plans.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="budget-management" checked>
							<label>Primary module</label>
						</div>
					</div>
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-connecting icon"></i>
							PAYMENT MANAGEMENT
						</div>
						<p>Control your dailly payments in real-time. <strong>Manage your unplaned payments</strong> with in person and departmentsof your organization.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="payment-management">
							<label>Optional module</label>
						</div>
					</div>
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-calendar icon"></i>
							ASSET MANAGEMENT
						</div>
						<p>Register your across company assets to have better usability and <strong>manage loss items.</strong> Support your assets in clients. </p>
						<div class="ui checkbox">
							<input type="checkbox" name="asset-management">
							<label>Optional module</label>
						</div>
					</div>
				</div>
				<div class="ui three column center aligned stackable divided grid">
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-tick icon"></i>
							BUSSINESS TRIP MANAGEMENT
						</div>
						<p>Have more presice bussiness trip budgets and its payments. <strong>Upload reciepts</strong> for each national or international payments done by in cash.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="business-trip-management">
							<label>Optional module</label>
						</div>
					</div>
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-tick icon"></i>
							PURCHASE MANAGEMENT
						</div>
						<p>Controll your purchase and estimate your warehouse earnings. Choose your <strong>best vendor</strong> compare price offers.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="purchase-management">
							<label>Optional module</label>
						</div>
					</div>
					 <div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-settings icon"></i>
							ONSITE
						</div>
						<p>Our system can be installed on your server. We suggest suitable VPS solutions. We support installed server to up 12 months.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="onsite">
							<label>Onsite</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ui stackable centered page grid">
			<h3 class="subscribe-header">Request a price offer</h3> 
			<p class="ui centered lead large">Check your required modules we will sent you onsite installation price offer. For server prices <a href="#">click here.</a></p>
			<div class="ui form eight wide subscribe column">
				<div class="field">
					<div class="ui fluid action input">
						<input type="text" name="email" placeholder="Email">
						<div class="ui submit button">Get price offer</div>
					</div>
				</div>
			</div>
		</div>       
	</div>
</form>
<div class="ui recent-works vertical segment">
	<div class="ui very relaxed stackable centered page grid">
		<div class="row">
			<div class="eight wide centered column">
				<h1 class="center aligned ui inverted header">VIRTUAL SERVER PRICE</h1>
				<div class="ui horizontal divider">
					<i class="white flaticon-attachment icon"></i>
				</div>
				<p class="ui centered lead">No need worry about servers we can handle it for you!. We are official distributor of <a href="#">Bluehost</a></p>
			</div>
		</div>
		<div class="fourteen wide column">
			<div class="ui three column aligned stackable divided grid">
				<div class="column">
					<div class="ui fluid card" data-html="<div class='header'>User rating</div><div class='content'><div class='ui star rating'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">VPS 1 - $39 /monthly</div>
							<div class="description">
								Perfect for when you begin your own retail company. Ideal for selling B2C. <br / >Suitable for up to 5 employees.<br/>Billed per month.<br/><br/>
									* 2 Core CPU <br/>
									* 2 GB RAM <br/>
									* Unlimited Bandwidth <br/>
									* 50 GB Hard<br/>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui fluid card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">VPS 2 - $59/monthly</div>
							<div class="description">
								Most suited for mid-sized businesses. You can configure your company hierarchy and create certain roles for your employees.<br/>Billed per month.<br/><br/>
									* 4 Core CPU <br/>
									* 8 GB RAM <br/>
									* Unlimited Bandwidth <br/>
									* 150 GB Hard <br/>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui fluid card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Enterprise Server</div>
							<div class="description">
								We can establish your enterprise server solutions. It will be the exact solution for your concerns. You distribute DELL, HP physical servers.<br/>
									* Custom system <br/>
									* Long term support <br/>
							</div>
						</div>
						<div class="ui two bottom attached buttons">
							<div class="ui button" onclick="$('#cloud-price').modal('show')">Request price offer</div>
							<div class="ui pink button" onclick="$('#schedule-meeting').modal('show')">Schedule a meeting ?</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ui vertical segment" style="background-color: white">
	<div class="ui stackable center aligned page grid">
		<div class="row">
			<div class="eight wide column">
				<h1 class="ui header">Our Clients</h1>
				<div class="ui horizontal divider">
					<i class="flaticon-settings icon"></i>
				</div>
				<p class="ui centered lead">We provide long-term support solutions for our clients.</p><br/>
			</div>
		</div>
		<div class="four column logo row">
			<div class="column">
				<div class="ui shape">
					<div class="sides">
						<div class="active side">
							
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui shape">
					<div class="sides">
						<div class=" active side">
						 <img class="ui image" src="{{ asset('img/skytel.png') }}"/>
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui shape">
					<div class="sides">
						<div class="active side">
							<img class="ui image" src="{{ asset('img/sun.png') }}"/>
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui shape">
					<div class="sides">
						<div class="side">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ui small modal" id="request-demo">
	<div class="header">Request a demo</div>
	<div class="content">
		<form class="ui form">
			{{ csrf_field() }}
			<div class="field">
 				<div class="ui fluid action input">
					<input type="email" name="email" placeholder="Email">
					<div class="ui submit button">Get demo</div>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="ui small modal" id="cloud-price">
	<div class="header">Request a price offer</div>
	<div class="content">
		<form class="ui form">
			{{ csrf_field() }}
			<div class="field">
 				<div class="ui fluid action input">
					<input type="email" name="email" placeholder="Email">
					<div class="ui submit button">Get price offer</div>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="ui small modal" id="schedule-meeting">
	<div class="header">Schedule meeting</div>
	<div class="content">
		<form class="ui form">
			{{ csrf_field() }}
			<div class="field">
				<div class="ui calendar" id="calendar">
					<div class="ui input left icon">
						<i class="calendar icon"></i>
						<input type="text" placeholder="Date">
					</div>
				</div>
			</div>
			<div class="field">
 				<div class="ui fluid action input">
					<input type="hidden" name="date">
					<input type="email" name="email" placeholder="Email">
					<div class="ui submit button">Schedule</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection

@push('script')
<script type="text/javascript">
	$('#calendar').calendar();
	$("#price-offer").find('.submit').click(function() {
		$('#price-offer').find('.submit').addClass('loading disabled');
	    $.ajax({
			type: 'POST',
			url: '{{ url("send/scs/price") }}',
           	data: $('#price-offer').serialize(),
           	success: function() {
				$('#price-offer').find('.submit').removeClass('loading disabled');
       		},
			error: function(){
				$('#price-offer').find('.submit').removeClass('loading disabled');
			}
		});
	});
	$('#request-demo').find('.submit').click(function() {
		$('#request-demo').find('.submit').addClass('loading disabled');
	    $.ajax({
			type: 'POST',
			url: '{{ url("send/scs/demo") }}',
           	data: $('#request-demo').find('form').serialize(),
           	success: function() {
				$('#request-demo').find('.submit').removeClass('loading disabled');
       		},
			error: function(){
				$('#request-demo').find('.submit').removeClass('loading disabled');
			}
		});
	});
	$('#cloud-price').find('.submit').click(function() {
		$('#cloud-price').find('.submit').addClass('loading disabled');
	    $.ajax({
			type: 'POST',
			url: '{{ url("send/scs/cloud/price") }}',
           	data: $('#cloud-price').find('form').serialize(),
           	success: function() {
				$('#cloud-price').find('.submit').removeClass('loading disabled');
       		},
			error: function(){
				$('#cloud-price').find('.submit').removeClass('loading disabled');
			}
		});
	});
	$("#schedule-meeting").find('.submit').click(function() {
		var date = $('#calendar').calendar('get date');
		$('#schedule-meeting').find('input[name=date]').val(date);
		$('#schedule-meeting').find('.submit').addClass('loading disabled');
	    $.ajax({
			type: 'POST',
			url: '{{ url("send/scs/meeting") }}',
           	data: $('#schedule-meeting').find('form').serialize(),
           	success: function() {
				$('#schedule-meeting').find('.submit').removeClass('loading disabled');
       		},
			error: function(){
				$('#schedule-meeting').find('.submit').removeClass('loading disabled');
			}
		});
	});
</script>
@endpush