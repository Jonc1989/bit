

jQuery(document).ready(function () {

    var current = 0.500;
    var max = 1;
    var step = 0.166;

    if( jQuery( '.granulas' ).length ){
        var bar = new ProgressBar.Circle( '.granulas', {
            strokeWidth: 3,
            easing: 'easeInOut',
            duration: 3000,
            color: '#ffd334',
            trailColor: 'transperant',
            trailWidth: 0.1,
            svgStyle: null
        });

        bar.animate( current );
    }
    var x = 0;
    for( var i = 0; i < max; i = i + step ){


        if( i <= current && i > 0 ){

            x++;

            (function ( num ) {
                setTimeout(function () {
                    jQuery( '.icon' + num ).css( 'opacity', 1 );
                }, num * 500 );
            })(x);
        }
    }

    jQuery( '.copy' ).click( function(){
        var copyText = document.getElementById( "clipboard-text" );
        copyText.select();
        document.execCommand("Copy");
        //alert(copyText.value);
    });

});

