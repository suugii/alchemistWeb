@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<h2 class="ui inverted centered header">Бидний үнэт зүйл</h2>
<p class="ui centered lead">Бид оюуны бүтээлийг хийх <strong>жинхэнэ хүсэлтэй</strong>, түүний төлөө ажиллаж, үр дүнг бий болгож,<br> хүсэл эрмэлзлэлээ байнга хурцалж  өөрийгөө дайчлан тэмүүлэх чадварыг үнэт зүйлсээ болгон ажилладаг.</p>
<h2 class="ui inverted centered header">Бид юу хийдэг вэ?</h2>
<p class="ui centered lead">Бид олон улсад өрсөлдөх бүтээгдэхүүнийг хөгжүүлдэг.</p>
<h2 class="ui inverted centered header">Манай хамт олон</h2>
<p class="ui centered lead">Бид хамтран олон зүйлийг хийж бүтээх оргилуун хүсэлтэй залуус.<br> "Хорвоо дэлхий уудам хийх ажил их байна."</p>
<a href="#" class="large basic inverted animated fade ui button">
	<div class="visible content">Холбоо барих</div>
	<div class="hidden content">+976-88021087</div>
</a>
@endsection

@section('content')
<div class="ui vertical segment" id="career">
	<div class="ui stackable center aligned page grid">
		<div class="row">
			<div class="eight wide column">
				<h1 class="ui header">Ажлын байр</h1>
				<div class="ui horizontal divider">
					<i class="flaticon-graduates icon"></i>
				</div>
				<p class="ui centered lead">Ажилтан гэхээсээ илүү хамтрагч гэвэл зөв байх. Бид хийж бүтээж чаддаг нэгнээ үнэлж, сурах чинь хүсэлтэй залууст боломж олгодог. CV-гээ явуулаарай. Хэрвээ та зүгээр л сонирхож байгаа бол өөрийнхөө цагийг битгий үрээрэй :)</p>
				<p class="ui centered lead"><a href="#">info@alchemist.mn</a></p><br/>
			</div>
		</div>
		<div class="ui stackable centered page grid">
			<h3 class="subscribe-header">Ажлын байрны мэдээ хүлээн авах</h3> 
			<form class="ui form eight wide subscribe column" id="subscribe">
				{{ csrf_field() }}
				<div class="field">
					<div class="ui action input">
						<input type="email" name="email" placeholder="Цахим шуудан">
						<button class="ui submit button" type="submit">Хүлээн авах</button>
					</div>
				</div>
			</form>
		</div>  
		<div class="ui stackable centered page grid" id="subscribe-status">
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
</div>
<div class="ui recent-works vertical segment" id="mentors">
	<div class="ui very relaxed stackable centered page grid">
		<div class="row">
			<div class="eight wide centered column">
				<h1 class="center aligned ui inverted header">Менторууд</h1>
				<div class="ui horizontal divider">
					<i class="white flaticon-star icon"></i>
				</div>
				<p class="ui centered lead">Ментор буюу зөвлөгчтэй байна гэдэг амжилтын нэгэн түлхүүр юм.</p>
			</div>
		</div>
		<div class="fourteen wide column center aligned">
			<div class="ui three column aligned stackable divided grid">
				<div class="column">
					<div class="ui card">
						<div class="image small">
							<img class="ui image small" src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAO9AAAAJDdmZTU3MzlmLWNmMzItNGNhNC05M2ViLTYzN2RhMGU5ZTM4OA.jpg">
						</div>
						<div class="content">
							<div class="header">В.Баярсайхан</div>
							<div class="description">
								Манай анхы хөрөнгө оруулагч. Амжилттай энтерпренор. Үүсгэн байгуулагч<br/><br/>
								Dell EMC менежер
								<br/>
								<a href="#">Linkedin</a> 
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui card">
						<div class="image">
							<img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAhwAAAAJDkxZmUwOTI5LWQ1N2QtNGY4NC1iNzU5LWM3MTJkNjc2YjE4ZQ.jpg">
						</div>
						<div class="content">
							<div class="header">Рик Расмуссен</div>
							<div class="description">
								Цахиуртын хөндийн зааварлагч багш. Олон улсын хөрөнгө оруулагч. Coursera хувь эзэмшигч<br/><br/>
								Concordia Ventures - үүсгэн байгуулагч
								<br />
								<a href="#">Linkedin</a>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui card">
						<div class="image">
							<img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/8/005/098/28e/0e636d1.jpg">
						</div>
						<div class="content">
							<div class="header">Д.Око</div>
							<div class="description">
								Mонголын ихэнх гарааны бизнесийн ментор гэж хэлж болно. Олон улсын хөрөнгө оруулагч.<br/><br/>
								Start Up Mongolia-н үүсгэн байгуулагч
								<br />
								<a href="#">Linkedin</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ui vertical segment" style="background-color: white" id="invest">
	<div class="ui stackable center aligned page grid">
		<div class="row">
			<div class="eight wide column">
				<h1 class="ui header">Хөрөнгө оруулалт</h1>
				<div class="ui horizontal divider">
					<i class="flaticon-speech icon"></i>
				</div>
				<p class="ui centered lead">Та дараах сайт дахь манай хөрөнгө оруулалтын саналуудтай танилцаарай <a href="https://www.f6s.com/khangaikhurelbaatar">F6s төслүүд.</a></p><br/>
			</div>
			<div class="ui stackable centered page grid">
				<h3 class="subscribe-header">Уулзалт товлох уу?</h3> 
				<form class="ui form eight wide subscribe column" id="schedule-meeting">
					{{ csrf_field() }}
					<div class="field">
						<div class="ui action input">
							<input type="email" name="email" placeholder="Цахим шуудан">
							<button class="ui submit button" type="submit">Илгээх</button>
						</div>
					</div>
				</form>
			</div>
			<div class="ui stackable centered page grid" id="invest-status">
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
		};
		$('#subscribe').submit(function(e) {
			e.preventDefault();
		}).form(validationRules, {
			inline: true,
			onSuccess: function() {
				$(this).find('.submit').addClass('loading disabled');
			    $.ajax({
					type: 'POST',
					url: '{{ url("send/contact/subscribe") }}',
		           	data: $(this).serialize(),
		           	context: this,
		           	success: function() {
		           		$(this).trigger('reset');
		           		$(this).find('input').trigger('blur');
						$(this).find('.submit').removeClass('loading disabled');
						$('#subscribe-status .success.message').transition('fade in');
		       		},
					error: function(){
		           		$(this).find('input').trigger('blur');
						$(this).find('.submit').removeClass('loading disabled');
						$('#subscribe-status .warning.message').transition('fade in');
					}
				});
			}
		});
		$('#schedule-meeting').submit(function(e) {
			e.preventDefault();
		}).form(validationRules, {
			inline: true,
			onSuccess: function() {
				$(this).find('.submit').addClass('loading disabled');
			    $.ajax({
					type: 'POST',
					url: '{{ url("send/contact/meeting") }}',
		           	data: $(this).serialize(),
		           	context: this,
		           	success: function() {
		           		$(this).trigger('reset');
		           		$(this).find('input').trigger('blur');
						$(this).find('.submit').removeClass('loading disabled');
						$('#invest-status .success.message').transition('fade in');
		       		},
					error: function(){
		           		$(this).find('input').trigger('blur');
						$(this).find('.submit').removeClass('loading disabled');
						$('#invest-status .warning.message').transition('fade in');
					}
				});
			}
		});
	});
</script>
@endpush