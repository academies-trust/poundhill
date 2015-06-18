@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_086.JPG?w=1920&h=500&fit=crop'>
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
					<h1>Music</h1>
				</header>
				<div class="col-md-12 bg-success padding-x2">
				<h2>Documents</h2>
					<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign text-orange logo"></span> <a href="{{url()}}/docs/academylife/year 4 letter.pdf" target="_blank">Year 4 Letter to Parents: Charanga Music World!</a></p>
					<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign text-green logo"></span> <a href="{{url()}}/docs/academylife/year 3 letter.pdf" target="_blank">Year 3 Letter to Parents: Charanga Music World!</a></p>
				</div>
		
				
			</article>
			
		</div>
	</div>
	
	<div class="row spacer padding-x2">
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