@extends('app')

@section('hero')	
	<div class="hero">
		<img class="hero-image show" src='{{url()}}/img/generic/Education_Primary_042.JPG?w=1920&h=500&fit=crop'>
	</div>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header>
					<h1>Sports News - Edit</h1>
				</header>
				{!!Form::open(['url' => 'academylife/sports-news/'.$update->id,'files'=>true, 'method' => 'PATCH'])!!}
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" id="title" name="title" class="form-control" placeholder="Really exciting item of news" required value="{{$update->title}}">
					</div>
					<div class="form-group">
						<label for="headline">Headline (optional)</label>
						<input type="text" id="headline" name="headline" class="form-control" placeholder="Brief synopsis of news item" maxlength="150" value="{{$update->headline}}">
					</div>
					<div class="form-group">
						<label for="body">Content</label>
						<textarea id="body" name="body" required class="form-control" placeholder="Put your content here" >{{$update->content}}</textarea>
					</div>
					<div class="form-group">
						<label for="attach">Attachments</label>
						<input type="file" name="attachments[]" id="attach" class="form-control" multiple="true">
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="panel bg-grey">
								<div class="panel-body">
									<div class="form-group">
										<div class="radio">
										  <label>
										    <input type="radio" name="featured" id="" value=""
										    @if($update->featured == "" || is_null($update->featured))
										    	checked
										    @endif
										    >
										    Use Random Thumbnail
										  </label>
										</div>
									</div>
								</div>
							</div>
						</div>
						@foreach($update->attachments()->get() as $attachment)
							<div class="col-md-4">
								<div class="panel bg-grey">
									<div class="panel-body">
										@if(strtolower($attachment->type) == 'jpg' || strtolower($attachment->type) == 'png')
											<div class="radio">
											  <label>
											    <input type="radio" name="featured" id="" value="{{$attachment->id}}"
											    @if($update->featured == $attachment->id)
											    	checked
											    @endif
											    >
											    Make Front-page Thumbnail
											  </label>
											</div>
											<img src="{{url()}}/img/uploads/{{$update->id}}/{{$attachment->filename}}?w=450">
										@endif
										<div class="form-group">
											<input type="text" name="attach-title" id="attach-{{$attachment->id}}-filename" readonly class="form-control" value="{{$attachment->filename}}">
										</div>
										<div class="checkbox">
										  <label>
										    <input type="checkbox" name="delete[]" value="{{$attachment->id}}">
										    	Delete
										  </label>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="published">Visible From</label>
							<input type="text" required id="published" name="published" class="form-control" placeholder="Publish Date" data-value="{{$update->published_on->toFormattedDateString()}}" value="{{$update->published_on->toFormattedDateString()}}">
						</div>
						<div class="form-group col-md-6">
							<label for="expires">Visible Until (optional)</label>
							<?php $expires = (!is_null($update->expires_on)) ? $update->expires_on->toFormattedDateString() : ''; ?>
							<input type="text" id="expires" name="expires" class="form-control" placeholder="Expiry Date" data-value="{{$expires}}" value="{{$expires}}">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12 bg-warning">
							<div class="checkbox">
							  <label>
							    <input type="checkbox" name="destroy" value="1"
							    @if(!is_null($update->deleted_at))
							    	checked
							    @endif
							    >
							    	Delete this post
							  </label>
							</div>
						</div>
					</div>
					<input type="hidden" name="category" value="5">

					<input type="submit" class="btn btn-lg btn-primary pull-right" value="Save" >
					<a href="{{url('academylife/sports-news')}}">cancel</a>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<link rel="stylesheet" href="{{url()}}/css/picker/default.css">
<link rel="stylesheet" href="{{url()}}/css/picker/default.date.css">
<script src="{{url()}}/js/picker.js"></script>
<script src="{{url()}}/js/picker.date.js"></script>
<script>
$(function () {
    $('#expires').pickadate({
    	format: 'dddd, dd mmm, yyyy',
		  formatSubmit: 'yyyy-mm-dd',
		  hiddenPrefix: 'prefix__',
		  hiddenSuffix: '__suffix',
		  hiddenName: true,
		@if($update->expired_on)
			onStart: function() {
			    this.set('select', '{{$update->expires_on->format('Y-m-j')}}', { format: 'yyyy-mm-dd' });
			}
		@endif
    });
    $('#published').pickadate({
    	format: 'dddd, dd mmm, yyyy',
		  formatSubmit: 'yyyy-mm-dd',
		  hiddenPrefix: 'prefix__',
		  hiddenSuffix: '__suffix',
		  hiddenName: true,
		onStart: function() {
		    this.set('select', '{{$update->published_on->format('Y-m-j')}}', { format: 'yyyy-mm-dd' });
		}
    });
});
</script>
@endsection