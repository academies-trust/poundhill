@extends('app')

@section('hero')	
	<div class="hero">
		<img class="hero-image show" style="background-image: url('{{url()}}/img/heroes/IMG_8443.JPG?w=1920&h=500&fit=crop')">
	</div>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header>
					<div>
						@if(Auth::check() && Auth::user()->can('access', $update->category))
							<a href="{{URL::current()}}/edit"><btn class="btn btn-default pull-right">Edit</btn></a>
						@endif
						<a href="{{url()}}/about/news#events"><btn class="btn btn-link pull-left"><< back</btn></a>
						<h1>Events</h1>
						<div class="clear"></div>
					</div>
					<h2>{{$update->title}}</h2>
					<h3>
						{{$difference = ($update->published_on->diff($now)->days < 1) ? 'Today' : $update->published_on->diffForHumans()}}
						@if(!is_null($update->expires_on))
							<span class="small">to </span>
							{{$update->expires_on->format('l jS \\of F')}}
						@endif
					</h3>
				</header>
				@if(Auth::check())
					@if(!is_null($update->deleted_at))
						<h5 class="btn btn-danger pull-right">deleted {{$update->deleted_at->diffForHumans()}}</h5>
					@else
						@if(!is_null($update->expires_on) && $update->expires_on < $now)
							<h5 class="btn btn-danger pull-right">expired {{$update->expires_on->diffForHumans()}}</h5>
						@endif
					@endif
				@endif
				<p><strong>{{$update->headline}}</strong></p>
				<p>{{nl2br($update->content)}}
				<div class="row">
					@if($update->attachments())
						@foreach($update->attachments()->get() as $attachment)
							<div class="col-md-3 text-center spacer">
								@if(strtolower($attachment->type) == 'jpg' || strtolower($attachment->type) == 'png')
									<a href="{{url()}}/img/uploads/{{$update->id}}/{{$attachment->filename}}" class="gallery" rel="news">
										<img src="{{url()}}/img/uploads/{{$update->id}}/{{$attachment->filename}}">
									</a>
								@else
									<a href="{{url()}}/attachments/{{$update->id}}/{{$attachment->filename}}">
										<span class="glyphicon glyphicon-paperclip gi-x3"></span><br />
										<p class="btn btn-default"><strong>{{$attachment->filename}}</strong></p>
									</a>
								@endif
							</div>
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<link rel="stylesheet" href="{{url()}}/css/jquery.fancybox.css">
<link rel="stylesheet" href="{{url()}}/css/jquery.fancybox-thumbs.css">
<script src="{{url()}}/js/jquery.fancybox.js"></script>
<script src="{{url()}}/js/jquery.fancybox-thumbs.js"></script>
<script>
$(document).ready(function() {
	$('.gallery').fancybox({
		helpers:  {
	        thumbs : {
	            width: 50,
	            height: 50
	        }
	    }
	});
});
</script>
@endsection