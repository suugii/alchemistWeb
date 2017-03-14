@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<h1 class="ui inverted centered header">Зардалын удирдлагын систем 
	<small style="font-size: 12px">
		<a href="https://www.odoo.com/">Odoo</a>-р бүтээв
	</small>
</h1>
<span class="ui centered lead" style="font-size: 18px">Бүх төрлийн аж ахуйн нэгж болон төрийн өмчит байгууллагуудад зориулсан <br>зардлын удирдлага хяналтын цогц шийдэл.</span>
<div class="ui stackable grid">
	<div class="four wide column"></div>
	<div class="four wide column"> 
		<a class="large basic inverted animated fade ui button" onclick="$('#request-demo').modal('show')">
			<div class="visible content">Дэмо авах</div>
			<div class="hidden content">14 хоног үнэгүй</div>
		</a>
	</div>
	<div class="four wide column">
		<a href="#" class="large basic inverted animated fade ui button">
			<div class="visible content">ТАНИЛЦУУЛГА</div>
			<div class="hidden content">PDF ТАТАХ</div>
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
						<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
							<i class="flaticon-layers icon"></i>
							ТӨСВИЙН УДИРДЛАГА
						</div>
						<p>Төсөв бүртгэл, <strong>тодотгол</strong> хийж төсвийн гүйцэтгэлийг зардлын төрөл, хэлтэс, алба байгууллагын нэгж тус бүрээр хянаж зохицуулна.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="budget-management" checked>
							<label>Үндсэн модуль</label>
						</div>
					</div>
					<div class="column column-feature">
						<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
							<i class="flaticon-connecting icon"></i>
							ТӨЛБӨРИЙН УДИРДЛАГА
						</div>
						<p>Байгууллагын үйл ажиллагаатай холбоотой <strong>бүх зардлыг бүртгэж</strong>, тэдгээрийг төсөвтэй холбон, төсвийн зарцуулалтыг ажлын урсгалаар дамжуулан хянана.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="payment-management">
							<label>Үндсэн модуль</label>
						</div>
					</div>


					<div class="column column-feature">
						<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
							<i class="flaticon-tick icon"></i>
							ХУДАЛДАН АВАЛТЫН УДИРДЛАГА
						</div>
						<p> Худалдан авалтын захиалга түүний төлбөр тооцоо, <strong>захиалга нь бэлтгэн нийлүүлэлт болж агуулахад хүргэгдэн,</strong> анхны захиалагчид ирэх хүртэлх бүх процессийг гүйцэтгэнэ. </p>
						<div class="ui checkbox">
							<input type="checkbox" name="asset-management">
							<label>Үндсэн модуль</label>
						</div>
					</div>
				</div>
				<div class="ui three column center aligned stackable divided grid">
					<div class="column column-feature">
						<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
							<i class="flaticon-tick icon"></i>
							ТОМИЛОЛТЫН УДИРДЛАГА
						</div>
						<p>Нэг болон түүнээс олон ажилтны томилолтыг бүртгэж, тухайн нэг ажилтан эсвэл <strong>томилолтын багтай холбоотой бүх зардлын тооцоог хийж,</strong> зөвшөөрлийг олгох, тооцоог хаах хүртэлх процессийг гүйцэтгэнэ.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="business-trip-management">
							<label>Сонгох модуль</label>
						</div>
					</div>
					<div class="column column-feature">
						<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
							<i class="flaticon-calendar icon"></i>
							ХӨРӨНГИЙН УДИРДЛАГА
						</div>
						<p>Агуулах болон <strong>хөрөнгө, бараа материалын дотоод шилжилт хөдөлгөөн,</strong> орлого, зарлагыг удирдана.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="purchase-management">
							<label>Сонгох модуль</label>
						</div>
					</div>
					 <div class="column column-feature">
						<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
							<i class="flaticon-settings icon"></i>
							ГЭРЭЭНИЙ УДИРДЛАГА
						</div>
						<p> Байгууллагын үйл ажиллагаатай холбоотой <strong>тогтмол төлбөр төлөлтийн гэрээг </strong>бүртгэж, гэрээт төлбөр төлөлтийг цаг тухай бүрт хийх боломжийг олгоно.</p>
						<div class="ui checkbox">
							<input type="checkbox" name="onsite">
							<label>Сонгох модуль</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ui stackable centered page grid">
			<h3 class="subscribe-header">Үнийн санал авах</h3> 
			<p class="ui centered lead large">Та дээрх модулиудаас өөрийн хүссэн модулиа сонгоод цахим шуудангаа үлдээгээрэй.</p>
			<div class="eight wide subscribe column">
				<div class="field">
					<div class="ui action input">
						<input type="email" name="email" placeholder="Цахим шуудан" required>
						<button class="ui submit button" type="submit">Илгээх</button>
					</div>
				</div>
			</div>
		</div>
		<div class="ui stackable centered page grid" id="status">
			<div class="eight wide subscribe column">
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
	</div>
</form>
<div class="ui recent-works vertical segment">
	<div class="ui very relaxed stackable centered page grid">
		<div class="row">
			<div class="eight wide centered column">
				<h1 class="center aligned ui inverted header">СЕРВЕР-ийн үйлчилгээ</h1>
				<div class="ui horizontal divider">
					<i class="white flaticon-attachment icon"></i>
				</div>
				<p class="ui centered lead">Та сервер авах гэж их зардал гаргах шаардлагагүй. Бид <a href="#">Bluehost</a> олон улсын VPS үйлчилгээний Монгол дахь борлуулалтын эрхтэй.(Reseller)</p>
			</div>
		</div>
		<div class="fourteen wide column">
			<div class="ui three column aligned stackable divided grid">
				<div class="column">
					<div class="ui card" data-html="<div class='header'>User rating</div><div class='content'><div class='ui star rating'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">VPS 1 - 97 500₮ /сар бүр </div>
							<div class="description"><br/>
								* 2 Core CPU <br/>
								* 2 GB RAM <br/>
								* Unlimited Bandwidth <br/>
								* 50 GB Hard <br/>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">VPS 2 - 147 5000₮/сар бүр</div>
							<div class="description"><br/>
								* 4 Core CPU <br/>
								* 8 GB RAM <br/>
								* Unlimited Bandwidth <br/>
								* 150 GB Hard <br/>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Enterprise Server</div>
							<div class="description">
							 Бид танай байгууллагад тохирох сервер болон түүний дагалдах хэрэгсэлүүдийг ханган нийлүүлж, урт хугацааны дэмжлэг үзүүлэх боломжтой.<br/>
								* Бодит сервер<br/>
								* Урт хугацааны дэмжлэг <br/>
							</div>
						</div>
						<div class="ui two bottom attached buttons">
							<div class="ui button" onclick="$('#cloud-price').modal('show')">Үнийн санал авах</div>
							<div class="ui pink button" onclick="$('#schedule-meeting').modal('show')">Уулзалт товлох</div>
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
				<h1 class="ui header">Манай үйлчлүүлэгчид</h1>
				<div class="ui horizontal divider">
					<i class="flaticon-settings icon"></i>
				</div>
					<p class="ui centered lead">
					Бид үйлчлүүлэгчидтэйгээ урт хугацааны хамтын ажиллагаа явуулдаг
					</p>
				<br/>
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
						 <img class="ui image" src="{{ asset('img/skytel.png') }}" />
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui shape">
					<div class="sides">
						<div class="active side">
							<img class="ui image" src="{{ asset('img/sun.png') }}" />
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
	<div class="header">Демо авах</div>
	<div class="content">
		<form class="ui form">
			{{ csrf_field() }}
			<div class="field">
 				<div class="ui action input">
					<input type="email" name="email" placeholder="Email">
					<button class="ui submit button" type="submit">Демо авах</button>
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
<div class="ui small modal" id="cloud-price">
	<div class="header">Үнийн санал авах</div>
	<div class="content">
		<form class="ui form">
			{{ csrf_field() }}
			<div class="field">
 				<div class="ui action input">
					<input type="email" name="email" placeholder="Цахим шуудан">
					<button class="ui submit button" type="submit">Үнийн санал авах</button>
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
<div class="ui small modal" id="schedule-meeting">
	<div class="header">Уулзалт товлох</div>
	<div class="content">
		<form class="ui form">
			{{ csrf_field() }}
			<div class="field">
				<div class="ui calendar" id="calendar">
					<div class="ui input left icon">
						<i class="calendar icon"></i>
						<input type="text" name="datepicker" placeholder="Огноо">
					</div>
				</div>
			</div>
			<input type="hidden" name="date">
			<div class="field">
				<input type="email" name="email" placeholder="Цахим шуудан">
			</div>
			<div class="field">
 				<div class="ui action input">
					<input type="number" name="phone" placeholder="Утасны дугаар">
					<button class="ui submit button" type="submit">Schedule</button>
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
	                    type   : 'maxLength[191]',
	                    prompt : 'Хэт урт тэмдэгт оруулсан байна'
	                }
	            ]
	        },
	        date: {
	            identifier  : 'datepicker',
	            rules: [
	                {
	                    type   : 'empty',
	                    prompt : 'Огноо сонгоно уу'
	                }
	            ]
	        }
		};
		$('#calendar').calendar({
			type: 'date'
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