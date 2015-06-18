<nav class="megaNavContainer col-md-12">
	<div class="container">

		<div class="navblahcollapse row">
			<ul class="nav col-md-12">
				<li class="mega-link col-md-2 text-center" data-name="about"><a>About Us</a></li>
				<li class="mega-link col-md-2 text-center" data-name="parents"><a>For Parents</a></li>
				<li class="mega-link col-md-2 text-center" data-name="life"><a>Our Academy Life</a></li>
				<li class="mega-link col-md-2 text-center" data-name="learning"><a>Learning</a></li>
				<li class="mega-link col-md-2 text-center" data-name="further"><a>Further Info</a></li>
				<li class="col-md-2 text-center"><a href="{{ url('preschool') }}">Pre School</a></li>
			</ul>
		</div>
		<div id="nav-mega" class="container">
			<button class="btn btn-danger close-menu">close</button>
			<div class="nav-mega-menu col-md-12" data-name="about">
				<div class="nav-mega-menu-sub col-md-6">
					<h4>About</h4>
					<ul>
						<li><a href="{{ url('about/about') }}">About</a></li>
						<li><a href="{{ url('about/aims') }}">Aims and Vision</a></li>
						<li><a href="{{ url('about/safeguarding') }}">Safeguarding</a></li>
						<li><a href="{{ url('about/news') }}">News and Events</a></li>
						<li><a href="{{ url('about/galleries') }}">Galleries</a></li>
					</ul>
				</div>
				<div class="nav-mega-menu-sub col-md-6">
					<h4>Community</h4>
					<ul>
						<li><a href="{{ url('community/ourcommunity') }}">Our Community</a></li>
						<li><a href="{{ url('community/ptfa') }}">PTFA</a></li>
						<li><a href="{{ url('community/governors') }}">Governors</a></li>
					</ul>
				</div>
			</div>
			<div class="nav-mega-menu col-md-12" data-name="parents">
				<div class="nav-mega-menu-sub col-md-6">
					<h4>For Parents</h4>
					<ul>
						<li><a href="{{ url('parents/attendance') }}">Absence and Attendance</a></li>
						<li><a href="{{url()}}/docs/parenthandbook.pdf" target="_blank">Parent Handbook</a></li>
						<li><a href="{{url()}}/docs/termdates.pdf" target="_blank">Term Dates</a></li>
						<!--<li><a href="">Uniform</a></li>-->
						<li><a href="{{ url('parents/esafety') }}">eSafety</a></li>
						<li><a href="{{ url('parents/support') }}">Support for Parents and Carers</a></li>
						<li><a href="{{ url('parents/letters') }}">Letters to Parents</a></li>
						<li><a href="{{ url('community/ptfa') }}">PTFA</a></li>
					</ul>
				</div>
			</div>
			<div class="nav-mega-menu col-md-12" data-name="life">
				<div class="nav-mega-menu-sub col-md-6">
					<h4>The Academy Day</h4>
					<ul>
						<!--<li><a href="">Our Day</a></li>-->
						<li><a href="{{ url('academylife/catering') }}">Catering &amp; Healthy Schools</a></li>
						<li><a href="{{ url('academylife/tuckshop') }}">Tuck Shop</a></li>
					</ul>
				</div>
				<div class="nav-mega-menu-sub col-md-6">
					<h4>Extra Curricular</h4>
					<ul>
						<li><a href="{{ url('academylife/sports-news') }}">Sports News</a></li>
						<li><a href="{{ url('academylife/music') }}">Music Lessons</a></li>
						<li><a href="{{url()}}/docs/summer clubs.pdf" target="_blank">Summer Clubs</a></li>
			
					</ul>
				</div>
			</div>
			<div class="nav-mega-menu col-md-12" data-name="learning">
				<!--<div class="nav-mega-menu-sub col-md-4">
					<h4>Classes</h4>
					<ul>
						<li><a href="">EYFS - Klee</a></li>
						<li><a href="">Year 1 - Kandinsky</a></li>
						<li><a href="">Year 2 - Picasso</a></li>
						<li><a href="">Year 3 - Van Gogh</a></li>
						<li><a href="">Year 4 - Hepworth</a></li>
						<li><a href="">Year 5 - Lowry</a></li>
						<li><a href="">Year 6 - O'Keeffe</a></li>
					</ul>
				</div>-->
				<div class="nav-mega-menu-sub col-md-4">
					<h4>Curriculum</h4>
					<ul>
						<li><a href="{{ url('learning/curriculumoverview') }}">Curriculum Overview</a></li>
						<li><a href="{{ url('learning/library') }}">Library and Reading</a></li>
						<li><a href="{{ url('learning/sport') }}">Sport</a></li>
						<!--<li><a href="">Inclusion</a></li>-->
						<li><a href="{{ url('learning/growyourbrain') }}">Grow Your Brain!</a></li>
					</ul>
				</div>
				<div class="nav-mega-menu-sub col-md-4">
					<h4>Assessment</h4>
					<ul>
						<li><a href="{{ url('learning/assessmentnolevels') }}">Assessment Without Levels</a></li>
						<li><a href="{{url()}}/docs/Assessment_for_Learning.pdf" target="_blank">Assessment for Learning</a></li>
						<li><a href="{{ url('learning/everychild') }}">Every Child's Needs</a></li>
					</ul>
				</div>
				<div class="nav-mega-menu-sub col-md-4">
					<h4>For Pupils</h4>
					<ul>
						<li><a href="http://www.bugclub.co.uk/" target="_blank">Bug Club</a></li>
					</ul>
				</div>
			</div>
			<div class="nav-mega-menu col-md-12" data-name="further">
				<div class="nav-mega-menu-sub col-md-4">
					<h4>Statutory Information</h4>
					<ul>
						<li><a href="{{ url('further/admissions') }}">Admissions</a></li>
						<li><a href="{{url()}}/docs/policies/pupil premium.pdf" target="_blank">Pupil Premium</a></li>
						<li><a href="{{ url('sportspremium') }}">Sports Premium</a></li>
						<li><a href="{{url()}}/docs/policies/Local Offer.pdf" target="_blank">SEND Offer</a></li>
					</ul>
				</div>
				<div class="nav-mega-menu-sub col-md-4">
					<h4>Performance</h4>
					<ul>
						<li><a href="http://reports.ofsted.gov.uk/inspection-reports/find-inspection-report/provider/ELS/125908" target="_blank">Ofsted</a></li>
						<li><a href="http://www.education.gov.uk/cgi-bin/schools/performance/school.pl?urn=125908" target="_blank">DFE Performance</a></li>
						<li><a href="http://dashboard.ofsted.gov.uk/dash.php?urn=125908" target="_blank">Data Dashboard</a></li>
						<li><a href="https://parentview.ofsted.gov.uk/" target="_blank">ParentView</a></li>
					</ul>
				</div>
				<div class="nav-mega-menu-sub col-md-4">
					<h4>Policies</h4>
					<ul>
						<li><a href="{{url()}}/docs/policies/charging.pdf" target="_blank">Charging Policy</a></li>
						<li><a href="{{url()}}/docs/policies/Encouraging Good Behaviour.pdf" target="_blank">Encouraging Good Behaviour</a></li>
						<li><a href="{{ url('further/policies') }}">View All</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>