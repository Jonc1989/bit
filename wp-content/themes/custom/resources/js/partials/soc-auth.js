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
        appId      : '181011172481682', //1441360066123251
        cookie     : true,  // enable cookies to allow the server to access
                            // the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.11' // use graph api version 2.11
    });


    //FB.getLoginStatus(function(response) {
        //statusChangeCallback(response);
        //
        // if (response.status === 'connected') {
        //     // Logged into your app and Facebook.
        //     FB.api('/me',  function(response) {
        //         console.log(response);
        //
        //     });
        // }
    //});

};

function searchUser( email ) {

    var data = {
        action: 'log_user_in',
        email: email
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

function getFacebookUserInfo( response, registration ){
    FB.api('/me?fields=name,email,first_name,last_name',  function(response) {
        console.log(response);

            if( registration ){

                jQuery( '#wpcrl_fname').val( response.first_name );
                jQuery( '#wpcrl_lname').val( response.last_name );
                jQuery( '#wpcrl_email').val( response.email );

            }else{
                if( response.email !== undefined ){
                    searchUser( response.email );
                }else{
                    alert('no email provided')
                }

            }
    });
}

function statusChangeCallback(response, registration) {
    if (response.status === 'connected') {
        getFacebookUserInfo( response, registration );
    } else {
        FB.login(function(response) { console.log( response );
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


jQuery( document ).ready( function () {

    document.getElementById("google-register").onclick = function (e) {
        e.stopPropagation();

        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signIn().then(function() {
            var profile = auth2.currentUser.get().getBasicProfile();
            console.log('ID: ' + profile.getId());
            console.log('Full Name: ' + profile.getName());
            console.log('Given Name: ' + profile.getGivenName());
            console.log('Family Name: ' + profile.getFamilyName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail());

            jQuery( "#wpcrl_fname" ).val( profile.getGivenName() );
            jQuery( "#wpcrl_lname" ).val( profile.getFamilyName() );
            jQuery( "#wpcrl_email" ).val( profile.getEmail() );
        });

    };

    document.getElementById("google-login").onclick = function (e) {
        e.stopPropagation();

        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signIn().then(function() {
            var profile = auth2.currentUser.get().getBasicProfile();

            searchUser( profile.getEmail() );
        });

    };





    document.getElementById( "fbregister" ).onclick = function (e) {
        e.stopPropagation();
        checkLoginState( true );
    };

    document.getElementById( "fblogin" ).onclick = function (e) {console.log( 'fblogin');
        e.stopPropagation();
        checkLoginState(  );
    };

    var url_string = window.location.href;
    var url = new URL(url_string);
    var token = url.searchParams.get("wpcrl_reset_password_token");

    if( token ){
        jQuery('#loginModal').modal('show');
    }

});

function onLoadCallback() {
    gapi.load('auth2', function()
    {
       auth2 = gapi.auth2.init({
           client_id: '833642584244-rvpqmu289ir75ft98p1o3i2hl6ru4u33.apps.googleusercontent.com',
           fetch_basic_profile: true,
           scope: 'profile email'  //scope: 'additional_scope'
       });
    });
}
