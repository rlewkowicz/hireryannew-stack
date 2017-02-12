
$(document).ready(function () {
	$(".single-item").slick({
		dots: true,
        lazyLoad: 'progressive',
				responsive: [{
		      breakpoint: 900,
		      settings: {
		        slidesToShow: 1,
		        dots: false,
						infinite:	false,
						mobileFirst: true,
						arrows: false,
		      }
		    }]
	});

	$("a").click(function() {
		$slick_slider = $('.slider');
	  settings = {
	    // some settings
	  }
  $slick_slider.slick(settings);
	if ($slick_slider.hasClass('slick-initialized')) {
		$slick_slider.slick('unslick');
	}

	if (!$slick_slider.hasClass('slick-initialized')) {
		return $slick_slider.slick(settings);
	}
	});

});
