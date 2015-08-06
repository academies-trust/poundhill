@extends('app')

@section('hero')
	<div class="hero col-md-12 nopad">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504.396214117663!2d-0.1539578!3d51.1195993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875f1bd0b213e05%3A0x4f01de22ed3c1a5f!2sPound+Hill+Infant+School!5e0!3m2!1sen!2suk!4v1438858850412" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
@endsection

@section('content')
<div class="container-fluid blue-container text-center">
</div>
<div class="container">
	<div class="row padding-x2">
		<div class="col-md-12">
			<article>
				<header>
					<h1>Contact Us</h1>
				</header>
			</article>
		</div>
		<div class="col-md-4">
			<h2><span class="glyphicon glyphicon-user text-green"></span> Main Contacts</h2>
			<p><span class="text-green"><b>Principal:</b></span> Miss Julie Knock-Bravery</p>
			<p><span class="text-green"><b>Director of Teaching School and Head of Resources:</b></span> Mrs Georgina Masters</p>
			<p><span class="text-green"><b>Office Administration Team:</b></span> Mrs J Cox and Mrs S Meyer</p>
		</div>
		<div class="col-md-4">
			<h2><span class="glyphicon glyphicon-home text-green"></span> Address</h2>
			<address>	
				<b>Pound Hill Infant Academy</b><br />
				Crawley Lane,<br />
				Pound Hill,<br />
				Crawley,<br />
				West Sussex,<br />
				RH10 7EB
			</address>
		</div>
		<div class="col-md-4">
			<h2><span class="glyphicon glyphicon-phone-alt text-green"></span> Phone &amp; Email</h2>
			<p><strong>Tel:</strong>  01293 873975</p>
			<p><strong>Email:</strong> <a href="mailto:office@blackthornsprimaryacademy.org.uk">office@phiacademy.org.uk</a></p>
			<p>All enquiries regarding <strong>SCLP Teaching School Alliance</strong> training courses should be sent to: <a href="mailto:sclptsabooking@poundhillinfant.org.uk">sclptsabooking@poundhillinfant.org.uk</a></p>
		</div>
	</div>
	<div class="row padding-x2 spacer">
		<div class="col-md-6">
			<h2><span class="glyphicon glyphicon-time"></span> Academy Office Hours <small class="text-green">8:00am - 4:00pm</small></h2>

		</div>
	</div>
	<div class="row padding-x2 spacer padding-bottom grey-container margin-bottom">
		<div class="col-md-12">
			<h2><span class="glyphicon glyphicon-pencil text-green"></span> Contact Form</h2>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<form class="form-horizontal" method="POST" action="{{url('contact')}}">
				<div class="form-group">
				    <label for="contact-name" class="col-sm-2">Your name</label>
				    <div class="col-sm-10">
				    	<input type="text" class="form-control" name="name" id="contact-name" placeholder="Please enter your name">
				    </div>
			  </div>
			  <div class="form-group">
			    <label for="contact-email" class="col-sm-2">Email address</label>
			     <div class="col-sm-10">
			    	<input type="email" class="form-control" name="email" id="contact-email" placeholder="Please enter your email address">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="contact-query" class="col-sm-2">Your query</label>
			     <div class="col-sm-10">
			    	<textarea class="form-control" rows="3" name="message" placeholder="What would you like to ask us?"></textarea>
			    </div>
			  </div>			
			  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">	 
			  <button type="submit" class="btn btn-default pull-right">Submit</button>
			</form>
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