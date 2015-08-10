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
			<p class="lead">The Academy day begins promptly at 8.50 am and ends at 2.50 pm.</p>
			<p class="text-maroon"><strong>The doors will open at:</strong><br/>
			<dl>
				<dt>Early Years</dt>
				<dd>08:30am</dd>
				<dt>Key Stage One</dt>
				<dd>08:40am</dd>
			</dl>
			
			<p>The doors will close at 8.45 am and all children must be in their classroom by 8.50 am ready to start learning.</p>
			<p><span class="text-maroon"><strong>Before the start of the Academy day,</strong></span><br /> <u>Foundation Stage</u> parents should wait on the playground outside Apple, Elm and Ash classrooms.<br /> <u>Year One and Two</u> parents should wait on the main playground.</p>
			<figure class="spacer"><img src='{{url()}}/img/generic/ph-27-03-14-030.jpg?w=1920&h=500&fit=crop'></figure>
			<div class="clear"></div>
			<p class="spacer"><strong>In order to encourage independence we kindly ask that children in Year 1 and 2 enter the classrooms on their own.</strong> The emphasis will be on the children organising themselves for the Academy day but should they need help there will be staff available to guide them.</p>
			<div class="bg-info padding-x2">
				<p><span class="glyphicon glyphicon-info-sign"></span> If you need to see the class teacher please enter via the classroom door but be mindful that their time will be limited.  They will however be happy for you to make an appointment at the end of the day should you need to.</p>
			</div>
			<div class="bg-warning padding-x2 spacer">
				<p><span class="glyphicon glyphicon-info-sign"></span> If someone other than yourself is collecting your child at the end of the Academy day, please ensure either the teacher or the office are kept informed.</p>
			</div>

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