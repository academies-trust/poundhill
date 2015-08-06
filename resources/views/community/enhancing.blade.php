@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/headers/ph-27-03-14-111.jpg?w=1920&h=500&fit=crop'>
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
					<h1>Enhancing the curriculum</h1>
				</header>
				<div class="col-md-12">
					<div>
					<p>At Pound Hill Infant Academy, we believe in the importance of teaching children a love of and the essential tools for life long learning. Through our curriculum we provide opportunities for our children to think and behave creatively, solve problems, be innovative, respond positively to challenges, manage risk and cope with change.  All our learning has a strong emphasis on key skills particularly reading, writing and mathematics.  We believe that a creative and exciting curriculum combined with rich learning experiences is the key to children’s success. We set out to develop happy, confident, creative learners in a variety of ways:</p>
					<ul>
						<li>A curriculum based on the needs of learners and high aspirations for society.</li>
						<li>A curriculum with personal, social, emotional, environmental, community cohesion and citizenship at the heart.</li>
						<li>Using a flexible timetable</li>
						<li>Rights, Respecting Schools (<a href="http://www.unicef.org" target="_blank">www.unicef.org</a>)</li>
						<li>Mantle of the Expert (<a href="http://www.mantleoftheexpert.com" target="_blank">www.mantleoftheexpert.com</a>) and enterprise skills such as decision making, team working, persistence, collaboration, flexibility, confidence, managing risks, coping with change and responding positively to challenges.</li>
						<li>Child initiated Planning Time in every year group</li>
						<li>Supporting children to use ICT as a tool for thinking and doing, aiding their learning.  Developing learners who are confident in using tools for research, analysis, creativity and communication.</li>
						<li>Learning outside the classroom, including Forest Schools.</li>
						<li>Enriching and enhancing learning experiences with a wide range of visitors and visits.</li>
					</ul>
					<p>This is our interpretation of creative teaching, not something that happens once a week, but something that is at the core of our curriculum.   We are constantly investing energy into our academy ensuring that learning never stops, so that creative experiences result in sustainable change.</p>
					</div>
					<div class="clear"></div>
				<header>
					<h3>Mantle of the Expert</h3>
				</header>
					<p>Our teachers use highly creative teaching methods to engage and challenge children.  Problem solving and investigations are a regular focus of children’s learning.  Mantle of the Expert sessions are used as a regular teaching tool and require children to set up and run their own enterprises, providing a service for an identified demanding client. For example Reception Children were chosen by the Safari Ranger to help solve the problem of the Lions eating all the Zebras and Year 2 children became Time Travellers investigating and helping to solve the problem of how to protect London from the Great Fire.</p>

					<p><a href="http://www.mantleoftheexpert.com" target="_blank">www.mantleoftheexpert.com</a></p>
					<header>
					<h3>Forest Schools Programme</h3>
				</header>
					<p>At Pound Hill Infant Academy we believe children benefit from real life ‘hands on’ experiences where they can see, hear, touch and explore the world around them and have opportunities to experience challenge and adventure.   These experiences take place in our academy grounds, in the local environment and further afield, such as a local forest.</p>
					<p>We also have trained Forest Schools Leaders and Assistants within our staff team.  Forest Schools is all about getting out into the woods to explore and learn.  It was developed in Scandinavia in the 1950s – using woodland as an ‘outdoor classroom’, helping young people to learn about the natural world.  During our Forest School Programme the children visit a local forest school site for a number of sessions.  We plan a range of activities, which are tailored to the children’s interests and abilities.</p>					
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