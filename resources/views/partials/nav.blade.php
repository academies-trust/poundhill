<nav class="megaNavContainer col-md-12">
	<div class="container">

		<div class="navblahcollapse row">
			<ul class="nav col-md-12">
				<li class="mega-link col-md-2 text-center" data-name="about"><a>About Us</a></li>
				<li class="mega-link col-md-2 text-center" data-name="parents"><a>For Parents</a></li>
				<li class="mega-link col-md-2 text-center" data-name="news"><a>News and Events</a></li>
				<li class="mega-link col-md-2 text-center" data-name="learning"><a>Learning</a></li>
				<li class="mega-link col-md-2 text-center" data-name="further"><a>Further Info</a></li>
				<li class="col-md-2 text-center"><a href="#">SCLP Alliance</a></li>
			</ul>
		</div>
		<div id="nav-mega" class="container">
			<button class="btn btn-danger close-menu">close</button>
			<div class="nav-mega-menu col-md-12" data-name="about">
				<div class="nav-mega-menu-sub col-md-4">
					<h4>About</h4>
					<ul>
						<li><a href="{{ url('about/vision') }}">Academy Vision</a></li>
						<li><a href="{{ url('about/staff') }}">Meet Our Team</a></li>
						<li><a href="{{ url('about/aims') }}">Our Academy Charter</a></li>
						<li><a href="{{ url('about/safeguarding') }}">Safeguarding</a></li>
						<li><a href="{{ url('about/our-day') }}">Our Academy Day</a></li>
						<li><a href="{{ url('contact') }}">Contact Us</a></li>
					</ul>
				</div>
				<div class="nav-mega-menu-sub col-md-4">
					<h4>Community</h4>
					<ul>
						<li><a href="{{ url('community/governors') }}">Governors</a></li>
						<li><a href="{{ url('community/partnership') }}">Crawley School Partnership</a></li>
						<li><a href="{{ url('community/enhancing') }}">Enhancing the Curriculum</a></li>
						<li><a href="{{ url('community/coco') }}">Coco's Africa</a></li>
					</ul>
				</div>
				<div class="nav-mega-menu-sub col-md-4">
					<h4>Partners</h4>
					<ul>
						<li><a href="{{ url('partners/parents') }}">Parents and Volunteers</a></li>
						<li><a href="{{ url('partners/friends') }}">The Friends of Pound Hill</a></li>
						<li><a href="{{ url('partners/schoolmeeting') }}">The School Meeting</a></li>
					</ul>
				</div>
			</div>
			<div class="nav-mega-menu col-md-12" data-name="parents">
				<div class="nav-mega-menu-sub col-md-6">
					<h4>For Parents</h4>
					<ul>
						<li><a href="{{ url('parents/attendance') }}">Absence and Attendance</a></li>
						<!--<li><a href="{{url()}}/docs/parenthandbook.pdf" target="_blank">Parent Handbook</a></li>-->
						<li><a href="{{ url('parents/termdates') }}">Term Dates</a></li>
						<li><a href="{{ url('parents/uniform') }}">Uniform</a></li>
						<li><a href="{{ url('parents/food-and-drink') }}">Food and Drink</a></li>
						<li><a href="#">eSafety</a></li>
						<li><a href="#">Letters to Parents</a></li>
					</ul>
				</div>
				<div class="nav-mega-menu-sub col-md-6">
					<h4>Partners</h4>
					<ul>
						<li><a href="{{ url('partners/parents') }}">Parents and Volunteers</a></li>
						<li><a href="{{ url('partners/friends') }}">The Friends of Pound Hill Infant Academy</a></li>
						<li><a href="{{ url('partners/schoolmeeting') }}">The School Meeting</a></li>
					</ul>
				</div>
			</div>
			<div class="nav-mega-menu col-md-12" data-name="news">
				<div class="nav-mega-menu-sub col-md-6">
										<ul>
						<li><a href="{{ url('news/events') }}">After School Events/Clubs</a></li>
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
				<div class="nav-mega-menu-sub col-md-12">
					<h4>Curriculum</h4>
					<ul>
						<li><a href="#">Curriculum Overview</a></li>
						
						<!--<li><a href="{{ url('learning/library') }}">Library and Reading</a></li>-->
						<!--<li><a href="{{ url('learning/sport') }}">Sport</a></li>-->
						<!--<li><a href="">Inclusion</a></li>-->
						<!--<li><a href="{{ url('learning/growyourbrain') }}">Grow Your Brain!</a></li>-->
					</ul>
				</div>
				<!--
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
				-->
			</div>
			<div class="nav-mega-menu col-md-12" data-name="further">
				<div class="nav-mega-menu-sub col-md-4">
					<h4>Statutory Information</h4>
					<ul>
						<li><a href="{{ url('further/admissions') }}">Admissions</a></li>
						<li><a href="{{url()}}/docs/policies/Pupil Premium 2013-2014.pdf" target="_blank">Pupil Premium</a></li>
						<li><a href="{{url()}}/docs/policies/Sports Grant Report 2014-2015.pdf" target="_blank">Sports Premium</a></li>
						<li><a href="{{url()}}/docs/policies/ENE Policy 2014.pdf" target="_blank">SEND Offer</a></li>
					</ul>
				</div>
				<div class="nav-mega-menu-sub col-md-4">
					<h4>Performance</h4>
					<ul>
						<li><a href="http://reports.ofsted.gov.uk/inspection-reports/find-inspection-report/provider/ELS/125898" target="_blank">Ofsted</a></li>
						<li><a href="http://www.education.gov.uk/cgi-bin/schools/performance/school.pl?urn=125898" target="_blank">DFE Performance</a></li>
						<li><a href="http://dashboard.ofsted.gov.uk/dash.php?urn=125898" target="_blank">Data Dashboard</a></li>
						<li><a href="https://parentview.ofsted.gov.uk/" target="_blank">ParentView</a></li>
					</ul>
				</div>
				<div class="nav-mega-menu-sub col-md-4">
					<h4>Policies</h4>
					<ul>
						<li><a href="{{url()}}/docs/policies/charging.pdf" target="_blank">Charging Policy</a></li>
						<li><a href="{{url()}}/docs/policies/Child Protection.pdf" target="_blank">Child Protection</a></li>
						<li><a href="{{url()}}/docs/policies/Curriculum_policy.pdf" target="_blank">Curriculum Policy</a></li>
						<li><a href="{{ url('further/policies') }}">View All</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>