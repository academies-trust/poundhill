@extends('app')

@section('hero')
	<div class="hero col-md-12 nopad">
		<img class="hero-image show" src='{{url()}}/img/headers/ph-27-03-14-115.jpg?w=1920&h=500&fit=crop&crop=center'>
	</div>
@endsection

@section('content')
<div class="container-fluid blue-container text-center">
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<article class="padding-x2">
				<header>
					<h1>Parents and Volunteers</h1>
					<p>We seek to work as closely as possible with the parents of the children that we teach. We encourage parents or volunteers to get involved in a number of different ways including:
					<ul>
					<li>Providing feedback and comments</li>
					<li>Attending open mornings, drop in and learning events</li>
					<li>Helping out in school, for example gardening, cooking, sharing expertise.</li>
					<li>Joining our Parents as Partners or Foot Steps programmes</li>
					<li>Reading Buddy volunteers. We have a number of parents and volunteers who regularly come into school and take on the role of a Reading Buddy.  Our Reading Buddies assist us in ensuring every child has the opportunity to read with an adult on a frequent basis.</li>
					</ul>
					</p>
					<p>
					All volunteers will need to complete a DBS (Disclosure and Barring Service) check (formerly CRB).</p>
			</div>
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