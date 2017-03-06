@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<h1 class="ui inverted centered header">Өрөөний удирдлагын систем <small style="font-size: 12px"><a href="#">Алкэмист платформ & MyAllocator </a>-р бүтээв</small></h1><br/>
<span class="ui centered lead" style="font-size: 18px">Зочид буудлын <strong>өрөөний зохион байгуулалт, </strong> <br>түрээслэгчийн бүртгэл, хурал, арга хэмээний заалны уридлагын систем</span>
<div class="ui stackable grid relaxed">
	<div class="four wide column"></div>
	<div class="four wide column"> 
		<a href="#" class="large basic inverted animated fade ui button">
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
<div class="ui centerted image">
	<p><img src="{{ asset('img/banner4.png') }}" /></p>
</div>
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
					<p>Өрөө болон түрээсийн заалуудаа системчилсэн байдлаар бүртгэлжүүлж. Үйл ажиллагааны горим тохируулах боломжтой.</p>
				</div>
				<div class="column column-feature">
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-tick icon"></i>
						ҮНЭЛГЭЭ, ТӨЛБӨР
					</div>
					<p>Үнэлгээ өгөхдөө талбай хэмжээ болон бусад эд зүйлсээр ангилан тооцох боломжтой. Хямдарылн төлөвлөөгөө оруулах боломжтой.</p>
				</div>
				<div class="column column-feature">
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-tick icon"></i>
						CЕРВИС ҮЙЛЧИЛГЭЭ
					</div>
					<p>Тухайн үйлчлэгчийн хүсэлтээр өрөө эсвэл зааланд нэмэлт үйлчилгээний бүртгэл түүний төлбөр тооцоог удирдах боломжтой.</p>
				</div>
			</div>
			<div class="ui three column center aligned stackable divided grid">
				<div class="column column-feature">
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-tick icon"></i>
						ҮЙЛЧЛҮҮЛЭГЧИЙН БҮРТГЭЛ
					</div>
					<p>Үйлчлүүлэгчдийг бүртгэлжүүлж, түүхээр нь лояалти хэрэгжүүлэх боломжтой. Нэхэмжлэх, зарлагын баримт хэвлэх боломжтой.</p>
				</div>
				<div class="column column-feature">
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-tick icon"></i>
						ТӨЛБӨР ТООЦОО
					</div>
					<p>Төлбөр тооцооны автомажсан сануулга. Бэлэн болон дараа төлбөрт орлогын мэдээ. Тооцооны цахим шуудан илгээлт. eBarimt холболт</p>
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
	<div class="ui centered page grid">
		<h3 class="subscribe-header">Танд илүү тохирсон систем хайж байна уу?</h3> 
		<p class="ui centered lead large">Тэгвэл та мэдээллээ үлдээгээрэй. Энэ тал дээр ярилцаж болно.</p>
		<div class="ui form eight wide subscribe column">
			<div class="field">
				<div class="ui fluid action input">
					<input placeholder="Цахим шуудан" type="text">
					<div class="ui button">Илгээх</div>
				</div>
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
							<div class="description">Буудал, хостел, жуулчны баазад тохиромжтой захиалга бүртгэлийн цогц шийдэл.<br / ><br / >
								* Өрөөний удирдлага<br / >
								* Сервис үйлчилгээ <br / >
								* Төлбөр тооцоо<br / >
								* Үйлчлүүлэгчийн бүртгэл<br / > 
								* Үнэлгээний удирдлага<br / > 
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
							<div class="description">Хөрөнгө жуучийн байгууллагуудад мэдээллээ нэгтгэх төлбөр тооцооны хяналтын цогц шийдэл.<br / ><br / >
								* Хөрөнгийн бүртгэл<br / >
								* Төлбөр тооцоо<br / >
								* Үйлчлүүлэгчийн бүртгэл<br / > 
								* Үнэлгээний удирдлага<br / > 
								* Автомат нэхэмжлэх,сануулга <br / > 
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
							<div class="description">Бид танай байгууллагын онцлогт тааруулан хөрөнгийн бүртгэлийн цогц системийг нэвтрүүлэх боломжтой.<br / ><br / >
								* Дурын загварчлал<br / >
								* Урт хугацааны дэмжлэг <br / >
								* Үнэ тохиролцно <br / >
							</div>
						</div>
						<div class="ui two bottom attached buttons">
							<div class="ui button">Үнийн санал авах</div>
							<div class="ui pink button">Уулзалт товлох ?</div>
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
				<p class="ui centered lead">Бид үйлчлүүлэгчдээ анхааран байнгын хамтын ажиллагаа өрнүүлдэг.</p><br/>
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
@endsection