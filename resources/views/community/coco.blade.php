@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/headers/ph-27-03-14-015.jpg?w=1920&h=500&fit=crop'>
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
					<h1>Coco's Africa</h1>
				</header>
				<div class="col-md-12">
					
					<p>We have strong links with the Coco’s Africa Foundation, set up by Chris Connor's, CoCo's Hair Salon, Miadenbower, Crawley. The Foundation supports children in South Africa in a varity of ways .  More information can be found at: <a href="www.cocosfoundation.co.uk" target="_blank">www.cocosfoundation.co.uk</a></p>
					<p>Our work with the charity is linked to the Rights on our School Charter:</p>
						<ul>
							<li>the right to learn</li>
							<li>the right to play and have friends</li>
							<li>the right to feel safe and be safe</li>
							<li>the right to feel included</li>
							<li>the right to be heard</li>
							<li>the right to be me</li>
						</ul>
					<p>Our children believe that every child in the world should have these Rights. They are learning how to empathise and extend their responsibility, helping children beyond their school.  Here are some of the things our children have achieved:</p>
					<section>
						<header>
							<h3>The right to feel and be safe</h3>
						</header>
							<h4>2013-2015</h4>
								<p>Our most recent project was a collaboration with Maidenbower Infant School and The Brook School in Miadenbower, Crawley.  We raised £5000 between us over two years to build a home for a child led familiy and to fund an after school pastoral support programme in the local school.</p>
							<h4>2010-2011</h4>
								<p>All the donations raised have been used to help build a reservoir for a children's village and to buy 10 chickens, chicken feed and vegetable seeds.  The chickens provide eggs for the village to eat and are used in cooking.  Some of the eggs are also sold to raise money for the village.  Our children were set the challenge of naming the chickens and researched appropriate African names.  The chosen names were:</p>
									<ul>
										<li>Ithemba meaning Hope</li>
										<li>Enkoko meaning sweet and delicious</li>
										<li>Chipo meaning gift</li>
										<li>Isoke meaning beautiful gift from God</li>
										<li>Sipho meaning gift</li>
										<li>Berg Lewe meaning mountain life</li>
										<li>Phillis made using the letters from Pound Hill Infant School</li>
										<li>Pik Pik meaning Peck Peck</li>
										<li>Jamila meaning beautiful</li>
										<li>Zeena meaning beautiful</li>
									</ul>
								<p>Our children also asked the children from the village to share their expertise in growing vegetables and running a garden.  This advice has been invaluable and our own vegetable garden is fully up and running in the Sensory Garden.</p>
							<h4>2009-2010</h4>
								<p>We raised money for the children’s Village.  Some of the money was used to build the Trauma Centre.  The building provides a safe place to sleep, eat and play.  The building has separate bedrooms, a bathroom and a physio area, ensuring every child’s needs are met.  This is a place they can call home and be part of a happy family.</p>
					</section>
					<section>
						<header>
							<h3>The right to learn</h3>
						</header>
							<h4>2010-2011</h4>
								<p>We sent over some school uniform.  All the children needed shoes otherwise they could not go to school.  We raised money for the Children’s Village, some of which was used to buy the children new shoes.</p>
							<h4>2011-2012</h4>
								<p>We raised money to buy the Ubombo Village's local school a photocopier.  The photocopier has meant the children can have their work pre-prepared for them, giving them more time learn.</p>
					</section>
					<section>
						<header>
							<h3>The right to be me</h3>
						</header>
							<h4>2009-2010</h4>
								<p>We sent the children booklets all about us.  We sent them pencils and empty books, and they wrote back to us.</p>
					</section>
					<section>
						<header>
							<h3>The right to be heard and the right to feel included</h3>
						</header>
							<h4>2009-2010</h4>
								<p>The children sent back booklets and photographs telling us all about them.</p>
					</section>
					<section>
						<header>
							<h3>The right to play and have friends</h3>
						</header>
							<h4>2011-2012</h4>
								<p>We have made a film all about our school and what we like to do.  Chris has taken the film to show the children and he is going to bring back a film about what they like to do and play.</p>
					</section>
						
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