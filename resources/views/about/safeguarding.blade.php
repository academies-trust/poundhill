@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/headers/ph-27-03-14-006.jpg?w=1920&h=500&fit=crop&crop=center'>
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
					<h1>Safeguarding</h1>
				</header>
				<div class="col-md-12">
					
					<p><strong><span class="text-green">The Governing body takes seriously its responsibility under section 175 of the Education Act 2002 to safeguard and promote the welfare of pupils; and to work together with other agencies to ensure adequate arrangements within our school to identify, assess, and support those children who are suffering harm.</span></strong></p>
					<p>We recognise that all adults, including temporary staff, volunteers and governors, have a full and active part to play in protecting our pupils from harm, and that the child’s welfare is our paramount concern.</p>
					<p>All staff members believe that our school should provide a caring, positive safe and stimulating environment that promotes the social, physical and moral development of the individual child.</p>
					<p><strong>Designated Child Protection Leader:</strong> Julie Knock-Bravery Headteacher</p>
					<p class="spacer"><span class="glyphicon glyphicon-info-sign logo"></span><strong>For more information please read our <a href="{{url()}}/docs/policies/Child Protection.pdf" target="_blank">Child Protection Policy</a>.</strong></p>
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