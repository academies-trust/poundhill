@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/heroes/ph-27-03-14-001.jpg?w=1920&h=500&fit=crop'>
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
					<h1>Crawley School Partnership and the SCLP Teaching School Alliance</h1>
				</header>
				<div class="col-md-12">
					<div>
					<h3>Crawley School Partnership</h3>
					<p>We work closely, in partnership with other schools in Crawley.  In particular we have worked in close partnership with Pound Hill Junior School, Maidenbower Infant School, The Brook School, Maidenbower Junior School and Oriel High School.  Projects and initiatives include Rights Respecting School, Forest School, Learning Outside, Gifted and Talented, provision for children with SEND.</p>
					</div>
					<div class="clear"></div>
				<header>
					<h3>SCLP Teaching School Alliance</h3>
				</header>
					<p>The SCLP Alliance is a non-profit making organisation run by schools for schools.  We are a collective of like-minded schools who are committed to developing high quality, cost effective professional development for all staff.  We are based in West Sussex and were awarded the status in March 2013 by the National College of Teaching and Learning/Department for Education.  Our ultimate aim is to work in trusting partnerships having a sustained impact, ensuring consistently good and better outcomes for all children.  The SCLP Alliance is committed to creating opportunities to innovate, inspire and transform through a collaborative partnership based on trust, respect and integrity.</p>
					<p class="lead">Our strategic partner schools include:</p>
					<ul>
						<li>Pound Hill Infant School – Crawley – Lead School</li>
						<li>Birchwood Grove Primary – Burgess Hill</li>
						<li>The Brook – Crawley</li>
						<li>Maidenbower Infant  – Crawley</li>
						<li>Maidenbower Junior – Crawley</li>
						<li>Manor Green Primary (Special school) – Crawley</li>
						<li>Oriel High – Crawley</li>
						<li>University of Brighton</li>
					</ul>
					<p>With many other partner schools working with us in Crawley and the surrounding areas. To find out more visit our <a href="http://www.sclpalliance.org.uk/" target="_blank">website</a>.</p>
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