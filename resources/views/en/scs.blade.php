@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<h1 class="ui inverted centered header">Spend Control System</h1>
<small style="font-size: 12px">powered by 
	<a href="https://www.odoo.com/">Odoo</a>
</small><br/><br/><br/>
<p class="ui centered lead">Customized for Mongolian <strong>enterpriese</strong> companies<br/>to control and manage their daily expense and spends.</p>
<div class="ui grid stackable centered center aligned">
	<div class="four wide column"></div>
	<div class="four wide column"> 
		<a class="large basic inverted animated fade ui button" onclick="$('#request-demo').modal('show')">
			<div class="visible content">REQUEST A DEMO</div>
			<div class="hidden content">14 days Trail</div>
		</a>
	</div>
	<div class="four wide column">
		<a href="{{ asset('files/PPspendcontrol.pdf') }}" target="_blank" class="large basic inverted animated fade ui button">
			<div class="visible content">INTRODUCTION</div>
			<div class="hidden content">Download PDF</div>
		</a>
	</div>
	<div class="four wide column"></div>
</div>
@endsection

@section('slider')
<ul id="slider" class="cS-hidden">
	<li>
		<img src="{{ asset('img/scs-1.png') }}"/>
	</li>
	<li>
		<img src="{{ asset('img/scs-2.png') }}"/>
	</li>
	<li>
		<img src="{{ asset('img/scs-3.png') }}"/>
	</li>
	<li>
		<div class="videoWrapper">
			<iframe width="1280" height="720" src="https://www.youtube.com/embed/fra7CZaDVAI?enablejsapi=1&rel=0&showinfo=0&controls=0" frameborder="0"></iframe>
		</div>
	</li>
</ul>
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
							<input type="checkbox" name="payment-management" checked>
							<label>Primary module</label>
						</div>
					</div>
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-calendar icon"></i>
							ASSET MANAGEMENT
						</div>
						<p>Register your across company assets to have better usability and <strong>manage loss items.</strong> Support your assets in clients. </p>
						<div class="ui checkbox">
							<input type="checkbox" name="asset-management" checked>
							<label>Primary module</label>
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
			<div class="eight wide column">
				<div class="field">
					<div class="ui action input">
						<input type="text" name="email" placeholder="Email">
						<button class="ui submit button" type="submit">Get price offer</button>
					</div>
				</div>
			</div>
		</div>  
		<div class="ui stackable centered page grid" id="status">
			<div class="eight wide column">
				<div class="ui hidden success message">
					<i class="close icon"></i>
					<div class="header">Successfully</div>
					<p>We will send you onsite installation price offer</p>
				</div>
				<div class="ui hidden warning message">
					<i class="close icon"></i>
					<div class="header">Error</div>
					<p>Error occured. Please try again.</p>
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
			<div class="ui three stackable cards">
				<div class="card" data-html="<div class='header'>User rating</div><div class='content'><div class='ui star rating'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
					<div class="content">
						<div class="header">VPS 1</div>
						<div class="description">
							Perfect for when you begin your own retail company. Ideal for selling B2C. <br / >Suitable for up to 5 employees.<br/>Billed per month.<br/><br/>
								* 2 Core CPU <br/>
								* 2 GB RAM <br/>
								* Unlimited Bandwidth <br/>
								* 50 GB Hard<br/>
						</div>
						<div class="center aligned ui">
							<h2 class="center aligned ui">$39 / <small style="font-size: 16px"> per month</small></h2>
						</div>
					</div>
				</div>
				<div class="card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></div></div>">
					<div class="content">
						<div class="header">VPS 2</div>
						<div class="description">
							Most suited for mid-sized businesses. You can configure your company hierarchy and create certain roles for your employees.<br/>Billed per month.<br/><br/>
								* 4 Core CPU <br/>
								* 8 GB RAM <br/>
								* Unlimited Bandwidth <br/>
								* 150 GB Hard <br/>
						</div>
						<div class="center aligned ui">
							<h2 class="center aligned ui">$59 / <small style="font-size: 16px"> per month</small></h2>
						</div>
					</div>
				</div>
				<div class="card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
					<div class="content">
						<div class="header">Enterprise Server</div>
						<div class="description">
							We can establish your enterprise server solutions. It will be the exact solution for your concerns. You distribute DELL, HP physical servers.<br/><br/>
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
 				<div class="ui action input">
					<input type="email" name="email" placeholder="Email" required>
					<button class="ui submit button" type="submit">Get demo</button>
				</div>
			</div>
		</form>
		<div class="ui hidden success message">
			<i class="close icon"></i>
			<div class="header">Successfully</div>
			<p>We will send you onsite installation price offer</p>
		</div>
		<div class="ui hidden warning message">
			<i class="close icon"></i>
			<div class="header">Error</div>
			<p>Error occured. Please try again.</p>
		</div>
	</div>
</div>
<div class="ui small modal" id="cloud-price">
	<div class="header">Request a price offer</div>
	<div class="content">
		<form class="ui form">
			{{ csrf_field() }}
			<div class="field">
 				<div class="ui action input">
					<input type="email" name="email" placeholder="Email">
					<button class="ui submit button" type="submit">Get price offer</button>
				</div>
			</div>
		</form>
		<div class="ui hidden success message">
			<i class="close icon"></i>
			<div class="header">Successfully</div>
			<p>We will send you onsite installation price offer</p>
		</div>
		<div class="ui hidden warning message">
			<i class="close icon"></i>
			<div class="header">Error</div>
			<p>Error occured. Please try again.</p>
		</div>
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
						<input type="text" name="datepicker" placeholder="Date">
					</div>
				</div>
			</div>
			<input type="hidden" name="date">
			<div class="field">
				<input type="email" name="email" placeholder="Email">
			</div>
			<div class="field">
 				<div class="ui action input">
					<input type="text" name="phone" placeholder="Phone">
					<button class="ui submit button" type="submit">Schedule</button>
				</div>
			</div>
		</form>
		<div class="ui hidden success message">
			<i class="close icon"></i>
			<div class="header">Successfully</div>
			<p>We will send you onsite installation price offer</p>
		</div>
		<div class="ui hidden warning message">
			<i class="close icon"></i>
			<div class="header">Error</div>
			<p>Error occured. Please try again.</p>
		</div>
	</div>
</div>
@endsection

@push('script')
<script type="text/javascript">
	$(document).ready(function() {
		var validationRules = {
			email: {
	            identifier  : 'email',
	            rules: [
	                {
	                    type   : 'empty',
	                    prompt : 'Please enter an email'
	                },
	                {
	                    type   : 'email',
	                    prompt : 'Please enter a valid email'
	                },
	                {
	                    type   : 'maxLength[191]',
	                    prompt : 'Too Long'
	                }
	            ]
	        },
			phone: {
	            identifier  : 'phone',
	            rules: [
	                {
	                    type   : 'empty',
	                    prompt : 'Please enter a phone number'
	                },
	                {
	                    type   : 'integer',
	                    prompt : 'Please enter a valid phone number'
	                },
	                {
	                    type   : 'maxLength[191]',
	                    prompt : 'Too Long'
	                }
	            ]
	        },
	        date: {
	            identifier  : 'datepicker',
	            rules: [
	                {
	                    type   : 'empty',
	                    prompt : 'Please pick a date'
	                }
	            ]
	        }
		};
		$('#calendar').calendar({
			type: 'date',
			text: {
				days: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
				months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
				monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				today: 'Today',
				now: 'Now',
				am: 'AM',
				pm: 'PM'
			},
		});
		$('#price-offer').submit(function(e) {
			e.preventDefault();
		}).form(validationRules, {
			inline: true,
			onSuccess: function() {
				$(this).find('.submit').addClass('loading disabled');
			    $.ajax({
					type: 'POST',
					url: '{{ url("send/scs/price") }}',
		           	data: $(this).serialize(),
		           	context: this,
		           	success: function() {
		           		$(this).trigger('reset');
		           		$(this).find('input').trigger('blur');
						$(this).find('.submit').removeClass('loading disabled');
						$('#status .success.message').transition('fade in');
		       		},
					error: function(){
		           		$(this).find('input').trigger('blur');
						$(this).find('.submit').removeClass('loading disabled');
						$('#status .warning.message').transition('fade in');
					}
				});
			}
		});
		$('#request-demo form').submit(function(e) {
			e.preventDefault();
		}).form(validationRules, {
			inline: true,
			onSuccess: function() {
				$(this).find('.submit').addClass('loading disabled');
			    $.ajax({
					type: 'POST',
					url: '{{ url("send/scs/demo") }}',
		           	data: $(this).serialize(),
		           	context: this,
		           	success: function() {
		           		$(this).trigger('reset');
		           		$(this).find('input').trigger('blur');
						$(this).find('.submit').removeClass('loading disabled');
						$(this).siblings('.success.message').transition('fade in');
		       		},
					error: function(){
		           		$(this).find('input').trigger('blur');
						$(this).find('.submit').removeClass('loading disabled');
						$(this).siblings('.warning.message').transition('fade in');
					}
				});
			}
		});
		$('#cloud-price form').submit(function(e) {
			e.preventDefault();
		}).form(validationRules, {
			inline: true,
			onSuccess: function() {
				$(this).find('.submit').addClass('loading disabled');
			    $.ajax({
					type: 'POST',
					url: '{{ url("send/scs/cloud/price") }}',
		           	data: $(this).serialize(),
		           	context: this,
		           	success: function() {
		           		$(this).trigger('reset');
		           		$(this).find('input').trigger('blur');
						$(this).find('.submit').removeClass('loading disabled');
						$(this).siblings('.success.message').transition('fade in');
		       		},
					error: function(){
		           		$(this).find('input').trigger('blur');
						$(this).find('.submit').removeClass('loading disabled');
						$(this).siblings('.warning.message').transition('fade in');
					}
				});
			}
		});
		$('#schedule-meeting form').submit(function(e) {
			e.preventDefault();
		}).form(validationRules, {
			inline: true,
			onSuccess: function() {
				$(this).find('.submit').addClass('loading disabled');
			    $.ajax({
					type: 'POST',
					url: '{{ url("send/scs/meeting") }}',
		           	data: $(this).serialize(),
		           	context: this,
		           	success: function() {
		           		$(this).trigger('reset');
		           		$(this).find('input').trigger('blur');
						$(this).find('.submit').removeClass('loading disabled');
						$(this).siblings('.success.message').transition('fade in');
		       		},
					error: function(){
		           		$(this).find('input').trigger('blur');
						$(this).find('.submit').removeClass('loading disabled');
						$(this).siblings('.warning.message').transition('fade in');
					}
				});
			}
		});
	});
</script>
@endpush