@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_018.JPG?w=1920&h=500&fit=crop&crop=top'>
	</div>
@endsection

@section('content')
<div class="container-fluid blue-container text-center">
</div>
<div class="container">
	<div class="row padding-x2 margin-bottom">
	<div class="col-md-12">
			<article>
				<header>
					<h1>Curriculum Overview</h1>
				</header>
		
		
			</article>
		</div>
		<div class="col-md-8">
			<p><strong class="text-green">Our curriculum is fun and engaging, exciting and memorable.</strong> It is fundamentally creative and fosters creativity. We aim not simply to try and make children remember but to build experiences that they cannot forget.</p>
			<p>It teaches children how to learn, how to ask questions and where to look for answers. Our children learn to think for themselves. It involves working with others, working together, developing social skills, teamwork, negotiation and an understanding of fairness.</p>
			<p><strong class="text-green">We aim to personalise our curriculum to each child's interests and needs</strong>, developing independence and a love of learning. It has personal, social, health and economic understanding at its centre, developing our children's understanding of themselves as citizens in a local, national and global sense.</p>
			<p><strong class="text-green">We aim to make the learning real for our children</strong> and strongly believe in visits, visitors and real life learning experiences. These include: residential trips to France and Lodge Hill; day trips to London and Portsmouth Harbour; participation in local arts and dance events such as Beach Dreams; singing at the O2 in London and participation in a wide range of sporting events in and around Shoreham.</p>
		</div>
		<div class="col-md-4">
		<blockquote class="bockquote-reverse bg-success padding-x2">
  				<p>Visitors, visits and a range of well-attended clubs contribute effectively to pupils' enjoyment of the curriculum.</p>
  				<footer><b>Ofsted<cite title="Source Title"> 2013</b> </cite></footer>
			</blockquote>
			<figure class="pull-right padding-x2"><a href="{{url()}}/docs/Maths Calculation Progression Overview.pdf" target="_blank"><img src="{{url()}}/img/page-specific/learning/mathscalculation.png?w=1600&h=370&fit=contain"></a></figure>
		</div>
		<div class="col-md-8">
			<p class="bg-info padding-x2"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/Curriculum_statement.pdf" target="_blank">Our Curriculum Statement</a></p>
			<p class="bg-success padding-x2"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/Curriculum Map.pdf" target="_blank">Our Curriculum Map</a></p>
			<p class="bg-info padding-x2"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/Maths Calculation Progression Overview.pdf" target="_blank">Maths Calculation Progression Overview</a></p>
		</div>
	</div>
	<div class="row margin-bottom">
		<div class="col-md-12">
			<img src="{{url()}}/img/Photos/Education_Primary_017.jpg?w=1600&h=450&fit=crop&crop=center">
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