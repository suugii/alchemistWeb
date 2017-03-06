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
			<a href="#" class="large basic inverted animated fade ui button">
				<div class="visible content">REQUEST A DEMO</div>
				<div class="hidden content">Make appoinment?</div>
			</a>
		</div>
		<div class="three wide column"></div>
	</div>
	<div class="ui centerted image device only">
		<p><img src="{{ asset('img/banner2.png') }}"/></p>
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
						WAREHOUSE INVENTORY
					</div>
					<p><strong>Track your stock</strong> information. Document your purchase order and invoice items in one place. Alert on finishing products.</p>
					<div class="ui checkbox">
						<input type="checkbox" name="example" checked>
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
						<input type="checkbox" name="example" checked>
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
						<input type="checkbox" name="example" checked>
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
						<input type="checkbox" name="example">
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
						<input type="checkbox" name="example">
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
						<input type="checkbox" name="example">
						<label>Onsite</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ui centered page grid">
		<h3 class="subscribe-header">Request a price offer</h3> 
		<p class="ui centered lead large">Check your requierd modules we wills sent you onsite installation price offer. For cloud price <a href="#">click here.</a></p>
		<div class="ui form eight wide subscribe column">
			<div class="field">
 				<div class="ui fluid action input">
					<input placeholder="Email" type="text">
					<div class="ui button">Get price offer  </div>
				</div>
			</div>
		</div>
	</div>       
</div>
<div class="ui recent-works vertical segment ">
	<div class="ui very relaxed stackable centered page grid ">
		<div class="row">
			<div class="eight center aligned wide column centered">
				<h1 class="center aligned ui inverted header">
					CLOUD PRICE
				</h1>
				<div class="ui horizontal divider"><i class="white flaticon-attachment icon"></i></div>
				<p class="ui centered lead">No need worry about servers we can handle it for you!.</p>
			</div>
		</div>
		<div class="fourteen wide column">
			<div class="ui three column stackable grid">
				<div class="column">
					<div class="ui card centered" data-html="<div class='header'>User rating</div><div class='content'><div class='ui star rating'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
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
					<div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></div></div>">
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
					<div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Enterprise </div>
							<div class="description">We can establish your enterprise solution using our Alchemist Platform. It will be the exact solution for your concerns. We have built hospital, fitness, call center and many other organization softwares using our platform.<br/><br/>* Custom system <br/>* Long term support <br/>
							</div>
						</div>
						<div class="ui two bottom attached buttons">
							<div class="ui button">Request price offer</div>
							<div class="ui pink button">Schedule a meeting ?</div>
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
				<h1 class="ui header">
					Our Top Clients
				</h1>
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
@endsection