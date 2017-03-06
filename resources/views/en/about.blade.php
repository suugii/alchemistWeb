@extends('layouts.app')

@section('title', 'Alchemist Turns into Gold')

@section('masthead')
<h2 class="ui inverted centered header">Our Values</h2>
<p class="ui centered lead">We admire and follow the those who have a <strong>genuine passion</strong> for creating software products <br /> and constantly educates and develops themselves. These are the key metrics in our fellowship.</p>
<h2 class="ui inverted centered header">What we do?</h2>
<p class="ui centered lead">We develop and market worldly useful applications.</p>
<h2 class="ui inverted centered header">Our team</h2>
<p class="ui centered lead">We possess a huge passion for creating things together. <br />"World is full of things to do"</p>
<a href="#" class="large basic inverted animated fade ui button">
	<div class="visible content">Contact us</div>
	<div class="hidden content">+976-88021087</div>
</a>
@endsection

@section('content')
<div class="ui vertical segment" id="career">
	<div class="ui stackable center aligned page grid">
		<div class="row">
			<div class="eight wide column">
				<h1 class="ui header">Career</h1>
				<div class="ui horizontal divider">
					<i class="flaticon-graduates icon"></i>
				</div>
				<p class="ui centered lead">xWe consider every employee as our partner. We devote those who have a true passion for learning and developing. Please send us your CV. If you are just swinging by please don't waste our time :)</p>
				<p class="ui centered lead"><a href="#">info@alchemist.mn</a></p><br/>
			</div>
		</div>
		<div class="ui centered page grid">
			<h3 class="subscribe-header">Subscribe for job openings</h3> 
			<div class="ui form eight wide subscribe column">
				<div class="field">
					<div class="ui fluid action input">
						<input placeholder="Email" type="text">
						<div class="ui button">Subscribe </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ui recent-works vertical segment" id="mentors">
	<div class="ui very relaxed stackable centered page grid">
		<div class="row">
			<div class="eight wide centered column">
				<h1 class="center aligned ui inverted header">Our Mentors</h1>
				<div class="ui horizontal divider">
					<i class="white flaticon-star icon"></i>
				</div>
				<p class="ui centered lead">Having mentor is key to the success. They are wise and visionary</p>
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
							<div class="header">Bayarsaikhan Volodya</div>
							<div class="description">
								Our angel investor who showed our way to market. Successfull entrprenuer. Co-founder<br/>
								Product Manager at Dell EMC
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
							<div class="header">Rick Rasmussen</div>
							<div class="description">
								Mentor who guided  us in Silicon Valley. International venture captalist. <br/>
								Managing director of Concordia Ventures
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
							<div class="header">Oko Davaasuren</div>
							<div class="description">
								Mentor to almost all Mongolian startups. Founder of Mongolian startup eco system. <br/>
								Founder of Startup Mongolia
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
				<h1 class="ui header">Invest</h1>
				<div class="ui horizontal divider"><i class="flaticon-speech icon"></i></div>
				<p class="ui centered lead">Please check our <a href="https://www.f6s.com/khangaikhurelbaatar">F6s projects.</a> We are raising seed funds.</p>
				<br/>
			</div>
			<div class="ui centered page grid">
				<h3 class="subscribe-header">Contact us for meeing</h3> 
				<div class="ui form eight wide subscribe column">
					<div class="field">
						<div class="ui fluid action input">
							<input placeholder="Email" type="text">
							<div class="ui button">Send</div>
						</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>
@endsection