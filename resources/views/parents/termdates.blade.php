@extends('app')

@section('hero')
	<div class="hero col-md-12 nopad">
		<img class="hero-image show" src='{{url()}}/img/headers/ph-27-03-14-031.JPG?w=1920&h=500&fit=crop'>
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
					<h1>Term Dates</h1>
					<h2>Academic Year 2014/15</h2>
				</header>
				<dl>
					<dt>Summer Term 2015</dt>
						<dd>Monday 13th April – Friday 22nd May</dd>
						<dd>Monday 1st June – Wednesday 22nd July</dd>
					<dt class="bg-info">INSET Days</dt>
						<dd>Monday 20th July 2015</dd>
						<dd>Tuesday 21st July 2015</dd>
						<dd>Wednesday 22nd July 2015</dd>
						<dd class="text-blue">The Academy will also be closed on Monday 4th May 2015 as this is a public holiday.</dd>
				</dl>
				<h2>Academic Year 2015/16</h2>
				<dl>
					<dt>Autumn Term 2015</dt>
						<dd>Wednesday 2nd September – Friday 23rd October</dd>
						<dd>Monday 2nd November – Friday 18th December</dd>
					<dt>Spring Term 2016</dt>
						<dd>Monday 4th January – Friday 12th February</dd>
						<dd>Monday 22nd February – Thursday 24th March</dd>
					<dt>Summer Term 2016</dt>
						<dd>Monday 11th April – Friday 27th May</dd>
						<dd>Monday 6th June – Thursday 21st July</dd>
					<dt class="bg-info">INSET Days</dt>
						<dd>Wednesday 2nd September 2015</dd>
						<dd>Monday 2nd November 2015</dd>
						<dd>Monday 4th January 2016</dd>
						<dd>Monday 22nd February 2016</dd>
						<dd>Friday 17th June 2016</dd>
						<dd class="text-blue">The Academy will also be closed on Monday 2nd May 2016 as this is a public holiday.</dd>
				</dl>
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