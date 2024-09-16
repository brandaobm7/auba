


;(function ($) {

	// NAVBAR FIXED
	$(document).ready(function () {
		var navbar = $('.navbar');
		var navbarHeight = navbar.outerHeight();
		$(window).scroll(function () {
			if ($(this).scrollTop() > navbarHeight) {
				navbar.addClass('fixed-top-scrolled');
			} else {
				navbar.removeClass('fixed-top-scrolled');
			}
		});
	});

	new WOW().init();
	
})(jQuery);
