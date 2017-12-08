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
        speed:400,
        useCSS: false,
        pager:!1,
        pause:3000,
        infiniteLoop: true,
        autoControls: false,
        controls:!0,
        slideMargin: 40,
        touchEnabled: false,
        auto:!0
        //hideControlOnEnd: true
    };

    slider = jQuery( className ).bxSlider( settings );

}