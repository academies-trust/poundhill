@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_029.JPG?w=1920&h=500&fit=crop&crop=center'>
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
					<h1>eSafety</h1>
					<h2>Keeping your child safe on the internet - <span class="text-green">social networking sites</span></h2>
				</header>
					<p class="lead">The following advice on social networking should be read by all parents and guardians of students at Holmbush Primary.</p>
					<p><strong>With the ever changing nature of social networking and the potential for these sites to be used inappropriately we would urge parents to follow the guidelines as stated below:</strong></p>
						<ul>
							<li>Parents should not allow their children to access any social networking sites that allow anonymity. These sites can easily be abused. There are a number of applications that allow this and it is important that you as a parent keep up to date with such applications. Examples are ‘snapchat’ and ‘Ask FM’. The school will alert parents to any new applications that are brought to our attention.</li>
							<li>You should check your child's contact list on all of their devices and ensure that your child actually knows who all these contacts are. Do not allow them to have contact with anyone they do not know who operates under a pseudonym.</li>
							<li>If you discover that your child is being subjected to any abuse on one of these forums we advise that you keep a copy of the material and then remove all access to this forum immediately. This may require you removing access to all such applications and even temporarily removing the device from the child. Parents need to feel confident in taking such action to protect their child. This should be viewed as a protective measure not a punishment. Young people can be very severely affected emotionally by social network abuse.</li>
							<li>The school will refer any messages which either threaten the safety of particular students or contain pornographic pictures to the police for further action.</li>
						</ul>
					<p class="bg-success padding-x2">Unfortunately Holmbush Primary cannot police the Internet or protect your child from potential abuse through social networking. The school needs to be a neutral and safe place of learning for all students. Disputes arising in the community are not to be brought into school. We therefore ask that you please follow the advice given above. If you choose not to follow our recommendations then the school will not be able to help you to stop your child from being subject to abuse via social media sites.</p>
					<p class="bg-info padding-x2"><span class="glyphicon glyphicon-info-sign logo"></span> <a href="{{url()}}/docs/esafety leaflet.pdf" target="_blank">eSafety Leaflet</a></p>
					
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