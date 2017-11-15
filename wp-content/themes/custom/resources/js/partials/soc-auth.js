/**
 * Created by Admin on 11.11.2017..
 */

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

window.fbAsyncInit = function() {
    FB.init({
        appId      : '1441360066123251',
        cookie     : true,  // enable cookies to allow the server to access
                            // the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.11' // use graph api version 2.11
    });


    FB.getLoginStatus(function(response) {
        //statusChangeCallback(response);
        //
        // if (response.status === 'connected') {
        //     // Logged into your app and Facebook.
        //     FB.api('/me',  function(response) {
        //         console.log(response);
        //
        //     });
        // }
    });

};

function getFacebookUserInfo( response, registration ){
    FB.api('/me?fields=name,email,first_name,last_name',  function(response) {
        console.log(response);
        if( response.email !== undefined ){



            if( registration ){

                jQuery( '#wpcrl_fname').val( response.first_name );
                jQuery( '#wpcrl_lname').val( response.last_name );
                jQuery( '#wpcrl_email').val( response.email );

            }else{
                var data = {
                    action: 'log_user_in',
                    email: response.email
                };

                jQuery.ajax({
                    url: ajaxurl,
                    data: data,
                    type: 'GET',
                    success: function (response) {
                        if( response == 'success' ){
                            window.location.href = domain + '/dashboard';
                        }else{
                            alert( response );
                        }
                    }
                });
            }

        }else{
            alert('no email provided')
        }
    });
}

function statusChangeCallback(response, registration) {
    if (response.status === 'connected') {
        getFacebookUserInfo( response, registration );
    } else {
        FB.login(function(response) {
            if ( response.authResponse ) {
                getFacebookUserInfo( response, registration );
            } else {
                console.log('User cancelled login or did not fully authorize.');
            }
        }, {
            scope: 'email'
        });
    }
}
function checkLoginState( registration ) {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response, registration);
    });
}

jQuery( document ).on( 'click', '.social-auth .fb img', function ( e ) {
    checkLoginState();
});
jQuery( document ).on( 'click', '.social-auth .register-fb img', function ( e ) {
    checkLoginState( true );
});