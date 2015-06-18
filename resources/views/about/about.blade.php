@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/about_hero.JPG?w=1920&h=500&fit=crop'>
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
					<h1>About Us</h1>
				</header>
				<div class="col-md-12">
					<h2>Welcome</h2>
					<p><strong><span class="text-green">Holmbush Primary Academy provides a safe, attractive and stimulating learning environment for over 200 pupils ages 4 to 11.</span></p>
					<p>The classrooms are extremely well resourced; light, bright and airy and much larger than average sized primary classrooms.</strong></p>
				</div>
				<div class="col-md-8">
					<p>We have excellent ICT provision with a number of networked computers in every room and access to a wide variety of portable computers, ipads, Learn pads, cameras, microphones, webcams and other equipment that enriches our curriculum.  We have a fantastic library offering a huge selection of books which the children can borrow to read at home. </p>
					<p>We have a dedicated modern kitchen area where children can learn how to prepare food. We have a large multipurpose hall which we use for dance, games and gymnastics. We have an attractive outside space with a variety of equipment, for the children to improve their physical development, around our playground.</p>
					<p>We also have an outside classroom and a small conservation woodland. Every classroom opens up directly onto the outside areas and we frequently make use of this resource in our lessons.</p>
				</div>
				<div class="col-md-4">
					<img src="{{url()}}/img/Photos/Education_Primary_026.jpg?w=350&h=270&fit=crop">
				</div>		
			</article>
			<div class="col-md-12">
			<article>
				<h2 class="text-green">We are a Rights Respecting Academy</h2>
				<div class="bg-success padding-x2 margin-bottom">
					<ul>
						<li>Article 12 – Your right to say your ideas and be listened to.</li>
						<li>Article 19 – Your right to be kept safe.</li>
						<li>Article 28 – Your right to learn at school.</li>
						<li>Article 29 – Your right to be the best you can be.</li>
						<li>Article 31 - Your right to relax and play.</li>
					</ul>
				</div>
				<div class="bg-info padding-x2">
				<figure class="pull-right">
						<a href="{{url()}}/docs/Conventions.pdf" target="_blank"><img src="{{url()}}/img/page-specific/about/conventions.jpg?w=350&h=270&fit=crop"></a>
				</figure>
				<dl>
					<dt><h3>Children respect these rights by:</h3></dt>
						<dd>Putting their hands up and waiting for their turn to speak.</dd>
						<dd>Listening to everyone politely.</dd>
						<dd>Concentrating and working as hard as they can.</dd>
						<dd>Knowing and understanding their next steps for learning.</dd>
						<dd>Looking after the classroom and all the equipment in it.</dd>
						<dd>Sharing playground equipment and taking turns.</dd>
						<dd>Asking others to join in.</dd>
						<dd>Being careful and looking out for each other.</dd>
					<dt><h3>Adults respect these rights by:</h3></dt>
						<dd>Creating opportunities for children to speak and listen to each other.</dd>
						<dd>Listening to children’s ideas and taking them into account.</dd>
						<dd>Preparing lessons that challenge every child at their level.</dd> 
						<dd>Providing children with a safe place to play, and supervising their playtimes.</dd> 
				</dl>
			</article>
			</div>
	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<article>
				<div class="col-md-12">
					<h2 class="text-green">Our Certificates</h2>
					<div class="col-md-12 bg-green spacer">
						<div id="carousel-example-generic" class="carousel slide margin-top margin-bottom" data-ride="carousel">
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							    <div class="item active">
							      <p class=" text-center "><img src="{{url()}}/img/certificates/01.jpg?h=400&w=600&fit=contain" alt="..."></p>
							    </div>
							    <div class="item">
							        <p class=" text-center "><img src="{{url()}}/img/certificates/02.jpg?h=400&w=600&fit=contain" alt="..."></p>
							    </div>
							    <div class="item">
							        <p class=" text-center "><img src="{{url()}}/img/certificates/03.jpg?h=400&w=600&fit=contain" alt="..."></p>
							    </div>
							    <div class="item">
							        <p class=" text-center "><img src="{{url()}}/img/certificates/04.jpg?h=400&w=600&fit=contain" alt="..."></p>
							    </div>
							    <div class="item">
							        <p class=" text-center "><img src="{{url()}}/img/certificates/05.jpg?h=400&w=600&fit=contain" alt="..."></p>
							    </div>
							    <div class="item">
							        <p class=" text-center "><img src="{{url()}}/img/certificates/06.jpg?h=400&w=600&fit=contain" alt="..."></p>
							    </div>
							    <div class="item">
							        <p class=" text-center "><img src="{{url()}}/img/certificates/07.jpg?h=400&w=600&fit=contain" alt="..."></p>
							    </div>
							  </div>

							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
					</div>
				</div>		

			</article>
		</div>
	</div>
	<div class="row spacer padding-x2">
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