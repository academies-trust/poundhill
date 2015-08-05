@extends('app')

@section('hero')
	<div class="hero col-md-12 nopad">
		<img class="hero-image show" src='{{url()}}/img/headers/ph-27-03-14-097.jpg?w=1920&h=500&fit=crop'>
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
					<h1>Uniform</h1>
				</header>

				<p>We work in partnership with <strong>Taylor Made Uniforms Ltd</strong>. They offer:</p>

				<ul>
				<li>
					Friendly efficient service offering good quality uniform at an affordable price
				</li>
				<li>
					Availability to visit to try on uniform before you purchase, by appointment only
				</li>
				<li>
					Free delivery to the Academy every Friday afternoon for you to collect from the office
				</li>
				<li>
					Free returns or exchange
				</li>
				<li>
					Online ordering system or by phone or email
				</li>
				<li>
					Flexible method of payment, credit or debit card, cash or cheque
				</li>
				</ul>
 
				<p>
					Further details on Taylor Made can be found by visiting their website <a href="www.taylormadeuniforms.co.uk" target="_blank">www.taylormadeuniforms.co.uk</a> or by contacting Zoe on either 01403 250644 or 0800 643 0712. Or email <a href="mailto:www.taylormadeuniforms.co.uk">taylormadeuniforms@hotmail.co.uk</a>
				</p>
				<p>
					<h3>Items available from the Academy office:</h3>
				</p>
				<p>
					<ul>
					<li>
					Bookbag with Academy logo &pound;4.00
					</li>
					<li>
					P.E. Bag with Academy name &pound;2.00
					</li>
					<li>
					Plain water bottle with coloured lid &pound;1.50
					</li>
					<li>
					Lid only &pound;0.50 (available in Red, Blue, Green or Yellow)
					</li>
					</ul>
					A Taylor Made Uniform Order Form is available from the Academy office.
				</p>
				<p>
					The Academy uniform colours are Maroon, Grey and White. 
				</p>
				<p>
					Children should wear grey trousers, shorts or skirts/pinafore dresses; these can be purchased in local supermarkets or department stores, with the maroon sweatshirt or cardigan with Academy badge and a white polo shirt, with or without an Academy badge. In the summer girls may wear pink checked gingham dresses. Footwear should be plain black shoes or plain black boots (with no loose attachments such as tassels). Please note high heels, open toes (even with socks) or strappy sandals are not permitted. No child should wear trainers, and they should always wear socks.
					</p>
				<p>
					<h3>P.E. Kit</h3>
					</p>
				<p>
					In Key Stage 1 (Yrs. 1 and 2) the Academy PE uniform is Maroon shorts and a plain white round neck t-shirt plus a pair of black plimsolls.
					</p>
				<p>
					Children in Early Years can bring in their own PE kit consisting of a pair of shorts and a t-shirt.
					</p>
				<p>
					As some of the P.E. lessons will take place outside (weather permitting) every child should also have a non-branded,non-logo tracksuit and a pair of plimsolls or lightweight trainers with velcro fastening as part of their P.E.kit.
				</p>
				<p>
					<strong>All PE kit/uniform should be kept in a PE bag on the child’s cloakroom peg.</strong>
				</p>
				<p>
					<h3>Jewellery</h3>
				</p>
				<p>
					The wearing of any jewellery at the Academy is considered unsuitable. Only stud earrings are permitted to be worn, however they are to be removed for P.E.
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