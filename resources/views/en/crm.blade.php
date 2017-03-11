@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<h1 class="ui inverted centered center aligned header">Customer relationship management 
	<small style="font-size: 12px">powered by 
		<a href="#">Alchemist Platfrom & vTiger Frontend</a>
	</small>
</h1><br/>
<span class="ui centered lead" style="font-size: 18px">Customized for mid-sized <strong>retail</strong> companies<br/> to document, controll and manage their sales, purchases and warehouses</span>
<div class="ui grid stackable centered center aligned">
	<div class="three wide column"></div>
	<div class="three wide column"> 
		<a class="large basic inverted animated fade ui button" onclick="$('#schedule-meeting').modal('show')">
			<div class="visible content">REQUEST A DEMO</div>
			<div class="hidden content">Make appoinment?</div>
		</a>
	</div>
	<div class="three wide column"></div>
</div>
<div class="videoWrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/8nl4hRo7BZw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
</div>
@endsection

@section('content')
<form id="price-offer">
	{{ csrf_field() }}
	<div class="ui vertical feature segment">
		<div class="ui centered page grid">
			<div class="fourteen wide column">
				<div class="ui three column center aligned stackable divided grid">
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-layers icon"></i>
							WAREHOUSE INVENTORY
						</div>
						<p><strong>Track your stock</strong> information. Document your purchase order and invoice items in one place. Alert on finishing products.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="warehouse-inventory" checked>
							<label>Primary module</label>
						</div>
					</div>
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-connecting icon"></i>
							SALES, CUSTOMER HISTORY
						</div>
						<p>Make sales trought customer history based integration. Build <strong>better customer service</strong> with background information.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="sales-customer-history" checked>
							<label>Primary module</label>
						</div>
					</div>
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-calendar icon"></i>
							ACTIVITY MANAGEMENT
						</div>
						<p>Document your <strong>daily activities</strong> to get better per customer leads and deals. Organize your staffs under one system.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="activity-management" checked>
							<label>Primary module</label>
						</div>
					</div>
				</div>
				<div class="ui three column center aligned stackable divided grid">
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-tick icon"></i>
							PROJECT MANAGEMENT
						</div>
						<p>Define your project managemnet and team members. Use <strong>task management</strong> for each project. Manage duration based task list.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="project-management">
							<label>Optional module</label>
						</div>
					</div>
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-tick icon"></i>
							SUPPLY CHAIN
						</div>
						<p>Controll your purchase and estimate your warehouse earnings. Choose your <strong>best vendor</strong> compare price offers.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="supply-chain">
							<label>Optional module</label>
						</div>
					</div>
					 <div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-settings icon"></i>
							CLOUD or ONSITE
						</div>
						<p>Our system can be installed on your server. We suggest suitable VPS solutions. We can secure your in our cloud version.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="cloud-or-onsite">
							<label>Onsite</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ui stackable centered page grid">
			<h3 class="subscribe-header">Request a price offer</h3> 
			<p class="ui centered lead large">Check your required modules we will send you onsite installation price offer. For cloud price <a href="#">click here.</a></p>
			<div class="ui form eight wide subscribe column">
				<div class="field">
	 				<div class="ui action input">
						<input type="email" name="email" placeholder="Email" required>
						<button type="submit" class="ui submit button">Get price offer</button>
					</div>
				</div>
			</div>
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
</form>
<div class="ui recent-works vertical segment ">
	<div class="ui very relaxed stackable centered page grid ">
		<div class="row">
			<div class="eight center aligned wide column centered">
				<h1 class="center aligned ui inverted header">CLOUD PRICE</h1>
				<div class="ui horizontal divider"><i class="white flaticon-attachment icon"></i></div>
				<p class="ui centered lead">No need worry about servers we can handle it for you!.</p>
			</div>
		</div>
		<div class="fourteen wide column">
			<div class="ui three column stackable grid">
				<div class="column">
					<div class="ui fluid card" data-html="<div class='header'>User rating</div><div class='content'><div class='ui star rating'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Startup</div>
							<div class="description">Perfect for when you begin your own retail company. Ideal for selling B2C. <br/>Suitable for up to 5 employees.<br/><br/>* Warehouse Management <br/>* Activity Management <br/>* Sales Management <br/>
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
							<div class="header">Retailer</div>
							<div class="description">Most suited for mid-sized businesses. You can configure your company hierarchy and create certain roles for your employees.<br/><br/>* Start up pack <br/>* Supply Chain management <br/>* Project Management <br/>
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
							<div class="header">Enterprise </div>
							<div class="description">We can establish your enterprise solution using our Alchemist Platform. It will be the exact solution for your concerns. We have built hospital, fitness, call center and many other organization softwares using our platform.<br/><br/>* Custom system <br/>* Long term support <br/>
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
				<h1 class="ui header">Our Top Clients</h1>
				<div class="ui horizontal divider">
					<i class="flaticon-settings icon"></i>
				</div>
				<p class="ui centered lead">Many companies rely on Alchemist Platform</p><br/>
			</div>
		</div>
		<div class="ui grid stackable">
			<div class="four wide column">
				<img class="ui image" src="{{ asset('img/psc.png') }}"/>
			</div>
			<div class="four wide column"> 
				<img class="ui image" src="{{ asset('img/reduni.png') }}"/>
			</div>
			<div class="four wide column">
				<img class="ui image" src="{{ asset('img/lhamoursun.png') }}"/>
			</div>
			<div class="four wide column">
				<img class="ui image" src="{{ asset('img/itpark.png') }}"/>
			</div>
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
					<input type="email" name="email" placeholder="Email" required>
					<button type="submit" class="ui submit button">Get price offer</button>
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
						<input type="text" name="datepicker" placeholder="Date" required>
					</div>
				</div>
			</div>
			<div class="field">
 				<div class="ui action input">
					<input type="hidden" name="date">
					<input type="email" name="email" placeholder="Email" required>
					<button type="submit" class="ui submit button">Schedule</button>
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
		$('#calendar').calendar();
		$('#price-offer').submit(function(e) {
	    	e.preventDefault(); 
		}).form(validationRules, {
			inline: true,
			onSuccess: function() {
				$(this).find('.submit').addClass('loading disabled');
			    $.ajax({
					type: 'POST',
					url: '{{ url("send/crm/price") }}',
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
		$('#cloud-price form').submit(function(e) {
			e.preventDefault();
		}).form(validationRules, {
			inline: true,
			onSuccess: function() {
				$(this).find('.submit').addClass('loading disabled');
			    $.ajax({
					type: 'POST',
					url: '{{ url("send/crm/cloud/price") }}',
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
				var date = $('#calendar').calendar('get date');
				$(this).find('input[name=date]').val(date);
				$(this).find('.submit').addClass('loading disabled');
			    $.ajax({
					type: 'POST',
					url: '{{ url("send/crm/meeting") }}',
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