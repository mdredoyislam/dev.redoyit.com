/*-----------------------------------------------------------------------------------

    Theme Name: Personala
    Theme URI: http://
    Description: The Multi-Purpose Onepage Template
    Author: his7am
    Author URI: http://themeforest.net/user/his7am
    Version: 1.0

-----------------------------------------------------------------------------------*/


jQuery(function() {

    "use strict";

    var wind = jQuery(window);


    // scrollIt
    jQuery.scrollIt({
      upKey: 38,                // key code to navigate to the next section
      downKey: 40,              // key code to navigate to the previous section
      easing: 'swing',          // the easing function for animation
      scrollTime: 600,          // how long (in ms) the animation takes
      activeClass: 'active',    // class given to the active nav element
      onPageChange: null,       // function(pageIndex) that is called when page is changed
      topOffset: -63            // offste (in px) for fixed top navigation
    });



    // navbar scrolling background
    wind.on("scroll",function () {

        var bodyScroll = wind.scrollTop(),
            navbar = jQuery(".navbar"),
            logo = jQuery(".navbar .logo> img");

        if(bodyScroll > 100){

            navbar.addClass("nav-scroll");
            logo.attr('src', 'img/logo-dark.png');

        }else{

            navbar.removeClass("nav-scroll");
            logo.attr('src', 'img/logo-light.png');
        }
    });



    // progress bar
    wind.on('scroll', function () {
        jQuery(".skills-progress span").each(function () {
            var bottom_of_object = 
            jQuery(this).offset().top + jQuery(this).outerHeight();
            var bottom_of_window = 
            jQuery(window).scrollTop() + jQuery(window).height();
            var myVal = jQuery(this).attr('data-value');
            if(bottom_of_window > bottom_of_object) {
                jQuery(this).css({
                  width : myVal
                });
            }
        });
    });



    // sections background image from data background
    var pageSection = jQuery(".bg-img, section");
    pageSection.each(function(indx){
        
        if (jQuery(this).attr("data-background")){
            jQuery(this).css("background-image", "url(" + jQuery(this).data("background") + ")");
        }
    });


    // === owl-carousel === //

    // Testimonials owlCarousel
    jQuery('.testimonials .owl-carousel').owlCarousel({
        items:1,
        loop:true,
        margin: 15,
        mouseDrag:false,
        autoplay:true,
        smartSpeed:500
    });

    // Blog owlCarousel
    jQuery('.blog .owl-carousel').owlCarousel({
        loop:true,
        margin: 30,
        mouseDrag:false,
        autoplay:true,
        smartSpeed:500,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            700:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });


    // magnificPopup
    jQuery('.gallery').magnificPopup({
        delegate: '.link',
        type: 'image',
        gallery: {
            enabled: true
        }
    });


    // countUp
    jQuery('.numbers .count').countUp({
        delay: 10,
        time: 1500
    });


});


// === window When Loading === //

jQuery(window).on("load",function (){

    var wind = jQuery(window);

    // Preloader
    jQuery(".loading").fadeOut(500);


    // stellar
    wind.stellar();


    // isotope
    jQuery('.gallery').isotope({
      // options
      itemSelector: '.items'
    });

    var jQuerygallery = jQuery('.gallery').isotope({
      // options
    });

    // filter items on button click
    jQuery('.filtering').on( 'click', 'span', function() {

        var filterValue = jQuery(this).attr('data-filter');

        jQuerygallery.isotope({ filter: filterValue });

    });

    jQuery('.filtering').on( 'click', 'span', function() {

        jQuery(this).addClass('active').siblings().removeClass('active');

    });


    // contact form validator
    jQuery('#contact-form').validator();

    jQuery('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            jQuery.ajax({
                type: "POST",
                url: url,
                data: jQuery(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        jQuery('#contact-form').find('.messages').html(alertBox);
                        jQuery('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    });

});
