@extends('app')

@section('hero')	
	<div class="hero">
				<img class="hero-image show" src='{{url()}}/img/heroes/pound-hil.png?w=1920&h=500&fit=crop'>
		<div class="container">
			<!--<div class="heroCaption col-md-4 col-sm-6">
				
				<h2><span class="glyphicon glyphicon-info-sign logo"></span>Little Learners Pre School!</h2>
				<p>We are currently seeking responses to our questionnaire about places needed for Pre School children. You can find details under <a href="{{ url('preschool') }}">Pre School</a>.</p>
				
				<h2><span class="glyphicon glyphicon-info-sign logo"></span>Holmbush Primary Academy Pre School</h2>
				<p>We want to hear what you think about our plans to accommodate a <a href="{{ url('http://www.holmbushprimaryacademy.org.uk/docs/letters/20150511~Pre%20School%20Consultation.pdf') }}">Pre School</a>. Have your say by filling out our <a href="{{ url('https://docs.google.com/forms/d/1vzoX5iFECidjX4Eg0lmBoJAwQeJLZwo6cfYrg1sA_sU/viewform') }}">questionnaire</a>.</p>
			</div>-->
		</div>
	</div>
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div class="row">
								<div class="col-md-8">

					
			<article>
				<header>
					<h1>Welcome to Pound Hill Infant Academy</h1>
				</header>
				<div class="row">
					<div class="col-md-12">
						<p><strong>We are a large infant school with 270 pupils, located in Crawley, West Sussex.  We aim to treat every child as an individual and provide a happy, welcoming, thriving environment.  We offer exciting learning experiences which have creativity at the heart, balancing the teaching of knowledge and skills, and encouraging innovation.  All our children are expected to be responsible members of their community, understanding and respecting everyone’s rights, different values and traditions, and playing an active role in the development of our school.   Our overall vision is that all members of our community are successful learners, responsible citizens, effective contributors and happy, confident individuals.</p>
						<footer>
							<h3>Miss Julie Knock-Bravery</h3>
							<h4>Principal</h4>
						</footer>
					</div>

				</div>
			</article>
			</div>
			<div class="col-md-4">
			<div class="sclp">
			<a href="#">
<img src="http://www.sclpalliance.org.uk/wp-content/themes/sclp/images/logo.png">
					<h1>The Southern Collaborative Learning Partnership (SCLP) Alliance</h1>
</a></div>
					
						</div>

			</div>
			<section class="news-container">
				<header>
					<h1>News and Events</h1>
				</header>
				<div class="row">
					<div class="col-md-4 news-block events-post">
						<section>
							<header class="text-center">
								<a href="#">
									<span class="glyphicon glyphicon-calendar"></span>
									<h4>Upcoming Events</h4>
								</a>
							</header>
							<div id="calendar">

							</div>
							
						</section>
					</div>
					

					<div class="col-md-8">
						<div class="row">
							<?php $counter = 0; ?>
							@foreach($news->news()->take(4) as $new)
								@if($counter == 0)
									<div class="row">
								@endif
								<div class="col-md-6 col-sm-6 news-block news-post">
									@if(Auth::check())
										<a href="{{URL::current()}}/about/news/{{$new->id}}/edit"><btn class="btn btn-default action">Edit</btn></a>
									@endif
									<figure>
										<a href="#">
											@if(is_null($new->featured) || $new->featured=="") 
												<img src="{{url()}}/img/generic/{{$news->getRandomImage()}}?w=350&h=250&fit=crop">
											@else
												<img src="{{url()}}/img/uploads/{{$new->id}}/{{$new->attachments()->find($new->featured)->filename}}?w=350&h=250&fit=crop">
											@endif
										</a>
									</figure>
									<header>
										<h4><a href="#">{{$new->title}}</a></h4>
										<h5 class="date pull-right">{{$difference = ($new->published_on->diff($now)->days < 1) ? 'today' : $new->published_on->diffForHumans()}}</h5>
										@if(Auth::check())
											@if(!is_null($new->deleted_at))
												<h5 class="date pull-right danger">deleted</h5>
											@else
												@if(!is_null($new->expires_on) && $new->expires_on < $now)
													<h5 class="date pull-right warning">expired</h5>
												@endif
											@endif
										@endif
									</header>
									@if(is_null($new->headline))
										{{substr($new->content, 0, 150)}}
									@else
										{{nl2br($new->headline)}}
									@endif
								</div>
								@if($counter == 1 || ($news->news()->last()->id == $new->id))
									</div>
								@endif
								<?php
									$counter++;
									if($counter == 2) {
										$counter = 0;
									}
								?>
							@endforeach
						</div>
						<a href="#"><button class="btn btn-primary pull-right btn-lg">View More News...</button></a>
					</div>
					<!--<a href="{{url()}}/about/news"><button class="btn btn-primary pull-right btn-lg">View More News...</button></a>-->
				</div>
				<div class="clear">
			</section>
		</div>
	</div>
</div>
<!--
<div class="container-fluid spacer accred">
	<div class="col-md-1 col-sm-1 col-xs-2 col-sm-offset-2 col-xs-offset-0 col-md-offset-2 text-center">
		<img src="{{url()}}/img/Logos/adur logo.png?w=80&h=80&fit=contain">
	</div>
	<div class="col-md-1 col-sm-1 col-xs-2 text-center">
		<img src="{{url()}}/img/Logos/bluesky.jpg?w=80&h=80&fit=contain">
	</div>
	<div class="col-md-1 col-sm-1 col-xs-2 text-center">
		<img src="{{url()}}/img/Logos/ecoschools_logo.jpg?w=80&h=80&fit=contain">
	</div>
	<div class="col-md-1 col-sm-1 col-xs-2 text-center">
		<img src="{{url()}}/img/Logos/international school award logo.jpg?w=150&h=80&fit=contain">
	</div>
	<div class="col-md-1 col-sm-1 col-xs-2 text-center">
		<img src="{{url()}}/img/Logos/logo_healthy_schools.gif?w=80&h=80&fit=contain">
	</div>
	<div class="col-md-1 col-sm-1 col-xs-2 text-center">
		<img src="{{url()}}/img/Logos/quality mark.jpg?w=80&h=80&fit=contain">
	</div>
	<div class="col-md-1 col-sm-1 col-xs-2 text-center">
		<img src="{{url()}}/img/Logos/school_food_trust.jpg?w=80&h=80&fit=contain">
	</div>
	<div class="col-md-1 col-sm-1 col-xs-2 text-center">
		<img src="{{url()}}/img/Logos/proud.jpg?w=80&h=80&fit=contain">
	</div>
</div>
-->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<header>
				<h1>Our Social Feed</h1>
			</header>
			@if(count($twitter))
				@foreach($twitter as $tweet)
					<div class="col-md-3 col-sm-3 col-xs-6 news-block twitter-box">
						<section>
							<img src="{{url()}}/img/elements/twitterbird.png?w=30" class="pull-left twitter-bird">
							<p><a href="https://twitter.com/Pound_Hill/status/{{$tweet->id_str}}" target="_blank">{{$tweet->text}}</a></p>
							<p class="small text-blue">{{$tweet->ago->diffForHumans()}}</p>
						</section>
					</div>
				@endforeach
			@else
				No current tweets
			@endif
		</div>
	</div>
</div>

@endsection
@section('scripts')
	<script src="{{url()}}/js/moment.min.js"></script>
	<script src="{{url()}}/js/underscore.min.js"></script>
	<script src="{{url()}}/js/clndr.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#calendar').clndr({
			template: $('#mini-clndr-template').html(),
			multiDayEvents: {
			    startDate: 'start',
			    endDate: 'end',
			    singleDay: 'date'
			},
			events: [
				@foreach($events as $num=>$event)
					@if($num == 0 || $event->title !== $events[$num - 1]->title)
						{
							title: '{{$event->title}}',
							@if($event->expires_on->diffInDays($event->published_on) > 1)
								 start: '{{$event->published_on->toDateString()}}', 
								 end: '{{$event->expires_on->toDateString()}}', 
							@else
								date: '{{$event->published_on->toDateString()}}',
							@endif
							@if($event->expires_on < $now || (is_null($event->expires_on) && $event->published_on < $now))
								status: 'historic',
							@endif
						},
					@endif
				@endforeach
			],
			ready: function() {
				if($('tr.historic').size() > 1) {
					$('#showHistoric').show();
				} else {
					$('#showHistoric').hide();
				}
			},
			clickEvents: {
				onMonthChange: function(month) {
					if($('tr.historic').size() > 1) {
						$('#showHistoric').show();
					} else {
						$('#showHistoric').hide();
					}
				},
			},
			weekOffset: 1,

		});
		$('#calendar').on('click', '#showHistoric', function() {
			$(this).hide();
			$('tr.historic').fadeIn();
		});
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
	<script id="mini-clndr-template" type="text/template">
		<% var dayCounter = 0; %>
		<div class="controls text-center">
          <div class="clndr-previous-button clndr-button h3 col-md-2">&lsaquo;</div><div class="month col-md-8 h3"><%= month %></div><div class="clndr-next-button clndr-button h3 col-md-2">&rsaquo;</div>
          <div class="clear"></div>
        </div>
		<div class="days-container">
          <table class="days table table-hover">
            <thead class="headers">
              <% _.each(daysOfTheWeek, function(day) { %><th class="day-header text-center"><%= day %></th><% }); %>
            </thead>
            <tbody>
            	<% _.each(days, function(day) { dayCounter++; if(dayCounter == 0) { %><tr><% } if(dayCounter == 8) { dayCounter = 1; %></tr><% } %><td class="<%= day.classes %> text-center
            		<%
		    			_.each(day.events, function(event){
		    				if(event.title.indexOf('HOLIDAY') > -1) {
		    					%>holiday<%
		    				}
		    			});
		    		%>
		    		" id="<%= day.id %>"><%= day.day %></td><% }); %>
            </tbody>
          </table>
        </div>
        <table class="table table-striped events-list-table">
			<tbody>
				<tr id="showHistoric" class="text-center">
					<td colspan="2"><a class="btn btn-link">Show Historic Events</a></td>
				</tr>
				 <% _.each(eventsThisMonth, function(event) { %>
					<tr <% if(event.status == 'historic') { %>class="historic"<% } %>>
						<td class="dateCell">
							<% if(event.end) { %>
								<span class="nowrap"><%= event.start %></span><span class="small"> to </span><br />
								<span class="nowrap"><%= event.end %></span>
							<% } else { %>
								<span class="nowrap"><%= event.date %></span>
							<% } %>
							
						</td>
						
						<td><%= event.title %></td>
						
					</tr>
				<% }); %>
			</tbody>
		</table>
	</script>
@endsection