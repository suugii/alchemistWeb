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
						<a href="#">Web Platfrom</a> | <a href="#">Contribute</a>
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
						<a href="#">Web Platfrom</a> | <a href="#">Contribute</a>
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
						<a href="#">Online shop</a> | <a href="#">Tweet</a> | <a href="#">Share</a>
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
						<a href="#">Online shop</a> | <a href="#">Tweet</a> | <a href="#">Share</a>
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
						<a href="#">IOS</a> | <a href="#">PDF</a> | <a href="#">Invest</a> | <a href="#">Contribute</a>
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
						<a href="#">Web Platfrom</a> | <a href="#">Tweet</a> | <a href="#">Share</a>
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
						<a href="#">Content server</a> | <a href="#">IOS</a>  | <a href="#">Android</a> | <a href="#">Share</a>
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
						<a href="#">Web </a> | <a href="#">Invest</a> |  <a href="#">Share</a> |  <a href="#">Tweet</a> |  <a href="#">Contribute</a>
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
@endsection