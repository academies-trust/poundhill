@extends('app')

@section('hero')
	<div class="hero col-md-12 nopad">
		<img class="hero-image show" src='{{url()}}/img/headers/ph-27-03-14-057.JPG?w=1920&h=500&fit=crop'>
	</div>
@endsection

@section('content')
<div class="container-fluid blue-container text-center">
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<article class="padding-x2">
				<header>
					<h1>Food and Drink</h1>
				</header>
				
				<p>
				In the Foundation Stage the children are given a range of fruits and vegetables to share as part of their daily snack routine. In Years One and Two the children are offered a piece of fruit as part of the Governments’ Healthy Eating Scheme. Sweets, chocolate, fizzy drinks and nuts are not suitable as a snack and must not be brought to school.
				</p>
				<h2>Lunchtimes</h2>
				<p>
				From September 2014 all children in Reception, Year 1 and 2 will receive a free hot school meal each day For more information on menus etc. please go to the Chartwells’ website - <a href="www.mealselector.co.uk" target="_blank">www.mealselector.co.uk</a>
				</p>
				<p>
				If you prefer your child to have a packed lunch please let the school office know a.s.a.p. to prevent an excess of wasted cooked food! If your child does bring in their own lunch please ensure you choose a lunchbox and flask that your child can manage to open themselves.  You know your child’s appetite best but please try not to overdo it.
				</p>
				<h2>Free School Meals and Pupil Premium</h2>
				<h4>IMPORTANT INFORMATION</h4>
				<p><strong>PLEASE HELP YOUR SCHOOL CLAIM IMPORTANT ADDITIONAL FUNDING</strong></p>
				<p>
				Every school is able to claim significant additional funding of at least £1900 per pupil, known as pupil premium funding, if you meet the criteria set out on the attached application form.  If you think you may be eligible for pupil premium funding please complete the attached form.  
				</p>
				<p>
				Even if you are not sure whether you qualify, complete the application form and we will find out for you on your behalf.  Please help your school to claim every penny we are entitled so that we can provide the very best education for your children. All forms will be treated as confidential.
				</p>
				<p>
				If you require any assistance or have any questions please do not hesitate to contact the team in the main school office. 
				</p>
				<h4>Milk</h4>
				<p>
				You can also order daily milk for your child from Cool Milk. The milk is completely free for all children that are under-five and/or registered for free school meals, and is subsidised for children aged five or older. Just register at <a href="www.coolmilk.com" target="_blank">www.coolmilk.com</a> or complete a registration form available from the school office.
				</p>
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