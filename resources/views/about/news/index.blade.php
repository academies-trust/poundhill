@extends('app')

@section('hero')	
	<div class="hero">
		<img class="hero-image show" src='{{url()}}/img/heroes/Education_Primary_018.JPG?w=1920&h=500&fit=crop'>
	</div>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header>
					<h1>News</h1>
				</header>
				@if(Auth::check())
					<div class="row">
						<div class="col-md-12">
							<a href="{{url()}}/about/news/create"><span class="btn btn-primary">Add News</span></a>
						</div>
					</div>
				@endif
				<?php $counter = 0; ?>
				<?php $offset = Input::get('offset') ? : 0;?>
				@foreach($updates->news()->forPage($offset+1, 6) as $new)
					@if($counter == 0)
						<div class="row spacer">
					@endif
					<div class="col-md-4 news-block news-post">
						@if(Auth::check())
							<a href="{{URL::current()}}/{{$new->id}}/edit"><btn class="btn btn-default action">Edit</btn></a>
						@endif
						<figure>
							<a href="{{url()}}/about/news/{{$new->id}}">
								@if(is_null($new->featured) || $new->featured=="") 
									<img src="{{url()}}/img/generic/{{$updates->getRandomImage()}}?w=350&h=250&fit=crop">
								@else
									<img src="{{url()}}/img/uploads/{{$new->id}}/{{$new->attachments()->find($new->featured)->filename}}?w=350&h=250&fit=crop">
								@endif
							</a>
						</figure>
						<header>
							<h4><a href="{{url()}}/about/news/{{$new->id}}">{{$new->title}}</a></h4>
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
					@if($counter == 2 || ($updates->news()->last()->id == $new->id))
						</div>
					@endif
					<?php
						$counter++;
						if($counter == 3) {
							$counter = 0;
						}
					?>
				@endforeach
				@if(Input::get('offset'))
					<a href="{{url()}}/about/news?offset={{max(($offset-1), 0)}}"><btn class="btn btn-default pull-right">Newer >></btn></a>
				@endif
				@if($updates->news()->count() > (6 + ($offset*6)))
					<a href="{{url()}}/about/news?offset={{($offset+1)}}"><btn class="btn btn-default"><< Older</btn></a>
				@endif
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<header>
					<h1 id="events">Events</h1>
				</header>
				
				<div class="news-block events-post">
					<section>
						<header class="text-center">
							<a href="{{url()}}/about/news#events">
								<span class="glyphicon glyphicon-calendar"></span>
								<h4>Upcoming Events</h4>
							</a>
						</header>
						<div id="calendar"></div>
					</section>
				</div>					
			</div>
			<div class="col-md-6">
				<header>
					<h1 id="twitter">Twitter</h1>
				</header>
				<div class="twitter-container">
					<section>
						<header class="text-center">
							<a href="https://twitter.com/HPS43" target="_blank">
								<img class="twitter-bird" src="{{url()}}/img/elements/twitterbird.png">
								<h4>@HPS43</h4>
							</a>
						</header>
						<table class="table table-striped">
							<tbody>
								@if(count($twitter))
									@foreach($twitter as $tweet)
										<tr>
											<td class="">
												<strong class="nowrap">{{$tweet->ago->diffForHumans()}}</strong>
											</td>
											<td class="wide-col">
												<a href="https://twitter.com/HPS43/status/{{$tweet->id_str}}" target="_blank">{{$tweet->text}}</a>
											</td>
										</tr>
									@endforeach
								@else
									No current tweets
								@endif
							</tbody>
						</table>
					</section>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script src="{{url()}}/js/moment.min.js"></script>
	<script src="{{url()}}/js/underscore.min.js"></script>
	<script src="{{url()}}/js/clndr.min.js"></script>
	<script>
		$(document).ready(function(){
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
						console.log(events);
					},
				},
				weekOffset: 1,

			});
			$('#calendar').on('click', '#showHistoric', function() {
				$(this).hide();
				$('tr.historic').fadeIn();
			});
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
		    	<% _.each(days, function(day) {
		    		dayCounter++; if(dayCounter == 0) { %><tr><% } if(dayCounter == 8) { dayCounter = 1; %></tr><% } %><td class="<%= day.classes %> text-center
		    		<%
		    			_.each(day.events, function(event){
		    				if(event.title.indexOf('HOLIDAY') > -1) {
		    					%>holiday<%
		    				}
		    			});
		    		%>
		    		" id="<%= day.id %>"><%= day.day %></td><% 
		    	}); %>
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
								<% console.log(event.end - event.start) %>
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