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
					<h3>Below is a list of all staff at Pound Hill Infant Academy.</h3>
				</header>
				<div class="col-md-12">
					
					
					<table class="staff_list">
						<tr>
							<td class="staff_category">Leadership Team</td>
							<td>
							Julie Knock-Bravery, Headteacher
							<br>Amy Watson, Deputy Headteacher/Additional Needs Leader
							<br>Joanna Brewis, Teaching School CPD and Lead Coach/Mentor
							<br>Christina Delgado, Early Years Leader
							<br>Sarah Stallard, Key Stage 1 Leader
							<br>Georgina Masters, Director of Teaching School and Head of Resources
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
							<td>Vanessa Gilbertson, Business Manager
								<br>Sue Meyer, School Data Administrator
								<br>Vacancy, Teaching School Administrator
								<br>Janine Cox, Receptionist/Clerical Assistant
							</td>
						</tr>
						<tr class="spacer"><td >&nbsp;</td></tr>
						<tr>
							<td class="staff_category">Pastoral Support</td>
							<td>Joy Bubb, Medical/Welfare Officer
							<br>Shirley Cook, Play Therapist
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
							<td>Lyanne Messenger, Senior MDMS
							<br>Emma Rengger, Senior MDMS
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