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
				<header>
					<h1>Holmbush PFTA</h1>
				</header>
			
					<h2 class="text-green">Welcome to the Holmbush Parents, Teachers and Friends Association (PTFA)</h2>
					<div class="col-md-12 bg-success">

					<style>
						.al_item {
							margin:8px;
							text-align:center;
							display: inline-block;
							width:344px;
							height:280px;
							vertical-align:top;
						}

						.al_thumb {
							border:0px solid black;
							margin-bottom:10px;
						}

						.al_link {
							
						}
					</style>

						<h3>Latest PFTA News</h3>
						<div style="text-align:center;">

						<?php

							require_once('c:\inetpub\wwwroot\brighton primary academies\holmbush\public\classes\AutoLinks.class.php');
							$newsletters = new AutoLinks('/docs/pfta_news');
							$newsletters->setAllowedExtensions("pdf"); // default "pdf","docx","doc","xlsx","xls"
							$newsletters->setThumbnailPath("/docs/pfta_news"); // thumbnail path if different from input path
							$newsletters->setHtmlTemplate('<DIV class="al_item"><A href="|LINK|" target="_blank" class="al_link"><IMG SRC="/scripts/timthumb.php?src=|THUMB|&w=360&h=240" class="al_thumb"><BR>|TITLE|</A></DIV>');

							echo $newsletters->getHtml();
			
						?>

				</div>
					</div>
			</article>
		</div>
	</div>
	<div class="row padding-x2 margin-bottom">
		<div class="col-md-12">
			<figure class="pull-right padding-x2">
				<img src="{{url()}}/img/page-specific/pfta/07.jpg?w=450&h=350&fit=crop">
			</figure>
			<h3>At Holmbush Primary Academy we aim for:</h3>
			<p>Most of you will be aware of the “Parents, teachers and friends association” (PTFA), but might not know an awful lot about our small group. This page is designed to provide you with a little more information about the group and hopefully encourage a few of you to consider joining us or lending your support in other ways.</p>
			<p>The PTFA has been running for over 9 Years and has recently achieved charity status, which is a significant achievement. In that time we have raised over 50K, through the numerous discos, summer fetes and Christmas fairs. Without your support this would not have been possible. We are aware that we are often asking for donations and we thank you for always supporting us. We know it is not always easy, but your donations really do make a difference.</p>
			<div class="clear"></div>
			<div class="bg-success padding-x2">
			<figure class="pull-right padding-x2">
						<img src="{{url()}}/img/page-specific/pfta/06.jpg?w=450&h=350&fit=crop">
					</figure>
				<p>The PTFA is made up of a very small group of mums, dads and several members of staff who work together in order to help provide the children with new equipment to enhance their learning, which the school cannot afford to buy out of their normal school budget.</p>
				<p>We all find it an incredible rewarding group to be a part of, especially when you consider the equipment we have helped purchase to date, including:</p>
					<ul>
						<li>Outdoor play equipment</li>
						<li>iPads</li>
						<li>The Roundhouse</li>
						<li>The outside classroom</li>
						<li>Touch Screens</li>
						<li>White Boards</li>
						<li>Mini laptops</li>
						<li>Classroom visulisers</li>
						<li>The hall sound system</li>
						<li>Freezer</li>
					</ul>
					
			</div>
			<h3>Have you ever thought about joining? Would you like to make a difference to your child’s school?</h3>
			<p>We are always looking for new members to join our friendly group and welcome anyone who can spare a few hours to help with the school fairs or would like to take a bigger part and join the team and get involved in planning the events. You don’t need to attend all the meetings, just support where you can, it might be running a stall or sticking the tickets on items for the tombola, we welcome all help, no matter how small.</p>
			<p>You may even have a money raising idea which the school could benefit from. Ideas are always welcome.</p>

			<h3>If you are interested please leave your details at the school office and we will contact you.</h3>
			<p>Alternatively, look out on the PTFA noticeboard for the next meeting date and we hope to see you there.</p>
				<dl>
					<dt>The Group members are:-</dt>
					<dd>Rose Hill – Year 2, 5 &amp; 6</dd>
					<dd>Lorraine Roberts - Year 1 &amp; 3</dd>
					<dd>Karen Doig – Year 1, 3 &amp; 6</dd>
					<dd>Michell Fairhall – Year 1 &amp; 6</dd>
					<dd>Sam Croucher – Year 3</dd>
					<dd>Liz Godden - Year 3</dd>
					<dd>Tasha Glover – Year 2 &amp; 4</dd>
					<dd>Tania Bonaldi – Year 4</dd>
					<dd>Mrs Jackson</dd>
					<dd>Mrs Southwell</dd>	
					<dd>Mrs Scott</dd>
				</dl>
		</div>
	
	</div>
	<div class="row bg-success padding-x2">
		<div class="col-md-12">
			<article>
				<header>
					<h1>Help us raise money without spending a penny!</h1>
				</header>
				<p><a href="http://www.easysearch.org.uk/" target="_blank">Click here</a> to install easysearch on your devices and raise money for Holmbush while searching the internet.</p>
				<p><a href="http://www.easyfundraising.org.uk/" target="_blank">Click here</a> to start easyfundraising, shop online and a percentage of what you spend will also be donated to Holmbush.</p>
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign"></span> <a href="{{url()}}/docs/How to set up Easyfundraising document.pdf" target="_blank">How to set up Easyfundraising</a></p>
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign"></span> <a href="{{url()}}/docs/Easysearch instructions.pdf" target="_blank">Easysearch instructions for parents to help fundraising</a></p>
			</article>
		</div>
	</div>
	<div class="row bg-info padding-x2 spacer">
		<div class="col-md-12">
			<article>
				<header>
					<h1>Company Match Giving</h1>
				</header>
				<p>Please look at the article to help our school</p>
			
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign"></span> <a href="{{url()}}/docs/company match giving.pdf" target="_blank">Company match giving
		
			</article>
		</div>
	</div>
	<div class="row bg-success padding-x2 spacer">
		<div class="col-md-12">
			<article>
				<header>
					<h1>Northbrook Fundraising</h1>
				</header>
				<p><a href="http://www.northbrookfundraising.co.uk/" target="_blank">Click here</a> to start shopping and raising money for Holmbush at Northbrook Fundraising - <strong>22% from every order comes to us!</strong></p>
			
				<p class="bg-white padding-x2"><span class="glyphicon glyphicon-info-sign"></span> <a href="{{url()}}/docs/northbrook fundraising.pdf" target="_blank">Northbrook fundraising instructions</a></p>
				<figure class="pull-left padding-x2">
						<a href="http://www.northbrookfundraising.co.uk/" target="_blank"><img src="{{url()}}/img/page-specific/pfta/clickhere.jpg?w=450&h=350&fit=crop"></a>
				</figure>
		
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