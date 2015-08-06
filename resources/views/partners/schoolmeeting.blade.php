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
					<h1>The School Meeting</h1>
					<p>The School Meeting is held weekly either in the class or as a whole school in the hall.  The children and staff have an opportunity to discuss topics of interest, the school charter, suggestions for school improvement and Fundamental Bristish Values.  Every term there is also an open forum when the children and staff can raise anything they wish the school to discuss.  Every child and member of staff has the right to be heard and if appropraite the right to vote.  
					</p>
					<p>	
					Some topics that have been covered include:
					<ul>
					<li>The right to be safe</li>
					<li>Bullying, including bullying using technology</li>
					<li>Friendship</li>
					<li>Respect</li>
					<li>Discrimination</li>
					<li>Inclusion</li>
					</ul>
					</p>
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