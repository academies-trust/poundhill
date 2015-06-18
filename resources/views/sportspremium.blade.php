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
					<h1>Sports Premium</h1>
					<h2 class="text-green">How are we spending our Schools sports funding</h2>
				</header>	
					<p class="lead text-green">P.E. and school sport play a very important part in the life of Holmbush Primary Academy. We are therefore delighted to be able to use the sports premium funding to support the development of P.E. and school sport in the following ways:</p>
					<dl>
						<dt>Aim to raise children’s fitness levels</dt>
							<dd>Five a day fitness subscription so all children spend 5 minutes per day in continuous physical activity increasing their heart rate.</dd>  
							<dd>Zumba coach working with children in Yrs 1 &amp; 6 to develop their gross motor skills, co-ordination and rhythm whilst raising their fitness levels.</dd>
						<dt>Aim to improve the quality of teaching and learning in PE</dt>
							<dd>Qualified sports apprentice to work with teachers during PE lessons, organise physical activities during Early Bird, break times and lunch and support coaching teams to participate in school competitions.</dd> 
							<dd>New medium term maps and games units tailored to Holmbush Primary Academy and the new PE curriculum by Activ8.</dd> 
							<dd>Brighton Surf Lifesaving Club to teach some surf lifesaving skills and knowledge of how to be safe on the beach to the older pupils.</dd> 
						<dt>Aim to provide opportunities for competitive sports within our school cluster</dt> 
							<dd>Part of the School Sport Coordinator Project with Cluster schools.</dd> 
						<dt>Aim to encourage children who do not often participate in after school clubs to experience new sports</dt> 
							<dd>New climbing wall after school club set up at Adur Outdoor Activity Centre enabling children to achieve Level 1 Foundation Climber Award.</dd> 
							<dd>New tennis club after school club set up with a professional tennis coach.</dd>
					</dl>
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