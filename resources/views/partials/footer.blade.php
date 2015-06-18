<div id="blind"></div>
<div class="container-fluid" id="footer">
	<div class="row">
		<footer class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-12">
					<h3>Contact us</h3>
					<address>
						<p><strong>Holmbush Primary Academy</strong><br />
						Hawkins Crescent<br />
						Shoreham-By-Sea<br />
						West Sussex<br / >
						BN43 6TN</p>
						<p><strong>Tel:</strong> 01273 592471</p>
						<p><strong>Email:</strong> <a href="mailto:office@holmbushprimaryacademy.org.uk">office@holmbushprimaryacademy.org.uk</a></p>
					</address>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 text-right">
					<h3>Quick Links</h3>
					<ul class="quicklinks">
						<li><a href="{{ url('contact') }}">Contact</a></li>
						<li><a href="https://www.brighton.ac.uk/academiestrust/how-we-work/working-for-us/index.aspx" target="_blank">Vacancies</a></li>
						<li><a href="https://login.microsoftonline.com/" target="_blank">Staff Email</a></li>
						<li><a href="https://holmbush.eschools.co.uk/login" target="_blank">Learning Platform</a></li>
						@if(Auth::check())
							<li><a href="{{url()}}/auth/logout">Log Out</a></li>
						@else
							<li><a href="{{url()}}/auth/login">Admin Log In</a></li>
						@endif
					</ul>
					<a href="https://twitter.com/HPS43" target="_blank"><img src="{{url()}}/img/elements/twitter.png?w=100&h=100&fit=crop"></a>
				</div>
			</div>
		</footer>
	</div>
</div>