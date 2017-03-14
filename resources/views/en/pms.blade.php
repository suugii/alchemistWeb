@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<h1 class="ui inverted centered header">Property Management System 
	<small style="font-size: 12px">powered by 
		<a href="#">Alchemist Platfrom & MyAllocator</a>
	</small>
</h1><br/>
<span class="ui centered lead" style="font-size: 18px">Customized for property, hotel, renting <strong>service</strong> companies<br/>to control and manage their daily avialability and income & expense.</span>
<div class="ui stackable grid relaxed">
	<div class="four wide column"></div>
	<div class="four wide column"> 
		<a class="large basic inverted animated fade ui button" onclick="$('#request-demo').modal('show')">
			<div class="visible content">REQUEST A DEMO</div>
			<div class="hidden content">14 days Trail</div>
		</a>
	</div>
	<div class="four wide column">
		<a class="large basic inverted animated fade ui button">
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
		<img src="{{ asset('img/pms-1.png') }}"/>
	</li>
	<li>
		<img src="{{ asset('img/pms-2.png') }}"/>
	</li>
	<li>
		<img src="{{ asset('img/pms-3.png') }}"/>
	</li>
	<li>
		<div class="videoWrapper">
			<iframe width="1280" height="720" src="https://www.youtube.com/embed/6rbVczT2ywo?rel=0&showinfo=0&controls=0" frameborder="0"></iframe>
		</div>
	</li>
</ul>
@endsection

@section('content')
<div class="ui vertical feature segment">
	<div class="ui centered page grid">
		<div class="fourteen wide column">
			<div class="ui three column center aligned stackable divided grid">
				<div class="column column-feature">
					<div class="ui icon header">
						<i class="flaticon-layers icon"></i>
					 ROOM MANAGEMENT
					</div>
					<p>Organize your rooms with its categories and prices. Get your order depending our room types.</p>
				</div>
				<div class="column column-feature">
					<div class="ui icon header">
						<i class="flaticon-connecting icon"></i>
						PRICE MANAGEMENT
					</div>
					<p>Apply variuos types of prices on your properties. Configure discounts and additional costs depending on rules.</p>
				</div>
				<div class="column column-feature">
					<div class="ui icon header">
						<i class="flaticon-calendar icon"></i>
						SERVICE MANAGEMENT
					</div>
					<p> Manage additional or on demand services. Define user defined services. Manage service payments.</p>
				</div>
			</div>
			<div class="ui three column center aligned stackable divided grid">
				<div class="column column-feature">
					<div class="ui icon header">
						<i class="flaticon-tick icon"></i>
						USER MANAGEMENT
					</div>
					<p>Register your all customer and use loyalty function for returning users. Print invoices and reciepts.</p>
				</div>
				<div class="column column-feature">
					<div class="ui icon header">
						<i class="flaticon-tick icon"></i>
						PAYMENT MANAGEMENT
					</div>
					<p>Manage all payment of the property. Recieve payments partiually. Payment history for managers.</p>
				</div>
				 <div class="column column-feature">
					<div class="ui icon header">
						<i class="flaticon-settings icon"></i>
						CHANNEL MANAGER - MyAllocator
					</div>
					<p>We use <a href="#">MyAllocator</a> API for Booking.com and Agoda.com direct linking channel manager. It is worldly used realtime Channel manager.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="ui stackable centered page grid">
		<h3 class="subscribe-header">Do you want something more custom?</h3> 
		<p class="ui centered lead large">Please leave your email for custom solutions. We happy to discuss about it.</p>
		<form class="ui form eight wide subscribe column" id="custom-pms">
			{{ csrf_field() }}
			<div class="field">
				<div class="ui action input">
					<input type="text" name="email" placeholder="Email">
					<button class="ui submit button" type="submit">Send</button>
				</div>
			</div>
		</form>
	</div>
	<div class="ui stackable centered page grid" id="status">
		<div class="eight wide subscribe column">
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
<div class="ui recent-works vertical segment">
	<div class="ui very relaxed stackable centered page grid">
		<div class="row">
			<div class="eight wide centered column">
				<h1 class="center aligned ui inverted header">PRICE</h1>
				<div class="ui horizontal divider">
					<i class="white flaticon-attachment icon"></i>
				</div>
				<p class="ui centered lead">For now we only offer cloud based price. Please contact us for enterpriese solutions.</p>
			</div>
		</div>
		<div class="fourteen wide column">
			<div class="ui three column aligned stackable divided grid">
				<div class="column">
					<div class="ui fluid card" data-html="<div class='header'>User rating</div><div class='content'><div class='ui star rating'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Hotel frontdesk </div>
							<div class="description">
								If you own hotel or hostel. It is difficult to control your front desk orders. With our PMS you can handle it faster and more efficient.
								<br/><br/>
								* Room management <br/>
								* Service management <br/>
								* Payment management <br/>
								* Customer management <br/>
								* Room pricing management <br/>
							</div>
							<div class="center aligned ui">
								<h2 class="center aligned ui">$39 / <small style="font-size: 16px"> per month</small></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui fluid card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Property lesser</div>
							<div class="description">
								Most suited for property lessers. You can configure your renting and selling propertoes and plan ahead. 
									<br/><br/>
									* Room management <br/>
									* Contract management <br/>
									* Payment management <br/>
									* Customer management <br/>
									* Property pricing management <br/> 
									* Automated invoicing to your clients <br/> 
							</div>
							<div class="center aligned ui">
								<h2 class="center aligned ui">$69 / <small style="font-size: 16px"> per month</small></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui fluid card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Custom Solution</div>
							<div class="description">
								We can establish your custom property management solutions. It will be the exact solution for your concerns.
								<br / ><br / >
									* Custom system<br / >
									* Long term support <br / >
									* Contract based fee <br / >
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
							<img class="ui image" src="{{ asset('img/ihotel.png') }}"/>
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui shape">
					<div class="sides">
						<div class="active side">
							<img class="ui image" src="{{ asset('img/ubcity.png') }}"/>
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
					<input type="email" name="email" placeholder="Email">
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
					<input type="number" name="phone" placeholder="Phone">
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
			type: 'date'
		});
		$('#custom-pms').submit(function(e) {
			e.preventDefault();
		}).form(validationRules, {
			inline: true,
			onSuccess: function() {
				$(this).find('.submit').addClass('loading disabled');
			    $.ajax({
					type: 'POST',
					url: '{{ url("send/pms/custom") }}',
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
					url: '{{ url("send/pms/demo") }}',
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
					url: '{{ url("send/pms/cloud/price") }}',
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
					url: '{{ url("send/pms/meeting") }}',
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