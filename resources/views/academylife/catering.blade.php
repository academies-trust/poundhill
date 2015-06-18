@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/page-specific/catering/food.JPG?w=1920&h=500&fit=crop'>
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
					<h1>Catering</h1>
				</header>
				<div class="col-md-12 margin-bottom">
					<h2>Healthy Schools</h2>
					<h3>Help Your Children to Have a Balanced Diet</h3>
					<p>There are many ways that we can help our kids to develop healthy eating habits. Healthy eating isn’t complicated, and for most children (and adults!) it boils down to eating less junk food and more fruit, vegetables and wholegrain foods. We should also drink water rather than sweetened drinks. Having a good diet helps prevent a range of serious illnesses now and in later life.</p>
					<p>How do you ensure your kids develop healthy eating habits? Take a look and some good ideas below:</p>
				</div>
				<div class="col-md-3">
					<figure>
					<a href="https://westsussex.mealselector.co.uk/" target="_blank"><img src="{{url()}}/img/page-specific/catering/chartwells.jpeg?w=350&h=270&fit=crop"></a>
					</figure>
					<caption>Chartwells - Order your school meals</caption>
				</div>
				<div class="col-md-3">
					<figure>
					<a href="http://www.kidspot.com.au/subsection+181+Back-to-School-Lunch-box-nutrition.htm" target="_blank"><img src="{{url()}}/img/page-specific/catering/back2school.jpg?w=350&h=270&fit=crop"></a>
					</figure>
					<caption>Healthy no fuss lunch ideas</caption>
				</div>
				<div class="col-md-3">
					<figure>
					<a href="http://www.netmums.com/family-food/food-for-kids/lunchbox-ideas" target="_blank"><img src="{{url()}}/img/page-specific/catering/lunchboxideas.jpg?w=350&h=270&fit=crop"></a>
					</figure>
					<caption>Great lunchbox ideas</caption>
				</div>
				<div class="col-md-3">
					<figure>
					<a href="http://parentsforhealth.org/tips-to-help-kids-eat-fruit-and-vegetables" target="_blank"><img src="{{url()}}/img/page-specific/catering/watermelon.jpg?w=350&h=270&fit=crop"></a>
					</figure>
					<caption>Help tips on getting kids to eat fruit and veg</caption>
				</div>
				<div class="col-md-12 spacer">
						<a href="{{url()}}/docs/free school meals.pdf" target="_blank"><btn class="btn btn-large btn-primary">Free School Meals Information</btn></a>
				</div>
				<div class="col-md-12 spacer">
					<h2>Physical Activity</h2>
					<p>Our aim is to establish an “active school” ethos and environment which will increase activity levels and promote health within and outside the curriculum.</p>
					<p class="bg-info padding-x2"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/physical activity.pdf" target="_blank">Physical Activity</p>
					<p class="bg-info padding-x2"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/change4life.pdf" target="_blank">Change4Life</p>
					<p class="bg-info padding-x2"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/Healthy Schools Policy.pdf" target="_blank">Healthy Schools Policy</p>
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