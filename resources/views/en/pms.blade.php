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
		<a href="#" class="large basic inverted animated fade ui button">
			<div class="visible content">REQUEST A DEMO</div>
			<div class="hidden content">14 days Trail</div>
		</a>
	</div>
	<div class="four wide column">
		<a href="#" class="large basic inverted animated fade ui button">
			<div class="visible content">INTRODUCTION PDF</div>
			<div class="hidden content">14 days Trail</div>
		</a>
	</div>
	<div class="four wide column"></div>
</div>
 <div class="ui centerted image">
	<p><img src="{{ asset('img/banner4.png') }}"/></p>
</div>
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
	<div class="ui centered page grid">
		<h3 class="subscribe-header">Do you want something more custom?</h3> 
		<p class="ui centered lead large">Please leave your email for custom solutions. We happy to discuss about it.</p>
		<div class="ui form eight wide subscribe column">
			<div class="field">
				<div class="ui fluid action input">
					<input placeholder="Email" type="text">
					<div class="ui button">Send</div>
				</div>
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
					<div class="ui card" data-html="<div class='header'>User rating</div><div class='content'><div class='ui star rating'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
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
					<div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></div></div>">
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
					<div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
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
							<div class="ui button">Request</div>
							<div class="ui pink button">
								<i class="flaticon-call icon"></i>
								Meeting?
							</div>
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
@endsection