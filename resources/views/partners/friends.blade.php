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
					<h1>The Friends of Pound Hill Infant Academy</h1>
					<p>The Friends of Pound Hill Infant Academy is a registered charity that raises extra funds for Pound Hill Infant Academy. The committee is run by parents and teachers.</p>
					<p>The aim of the committee is to raise money for the school whilst also providing some extra fun activities for children. For example, the Friends organise a Christmas market, an Easter egg hunt, a sponsored bounce, an alphabet market and discos, all of which are immensely enjoyable for the children, whilst raising a great deal of money for the school. We also organise events for parents like a Quiz Night or Racing Night.</p>
					<p>The focus of the fund-raising is suggested by the school in consultation with the children through the School Council. Recently funds went towards the creation of the library which will be enjoyed for many years to come and the provision of up to date technological resources for classrooms.</p>
					<p>The committee is always looking for new members and new ideas. If you wish to volunteer for this worthwhile and enjoyable cause, please complete the form that will be included in the school starter pack. The commitment is not huge - The Friends meet every 2 or 3 months for a couple of hours and the meetings are informal and fun. We look forward to seeing some new members!</p>
					<p><em>Joanne Gill, Chair of the Friends of Pound Hill Infant School.</em></p>
					<p>Friends can be contacted direct via email to: <a href="mailto:fo.poundhillinfantschool@gmail.com">fo.poundhillinfantschool@gmail.com</a></p>
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