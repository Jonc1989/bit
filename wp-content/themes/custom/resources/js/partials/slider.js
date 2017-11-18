/**
 * Created by Zakisss on 18.11.2017.
 */

function initSlider( className ){

    var slider;

    var settings = {
        slideWidth:150,
        minSlides:3,
        maxSlides: 5,
        moveSlides:1,
        speed:1000,
        useCSS: false,
        pager:!1,
        pause:3000,
        //infiniteLoop:!0,
        controls:!0,
        slideMargin: 40,
        auto:!0
        //hideControlOnEnd: true
    };

    slider = jQuery( className ).bxSlider( settings );

}