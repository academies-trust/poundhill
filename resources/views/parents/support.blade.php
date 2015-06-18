@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_048.JPG?w=1920&h=500&fit=crop&crop=center'>
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
					<h1>Support for parents and carers</h1>
					<h2>Great web links:</h2>
				</header>
					<ul>
						<li><a href="http://www.easyfundraising.org.uk/find-a-cause/?q=holmbush+primary+school" target="_blank">Help raise money for the school by just surfing the net</a></li>
						<li><a href="http://www.bbc.co.uk/schools/parents/primary_support/" target="_blank">Parents, support your childs education</a></li>
						<li><a href="http://www.parentsintouch.co.uk/" target="_blank">Parents in touch</a></li>
						<li><a href="http://collinsbigcat.com/apps" target="_blank">Free reading apps for your iPad</a></li>
						<li><a href="http://www.e-pd.org.uk/" target="_blank">e-PD - Learn new skills</a></li>
						<li><a href="http://www.schoolmoney.co.uk/public/school_money/index.html.nc" target="_blank">SchoolMoney - Payments made easy</a></li>
						<li><a href="http://www.vodafone.com/content/parents.html" target="_blank">Digital Parenting - e-safety</a></li>
						<li><a href="http://www.empoweringparents.com/video-games-violence.php#" target="_blank">Empowering Parents - Video games and violence</a></li>
					
					<p class="bg-info padding-x2 spacer"><span class="glyphicon glyphicon-info-sign logo"></span> <a href="{{url()}}/docs/parents/Behaviour_and_Rewards.pdf" target="_blank">Behaviour and Rewards</a></p>
					<p class="bg-success padding-x2"><span class="glyphicon glyphicon-info-sign logo"></span> <a href="{{url()}}/docs/parents/Ready_to_Learn_Every_day.pdf" target="_blank">Ready to Learn Every Day</a></p>
					<p class="bg-info padding-x2"><span class="glyphicon glyphicon-info-sign logo"></span> <a href="{{url()}}/docs/parents/Ready_to_Learn_Every_day_Praise_and_Reward.pdf" target="_blank">Ready to Learn Every Day - Praise and Reward</a></p>
					<p class="bg-success padding-x2"><span class="glyphicon glyphicon-info-sign logo"></span> <a href="{{url()}}/docs/parents/Ready_to_Learn_Every_day_Self_Worth.pdf" target="_blank">Ready to Learn Every Day - Self Worth</a></p>
					<p class="bg-info padding-x2"><span class="glyphicon glyphicon-info-sign logo"></span> <a href="{{url()}}/docs/parents/SRE_Scheme.pdf" target="_blank">Sex and Relationships Education Scheme</a></p>
					<p class="bg-success padding-x2"><span class="glyphicon glyphicon-info-sign logo"></span> <a href="{{url()}}/docs/policies/Encouraging Good Behaviour.pdf" target="_blank">Encouraging Good Behaviour</a></p>
					<p class="bg-info padding-x2"><span class="glyphicon glyphicon-info-sign logo"></span> <a href="{{url()}}/docs/parents/attendance facts.pdf" target="_blank">Attendance Facts</a></p>
					<p class="bg-success padding-x2"><span class="glyphicon glyphicon-info-sign logo"></span> <a href="{{url()}}/docs/parents/Education_Acronyms.pdf" target="_blank">Education Acronyms</a></p>
					<p class="bg-info padding-x2"><span class="glyphicon glyphicon-info-sign logo"></span> <a href="{{url()}}/docs/free school meals.pdf" target="_blank">Free School Meals</a></p>
					<p class="bg-success padding-x2"><span class="glyphicon glyphicon-info-sign logo"></span> <a href="{{url()}}/docs/parents/school inspections.pdf" target="_blank">School Inspections - A Guide For Parents</a></p>
					
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