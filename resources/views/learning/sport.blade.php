@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_023.JPG?w=1920&h=500&fit=crop'>
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
					<h1>PE and Sport</h1>
				</header>
					<h2>Meet Miss Case</h2>
					<p><span class="text-green"><b>I’m Miss Samantha Case. I am 19 years old and currently doing a sports-based Apprenticeship with Shoreham Academy.</b></span> I work 3 days a week at Holmbush Primary Academy supporting PE lessons and organising a range of different sporting events, from netball to tag rugby, both inter and intra competitions.</p>
					<p>Every morning I organise <strong>Early Bird fitness</strong>, where each day a different year group has the opportunity to develop skills and participate in varied activities, from bench ball to blind football.</p>
					<p>Currently at Holmbush University pupils can participate in tag rugby. We are currently honing our skills to take part in the cluster tag rugby festivals. Later in the year, Key Stage 1 and 2 children will be having fun raising money for the British Heart Foundation by taking part in a Dodgeball Day.</p>
					<p>Before my apprenticeship I was student at Shoreham Academy Sixth Form and I studied Sports and Higher Sports Leadership. In the Higher Sports Leadership course I had placements at two different Primary Schools, Heronsdale and Eastbrook. These placements made me think about my career in Primary Education. Once the opportunity came up for the apprenticeship I thought that it was the perfect opportunity for me to find out if the job was for me. Holmbush Primary Academy has made me realise that I would like to work in Primary Education and I am really grateful. I couldn’t have asked for a better school to have my placement in.</p>
					
			</article>
		</div>		
	</div>
	<div class="row">
		<div class="col-md-12">
			<article>
				<header>
					<h1>Zumba</h1>
				</header>
				<figure class="pull-right padding-x2"><img src="{{url()}}/img/PE and Sport/06.jpg?w=1600&h=370&fit=contain"></figure>
				<p>At Holmbush Primary Academy children in year 1-6 are taking part in Zumba classes to enable them to raise their fitness levels, develop rhythm and dance skills whilst having a tremendous amount of fun.</p>
 				<p>This is all thanks to Leanne, a visiting coach who is teaching the children Zumba each week. This exciting opportunity is being financed through our School Sports Premium.</p>
 				<p><strong class="text-green">Quote from Ella Masters in Year 2 “I really like it because you get really fit and flexible and also you get to dance. We also get to listen to lots of good songs.”</strong></p>
 				<p><strong class="text-green">Quote from Lucian Cockerill-Sandel l in Year 2 “ It’s good because I’m good at it. We get time to dance. It’s really fun!”</strong></p>
			</article>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<article>
				<header>
					<h1>Living Streets</h1>
				</header>
				<p class="bg-info padding-x2"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/livingstreets.pdf" target="_blank">Living Streets Parent Letter</a></p>
				<figure class="pull-right padding-x2"><img src="{{url()}}/img/PE and Sport/ls05.jpg?w=1600&h=370&fit=contain"></figure>
				<p>Dear Parent/Carer, We are excited to tell you about a new walk to school project that our school will be running this year with national charity Living Streets and West Sussex County Council.</p>
				<p><span class="text-green">Who is involved?</span> Selected schools in West Sussex have been invited to participate in this project over three years (2012-2015). Everyone at our school will have the chance to be involved including pupils, parents and teachers.</p>
				<p><span class="text-green">What is involved?</span> The main focus of the project will be the ‘Walk once a Week’ (WoW) initiative which all of our pupils can participate in.</p>
				<p><span class="text-green">What is WoW?</span> WoW is a scheme run by Living Streets, the charity behind the national Walk to School campaign, which encourages families to walk to school at least once a week. At the end of each month, children who walked at least once every week will receive a special collectable pin badge shown below. There is a different badge to collect for each month of the school year.</p>
				<p><span class="text-green">What if we can’t walk to school?</span> Even if you live too far away or don’t have time to walk the whole way to school, all children can participate in WoW by walking at least 5-10 minutes to school. We recommend ‘park and stride’ where you park your car away from the school or at a friend’s house and walk from there.</p>
				<p><span class="text-green">Why are we encouraging walking to school?</span> Under half of UK children walk to school and this number is decreasing, while the number of children being driven to school has doubled in the last 20 years. Our school is taking part because of the many benefits we believe it will bring to our children and the community.</p>
				<p><span class="text-green">What next?</span> We will be launching WoW officially on Thursday 13th March and children can start working towards their first badge on Monday 17th March. (The badges are based on a journey through time and the badge for March is a Pirate badge). If you have any questions about the programme, please contact Mrs Langford, or you can contact your West Sussex Coordinator, Eleanor Togut by visiting <a href="http://www.livingstreets.org.uk/walktoschool" target="_blank">www.livingstreets.org.uk/walktoschool</a>. We hope that you join in with this fun project so your family can enjoy the benefits of walking to school!</p>
			</article>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 bg-success padding-x2">
			<h2 class="text-green">Documents</h2>
			<p class="bg-white padding-x2 spacer"><span class="glyphicon glyphicon-paperclip logo"></span><a href="{{url()}}/docs/Sports Day letter 2015.pdf" target="_blank">Sports Day 2015 Letter</p>
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