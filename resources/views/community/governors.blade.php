@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/heroes/ph-27-03-14-001.jpg?w=1920&h=500&fit=crop'>
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
					<h1>Governors</h1>
				</header>
				<div class="col-md-12">
					<div class="padding-x2 bg-grey">
					<p>Academy Governors are a group of people selected from across the community to work with the Principal to provide a <strong>safe and happy learning environment</strong> where every child can succeed according to their ability.</p>
					<p>Governors are responsible for the <strong>strategic direction of the Academy</strong>, establishing suitable policies, monitoring standards and ensuring value for money.</p>
					<p>Governors can be contacted through email at <a href="mailto:office@phiacademy.org.uk">office@phiacademy.org.uk</a> or in writing c/o the Academy.</p>
					</div>
				<header>
					<h2>Our Governors</h2>
				</header>
					<dl class="stafflist">
						<dt>Liz Davis</dt>
						<dd>Chair of Governors</dd>
						<dt>Bruce Muirhead</dt>
						<dd>Vice Chair</dd>
						<dt>Julie Knock-Bravery</dt>
						<dd>Staff Governor</dd>
						<dt>Amy Watson</dt>
						<dd>Staff Governor</dd>
						<dt>Kate Hayward</dt>
						<dd>Staff Governor</dd>
						<dt>Georgina Masters</dt>
						<dd>Associate Governor</dd>
						<dt>Andrew Livingstone</dt>
						<dd>Local Authority Governor</dd>
						<dt>Faye Lofty</dt>
						<dd>Local Authority Governor</dd>
						<dt>Rachel Fox</dt>
						<dd>Community Governor</dd>
						<dt>Emma Smith</dt>
						<dd>Community Governor</dd>
						<dt>Angie Cowdry</dt>
						<dd>Parent Governor</dd>
						<dt>Dharma Mahesan</dt>
						<dd>Parent Governor</dd>
						<dt>Lailah Qureshi</dt>
						<dd>Parent Governor</dd>
						<dt>Geoff Crouchn</dt>
						<dd>Clerk to Governors</dd>
					</dl>
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