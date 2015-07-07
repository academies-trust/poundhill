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
					<h1>Gallery - Create</h1>
				</header>
				{!!Form::open(['url' => 'about/galleries', 'files'=>true])!!}
					@foreach($errors->all() as $error)
						<div class="alert alert-danger" role="alert">{{$error}}</div>
					@endforeach
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" id="title" name="title" class="form-control" placeholder="Really exciting gallery" required >
					</div>
					<div class="form-group">
						<label for="headline">Headline (optional)</label>
						<input type="text" id="headline" name="headline" class="form-control" placeholder="Brief synopsis of gallery" maxlength="150" >
					</div>
					<div class="form-group">
						<label for="body">Content</label>
						<textarea id="body" name="body" required class="form-control" placeholder="Gallery details" ></textarea>
					</div>
					<div class="form-group">
						<label for="attach">Gallery Images</label>
						<input type="file" name="attachments[]" id="attach" class="form-control" multiple="true">
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="published">Visible From</label>
							<input type="text" required id="published" name="published" class="form-control" placeholder="Publish Date">
						</div>
						<div class="form-group col-md-6">
							<label for="expires">Visible Until (optional)</label>
							<input type="text" required id="expires" name="expires" class="form-control" placeholder="Expires on">
						</div>
					</div>

					<input type="hidden" name="category" value="4">

					<input type="submit" class="btn btn-lg btn-primary pull-right" value="Add" >
					<a href="{{url('about/news')}}">cancel</a>
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
    $('#expires, #published').pickadate({
    	format: 'dddd, dd mmm, yyyy',
		  formatSubmit: 'yyyy-mm-dd',
		  hiddenPrefix: 'prefix__',
		  hiddenSuffix: '__suffix',
		  hiddenName: true
    });
});
</script>
@endsection