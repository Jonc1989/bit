

jQuery(document).ready(function () {

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

        bar.animate(1);
    }


});

