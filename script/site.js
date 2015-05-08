$(document).ready(function() {

	if (!$('body').hasClass("work")) {

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


	if ($('body').hasClass("work")) {

		function disableAutoHide(){
			$('body').addClass("fxDontHide");
		}

		function enableAutoHide(){
			$('body').removeClass("fxDontHide");
		}		

		$(window).scroll(function() {

			if ($(window).scrollTop() > 200 && !$('body').hasClass("fxDontHide")){  

				enableAutoHide();

				$('a#viewdetails').removeClass("noShow");
				$('a#closedetails').addClass("noShow");

				$('#descriptionrow').slideUp();

			}

			if ($(window).scrollTop() < 0){  

				enableAutoHide();

				$('a#closedetails').removeClass("noShow");
				$('a#viewdetails').addClass("noShow");

				$('article#work').addClass("padded");
				$('article#work').removeClass("paddedShort");

				$('#descriptionrow').slideDown();

			}

		});

		$('a#closedetails').click(function() {

			enableAutoHide();

			$('a#viewdetails').removeClass("noShow");
			$('a#closedetails').addClass("noShow");

			if ($(window).scrollTop() == 0){

				$('article#work').addClass("paddedShort");
				$('article#work').removeClass("padded");

			}

			$('#descriptionrow').slideUp();

		});

		$('a#viewdetails').click(function() {

			disableAutoHide();

			$('a#closedetails').removeClass("noShow");
			$('a#viewdetails').addClass("noShow");

			if ($(window).scrollTop() == 0){

				$('article#work').addClass("padded");
				$('article#work').removeClass("paddedShort");

			}

			$('#descriptionrow').slideDown();

		});

	};

});