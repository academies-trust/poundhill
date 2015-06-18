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
					<h1>Safeguarding</h1>
				</header>
				<div class="col-md-12">
					<h2>Safeguarding Statement</h2>
					<p><strong><span class="text-green">At Holmbush Primary School we are fully committed to safeguarding.</span> </strong></p>
					<h3>Please find our Safeguarding Statement detailed below.</h3>
					<p>At Holmbush Primary School we are committed to inspiring, challenging and safeguarding our children and enabling them to become:</p>
						<ul>
							<li>Successful learners who enjoy learning, make progress and achieve</li>
							<li>Confident individuals who are able to live safe, healthy and fulfilling lives</li>
							<li>Responsible citizens who make a socially and economically positive contribution to society</li>
							<li>We are fully committed to ensuring that consistent effective safeguarding procedures are in place to support families, children and staff at school.  All concerns are passed through the members of staff who are trained as 'Designated Child Protection Officers' in school in compliance with the 'sharing of information' guidance.</li>
						</ul>
					<h5 class="text-green">Cause for Concern</h5>
					<p>All staff are asked to report any causes for concern to the Designated Child Protection Officers using a written proforma.  Any concerns will be shared with parents/carers as early as possible as more often than not there are extremely reasonable explanations for the concern.  Concerns may range from children being visibly upset to persistent lateness to children 'disclosing' concerns.</p>
					<h5 class="text-green">Support for Families - Common Assessment Framework (CAF)</h5>
					<p>A CAF is a means for families to access a range of support from a range of agencies other than school.  This process is used as a supportive measure.  A CAF will be considered when the support of a number of agencies, which may or may not include school, is required to better safeguard the interests of a child.</p>
					<h5 class="text-green">Female Genital Mutilation</h5>
					<p>Female Genital Mutilation is a practice carried out in some cultures.  It is illegal in this country.  The school has a duty of care to all the children to ensure that this practice does not occur.  If we are concerned that an absence may be used for this practice we will ask for a meeting with parents/carers and, if necessary, we will refer to Social Care as this is a serious child protection issue.</p>
					<p class="bg-info padding-x2"><span class="glyphicon glyphicon-info-sign logo"></span><strong>For more information please read our <a href="{{url()}}/docs/policies/Safeguarding.pdf" target="_blank">Safeguarding</a> and <a href="{{url()}}/docs/policies/Child Protection.pdf" target="_blank">Child Protection</a> policies.</strong></p>
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