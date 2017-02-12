
$(document).ready(function(){
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

});
