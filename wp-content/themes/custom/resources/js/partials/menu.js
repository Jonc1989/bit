/**
 * Created by Admin on 11.11.2017..
 */
// $(".home li > .prevent").click(function(e) {
//
//     $( '[data-toggle="collapse"]' ).trigger( "click" );
//     e.preventDefault();
//
//     var top = $(this).attr("href");
//     var verticalOffset = $(top).offset().top;
//
//     $("html, body").animate({
//             scrollTop: verticalOffset
//         },
//         1500 )
//
// });

function animateScroll( link ){

    jQuery( link ).click(function(e) {
        e.preventDefault();

        var top = jQuery(this).attr("href");
        var verticalOffset = jQuery(top).offset().top;

        //isMenuItemSelected = true;

        jQuery("html, body").animate({
                scrollTop: verticalOffset
            },
            1500,
            function(){
                //isMenuItemSelected = false;
            })

    });

}
jQuery( document ).ready( function(){

    var links = jQuery( '.nav li a' );

    animateScroll( links[ 3 ] );
    animateScroll( links[ 5 ] );

});