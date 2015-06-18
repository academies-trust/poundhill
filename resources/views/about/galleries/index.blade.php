@extends('app')

@section('hero')	
	<div class="hero">
		<img class="hero-image show" src='{{url()}}/img/heroes/Education_Primary_086.JPG?w=1920&h=500&fit=crop'>
	</div>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header>
					<h1>Our Galleries</h1>
				</header>
				@if(Auth::check())
					<div class="row">
						<div class="col-md-12">
							<a href="{{url()}}/about/galleries/create"><span class="btn btn-primary">Add Gallery</span></a>
						</div>
					</div>
				@endif
				<?php $counter = 0; ?>
				@foreach($updates->galleries() as $gallery)
					@if($counter == 0)
						<div class="row spacer">
					@endif
					<div class="col-md-4 news-block news-post">
						@if(Auth::check())
							<a href="{{URL::current()}}/{{$gallery->id}}/edit"><btn class="btn btn-default action">Edit</btn></a>
						@endif
						<figure>
							<a href="{{url()}}/about/galleries/{{$gallery->id}}">
								@if(is_null($gallery->featured) || $gallery->featured=="") 
									<img src="{{url()}}/img/generic/{{$updates->getRandomImage()}}?w=350&h=250&fit=crop">
								@else
									<img src="{{url()}}/img/uploads/{{$gallery->id}}/{{$gallery->attachments()->find($gallery->featured)->filename}}?w=350&h=250&fit=crop">
								@endif
							</a>
						</figure>
						<header>
							<h4><a href="{{url()}}/about/galleries/{{$gallery->id}}">{{$gallery->title}}</a></h4>
							<h5 class="date pull-right">{{$difference = ($gallery->published_on->diff($now)->days < 1) ? 'today' : $gallery->published_on->diffForHumans()}}</h5>
							@if(Auth::check() && Auth::user()->can('access', $category))
								@if(!is_null($gallery->deleted_at))
									<h5 class="date pull-right danger">deleted</h5>
								@else
									@if(!is_null($gallery->expires_on) && $gallery->expires_on < $now)
										<h5 class="date pull-right warning">expired</h5>
									@endif
								@endif
							@endif
						</header>
						@if(is_null($gallery->headline))
							{{substr($gallery->content, 0, 150)}}
						@else
							{{nl2br($gallery->headline)}}
						@endif
					</div>
					@if($counter == 2 || ($updates->galleries()->last()->id == $gallery->id))
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