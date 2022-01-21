jQuery(document).ready(function() {

new WOW().init();
jQuery( "ul#menu-primary-menu li a" ).addClass( "hvr-underline-reveal" );
//jQuery('.scroll').scrollTo('#target');
jQuery("#button-scroll").click(function() {
    jQuery('html, body').animate({
        scrollTop: jQuery("#target").offset().top
    }, 1000);
});

    jQuery('.owl-carousel').owlCarousel({
        items:1,
        margin:10,
        video:true,
        videoWidth: true, // Default false; Type: Boolean/Number
		videoHeight: 400, // Default false; Type: Boolean/Number
        lazyLoad:true,
        center:true,
        dots: false,
        nav: true,
        navText:["<i class='fa fa-caret-left' aria-hidden='true'></i>","<i class='fa fa-caret-right' aria-hidden='true'></i>"],
        responsive:{
        480:{
            items:1,
            nav:false
        },
        }
    })

});