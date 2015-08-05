@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/heroes/ph-27-03-14-018.jpg?w=1920&h=500&fit=crop'>
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
					<h1>Our Academy Day</h1>
				</header>
			</article>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p>The Academy day begins promptly at 8.50 am and ends at 2.50 pm.</p>
			<p>The doors will open at:<br/>
			<span class="h3">Early Years  8.30 am</span><br/>
			<span class="h3">Key Stage One  8.40 am</span></p>
			<p>The doors will close at 8.45 am and all children must be in their classroom by 8.50 am ready to start learning.</p>
			<p>Before the start of the Academy day, Foundation Stage parents should wait on the playground outside Apple, Elm and Ash classrooms. Year One and Two parents should wait on the main playground.</p>
			<p>In order to encourage independence we kindly ask that children in Year 1 and 2 enter the classrooms on their own.  The emphasis will be on the children organising themselves for the Academy day but should they need help there will be staff available to guide them.  If you need to see the class teacher please enter via the classroom door but be mindful that their time will be limited.  They will however be happy for you to make an appointment at the end of the day should you need to. If someone other than yourself is collecting your child at the end of the Academy day please ensure either the teacher or the office are kept informed.</p>
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