@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<h1 class="ui inverted centered center aligned header">Харилцагчийн уялдаа холбооны систем</h1><br/>
<span class="ui centered lead" style="font-size: 18px">Жижиг дунд борлуулалт, үйлчилгээ эрхэлсэн аж ахуйн нэгжид зориулсан <br/> <strong>агуулах, ханган нийлүүлэлт</strong>, харилцагчийн бүртгэлийн цогц шийдэл</span>
<div class="ui grid stackable centered center aligned">
	<div class="three wide column"></div>
	<div class="three wide column"> 
		<a href="#" class="large basic inverted animated fade ui button">
			<div class="visible content">Демо авах</div>
			<div class="hidden content">Уулзалт товлох уу?</div>
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
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-layers icon"></i>
						АГУУЛАХЫН БҮРТГЭЛ
					</div>
					<p>Бараа бүртээгдэхүүний<strong> үлдэгдэлийг хянах,</strong> олон агуулахын мэдээллийг нэгтгэн үзэх, нөөцийн төлөвлөлт хийх, орлого,зарлага, гаалын бүртгэл хийх боломжтой.</p>
					<div class="ui checkbox" style="font-family: 'Roboto Condensed', sans-serif;">
						<input type="checkbox" name="example" checked>
						<label>Үндсэн модул</label>
					</div>
				</div>
				<div class="column column-feature" >
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-connecting icon"></i>
						БОРЛУУЛАЛТ, ХАРИЛЦАГЧИЙН ДЭВТЭР
					</div>
					<p>Борлуулалтаа харилцагч бүрээр бүртгэлжүүлж тухайн харилцагчийн түүхийг бий болгосноор <strong>лояалти урамшуулал </strong>хэрэгжүүлэх бүрэн боломжтой болно.</p>
					<div class="ui checkbox" style="font-family: 'Roboto Condensed', sans-serif;">
						<input type="checkbox" name="example" checked>
						<label>Үндсэн модул</label>
					</div>
				</div>
				<div class="column column-feature">
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-calendar icon"></i>
						ҮЙЛ АЖИЛЛАГААНЫ БҮРТГЭЛ
					</div>
					<p>Байгууллагынхаа <strong>өдөр тутмын үйл ажиллгааг </strong>бүртгэлжүүлж, хийсэн, төлөвлөсөн, хугацаа хэтэрсэн гэх мэт өөрийн хүссэн хэлбэрээр явцаа дүгнэх боломжтой. </p>
					<div class="ui checkbox" style="font-family: 'Roboto Condensed', sans-serif;">
						<input type="checkbox" name="example" checked >
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
					<p>Дотоод болон тухайн харилцагчид гүйцэтгэх <strong>төсөл, компанит ажил, маркетингын төлөвлөгөөг</strong> удирдах, бүртгэжлүүлэж, гүйцэтгэлийн багт үүрэг хувиралах, ажлыг баримтжуулах боломжтой.</p>
					<div class="ui checkbox" style="font-family: 'Roboto Condensed', sans-serif;">
						<input type="checkbox" name="example">
						<label>Сонгох модул</label>
					</div>
				</div>
				<div class="column column-feature" >
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-tick icon"></i>
						ХАНГАН НИЙЛҮҮЛЭЛТ
					</div>
					<p>Нийлүүлэгчийн мэдээллийг бүртгэлжүүлэн ханган нийлүүлж байгаа бүтээгдэхүүний <strong>үнийн судалгаа, тээвэрлэлт, гаалийн бүрдүүлэлтийг</strong> хийх боломжтой. Борлуулалтын үнийн бодох боломжтой.</p>
					<div class="ui checkbox" style="font-family: 'Roboto Condensed', sans-serif;">
						<input type="checkbox" name="example">
						<label>Сонгох модул</label>
					</div>
				</div>
				 <div class="column column-feature">
					<div class="ui icon header" style="font-family: 'Roboto Condensed', sans-serif;">
						<i class="flaticon-settings icon"></i>
						СУУРИЛУУЛАЛТ
					</div>
					<p>Та системээ онлайн эсвэл өөрийн сервер дээр суурилуулах боломжтой. Хэрэв та өөрийн сервер дээр суурилуулах бол бид танд боломжтид <strong>зохиомол сервер (VPS) </strong>санал болгож байна.</p>
					<div class="ui checkbox" style="font-family: 'Roboto Condensed', sans-serif;">
						<input type="checkbox" name="example">
						<label>Өөрийн сервер дээр</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ui centered page grid">
		<h3 class="subscribe-header"><strong>Үнийн санал авах</strong></h3> 
		<p class="ui centered lead large">Хэрэв та өөрийн сервер дээр суурилуулах бол дээрх модулуудас сонгон өөрийн цахим шуудангаа үлдээгэрэй. Бид танд илгээх болно.<br/> Онлайнаар ашиглах доорх үнийн саналтай танилцана уу.</p>
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
					<div class="ui card centered" data-html="<div class='header'>Нэвтрүүлэлт</div><div class='content'><div class='ui star rating'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Гарааны бизнес</div>
							<div class="description">
								Борлуулалтын үйлчилгээ эхэлж байгаа байгууллагууд хэрэглэхэд таарамжтай.<br/>10 хүртлэх ажилтантай байгууллагад илүү тохирно.<br/>
									* Агуулахын бүртгэл <br/>
									* Үйл ажиллагаана бүртгэл <br/>
									* Борлуулалтын удирдлага <br/>
							</div>
							<div class="center aligned ui">
								<h2 class="center aligned ui">95 000₮ / <small style="font-size: 16px"> сар бүр</small></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui card" data-html="<div class='header'>Нэвтрүүлэлт</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Ретайлер</div>
							<div class="description">
								Борлуулалт, импорт, гаалийн бүртгэл, төсөл хэрэгжүүлэгч байгууллагад илүү тохирмжтой. Ажилтан бүрт үүрэгийн хувиар хийх боломжтой.<br/>
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
					<div class="ui card" data-html="<div class='header'>Нэвтрүүлэлт</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
						<div class="content">
							<div class="header">Групп компани </div>
							<div class="description">
								Бид танай байгууллагын бүтэцэд таарсан мэдээллийн технологийн шийдлийг өөрсдийн бүтээсэн Алкэмист Платформ болон бусад олон улсын шийдлээр гүйцэтгэн урт хугацааны хамтрын ажиллагаа хэрэгжүүлэх боломжтой. 
								<br/>
									* Яг тохирсон систем<br/>
									* Урт хугацаанб хамтын ажиллагаа<br/>
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
@endsection