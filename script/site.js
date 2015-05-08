$(document).ready(function() {

	$(window).scroll(function() {

		if ($(this).scrollTop() > 200){  

			$('header').addClass("stacked");
			$('.firstContent').addClass("padded");

		} else {

			$('header').removeClass("stacked");
			$('.firstContent').removeClass("padded");

		}

	});

});