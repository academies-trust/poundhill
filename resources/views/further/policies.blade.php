@extends('app')

@section('hero')
	<div class="hero col-md-12 nopad">
		<img class="hero-image show" src='{{url()}}/img/generic/Education_Primary_097.jpg?w=1920&h=500&fit=crop&crop=center'>
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
					<h1>Policies</h1>
					<p>The key policies of the University of Brighton Academies Trust, which are implemented by each academy within the Trust, are provided on the Trust’s website <a href="https://www.brighton.ac.uk/academiestrust/how-we-work/our-policies/index.aspx" target="_blank">www.brighton.ac.uk/academiestrust/how-we-work/our-policies/index.aspx</a></p>
					<p>These Trust policies are also complemented by a series academy-specific policies, which are provided below</p>	
				</header>
				
				<div class="row">
					<div class="col-md-6">
					<ul>
						<li><a href="{{url()}}/docs/policies/charging.pdf" target="_blank">Charging Policy</a></li>
						<li><a href="{{url()}}/docs/policies/Child Protection.pdf" target="_blank">Child Protection</a></li>
						<li><a href="{{url()}}/docs/policies/Encouraging Good Behaviour.pdf" target="_blank">Encouraging Good Behaviour</a></li>
						<li><a href="{{url()}}/docs/policies/Safeguarding.pdf" target="_blank">Safeguarding</a></li>
						<li><a href="{{url()}}/docs/policies/Uniform policy.pdf" target="_blank">Uniform Policy</a></li>
						<li><a href="{{url()}}/docs/Healthy Schools Policy.pdf" target="_blank">Healthy Schools Policy</a></li>
						<li><a href="{{url()}}/docs/policies/Curriculum_policy.pdf" target="_blank">Curriculum Policy</a></li>
						</ul>
					</div>
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