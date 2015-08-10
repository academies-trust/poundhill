@extends('app')
@section('hero')
<div class="hero col-md-12">
	<img class="hero-image show" src='{{url()}}/img/heroes/ph-27-03-14-043_cr.jpg?w=1920&h=500&fit=crop'>
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
					<h1>Meet Our Team</h1>
				
				</header>
				<div class="col-md-12">
					
					
					<table class="staff_list">
						<tr>
							<td class="staff_category">Leadership Team</td>
							<td>
							Julie Knock-Bravery, <i class="text-maroon">Headteacher</i>
							<br>Amy Watson, <i class="text-maroon">Deputy Headteacher/Additional Needs Leader</i>
							<br>Joanna Brewis, <i class="text-maroon">Teaching School CPD and Lead Coach/Mentor</i>
							<br>Christina Delgado, <i class="text-maroon">Early Years Leader</i>
							<br>Sarah Stallard, <i class="text-maroon">Key Stage 1 Leader</i>
							<br>Georgina Masters, <i class="text-maroon">Director of Teaching School and Head of Resources</i>
							</td>
						</tr>
	<tr class="spacer"><td >&nbsp;</td></tr>
						<tr>
							<td class="staff_category">Teaching Staff</td>
							<td>
								Gemma Blackie
								<br>Karen Brown
								<br>Christina Delgado
								<br>Alison Hillebron
								<br>Beth Jolley
								<br>Rachael North
								<br>Jacqui Peace
								<br>Sarah Stallard
								<br>Anne-Marie Stewart
								<br>Heather Thorn
								<br>Louise Thwaite</td>
						</tr>
						<tr class="spacer"><td >&nbsp;</td></tr>
						<tr>
							<td class="staff_category">Office Staff</td>
							<td>Vanessa Gilbertson, <i class="text-maroon">Business Manager</i>
								<br>Sue Meyer, <i class="text-maroon">School Data Administrator</i>
								<br>Vacancy, <i class="text-maroon">Teaching School Administrator</i>
								<br>Janine Cox, <i class="text-maroon">Receptionist/Clerical Assistant</i>
							</td>
						</tr>
						<tr class="spacer"><td >&nbsp;</td></tr>
						<tr>
							<td class="staff_category">Pastoral Support</td>
							<td>Joy Bubb, <i class="text-maroon">Medical/Welfare Officer</i>
							<br>Shirley Cook, <i class="text-maroon">Play Therapist</i>
							</td>
						</tr>
						<tr class="spacer"><td >&nbsp;</td></tr>
						<tr>
							<td class="staff_category">Premises Manager</td>
							<td>Tony Adshead
							</td>
						</tr>
						<tr class="spacer"><td >&nbsp;</td></tr>
						<tr>
							<td class="staff_category">Higher Level Teaching Assistants</td>
							<td>Hilary Davis
							<br>Julie Millard
							<br>Lynne Sharp
							</td>
						</tr>
						<tr class="spacer"><td >&nbsp;</td></tr>
						<tr>
							<td class="staff_category">Teaching Assistants</td>
							<td>Mel Botting
							<br>Kate Hayward
							<br>Sue James
							<br>Julia Sepulveda
							</td>
						</tr>
						<tr class="spacer"><td >&nbsp;</td></tr>
						<tr>
							<td class="staff_category">Learning Support Assistants</td>
							<td>Jo Holmes
							<br>Christine Hook
							<br>Sharon Nelson
							<br>Jenny Oliver
							<br>Sarah Truss
							</td>
						</tr>
						<tr class="spacer"><td >&nbsp;</td></tr>
						<tr>
							<td class="staff_category">Midday Meals Supervisors</td>
							<td>Lyanne Messenger, <i class="text-maroon">Senior MDMS</i>
							<br>Emma Rengger, <i class="text-maroon">Senior MDMS</i>
							<br>Shireen Aamir
							<br>Caroline Bastin
							<br>Jan Beard
							<br>Claire Bedwell
							<br>Jaylan Byrne
							<br>Alix Dyos
							<br>Sue Edge
							<br>Sarah Gifford
							<br>Sarah Hunt
							<br>Chrissy Jenkins
							<br>Tracy Payne
							<br>Trudy Peel
							<br>Christina Price
							<br>Wendy Price
							<br>Lisa Prior
							<br>Emma Rengger
							<br>Jane Rice
							<br>Jane Rozier 
							</td>
						</tr>
						<tr class="spacer"><td >&nbsp;</td></tr>

				</table>
			</div>
		</article>
	</div>
</div>
</div>

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