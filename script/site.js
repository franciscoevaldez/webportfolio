$(document).ready(function() {

	$(window).scroll(function() {

		if ($(this).scrollTop() > 200){  

			$('header').addClass("stacked");
			$('#workArray').addClass("padded");

		} else {

			$('header').removeClass("stacked");
			$('#workArray').removeClass("padded");

		}

	});

});