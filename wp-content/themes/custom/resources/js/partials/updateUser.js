/**
 * Created by Zakisss on 30.01.2018.
 */
jQuery(document).ready(initScript);

function initScript() {
    InitUserUpdateForm();

    refreshUserData()
}

function refreshUserData(){
    jQuery('#user_details').on('show.bs.modal', function () {
        getUserData();
    });
}

function InitUserUpdateForm() {
    jQuery('#userUpdateForm').formValidation({
        message: 'This value is not valid',
        fields: {
            wpcrl_fname: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required'
                    },
                    stringLength: {
                        max: 30,
                        message: 'The firstname must be less than 30 characters long'
                    }
                    //,
                    //regexp: {
                    //    regexp: /^[a-zA-Z]*$/,
                    //    message: 'Only characters are allowed.'
                    //}
                }
            },
            wpcrl_lname:{
                validators: {
                    notEmpty: {
                        message: 'The first name is required'
                    },
                    stringLength: {
                        max: 30,
                        message: 'The firstname must be less than 30 characters long'
                    }
                    //,
                    //regexp: {
                    //    regexp: /^[a-zA-Z]*$/,
                    //    message: 'Only characters are allowed.'
                    //}
                }
            },
            wpcrl_username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    }
                    ,
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            wpcrl_email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required'
                    },
                    regexp: {
                        regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                        message: 'The value is not a valid email address'
                    }
                }
            },
            wpcrl_password: {
                validators: {
                    //notEmpty: {
                    //    message: 'The password is required'
                    //},
                    stringLength: {
                        min: 6,
                        message: 'The password must be more than 6 characters long'
                    }
                }
            },
            wpcrl_password2: {
                validators: {
                    //notEmpty: {
                    //    message: 'The password is required'
                    //},
                    identical: {
                        field: 'wpcrl_password',
                        message: 'The password and its confirm are not the same'
                    },
                    stringLength: {
                        min: 6,
                        message: 'The password must be more than 6 characters long'
                    }
                }
            }
        }
    }).on('success.form.fv', function(e) {
        jQuery('#wpcrl-register-alert').hide();
        jQuery('#wpcrl-mail-alert').hide();
        jQuery('body, html').animate({
            scrollTop: 0
        }, 'slow');
        // You can get the form instance
        var $registerForm = jQuery(e.target);
        // and the FormValidation instance
        var fv = $registerForm.data('formValidation');
        var content = $registerForm.serialize();
        // start processing
        //jQuery('#wpcrl-reg-loader-info').show();

        updateUser(content);

        //wpcrlStartRegistrationProcess(content);
        // Prevent form submission
        e.preventDefault();
    }).on('err.form.fv', function(e) {
        // Regenerate the captcha
        //generateCaptcha();
    });
}

function updateUser(content) {

    jQuery.ajax({
        url: ajaxurl,
        data: content + '&action=update_user',
        type: 'POST',
        success: function (response) {
            jQuery(function () {
                jQuery('#user_details').modal('toggle');
            });
        }
    });
}

function getUserData() {

    var data = {
        action: 'get_user_data'
    };
    jQuery.ajax({
        url: ajaxurl,
        data: data,
        type: 'GET',
        success: function (response) {
            jQuery('#wpcrl_fname').val( response.name );
            jQuery('#wpcrl_lname').val( response.surname );
            jQuery('#wpcrl_username').val( response.nickname );
            jQuery('#wpcrl_email').val( response.email );
        }
    });
}