@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_046.JPG?w=1920&h=500&fit=crop&crop=center'>
	</div>
@endsection

@section('content')
<div class="container-fluid blue-container text-center">
</div>
<div class="container">
	<div class="row padding-x2 margin-bottom">
	<div class="col-md-12">
			<article>
				<header>
					<h1>Grow Your Brain!</h1>
				</header>
		
		
			</article>
		</div>
		<div class="col-md-12">
			<p><strong class="text-green">At Holmbush we believe it is important to develop a Growth Mindset in all children . This is a selection of some of the resources we use to do that. We want all our children to be 'Have a go' Flamingoes!</strong></p>
			<p class="bg-info padding-x2"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/growyourbrain/flamingo and pup story.pdf" target="_blank">Flamingo and Pup story</a></p>
			<p class="bg-success padding-x2"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/growyourbrain/Flamingo and pup picture story.pdf" target="_blank">Flamingo and Pup picture story</a></p>
			<p class="bg-info padding-x2"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/growyourbrain/Amazing_brain_research_EYFS.pdf" target="_blank">Amazing Brain Research EYFS</a></p>
			<p class="bg-success padding-x2"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/growyourbrain/Amazing_brain_research_Y1_and_Y2.pdf" target="_blank">Amazing Brain Research Year 1 and Year 2</a></p>
			<p class="bg-info padding-x2"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/growyourbrain/Amazing_brain_research_Y3_and_Y4.pdf" target="_blank">Amazing Brain Research Year 3 and Year 4</a></p>
			<p class="bg-success padding-x2"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/growyourbrain/Amazing_brain_research_Y5_and_Y6.pdf" target="_blank">Amazing Brain Research Year 5 and Year 6</a></p>
		</div>
	</div>
	<div class="row margin-bottom">
		<div class="col-md-12">
			<img src="{{url()}}/img/Photos/Education_Primary_003.jpg?w=1600&h=450&fit=crop&crop=center">
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