@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/heroes/ph-27-03-14-018.jpg?w=1920&h=500&fit=crop'>
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
					<h1>After School Clubs/Activities</h1>
				</header>
			</article>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p>
			Please contact the main school office for further information.  All clubs/workshops need to be applied for and confirmed before children can take part.  Information on all clubs will be sent out from the school office usually at the beginning of a new school term - Autumn, Spring and Summer.
			</p>
			<p>
			Football (run by qualified coaches from Crawley Football Club) and Dance (run by qualified teacher from the Louise Ryrie School of Dance) after school clubs run each term. 
			</p>
			<p>
			French lessons are run under licence from <a href="www.lajolieronde.co.uk" target="_blank">La Jolie Ronde</a>. Termly.  For information please contact Mrs Caroline Lafon Anderson-Les petits bavards - caroline.lafon@outlook.com 
			</p>
			<p>
			Group Keyboard lessons are run by West Sussex Music.  You can contact them on: 08452 082 182 or email <a href="mailto:music@westsussexmusic.co.uk">music@westsussexmusic.co.uk</a> or visit the website on: <a href="http://www.westsussexmusic.co.uk" target="_blank">http://www.westsussexmusic.co.uk</a> for more information and to apply for lessons.
			</p>
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