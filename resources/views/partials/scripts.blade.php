<!-- Scripts -->
<script src="{{url()}}/js/jquery-2.1.3.min.js"></script>
<script src="{{url()}}/js/bootstrap.min.js"></script>
<script src="{{url()}}/js/rem.min.js"></script>
<script>
var navSelect = function(title) {
	// define objects
	mega 		= $('#nav-mega');
	megaSection = $('.nav-mega-menu');
	megaSub		= $('.nav-mega-menu-sub');
	open 		= mega.hasClass('open');
	blind		= $('#blind');
	lastTitle	= megaSection.filter('.open').attr('data-name');
	var fade = { opacity: 0, transition: 'opacity 0.5s' };
	var fadeIn = { opacity: 1, transition: 'opacity 0.5s' };
	// actions
	if(open && lastTitle == title) {
		megaSection.stop().slideUp().removeClass('open');
		mega.stop().fadeOut().removeClass('open');
		blind.stop().fadeOut();
	} else {
		megaSection.stop().css(fade).slideUp().removeClass('open');
		if(!open) {
			mega.stop().fadeIn().addClass('open');
			blind.stop().fadeIn();
		}
		megaSection.filter('[data-name="'+title+'"]').addClass('open').stop().css(fadeIn).slideDown();
	}
}
$(document).ready(function() {
	var checkNav = function() {
		scrollAm = $(window).scrollTop();
		if(sticky.hasClass('stuck')) {
			if(scrollAm < stickyNumber) {
				sticky.removeClass('stuck');
				stickyNumber = sticky.offset().top;
			}
		} else {
			if(scrollAm >= stickyNumber) {
				sticky.addClass('stuck');
			}
		}
	}

	var checkImages = function() {
		$.each($('.hero-image'), function(){
			var pHeight = $('#heroNav').height();
			var pWidth = $('#heroNav').width();
	        var heightR = (500 / pHeight);
	        var widthR = (1920 / pWidth);
	        if(widthR>heightR){
	            $(this).css('height', '100%').css('width', 'auto');
	        }else{
	            $(this).css('width', '100%').css('height', 'auto');
	        }
	    });
	}
	
	$('.mega-link').click(function() {
		navSelect($(this).attr('data-name'));
		if($(this).hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$('ul.nav li').removeClass('active');
			$(this).addClass('active');
		}
	});
	$('#blind, .close-menu').click(function() {
		$('.nav-mega-menu, #nav-mega').removeClass('open');
		$('ul.nav li').removeClass('active');
		$('.nav-mega-menu').stop().slideUp();
		$('#nav-mega, #blind').stop().fadeOut();
	});
	var sticky = $('.megaNavContainer');
	var stickyNumber = sticky.offset().top;
	$(window).scroll(function() {
		checkNav();		
	});
	checkNav();

	checkImages();

	$(window).resize(function() {
		checkImages();
	});

});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61406621-2', 'auto');
  ga('send', 'pageview');

</script>