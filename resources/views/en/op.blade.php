@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<div class="fourteen wide column">
	<div class="ui four stackable cards" style="text-align: left;">
		<div class="card">
			<div class="image small">
				<img class="ui image small" src="{{ asset('img/eejmn.jpg') }}">
			</div>
			<div class="content">
				<div class="header">Eej.mn revised</div>
				<div class="description"><i class="flaticon-settings icon"></i>Coming soon</div><br/>
				<div class="description">
					A portal website integrated with “Eej” application. Mongolia’s first mobile application for women who are pregnant or have recently given birth.
				</div><br/>
				<div class="description">
					<a class="openContribute" data-title="Eej.mn">Contribute</a><br/><br/>
					<a href="http://www.eej.mn" target="_blank">
						<i class="world icon" data-position="top center" data-variation="basic" data-title="Web Platform"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="{{ asset('img/lhamour.png') }}">
			</div>
			<div class="content">
				<div class="header">Lhamour.mn revised</div>
				<div class="description"><i class="flaticon-settings icon"></i>Coming soon</div><br/>
				<div class="description">
					An online market website for LHAMOUR brand. Mongolia’s first manufacturer of Organic beauty products.
				</div><br/>
				<div class="description">
					<a class="openContribute" data-title="Lhamour.mn">Contribute</a><br/><br/>
					<a href="http://www.lhamour.mn" target="_blank">
						<i class="world icon" data-position="top center" data-variation="basic" data-title="Web Platform"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="{{ asset('img/deelstore.png') }}">
			</div>
			<div class="content">
				<div class="header">Deelstore.mn</div>
				<div class="description"><i class="flaticon-tick icon"></i>Released</div><br/>
				<div class="description">
					An online market website for “Torgo”. Manufacturer and retailer of traditional deel clothing.
				</div><br/>
				<div class="description">
					<a href="http://www.deelstore.mn" target="_blank">
						<i class="world icon" data-position="top center" data-variation="basic" data-title="Web Platform"></i>
					</a>
					<a onclick="tweet('http://www.deelstore.mn')">
						<i class="twitter icon" data-position="top center" data-variation="basic" data-title="Tweet"></i>
					</a>
					<a onclick="share('http://www.deelstore.mn')">
						<i class="facebook icon" data-position="top center" data-variation="basic" data-title="Share"></i>
					</a>  
				</div>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="{{ asset('img/cardmall.png') }}">
			</div>
			<div class="content">
				<div class="header">Cardmall.mn</div>
				<div class="description"><i class="flaticon-tick icon"></i>Released</div><br/>
				<div class="description">
					CardMall is online shop for all kinds of gift cards. Also you can send gift cards to your facebook friends.
				</div><br/>
				<div class="description">
					<a href="http://www.cardmall.mn" target="_blank">
						<i class="world icon" data-position="top center" data-variation="basic" data-title="Web Platform"></i>
					</a>
					<a onclick="tweet('http://www.cardmall.mn')">
						<i class="twitter icon" data-position="top center" data-variation="basic" data-title="Tweet"></i>
					</a>
					<a onclick="share('http://www.cardmall.mn')">
						<i class="facebook icon" data-position="top center" data-variation="basic" data-title="Share"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="{{ asset('img/honey.jpg') }}">
			</div>
			<div class="content">
				<div class="header">Honey - Retail sales app</div>
				<div class="description"><i class="flaticon-more icon"></i>Pre-released</div><br/>
				<div class="description">
					A retail sales application system for smart phones and devices.
				</div><br/>
				<div class="description">
					<a class="openInvest" data-title="Honey">Invest</a> | 
					<a class="openContribute" data-title="Honey">Contribute</a><br/><br/>
					<a href="#">
						<i class="apple icon" data-position="top center" data-variation="basic" data-title="iOS app"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="image small">
				<img class="ui image small" src="{{ asset('img/ihotel.jpg') }}">
			</div>
			<div class="content">
				<div class="header">iHotel.mn</div>
				<div class="description"><i class="flaticon-tick icon"></i>Released</div><br/>
				<div class="description">
					An online web platform for making hotel reservations and payments.
				</div><br/>
				<div class="description">
					<a href="http://www.ihotel.mn">
						<i class="world icon" data-position="top center" data-variation="basic" data-title="Web Platform"></i>
					</a>
					<a onclick="tweet('http://www.ihotel.mn')">
						<i class="twitter icon" data-position="top center" data-variation="basic" data-title="Tweet"></i>
					</a>
					<a onclick="share('http://www.ihotel.mn')">
						<i class="facebook icon" data-position="top center" data-variation="basic" data-title="Share"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="{{ asset('img/marchaakhai.jpg') }}"/>
			</div>
			<div class="content">
				<div class="header">Marchaakhai.mn</div>
				<div class="description"><i class="flaticon-tick icon"></i>Released</div><br/>
				<div class="description">
					An online web platform of “Marchaakhai”, a company creating video contents for children.
				</div><br/>
				<div class="description">
					<a class="openInvest" data-title="Marchaakhai.mn">Invest</a><br/><br/>
					<a href="http://www.marchaakhai.mn" target="_blank">
						<i class="world icon" data-position="top center" data-variation="basic" data-title="Web Platform"></i>
					</a>
					<a href="https://itunes.apple.com/us/app/marcaahaj/id1130228211?mt=8" target="_blank">
						<i class="apple icon" data-position="top center" data-variation="basic" data-title="iOS app"></i>
					</a>
					<a href="https://play.google.com/store/apps/details?id=com.ionicframework.myapp143522" target="_blank">
						<i class="android icon" data-position="top center" data-variation="basic" data-title="Android app"></i>
					</a>
					<a onclick="tweet('http://www.marchaakhai.mn')">
						<i class="twitter icon" data-position="top center" data-variation="basic" data-title="Tweet"></i>
					</a>
					<a onclick="share('http://www.marchaakhai.mn')">
						<i class="facebook icon" data-position="top center" data-variation="basic" data-title="Share"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="{{ asset('img/onenicething.jpg') }}">
			</div>
			<div class="content">
				<div class="header">1nicething.net</div>
				<div class="description"><i class="flaticon-tick icon"></i>Released</div><br/>
				<div class="description">
					An online web platform for building a social network to promote charitable acts.
				</div><br/>
				<div class="description">
					<a class="openInvest" data-title="1nicething.net">Invest</a> | 
					<a class="openContribute" data-title="1nicething.net">Contribute</a><br/><br/>
					<a href="http://www.1nicething.net" target="_blank">
						<i class="world icon" data-position="top center" data-variation="basic" data-title="Web Platform"></i>
					</a>
					<a onclick="tweet('http://www.1nicething.net')">
						<i class="twitter icon" data-position="top center" data-variation="basic" data-title="Tweet"></i>
					</a>
					<a onclick="share('http://www.1nicething.net')">
						<i class="facebook icon" data-position="top center" data-variation="basic" data-title="Share"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('content')
<div class="ui vertical segment">
	<div class="ui stackable center aligned page grid">
		<div class="row">
			<div class="eight wide column">
				<h1 class="ui header">Invest</h1>
				<div class="ui horizontal divider">
					<i class="flaticon-speech icon"></i>
				</div>
				<p class="ui centered lead">You can invest our project that are labeled <a>Invest</a>. Click and leave your email for contact. Thanks.</p><br/>
			</div>
		</div>
	</div>
</div>
<div class="ui small modal" id="contribute-modal">
	<div class="header">Contribute</div>
	<div class="content">
		<form class="ui form">
			<div class="field">
				<select name="type" class="ui fluid dropdown">
					<option value="">Select type</option>
					<option value="coding">Coding</option>
					<option value="designing">Designing</option>
					<option value="advising">Advising</option>
					<option value="other">Other</option>
				</select>
			</div>
			<div class="field">
 				<div class="ui action input">
					<input type="email" name="email" placeholder="Email">
					<button class="ui submit button" type="submit">Send</button>
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
<div class="ui small modal" id="invest-modal">
	<div class="header">Invest</div>
	<div class="content">
		<form class="ui form">
			<div class="field">
				<input type="email" name="email" placeholder="Email">
			</div>
			<div class="field">
 				<div class="ui action input">
					<input type="text" name="phone" placeholder="Phone">
					<button class="ui submit button" type="submit">Send</button>
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
		$('.description .icon').popup({
			inline     : true,
			hoverable  : true,
		});
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
			type: {
	            identifier  : 'type',
	            rules: [
	                {
	                    type   : 'empty',
	                    prompt : 'Please select a type'
	                }
	            ]
	        },
		};
		$('.openContribute').click(function() {
			var title = $(this).data('title');
			$('#contribute-modal').modal({
				onShow : function() {
					$('#contribute-modal form').submit(function(e) {
						e.preventDefault();
					}).form(validationRules, {
						inline: true,
						onSuccess: function() {
							$(this).find('.submit').addClass('loading disabled');
						    $.ajax({
								type: 'POST',
								url: '{{ url("send/contribute") }}',
					           	data: {_token: '{{ csrf_token() }}', type: $(this).find('select[name=type]').val(), email: $(this).find('input[name=email]').val(), title: title},
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
				}
			}).modal('show');
		});
		$('.openInvest').click(function() {
			var title = $(this).data('title');
			$('#invest-modal').modal({
				onShow : function() {
					$('#invest-modal form').submit(function(e) {
						e.preventDefault();
					}).form(validationRules, {
						inline: true,
						onSuccess: function() {
							$(this).find('.submit').addClass('loading disabled');
						    $.ajax({
								type: 'POST',
								url: '{{ url("send/invest") }}',
					           	data: {_token: '{{ csrf_token() }}', email: $(this).find('input[name=email]').val(), phone: $(this).find('input[name=phone]').val(), title: title},
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
				}
			}).modal('show');
		});
	});
	function share(url) {
        var winTop = (screen.height / 2) - 175;
        var winLeft = (screen.width / 2) - 260;
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=520,height=350');
    }
    function tweet(url) {
        var winTop = (screen.height / 2) - 175;
        var winLeft = (screen.width / 2) - 260;
        window.open('https://twitter.com/intent/tweet?text=' + url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=520,height=350');
    }
</script>
@endpush