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
					<div>
						@if(Auth::check())
							<a href="{{URL::current()}}/edit"><btn class="btn btn-default pull-right">Edit</btn></a>
						@endif

						<h1>Galleries</h1>
						<a href="{{url()}}/about/galleries"><btn class="btn btn-default"><span class="glyphicon glyphicon-backward logo text-blue"></span>back to galleries</btn></a>
					</div>
				</header>
				<div class="grey-container padding-x2">
					<h3 class="blue">{{$update->title}}</h3>
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
					<p>{{nl2br($update->content)}}</p>
					<div class="row">
						@if($update->attachments())
							@foreach($update->attachments()->get() as $attachment)
								<div class="col-md-3 text-center spacer">
									@if(strtolower($attachment->type) == 'jpg' || strtolower($attachment->type) == 'png' || strtolower($attachment->type) == 'jpeg')
										<a href="{{url()}}/img/uploads/{{$update->id}}/{{$attachment->filename}}" class="gallery" rel="news">
											<img src="{{url()}}/img/uploads/{{$update->id}}/{{$attachment->filename}}?w=350&h=350&fit=crop">
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