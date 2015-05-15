$(document).ready(function() {

	if (!$('body').hasClass("work") && !$('body').hasClass("post")) {

		$(window).scroll(function() {

			if ($(this).scrollTop() > 200){  

				$('header').addClass("stacked");
				$('.firstContent').addClass("padded");

			} else {

				$('header').removeClass("stacked");
				$('.firstContent').removeClass("padded");

			}

		});

	};


	if ($('body').hasClass("work") || $('body').hasClass("post")) {

		function disableAutoHide(){
			$('body').addClass("fxDontHide");
		}

		function enableAutoHide(){
			$('body').removeClass("fxDontHide");
		}		


	};

});