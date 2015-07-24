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
					<p>School Governors are a group of people selected from across the community to work with the Headteacher to provide a safe and happy learning environment where every child can succeed according to their ability.</p>
					<p>Governors are responsible for the strategic direction of the school, establishing suitable policies, monitoring standards and ensuring value for money.</p>

					<table class="staff_list">
						<tr>
							<td class="staff_category">Liz Davis</td>
							<td>Chair of Governors</td>
						</tr>
						<tr>
							<td class="staff_category">Bruce Muirhead</td>
							<td>Vice Chair</td>
						</tr>
						<tr>
							<td class="staff_category">Julie Knock-Bravery</td>
							<td>Staff Governor</td>
						</tr>
						<tr>
							<td class="staff_category">Amy Watson</td>
							<td>Staff Governor</td>
						</tr>
						<tr>
							<td class="staff_category">Kate Hayward</td>
							<td>Staff Governor</td>
						</tr>
						<tr>
							<td class="staff_category">Georgina Masters</td>
							<td>Associate Governor</td>
						</tr>
						<tr>
							<td class="staff_category">Andrew Livingstone</td>
							<td>Local Authority Governor</td>
						</tr>
						<tr>
							<td class="staff_category">Faye Lofty</td>
							<td>Local Authority Governor</td>
						</tr>
						<tr>
							<td class="staff_category">Rachel Fox</td>
							<td>Community Governor</td>
						</tr>
						<tr>
							<td class="staff_category">Emma Smith</td>
							<td>Community Governor</td>
						</tr>
						<tr>
							<td class="staff_category">Angie Cowdry</td>
							<td>Parent Governor</td>
						</tr>
						<tr>
							<td class="staff_category">Dharma Mahesan</td>
							<td>Parent Governor</td>
						</tr>
						<tr>
							<td class="staff_category">Lailah Qureshi</td>
							<td>Parent Governor</td>
						</tr>
						<tr>
							<td class="staff_category">Geoff Crouchn</td>
							<td>Clerk to Governors</td>
						</tr>
						<tr class="spacer"><td >&nbsp;</td></tr>
					</table>
				</div>	
			</article>
			<p>Governors can be contacted through the school email address or in writing c/o the school.</p>
			<p><a href="#">office@poundhill....</a></p>
		</div>
	</div>
	<!--
	<div class="row bg-success padding-x2">
		<div class="col-md-12">
			<article>
				<header>
					<h2>Documents</h2>
				</header>
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign text-orange logo"></span> <a href="{{url()}}/docs/governors/adur.pdf" target="_blank">Adur Schools</a></p>
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign text-green logo"></span> <a href="{{url()}}/docs/governors/Gov leaflet.pdf" target="_blank">Governor Leaflet</a></p>
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign text-blue logo"></span> <a href="{{url()}}/docs/governors/Election of Parent Governor.pdf" target="_blank">Election of Parent Governor</a></p>
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign text-red logo"></span> <a href="{{url()}}/docs/governors/Parent Governor nomination form.pdf" target="_blank">Parent Governor nomination form</a></p>
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign text-purple logo"></span> <a href="{{url()}}/docs/governors/Disqualification form.pdf" target="_blank">Disqualification form</a></p>
			</article>
		</div>
	</div>
	-->
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