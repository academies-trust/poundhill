@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/heroes/ph-27-03-14-027_cr.jpg?w=1920&h=500&fit=crop'>
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
					<h1>Our Academy Charter</h1>
				</header>
			</article>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p><strong class="text-maroon">Our academy has developed its own Academy Charter, which is based on the UNICEF Rights, Respecting School programme.</strong><br />
			  We put a great deal of emphasis on rewarding children for being responsible and ensuring the rights of others are respected. We also have a very structured approach to using sanctions for inappropriate behaviour, and have developed a comprehensive Anti-Bullying Policy with members of our academy community, both of which are implemented consistently throughout the academy.</p>
			<table class="table table-bordered">
			<thead>
				<tr class="text-maroon">
					<td><strong>Our Rights</strong></td>
					<td><strong>Our Responsibilities</strong></td>
				</tr>
			</thead>
			<tbody>
				<tr class="bg-info">
					<td>The right to learn</td>
					<td>We will listen and be listened to<br />
					We will not call out<br />
					We will do our best</td>
				</tr>
				<tr class="bg-warning">
					<td>The right to play and have friends</td>
					<td>We will share<br />
					We will be kind and gentle<br />
					We will look after each other</td>
				</tr>
				<tr class="bg-info">
					<td>The right to feel and be safe</td>
					<td>We will look after our things<br />
					We will tidy up<br />
					We will not hurt people</td>
				</tr>
				<tr class="bg-warning">
					<td>The right to feel included</td>
					<td>We will work as a team<br />
					We will not leave people out<br />
					We will help each other</td>
				</tr>
				<tr class="bg-info">
					<td>The right to be heard</td>
					<td>We will share our ideas<br />
					We will listen to others<br />
					We will have a go</td>
				</tr>
				<tr class="bg-warning">
					<td>The right to be me</td>
					<td>We will accept that we are all different<br />
					We will say well done<br />
					We will be honest</td>
				</tr>
			</tbody>
			</table>
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