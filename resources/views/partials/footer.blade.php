<div id="blind"></div>
<div class="container-fluid" id="stream">
	Insert H Two Ooooooooooh-yeah!
</div>
<div class="container-fluid" id="footer">
	<div class="row">
		<footer class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-12">
					<h3>Contact us</h3>
					<address>
						<p><strong>Pound Hill Infant Academy</strong><br />
						Crawley Lane<br />
						Pound Hill<br />
						Crawley<br />
						West Sussex<br / >
						RH10 7EB</p>
						<p><strong>Tel:</strong> 01293 873975</p>
						<p><strong>Email:</strong> <a href="mailto:office@poundhillinfantacademy.org.uk">office@poundhillinfantacademy.org.uk</a></p>
					</address>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 text-right">
					<h3>Quick Links</h3>
					<ul class="quicklinks">
						<!--<li><a href="{{ url('contact') }}">Contact</a></li>-->
						<li><a href="#">Contact</a></li>
						<li><a href="https://www.brighton.ac.uk/academiestrust/how-we-work/working-for-us/index.aspx" target="_blank">Vacancies</a></li>
						<!--<li><a href="https://login.microsoftonline.com/" target="_blank">Staff Email</a></li>-->
						<li><a href="http://poundhillinfant.eschools.co.uk/" target="_blank">Learning Platform</a></li>
						@if(Auth::check())
							<li><a href="{{url()}}/auth/logout">Log Out</a></li>
						@else
							<!--<li><a href="{{url()}}/auth/login">Admin Log In</a></li>-->
							<li><a href="#">Admin Log In</a></li>
						@endif
					</ul>
					<a href="https://twitter.com/uniofbrighton" target="_blank"><img src="{{url()}}/img/elements/twitter.png?w=100&h=100&fit=crop"></a>
				</div>
			</div>
		</footer>
	</div>
</div>