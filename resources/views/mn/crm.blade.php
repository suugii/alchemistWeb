@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<h1 class="ui inverted centered center aligned header">Харилцагчийн уялдаа холбооны систем</h1><br/>
<span class="ui centered lead" style="font-size: 18px">Жижиг дунд борлуулалт, үйлчилгээ эрхэлсэн аж ахуйн нэгжид зориулсан <br/> <strong>агуулах, ханган нийлүүлэлт</strong>, харилцагчийн бүртгэлийн цогц шийдэл</span>
<div class="ui grid stackable centered center aligned">
	<div class="three wide column"></div>
	<div class="three wide column"> 
		<a class="large basic inverted animated fade ui button" onclick="$('#schedule-meeting').modal('show')">
			<div class="visible content">Демо авах</div>
			<div class="hidden content">Уулзалт товлох уу?</div>
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
						<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
							<i class="flaticon-layers icon"></i>
							АГУУЛАХЫН БҮРТГЭЛ
						</div>
						<p>Бараа бүртээгдэхүүний<strong> үлдэгдэлийг хянах,</strong> олон агуулахын мэдээллийг нэгтгэн үзэх, нөөцийн төлөвлөлт хийх, орлого,зарлага, гаалийн бүртгэл хийх боломжтой.</p>
						<div class="ui checkbox" style="font-family: 'Roboto Condensed', sans-serif;">
							<input type="checkbox" name="warehouse-inventory" checked>
							<label>Үндсэн модул</label>
						</div>
					</div>
					<div class="column column-feature" >
						<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
							<i class="flaticon-connecting icon"></i>
							БОРЛУУЛАЛТ, ХАРИЛЦАГЧИЙН ДЭВТЭР
						</div>
						<p>Борлуулалтаа харилцагч бүрээр бүртгэлжүүлж тухайн харилцагчийн түүхийг бий болгосноор <strong>лояалти урамшуулал </strong> хэрэгжүүлэх бүрэн боломжтой.</p>
						<div class="ui checkbox" style="font-family: 'Roboto Condensed', sans-serif;">
							<input type="checkbox" name="sales-customer-history" checked>
							<label>Үндсэн модул</label>
						</div>
					</div>
					<div class="column column-feature">
						<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
							<i class="flaticon-calendar icon"></i>
							ҮЙЛ АЖИЛЛАГААНЫ БҮРТГЭЛ
						</div>
						<p>Байгууллагынхаа <strong>өдөр тутмын үйл ажиллагааг </strong>бүртгэлжүүлж, гүйцэтгэсэн, төлөвлөсөн, хугацаа хэтэрсэн гэх мэт өөрийн хүссэн хэлбэрээр ажлын явцуудыг дүгнэх боломжтой.</p>
						<div class="ui checkbox" style="font-family: 'Roboto Condensed', sans-serif;">
							<input type="checkbox" name="activity-management" checked >
							<label>Үндсэн модул</label>
						</div>
					</div>
				</div>
				<div class="ui three column center aligned stackable divided grid">
					<div class="column column-feature">
						<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
							<i class="flaticon-tick icon"></i>
							ТӨСЛИЙН УДИРДЛАГА
						</div>
						<p>Дотоод болон бусдаар гүйцэтгүүлэх <strong>төсөл хөтөлбөр, компанит ажил, маркетингийн төлөвлөгөөг</strong> удирдах, бүртгэлжүүлж, гүйцэтгэлийн багт үүрэг хуваарилах ажлыг системчилэх боломжтой.</p>
						<div class="ui checkbox" style="font-family: 'Roboto Condensed', sans-serif;">
							<input type="checkbox" name="project-management">
							<label>Сонгох модул</label>
						</div>
					</div>
					<div class="column column-feature" >
						<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
							<i class="flaticon-tick icon"></i>
							ХАНГАН НИЙЛҮҮЛЭЛТ
						</div>
						<p>Нийлүүлэгчийн мэдээллийг бүртгэлжүүлэн, ханган нийлүүлж байгаа бүтээгдэхүүний <strong>үнийн судалгаа, тээвэрлэлт, гаалийн бүрдүүлэлтийг</strong> хийх болон борлуулалтын үнийг бодох боломжтой.</p>
						<div class="ui checkbox" style="font-family: 'Roboto Condensed', sans-serif;">
							<input type="checkbox" name="supply-chain">
							<label>Сонгох модул</label>
						</div>
					</div>
					<div class="column column-feature">
						<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
							<i class="flaticon-settings icon"></i>
							СУУРИЛУУЛАЛТ
						</div>
						<p>Та системээ онлайн эсвэл өөрийн сервер дээр суурилуулах боломжтой. Хэрэв та өөрийн сервер дээр суурилуулах бол бид танд боломжит <strong>зохиомол сервер (VPS) </strong>санал болгож байна.</p>
						<div class="ui checkbox" style="font-family: 'Roboto Condensed', sans-serif;">
							<input type="checkbox" name="cloud-or-onsite">
							<label>Өөрийн сервер дээр</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ui stackable centered page grid">
			<h3 class="subscribe-header"><strong>Үнийн санал авах</strong></h3> 
			<p class="ui centered lead large">Хэрэв та өөрийн сервер дээр суурилуулах бол дээрх модулуудас сонгон өөрийн цахим шуудангаа үлдээгэрэй. Бид танд илгээх болно.<br/> Онлайнаар ашиглах доорх үнийн саналтай танилцана уу.</p>
			<div class="ui form eight wide subscribe column">
				<div class="field">
					<div class="ui action input">
						<input type="email" name="email" placeholder="Цахим шуудан">
						<button type="submit" class="ui submit button">Илгээх</button>
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
			<div class="eight center aligned wide column centered">
				<h1 class="center aligned ui inverted header">ОНЛАЙН АШИГЛАХ ҮНЭ</h1>
				<div class="ui horizontal divider">
					<i class="white flaticon-attachment icon"></i>
				</div>
				<p class="ui centered lead">Таны мэдээллийг бид найдвартай хадгалаж үйлчлэх болно.</p>
			</div>
		</div>
		<div class="fourteen wide column">
			<div class="ui three column stackable grid">
				<div class="column">
					<div class="ui fluid card" data-html="<div class='header'>Нэвтрүүлэлт</div><div class='content'><div class='ui star rating'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Гарааны бизнес</div>
							<div class="description">
								Борлуулалтын үйлчилгээ эхэлж байгаа байгууллагууд хэрэглэхэд таарамжтай.<br/>10 хүртэлх ажилтантай байгууллагад илүү тохирно.<br/><br/>
									* Агуулахын бүртгэл <br/>
									* Үйл ажиллагааны бүртгэл <br/>
									* Борлуулалтын удирдлага <br/>
							</div>
							<div class="center aligned ui">
								<h2 class="center aligned ui">95 000₮ / <small style="font-size: 16px"> сар бүр</small></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui fluid card" data-html="<div class='header'>Нэвтрүүлэлт</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Ретайлер</div>
							<div class="description">
								Борлуулалт, импорт, гаалийн бүртгэл, төсөл хэрэгжүүлэгч байгууллагад илүү тохиромжтой. Ажилтан бүрт үүргийн хуваарь хийх боломжтой.<br/>
									* Гарааны бизнес багц <br/>
									* Хангамжийн уридлага <br/>
									* Төслийн удирдлага <br/>
							</div>
							<div class="center aligned ui">
								<h2 class="center aligned ui">170 000 ₮/ <small style="font-size: 16px"> сар бүр</small></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui fluid card" data-html="<div class='header'>Нэвтрүүлэлт</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Групп компани </div>
							<div class="description">
								Бид танай байгууллагын бүтцэд тохирсон мэдээллийн технологийн шийдлийг
								өөрсдийн бүтээсэн Алкэмист Платформ болон бусад олон улсад хүлээн зөвшөөрөгдсөн шийдлээр гүйцэтгэн, урт хугацааны хамтын ажиллагааг хэрэгжүүлэх болно. 
								<br/>
									* Яг тохирсон систем<br/>
									* Урт хугацааны хамтын ажиллагаа<br/>
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
<div class="ui vertical segment" style="background-color: white">
	<div class="ui stackable center aligned page grid">
		<div class="row">
			<div class="eight wide column">
				<h1 class="ui header">Байнгын үйлчлүүлэгчид</h1>
				<div class="ui horizontal divider">
					<i class="flaticon-settings icon"></i>
				</div>
				<p class="ui centered lead">Алкэмист системээр олон төрлийн байгууллага үйл ажиллагагаа явуулж байна.</p><br/>
			</div>
		</div>
		<div class="ui grid stackable">
			<div class="four wide column">
				<img class="ui image" src="{{ asset('img/psc.png') }}" />
			</div>
			<div class="four wide column"> 
				<img class="ui image" src="{{ asset('img/reduni.png') }}" />
			</div>
			<div class="four wide column">
				<img class="ui image" src="{{ asset('img/lhamoursun.png') }}" />
			</div>
			<div class="four wide column">
				<img class="ui image" src="{{ asset('img/itpark.png') }}" />
			</div>
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
					<button type="submit" class="ui submit button">Үнийн санал авах</button>
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
					<button type="submit" class="ui submit button">Уулзалт товлох</button>
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