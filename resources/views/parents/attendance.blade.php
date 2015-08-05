@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/headers/ph-27-03-14-031-SMILE.JPG?w=1920&h=500&fit=crop'>
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
					<h1>Absence and Attendance</h1>
				</header>
					<p>We believe that pupils can only take full advantage of their education if they attend school regularly and punctually. The Academy curriculum is carefully planned each day to ensure children receive rich and varied learning. A child misses valuable learning opportunities if they do not attend school regularly and on time. The learning they miss results in them having to spend time catching up, whilst persistent lateness or non-attendance could significantly disadvantage them throughout their school career.
					</p>
					<p>
					<strong>Please help us to ensure your child gets the best education possible by bringing them to school regularly and on time.</strong>
					<p>
					At the Academy we aim to:
					<ul>
					<li>promote excellent levels of school attendance and punctuality to ensure all children have the opportunity to achieve their full potential</li>
					<li>promote consistent practices and procedures</li>
					<li>identify and deal with problems, which may lead to non-attendance</li>
					</ul>
					</p>
					<h3>Arriving late to school</h3>
					<p>
					The Academy doors will open in the morning at:<br/>
					<strong>Early Years  8.30 am</strong><br/>
					<strong>Key Stage One  8.40 am</strong></p>
					<p>
					<strong>The doors will shut promptly at 8.45am and all children should be in their classroom ready to start learning at 8.50am.</strong> Any time after this will be recorded in the register as late. If a child arrives at school after 9.00am it will be recorded as unauthorised* in the register (see Unauthorised Absence). If a child is frequently late the parents/carers will be invited to a meeting with the Headteacher. All parents arriving late with their children after 8.45am will need to enter though the main Academy office and will be met by the Headteacher. * 10 or more unauthorised sessions (a morning is one session) will be referred to the EWO and could result in a fixed penalty fine.
					</p>
					<h3>Authorised Absence</h3>
					<h4>Absence due to illness</h4>
					<p>
					<strong>Please telephone the Academy on the first day of illness.</strong> All absences <strong>must</strong> be followed up with a written explanation. If no written notice is received it will be recorded as unauthorised. Children should not attend school for at least 48 hours if they have a sickness and/or have diarrhoea which is caused by a contagious bug. Such illnesses can spread quickly in the school environment.
					</p>
					<p>
					Whilst the Academy appreciates young children are often unwell registers are monitored regularly. If a child is viewed to be having a great deal of absences from school due to illness, parents/carers will be invited to a meeting with the Headteacher to discuss their child's health problems and offered advice on any additional help available. In cases of excessive absence due to illness, the Headteacher has the right to request a medical certificate before authorising any further absence (see unauthorised absence).
					</p>
					<h4>Absence due to medical appointments</h4>
					<p>					
					If possible doctor's/medical or dentist's appointments should be made outside of the Academy day. Please ensure the Academy is informed in advance by bringing the original appointment card/letter to the Academy office if your child needs time out of school for a medical or hospital appointment.
					</p>
					<h4>Applying for Absence from Learning due to religious beliefs.</h4>
					<p>
					If your Child is attending a religious festival or ceremony please request an Absence from Learning Form from the main Academy office. Only requests submitted in advance of the event and on the Academy Absence from Learning form will be considered by the Headteacher. Unfortunately the Academy cannot authorise family parties or meetings of a non-religious nature.
					</p>
					<h4>Applying for Absence from Learning</h4>
					<p>
					There is no legal entitlement to holidays during term time. Only unavoidable and exceptional circumstances will be considered for an authorised leave of absence during term time. The Academy will consider each request individually taking into account the circumstances. The Academy will request evidence to support this application, such as appointment letters, employer confirmation of holiday restrictions, confirmation of visa allocation date, etc. Please note that the submission of supporting evidence may not routinely mean a request will be authorised.
					</p>
					<p>
					All absences relating to a holiday not authorised in advance by the Headteacher will automatically be classed as an unauthorised absence. The Department of Education has advised schools that any absence for an unauthorised holiday of five consecutive days or more will lead to the issuing of a Fixed Penalty Notice to each parent/carer. All unauthorised holidays for longer durations could result in a child being removed from the school register, resulting in the parent having to reapply for a place at the school (where applicable, in popular schools this will be subject to the waiting list).
					</p>
					<h3>Unauthorised Absence</h3>
					<p>
					If the procedures outlined above and over the page are not followed this will result in a child receiving an unauthorised mark in the register. Both the Academy and the Local Authority (LA) take unauthorised absences very seriously. All unauthorised absences are reported to and followed up by the LA Education Welfare Services and could result in legal action, this could include a &pound;60 fixed penalty fine being issued to each parent/carer of a child obtaining ten or more days unauthorised absence during a school year.
					</p>
					<p>
					If a child is continuously absent from school for a period of twenty days without notification they could be removed from the school register, resulting in the parent having to reapply for a place at the school (where applicable, in popular schools this will be subject to the waiting list).
					</p>
					<p>
					<strong>No absences, even for unavoidable and exceptional circumstances will be authorised during the following periods:</strong>
					<br/>
					<ul>
					<li>All children - The first two weeks of the academic year</li>
					<li>
					All children in Year 2 - Spring half term (February) until Summer half term (May)
					</li>
					<li>
					All children in Years 1 and 2 - Phonics Screening Check week beginning 15 June 2015
					</li>
					</ul>
					<p>
					Essential preparations for, and the administration of, important assessments are planned for this time and therefore children who miss these learning opportunities and will be at a disadvantage.
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