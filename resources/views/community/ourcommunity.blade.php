@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_008.JPG?w=1920&h=500&fit=crop'>
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
					<h1>Our Community</h1>
				</header>
			
					<h2 class="text-green">"excellent links with the local community"</h2>
		
			</article>
		</div>
	</div>
	<div class="row padding-x2 margin-bottom">
		<div class="col-md-4">
		<blockquote class="bockquote-reverse bg-success padding-x2">
  				<p>The school is a caring community, which knows its pupils and their families well.</p>
  				<footer><b>Ofsted<cite title="Source Title"> 2013</b> </cite></footer>
			</blockquote>
		</div>
		<div class="col-md-8">
			<p>The Academy has a very active parent, teacher and friend association. They have raised thousands of pounds to support the work of the school. For instance, they bought new laptops and visualisers for the classrooms. We have a dedicated governing body that has overall responsibility for the way the academy is run, promoting the highest standards of achievement. It is made up of a mixture of staff, community volunteers and parents. We have excellent links with the local community, have a diverse range of visitors and we are regularly involved with community events and activities such as West Sussex Dance Time and the Shoreham Beach Dreams festival.</p>
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