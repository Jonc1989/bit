/**
 * Created by Jānis Mozais on 11.11.2017..
 */

function checkCounter() {
    var data = {
        'action': 'check_countdown'
    };
    jQuery.ajax({
        url: ajaxurl,
        data: data,
        type: 'GET',
        success: function (response) {
            var date = null;
            if( response != '' ){

                var countDownDate = new Date( response ).getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                    // Get todays date and time
                    var now = new Date().getTime();

                    // Find the distance between now an the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    jQuery( '.counter-wrap .days .counter-number' ).text( days );
                    jQuery( '.counter-wrap .hours .counter-number' ).text( hours );
                    jQuery( '.counter-wrap .minutes .counter-number' ).text( minutes );
                    jQuery( '.counter-wrap .seconds .counter-number' ).text( seconds );



                    // If the count down is finished, write some text
                    if (distance < 0) {
                        clearInterval(x);
                        //
                    }
                }, 1000);
            }
        }
    });
}
