@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<div class="fourteen wide column center aligned">
	<div class="ui four column aligned stackable divided grid">
		<div class="column">
			<div class="ui card">
				<div class="image small">
					<img class="ui image small" src="{{ asset('img/eejmn.jpg') }}">
				</div>
				<div class="content">
					<div class="header">Eej.mn revised</div>
					<div class="description"><i class="flaticon-settings icon"></i>Coming soon</div><br/>
					<div class="description">
						Жирэмсэн болон дөнгөж төрсөн ээжүүдэд зориулсан Монголын анхны "Ээж" Гар утасны аппликэйшнд суурилсан бүрэн хэмжээний портал сайт.
						<br/>
						<a href="http://www.eej.mn" target="_blank">Web Platfrom</a> | <a class="openContribute" data-title="Eej.mn">Contribute</a>
					</div>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="ui card">
				<div class="image">
					<img src="{{ asset('img/lhamour.png') }}">
				</div>
				<div class="content">
					<div class="header">Lhamour.mn revised</div>
					<div class="description"><i class="flaticon-settings icon"></i>Coming soon</div><br/>
					<div class="description">
						Монголын анхны Органик гоо сайхны бүтээгдэхүүн үйлдвэрлэгч, үндэсний шилдэг брэнд LHAMOUR-н онлайн худалдааны вэб.
						<br/>
						<a href="http://www.lhamour.mn" target="_blank">Web Platfrom</a> | <a class="openContribute" data-title="Lhamour.mn">Contribute</a>
					</div>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="ui card">
				<div class="image">
					<img src="{{ asset('img/deelstore.png') }}">
				</div>
				<div class="content">
					<div class="header">Deelstore.mn</div>
					<div class="description"><i class="flaticon-tick icon"></i>Released</div><br/>
					<div class="description">
					Үндэсний дээл хувцасны үйлдвэрлэл, худалдаа эрхэлдэг "Торго" салоны онлайн худалдааны вэб.<br/>
						<a href="http://www.deelstore.mn" target="_blank">Online shop</a> | <a href="https://twitter.com/intent/tweet?text=http://www.deelstore.mn" target="_blank">Tweet</a> | <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.deelstore.mn" target="_blank">Share</a> 
					</div>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="ui card">
				<div class="image">
					<img src="{{ asset('img/cardmall.png') }}">
				</div>
				<div class="content">
					<div class="header">Cardmall.mn</div>
					<div class="description"><i class="flaticon-tick icon"></i>Released</div><br/>
					<div class="description">
						Mentor to almost all Mongolian startups. Founder of Mongolian startup eco system. <br/>
						Founder of Startup Mongolia
						<br/>
						<a href="http://www.cardmall.mn" target="_blank">Online shop</a> | <a href="https://twitter.com/intent/tweet?text=http://www.cardmall.mn" target="_blank">Tweet</a> | <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.cardmall.mn" target="_blank">Share</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ui four column aligned stackable divided grid">
		<div class="column">
			<div class="ui card">
				<div class="image">
					<img src="{{ asset('img/honey.jpg') }}">
				</div>
				<div class="content">
					<div class="header">Honey - Retail sales app</div>
					<div class="description"><i class="flaticon-more icon"></i>Pre-released</div><br/>
					<div class="description">
						Борлуулалтын цахим дэвтэр буюу гар утас болон ухаалаг төхөөрөмжид суурилсан борлуулалтын систем юм.
						<br/>
						<a href="#">IOS</a> | <a href="#">PDF</a> | <a class="openInvest" data-title="Honey">Invest</a> | <a class="openContribute" data-title="Honey">Contribute</a>
					</div>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="ui card">
				<div class="image small">
					<img class="ui image small" src="{{ asset('img/ihotel.jpg') }}">
				</div>
				<div class="content">
					<div class="header">iHotel.mn</div>
					<div class="description"><i class="flaticon-tick icon"></i>Released</div><br/>
					<div class="description">
						Зочид буудлын өрөө захиалга тэдгээрийн төлбөр тооцоог хийдэг цогц вэб платформ.
						<br/>
						<a href="http://www.ihotel.mn">Web Platfrom</a> | <a href="https://twitter.com/intent/tweet?text=http://www.ihotel.mn" target="_blank">Tweet</a> | <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.ihotel.mn" target="_blank">Share</a>
					</div>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="ui card">
				<div class="image">
					<img src="{{ asset('img/marchaakhai.jpg') }}"/>
				</div>
				<div class="content">
					<div class="header">marchaahai.mn</div>
					<div class="description"><i class="flaticon-tick icon"></i>Released</div><br/>
					<div class="description">
						Зөвхөн хүүхдэд зориулсан <strong>videocontent</strong> үйлдвэрлэгч Марчаахай компанийн вэб платформ.
						<br/>
						<a href="http://www.marchaakhai.mn" target="_blank">Content server</a> | <a href="https://itunes.apple.com/us/app/marcaahaj/id1130228211?mt=8" target="_blank">IOS</a>  | <a href="https://play.google.com/store/apps/details?id=com.ionicframework.myapp143522" target="_blank">Android</a> | <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.marchaakhai.mn" target="_blank">Share</a>
					</div>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="ui card">
				<div class="image">
					<img src="{{ asset('img/onenicething.jpg') }}">
				</div>
				<div class="content">
					<div class="header">1nicething.net</div>
					<div class="description"><i class="flaticon-tick icon"></i>Released</div><br/>
					<div class="description">
						Сайн үйлсийг түгээн дэлгэрүүлэх олон нийтийн сүлжээг үүсгэх үндсэн санаа бүхий вэб платформ.
						<br/>
						<a href="http://www.1nicething.net" target="_blank">Web</a> | <a class="openInvest" data-title="1nicething.net">Invest</a> |  <a href="https://twitter.com/intent/tweet?text=http://www.1nicething.net" target="_blank">Tweet</a> | <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.1nicething.net" target="_blank">Share</a> |  <a class="openContribute" data-title="1nicething.net">Contribute</a>
					</div>
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
				<h1 class="ui header">Хөрөнгө оруулалт</h1>
				<div class="ui horizontal divider">
					<i class="flaticon-speech icon"></i>
				</div>
				<p class="ui centered lead">Та дээрх төслүүдээс <a>Invest</a> гэсэн бичиглэлтэй дээр дарж харгалзах төсөлд санал илгээх боломжтой.</p><br/>
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
					<option value="">Төрөл сонгоно уу</option>
					<option value="coding">Coding</option>
					<option value="designing">Designing</option>
				</select>
			</div>
			<div class="field">
 				<div class="ui action input">
					<input type="email" name="email" placeholder="Цахим шуудан">
					<button class="ui submit button" type="submit">Илгээх</button>
				</div>
			</div>
		</form>
		<div class="ui hidden success message">
			<i class="close icon"></i>
			<div class="header">Амжилттай</div>
			<p>Бид таны цахим шуудан руу хариу илгээх болно.</p>
		</div>
		<div class="ui hidden warning message">
			<i class="close icon"></i>
			<div class="header">Алдаа</div>
			<p>Алдаа гарлаа. Та дахин оролдоно уу!</p>
		</div>
	</div>
</div>
<div class="ui small modal" id="invest-modal">
	<div class="header">Invest</div>
	<div class="content">
		<form class="ui form">
			<div class="field">
				<input type="email" name="email" placeholder="Цахим шуудан">
			</div>
			<div class="field">
 				<div class="ui action input">
					<input type="number" name="phone" placeholder="Утасны дугаар">
					<button class="ui submit button" type="submit">Илгээх</button>
				</div>
			</div>
		</form>
		<div class="ui hidden success message">
			<i class="close icon"></i>
			<div class="header">Амжилттай</div>
			<p>Бид таны цахим шуудан руу хариу илгээх болно.</p>
		</div>
		<div class="ui hidden warning message">
			<i class="close icon"></i>
			<div class="header">Алдаа</div>
			<p>Алдаа гарлаа. Та дахин оролдоно уу!</p>
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
	                    prompt : 'Цахим шуудан оруулна уу'
	                },
	                {
	                    type   : 'email',
	                    prompt : 'Цахим шуудан оруулна уу'
	                },
	                {
	                    type   : 'maxLength[191]',
	                    prompt : 'Хэт урт тэмдэгт оруулсан байна'
	                }
	            ]
	        },
			phone: {
	            identifier  : 'phone',
	            rules: [
	                {
	                    type   : 'empty',
	                    prompt : 'Утасны дугаар оруулна уу'
	                },
	                {
	                    type   : 'number',
	                    prompt : 'Утасны дугаар оруулна уу'
	                },
	                {
	                    type   : 'maxLength[191]',
	                    prompt : 'Хэт урт тэмдэгт оруулсан байна'
	                }
	            ]
	        },
			type: {
	            identifier  : 'type',
	            rules: [
	                {
	                    type   : 'empty',
	                    prompt : 'Төрөл сонгоно уу'
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
</script>
@endpush