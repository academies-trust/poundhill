@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_042.JPG?w=1920&h=500&fit=crop'>
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
					<h1>Tuck Shop</h1>
				</header>
					<h2>Meet the Tuck Shop Team!</h2>
					<p class="lead text-green">We have started running our own Tuck Shop.</p>
					<p class="bg-info padding-x2"><span class="glyphicon glyphicon-info-sign logo"></span>Opening Times: First Break – 10.15am – 10.30am</p>
					<p>Children from Year 5 and 6 have this set up just like a 'real' business.  They set up, take inventories, sell the products and cash up. Through this, they are learning about budgeting, calculating money and keeping their customers happy!</p>
					<figure class="pull-right padding-x2"><img src="{{url()}}/img/page-specific/tuckshop.jpg?w=350&h=270&fit=crop"></figure>
					<p>Come to our tremendous Tuck Shop where you can get fun fruit, yummy yoghurts, fab Fruit Whinders, gorgeous Go Ahead bars, marvellous milkshakes, radical raisins, cheeky cereal bars/rice crispy bars plus much more!</p>
					<p><strong>Prices range from as little as 20p and no more than 50p (yes, we do give change!).</strong></p>
					<p>Children may buy one food selection and one drink.</p>
					<p>Alfie L ‘I think that Tuck Shop is a great idea because if you’re ever a bit hungry there is one cheap place to be...Tuck Shop!’</p>
					<p>Joe L ‘I think that Tuck Shop is good because Year 5 &amp; 6 get their own little job during break. I also think that it’s good that the people that run the Tuck Shop have given up their first break to help you.’</p>
					<h4 class="text-green">Please come to our fantastic Tuck Shop.</h4>
						<ul>
							<li>Yazoo Milkshakes - 50p</li>
							<li>Aqua Juice Cartons - 30p</li>
							<li>Fruit Winders - 35p</li>
							<li>A range of breakfast bars - 35p</li>
							<li>A range of cereal bars - 25p</li>
							<li>Dried/fresh fruit - 20p</li>
							<li>Scott and Southwell Specials - 25p</li>
							<li>We vary the products we offer to try to cater for different tastes and offer the children a range of choices.</li>
						</ul>
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