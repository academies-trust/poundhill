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
					<h1>Sports News</h1>
				</header>
				@if(Auth::check())
					<div class="row">
						<div class="col-md-12">
							<a href="{{url()}}/academylife/sports-news/create"><span class="btn btn-primary">Add Sports News</span></a>
						</div>
					</div>
				@endif
				<?php $counter = 0; ?>
				@foreach($updates->sports() as $new)
					@if($counter == 0)
						<div class="row spacer">
					@endif
					<div class="col-md-4 news-block news-post">
						@if(Auth::check())
							<a href="{{URL::current()}}/{{$new->id}}/edit"><btn class="btn btn-default action">Edit</btn></a>
						@endif
						<figure>
							<a href="{{url()}}/academylife/sports-news/{{$new->id}}">
								@if(is_null($new->featured) || $new->featured=="") 
									<img src="{{url()}}/img/generic/{{$updates->getRandomImage()}}?w=350&h=250&fit=crop">
								@else
									<img src="{{url()}}/img/uploads/{{$new->id}}/{{$new->attachments()->find($new->featured)->filename}}?w=350&h=250&fit=crop">
								@endif
							</a>
						</figure>
						<header>
							<h4><a href="{{url()}}/academylife/sports-news/{{$new->id}}">{{$new->title}}</a></h4>
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
					@if($counter == 2 || ($updates->sports()->last()->id == $new->id))
						</div>
					@endif
					<?php
						$counter++;
						if($counter == 3) {
							$counter = 0;
						}
					?>
				@endforeach
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection