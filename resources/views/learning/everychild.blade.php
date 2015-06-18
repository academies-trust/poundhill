@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_006.JPG?w=1920&h=500&fit=crop'>
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
					<h1>Every Child's Needs</h1>
				</header>
					<p><span class="text-green"><b>We are committed to meeting the needs of every individual and your child's progress is constantly monitored and assessed.</b></span> Our aim is that every child should be given learning opportunities appropriate to their talents and abilities and to further develop their particular strengths. We believe that every person is entitled to equality of opportunity. We aim to provide equality for all our children whatever their age, ability, gender, race or background and work to ensure our expectations, attitudes and practices enable every child to reach their potential.</p>
					<blockquote class="bockquote-reverse bg-success padding-x2">
  						<p>"Parents and carers are very positive about the school's arrangements for the admission of their children."</p>
  						<footer><b>Ofsted<cite title="Source Title"> 2013</b> </cite></footer>
					</blockquote>	
			</article>
		</div>		
	</div>
	<div class="row">
		<div class="col-md-4">
			<img src="{{url()}}/img/page-specific/about/01.jpg?w=600&h=300&fit=crop&crop=center">
		</div>
		<div class="col-md-4">
			<img src="{{url()}}/img/page-specific/about/02.jpg?w=600&h=300&fit=crop&crop=center">
		</div>
		<div class="col-md-4">
			<img src="{{url()}}/img/page-specific/about/03.jpg?w=600&h=300&fit=crop&crop=center">
		</div>	
	</div>
	<div class="row">
		<div class="col-md-12">
			<article>
				<header>
					<h1>Our Foundation Stage</h1>
				</header>
				<p>At Holmbush we believe that first hand experiences, play and talk are the main ways through which young children learn about themselves, other people and the world around them.</p>
				<p>The Early Years education we offer builds on what children know and can do. We make regular assessments of children's learning and we use this information to ensure future planning reflects identified needs.</p>
				<p>We were pleased that our efforts were recognised by OFSTED and we were graded as good in every aspect of early year's provision in our most recent inspection.</p>
				<p><strong class="text-green">"Teaching is good and children engage well with their learning and make good progress."</strong> OFSTED</p>
			</article>
		</div>
	</div>
	<div class="row margin-bottom">
		<div class="col-md-12">
			<img src="{{url()}}/img/Photos/Education_Primary_026.jpg?w=1600&h=370&fit=crop&crop=center">
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