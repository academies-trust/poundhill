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
					<h1>Working in Partnership</h1>
					<p>At Pound Hill Infant Academy we value the opportunities for partnership working and collaboration, and work hard to ensure all members of our school community have a voice in making our school even better.  The children, parents, staff, Governors and members of the wider community are regularly invited to contribute to the improvement of the school and how it runs.  This helps us to not only support school improvement, but build valuable relationships and a culture of mutual respect and understanding.</p>
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