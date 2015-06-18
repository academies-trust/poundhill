@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_016.JPG?w=1920&h=500&fit=crop'>
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
					<h1>Our Library</h1>
				</header>
					<h2>This is our library</h2>
					<p><span class="text-green"><b>Children and parents may access Junior Librarian by clicking on the picture</b></span></p>
					<figure class="padding-x2"><a href="https://u011427.microlibrarian.net/?ad=true" target="_blank"><img src="{{url()}}/img/page-specific/learning/library.jpg?w=1600&h=370&fit=contain"></a></figure>
			</article>
			<article>
				<header>
					<h1>Read For My School</h1>
				</header>
					<p><span class="text-green"><b>Click on the picture to access the 'Read For My School' competition.</b></span></p> 
					<figure class="padding-x2"><a href="http://www.readformyschool.co.uk/" target="_blank"><img src="{{url()}}/img/page-specific/learning/readformyschool.jpg?w=800&h=320&fit=contain"></a></figure>
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