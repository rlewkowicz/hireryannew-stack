$(document).ready(function() {
    function createSlick() {
        $(".single-item").not('.slick-initialized').slick({
            dots: true,
            lazyLoad: 'progressive',
            waitForAnimate: false,
            responsive: [{
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    infinite: false,
                    mobileFirst: true,
                    arrows: false,
                }
            }]
        });
    }
    createSlick();

    if (sessionStorage.getItem("selectedTab1") === null) {

        sessionStorage.selectedTab1 = 0
    }

    $('.site-wrapper').tabs({
        activate: function(event, ui) {
            $slick_slider = $('.single-item');
            $slick_slider.slick('unslick');
            createSlick();
            sessionStorage.selectedTab1 = ui.newTab.index();
        },
        collapsible: false,
        active: sessionStorage.selectedTab1,
    });

});
