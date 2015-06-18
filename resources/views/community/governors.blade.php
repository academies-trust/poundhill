@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/about_hero.JPG?w=1920&h=500&fit=crop'>
	</div>
@endsection

@section('content')
<div class="container-fluid blue-container text-center">
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<article>
				<header>
					<h1>Governors</h1>
				</header>
				<div class="col-md-12">
					<p>The Governors of Holmbush Primary Academy are committed to the highest standards of safeguarding within the school, promoting the welfare of children and young people.</p>
					<p>We expect all staff, volunteers, parents and visitors to share these values and make Holmbush Primary Academy a safe place for our children to be.  Every child’s welfare is our paramount concern.</p>
				</div>	
			</article>
		</div>
	</div>
	<div class="row bg-success padding-x2">
		<div class="col-md-12">
			<article>
				<header>
					<h2>Documents</h2>
				</header>
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign text-orange logo"></span> <a href="{{url()}}/docs/governors/adur.pdf" target="_blank">Adur Schools</a></p>
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign text-green logo"></span> <a href="{{url()}}/docs/governors/Gov leaflet.pdf" target="_blank">Governor Leaflet</a></p>
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign text-blue logo"></span> <a href="{{url()}}/docs/governors/Election of Parent Governor.pdf" target="_blank">Election of Parent Governor</a></p>
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign text-red logo"></span> <a href="{{url()}}/docs/governors/Parent Governor nomination form.pdf" target="_blank">Parent Governor nomination form</a></p>
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign text-purple logo"></span> <a href="{{url()}}/docs/governors/Disqualification form.pdf" target="_blank">Disqualification form</a></p>
			</article>
		</div>
	</div>
</div>
@endsection
@section('scripts')
	<script>
	$(document).ready(function() {
		var slides = $('.hero-image');
		var counter = 0;
		var time = 5000;
		var advanceSlide = function() {
			$('.hero-image').eq(counter).removeClass('show');
			counter++;
			if(counter >= slides.length) {
				counter = 0;
			}
			$('.hero-image').eq(counter).addClass('show');
			
		}
		var slidesGo = setTimeout(function() {
			setInterval(function() { advanceSlide() }, time);
		}, time);
	});
	</script>
@endsection