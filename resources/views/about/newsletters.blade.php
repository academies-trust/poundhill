@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_066.JPG?w=1920&h=500&fit=crop'>
	</div>
@endsection

@section('content')
<div class="container-fluid blue-container text-center">
</div>
<div class="container">
	<div class="row">
			<div class="col-md-12">
			<article>

				<!-- Start of proper code -->

				<style>
					.al_item {
						margin:8px;
						text-align:center;
						display: inline-block;
						width:244px;
						height:360px;
						vertical-align:top;
					}

					.al_thumb {
						border:0px solid black;
					}

					.al_link {
						
					}
				</style>

				<header>
					<h1>Newsletters</h1>
				</header>

				<div style="text-align:center;">

				<?php

					require_once('c:\inetpub\wwwroot\brighton primary academies\holmbush\public\classes\AutoLinks.class.php');
					$newsletters = new AutoLinks('/docs/newsletters');
					$newsletters->setAllowedExtensions("pdf"); // default "pdf","docx","doc","xlsx","xls"
					$newsletters->setThumbnailPath("/docs/newsletters"); // thumbnail path if different from input path
					$newsletters->setHtmlTemplate('<DIV class="al_item"><A href="|LINK|" target="_blank" class="al_link"><IMG SRC="/scripts/timthumb.php?src=|THUMB|&w=200&h=300" class="al_thumb"><BR>|TITLE|</A></DIV>');

					echo $newsletters->getHtml();
		
				?>

				</div>
				
				<!-- end of proper code -->

			</article>
		</div>
	
	
	</div>
</div>
@endsection
@section('scripts')
	<script>
	$(document).ready(function() {
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
@endsection