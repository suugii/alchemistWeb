@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<h1 class="ui inverted centered header">Өрөөний удирдлагын систем 
	<small style="font-size: 12px">
		<a>Алкэмист платформ & MyAllocator </a>-р бүтээв
	</small>
</h1><br/>
<span class="ui centered lead" style="font-size: 18px">Зочид буудлын <strong>өрөөний зохион байгуулалт, </strong> <br>түрээслэгчийн бүртгэл, хурал, арга хэмжээ заалны уридлагын систем</span>
<div class="ui stackable grid relaxed">
	<div class="four wide column"></div>
	<div class="four wide column"> 
		<a class="large basic inverted animated fade ui button" onclick="$('#request-demo').modal('show')">
			<div class="visible content">Дэмо авах</div>
			<div class="hidden content">14 хоног үнэгүй</div>
		</a>
	</div>
	<div class="four wide column">
		<a class="large basic inverted animated fade ui button">
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
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-layers icon"></i>
						ӨРӨӨНИЙ УДИРДЛАГА
					</div>
					<p>Өрөө болон түрээсийн талбай(заал)-гаа системчлэн бүртгэлжүүлж үйл ажиллагааны горим тохируулах боломжтой.</p>
				</div>
				<div class="column column-feature">
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-tick icon"></i>
						ҮНЭЛГЭЭ, ТӨЛБӨР
					</div>
					<p>Үнэлгээ өгөхдөө талбайн хэмжээ болон бусад эд зүйлсээр ангилан тооцож болохоос гадна хямдралын төлөвлөгөө оруулах боломжтой.</p>
				</div>
				<div class="column column-feature">
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-tick icon"></i>
						CЕРВИС ҮЙЛЧИЛГЭЭ
					</div>
					<p>Тухайн үйлчлүүлэгчийн хүсэлтээр өрөө эсвэл зааланд нэмэлт үйлчилгээний бүртгэл үүсгэн, тэдгээрийн төлбөр тооцоог удирдах боломжтой.</p>
				</div>
			</div>
			<div class="ui three column center aligned stackable divided grid">
				<div class="column column-feature">
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-tick icon"></i>
						ҮЙЛЧЛҮҮЛЭГЧИЙН БҮРТГЭЛ
					</div>
					<p>Үйлчлүүлэгчдийг бүртгэлжүүлж, түүхээр нь лояалти хэрэгжүүлэх мөн нэхэмжлэх болон E-баримт хэвлэх боломжтой.</p>
				</div>
				<div class="column column-feature">
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-tick icon"></i>
						ТӨЛБӨР ТООЦОО
					</div>
					<p>Төлбөр тооцооны автоматжуулсан сануулга. Шууд болон дараа төлбөрт орлогын мэдээ. Тооцооны цахим шуудан илгээлт.</p>
				</div>
				 <div class="column column-feature">
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-settings icon"></i>
						MyAllocator холболт
					</div>
					<p>Олон улсаас авах захиалгын шууд холболт болох <a href="#">MyAllocator</a>  dAPI авах боломжтой. Ингэснээр  Booking.com болон Agoda.com дээрх мэдээлэлрүү шууд холбогдоно.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="ui stackable centered page grid">
		<h3 class="subscribe-header">Танд илүү тохирсон систем хайж байна уу?</h3>
		<p class="ui centered lead large">Тэгвэл та мэдээллээ үлдээгээрэй. Бид танд цогц шийдэл санал болгох болно.</p>
		<form class="ui form eight wide subscribe column" id="custom-pms">
			{{ csrf_field() }}
			<div class="field">
				<div class="ui action input">
					<input type="email" name="email" placeholder="Цахим шуудан">
					<button class="ui submit button">Илгээх</button>
				</div>
			</div>
		</form>
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

<div class="ui recent-works vertical segment">
	<div class="ui very relaxed stackable centered page grid">
		<div class="row">
			<div class="eight wide centered column">
				<h1 class="center aligned ui inverted header">ОНЛАЙН АШИГЛАХ ҮНЭ</h1>
				<div class="ui horizontal divider">
					<i class="white flaticon-attachment icon"></i>
				</div>
				<p class="ui centered lead">Одоогоор бид зөвхөн онлайн орчинд ажиллах үнийн санал хүргэж байна.</p>
			</div>
		</div>
		<div class="fourteen wide column">
			<div class="ui three column aligned stackable divided grid">
				<div class="column">
					<div class="ui card" data-html="<div class='header'>Нэвтрүүлэлт</div><div class='content'><div class='ui star rating'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Зочид буудал</div>
							<div class="description">Буудал, хостел, жуулчны баазад тохиромжтой захиалга бүртгэлийн цогц систем.<br/><br/>
								* Өрөөний удирдлага <br/>
								* Сервис үйлчилгээ <br/>
								* Төлбөр тооцоо <br/>
								* Үйлчлүүлэгчийн бүртгэл <br/> 
								* Үнэлгээний удирдлага <br/> 
							</div>
							<div class="center aligned ui">
								<h2 class="center aligned ui">69 000₮ / <small style="font-size: 16px"> сар бүр</small></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui card" data-html="<div class='header'>Нэвтрүүлэлт</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Хөрөнгө жууч</div>
							<div class="description">Хөрөнгө зуучийн байгууллагуудад мэдээллээ нэгтгэх төлбөр тооцооны хяналт хийх цогц систем.<br/><br/>
								* Хөрөнгийн бүртгэл <br/>
								* Төлбөр тооцоо <br/>
								* Үйлчлүүлэгчийн бүртгэл <br/> 
								* Үнэлгээний удирдлага <br/> 
								* Автомат нэхэмжлэх,сануулга <br/> 
							</div>
							<div class="center aligned ui">
								<h2 class="center aligned ui">89 000 ₮ / <small style="font-size: 16px"> сар бүр</small></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui card" data-html="<div class='header'>Нэвтрүүлэлт</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Дурын загвар</div>
							<div class="description">Бид танай байгууллагын онцлогт тааруулан хөрөнгийн бүртгэлийн цогц системийг нэвтрүүлэх боломжтой.<br/><br/>
								* Дурын загварчлал<br/>
								* Урт хугацааны дэмжлэг <br/>
								* Уян хатан үнэ <br/>
							</div>
						</div>
						<div class="ui two bottom attached buttons">
							<div class="ui button" onclick="$('#cloud-price').modal('show')">Үнийн санал авах</div>
							<div class="ui pink button" onclick="$('#schedule-meeting').modal('show')">Уулзалт товлох ?</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<Div class="ui vertical segment" style="background-color: white">
	<div class="ui stackable center aligned page grid">
		<div class="row">
			<div class="eight wide column">
				<h1 class="ui header">Үйлчлүүлэгчид</h1>
				<div class="ui horizontal divider">
					<i class="flaticon-settings icon"></i>
				</div>
				<p class="ui centered lead">Бид үйлчлүүлэгчидээ анхааран байнгын хамтын ажиллагаа өрнүүлдэг.</p><br/>
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
						 <img class="ui image" src="{{ asset('img/ihotel.png') }}" />
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui shape">
					<div class="sides">
						<div class="active side">
							<img class="ui image" src="{{ asset('img/ubcity.png') }}" />
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
					<button class="ui submit button" type="submit">Уулзалт товлох</button>
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