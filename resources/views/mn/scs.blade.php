@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<h1 class="ui inverted centered header">Зардалын удирдлагын систем 
	<small style="font-size: 12px">
		<a href="#">Odoo</a>-р бүтээв
	</small>
</h1>
<span class="ui centered lead" style="font-size: 18px">Бүх төрлийн аж ахуйн нэгж болон төрийн өмчит байгууллагуудад зориулсан <br>зардлын удирдлага хяналтын цогц шийдэл.</span>
<div class="ui stackable grid">
	<div class="four wide column"></div>
	<div class="four wide column"> 
		<a href="#" class="large basic inverted animated fade ui button">
			<div class="visible content">ДЕМО ҮЗЭХ</div>
			<div class="hidden content">Уулзалт товлох уу?</div>
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
	<p><img src="{{ asset('img/banner3.png') }}" /></p>
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
						ТӨСВИЙН УДИРДЛАГА
					</div>
					<p>Төсөв бүртгэл, <strong>тодотгол</strong> хийж төсвийн гүйцэтгэлийг зардлын төрөл, хэлтэс, алба байгууллагын нэгж тус бүрээр хянаж зохицуулна.</p>
					<div class="ui checkbox">
						<input type="checkbox" name="example" checked>
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
						<input type="checkbox" name="example">
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
						<input type="checkbox" name="example">
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
						<input type="checkbox" name="example">
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
						<input type="checkbox" name="example">
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
						<input type="checkbox" name="example">
						<label>Сонгох модуль</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ui centered page grid">
		<h3 class="subscribe-header">Үнийн санал авах</h3> 
		<p class="ui centered lead large">Та дээрх модулиудаас өөрийн хүссэн модулиа сонгоод цахим шуудангаа үлдээгээрэй.</p>
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
							<div class="ui button">Холбогдох</div>
							<div class="ui pink button">Уулзах</div>
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
@endsection