@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/headers/ph-27-03-14-031-SMILE.JPG?w=1920&h=500&fit=crop'>
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
					<h1>Academy Vision</h1>
				</header>

					<h2>Our school vision is that every member of our school community will be:</h2>
					<p>
					<ul>
					<li>A Happy, Confident Individual</li>
					<li>A Successful Learner</li>
					<li>A Responsible Citizen</li>
					<li>An Effective Contributor</li>
					</ul>
					</p>
					<h2>What this means at Pound Hill Infant School:</h2>
					<h3>A Happy, Confident Individual</h3>
					<p>
					<ul>
					<li>has a positive attitude</li>
					<li>asks questions</li>
					<li>tries really hard even when things are difficult</li>
					<li>is not afraid to get things wrong</li>
					</ul>
					</p>

					<h3>A Successful Learner</h3>
					<p>
					<ul>
					<li>has a love of learning</li>
					<li>solves problems</li>
					<li>is innovative and creative</li>
					<li>manages risks</li>
					<li>uses strategies and has the confidence to cope with change and adapt to change</li>
					<li>responds positively to opportunities, challenges and responsibilities</li>
					<li>finds out what they need to know in lots of different ways (research)</li>
					<li>is enterprising</li>
					</ul>
					</p>

					<h3>A Responsible Citizen</h3>
					<p>
					<ul>
					<li>has a moral and ethical attitude</li>
					<li>is a responsible and caring member of the community</li>
					<li>is a considerate member of their community</li>
					<li>is respectful of the environment and each other</li>
					</ul>
					</p>

					<h3>An Effective Contributor</h3>
					<p>
					<ul>
					<li>shares their ideas and has confidence they will be listened to</li>
					<li>talks confidently and listens and respects other people's opinions and ideas</li>
					<li>helps to decide how they will learn and what they will learn</li>
					<li>helps to make their school even better</li>
					<li>thinks about how they and others can do things even better</li>
					<li>is an advocate of their school</li>
					</ul>
					</p>
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