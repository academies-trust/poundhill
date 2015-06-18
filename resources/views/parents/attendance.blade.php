@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_032.JPG?w=1920&h=500&fit=crop'>
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
					<h1>Absence and Attendance</h1>
				</header>
					<h2 class="text-green">Attendance</h2>	
					<p>All lateness and absences are recorded by our Pastoral Coordinator.  Reasons will be sought for all absence or lateness.  Attendance is monitored through these systems and referrals to the Designated Child Protection Officers can be made.  Parents and carers will always be informed of concerns around attendance at the earliest point.  If attendance concerns continue, the school may refer to the Education Welfare Service.</p>
					<h2 class="text-green">Absence During Term Time</h2>
					<p>We would encourage parents and carers not to take their children out of school during term time. <strong>Every day of your child's education counts.</strong>  Holidays during term time are not authorised.</p>
					
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