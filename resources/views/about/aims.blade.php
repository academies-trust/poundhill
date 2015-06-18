@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_066.JPG?w=1920&h=500&fit=crop'>
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
					<h1>Vision &amp; Mission Statement</h1>
				</header>
			
					<h2 class="text-green">Learning and improving together without limits.</h2>
		
			</article>
		</div>
	</div>
	<div class="row padding-x2 margin-bottom">
		<div class="col-md-12">
			<figure class="pull-right">
				<img src="{{url()}}/img/Photos/Education_Primary_043.jpg?w=450&h=350&fit=crop">
			</figure>
			<h3>At Holmbush Primary Academy we aim for:</h3>
			<p><strong class="text-green">H</strong>igh Expectations<br />
			<strong class="text-green">O</strong>utstanding and creative learning journeys<br />
			<strong class="text-green">L</strong>earning through challenge and excitement<br />
			<strong class="text-green">M</strong>aking the most of partnerships with parents and the community<br />
			<strong class="text-green">B</strong>uilding on progress<br />
			<strong class="text-green">U</strong>nderstanding the needs and achievements of everyone<br />
			<strong class="text-green">S</strong>afe and secure environment<br />
			<strong class="text-green">H</strong>appiness</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<article>
				<header>
					<h1>Values - Respect</h1>
				</header>
				<div class="col-md-12 padding-x2 margin-bottom">
					<figure class="pull-right">
						<img src="{{url()}}/img/Photos/Education_Primary_086.jpg?w=450&h=350&fit=crop">
					</figure>
					<ul>
						<li>Responsibility</li>
						<li>Everyone is equal</li>
						<li>Stay healthy</li>
						<li>Persevere</li>
						<li>Encourage</li>
						<li>Challenge and inspire</li>
						<li>Together as friends</li>
					</ul>
 					<h3 class="text-left"><small>Through learning the children will develop the following four Spiritual, Moral, Social and Cultural attitudes:</small></h3>
 					<ul>
 						<li>Self awareness</li>
						<li>Open-mindedness</li>
						<li>Appreciation and wonder</li>
						<li>Respect for all</li>
					</ul>
				</div>
			</article>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-green">Learning Together</h2>
			<p>We work together with the other schools in Shoreham, Southwick, Lancing and Sompting. Together we are called the Adur Family of Schools.</p>
			<p>We share the following Spiritual, Moral, Social and Cultural values:</p>
		</div>
		<div class="col-md-12 aims-box">
			<h4><span class="glyphicon glyphicon-leaf logo"></span> We are reflective</h4>
			<ul>
				<li>We believe that we are here to learn.</li>
				<li>We have faith in ourselves and others.</li>
				<li>We reflect on our actions and our impact on others.</li>
				<li>We think deeply in lessons and during assemblies.</li>
				<li>We consider our environment.</li>
			</ul>
		</div>
		<div class="col-md-12 aims-box bg-yellow">
			<h4><span class="glyphicon glyphicon-ok logo"></span> We know the difference between right and wrong</h4>
			<ul>
				<li>We learn to the best of our ability.</li>
				<li>We do as we are asked the first time.</li>
				<li>We are always in the right place at the right time.</li>
				<li>We come to school properly equipped.</li>
				<li>We always look smart and ready to learn.</li>
				<li>We keep to Holmbush rules.</li>	
				<li>We act safely at all times.</li>
			</ul>
		</div>
		<div class="col-md-12 aims-box bg-blue">
			<h4><span class="glyphicon glyphicon-heart logo"></span> We are a caring community</h4>
			<ul>
				<li>We respect ourselves and others around the school and in the classroom.</li>
				<li>We greet others respectfully (a smile helps).</li>
				<li>We say please and thank you.</li>
				<li>We keep left and hold doors open.</li>
				<li>We communicate considerately.</li>
				<li>We apologise when we should.</li>
			</ul>
		</div>
		<div class="col-md-12 aims-box bg-purple">
			<h4><span class="glyphicon glyphicon-star logo"></span> We enrich our lives</h4>
			<ul>
				<li>We journey to and from school respecting our local community.</li>
				<li>We respect other faiths and cultures.</li>
				<li>We take part in school and community activities.</li>
				<li>We recognise that everyone is equal.</li>
				<li>We believe that outstanding progress is achievable by all.</li>
			</ul>
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