<?php
/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://www.daffodilsw.com/
 * @since      1.0.0
 *
 * @package    Wp_Custom_Register_Login
 * @subpackage Wp_Custom_Register_Login/public/partials
 */

?>

<div id="wpcrlRegisterSection" class="container-fluid">

        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 left">
            <?php
            $wpcrl_form_settings = get_option('wpcrl_form_settings');
            $form_heading = empty($wpcrl_form_settings['wpcrl_signup_heading']) ? 'Register' : $wpcrl_form_settings['wpcrl_signup_heading'];

            // check if the user already login
            if (!is_user_logged_in()) :

                ?>

                <form name="wpcrlRegisterForm" id="wpcrlRegisterForm" method="post">
                    <h4><?php _e($form_heading, $this->plugin_name); ?></h4>

                    <div id="wpcrl-reg-loader-info" class="wpcrl-loader" style="display:none;">
                        <img src="<?php echo plugins_url('images/ajax-loader.gif', dirname(__FILE__)); ?>"/>
                        <span><?php _e('Please wait ...', $this->plugin_name); ?></span>
                    </div>
                    <div id="wpcrl-register-alert" class="alert alert-danger" role="alert" style="display:none;"></div>
                    <div id="wpcrl-mail-alert" class="alert alert-danger" role="alert" style="display:none;"></div>
                    <?php if ($token_verification): ?>
                        <div class="alert alert-info" role="alert"><?php _e('Your account has been activated, you can login now.', $this->plugin_name); ?></div>
                    <?php endif; ?>

                    <div class="form-group">
                        <input type="text" class="form-control" name="wpcrl_fname" id="wpcrl_fname" placeholder="First name">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="wpcrl_lname" id="wpcrl_lname" placeholder="Last name">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="wpcrl_username" id="wpcrl_username" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="wpcrl_email" id="wpcrl_email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="wpcrl_password" id="wpcrl_password" placeholder="Password" >
                    </div>
                    <div class="form-group pass-confirm">
                        <input type="password" class="form-control" name="wpcrl_password2" id="wpcrl_password2" placeholder="Confirm Password" >
                    </div>

                    <?php if ($wpcrl_form_settings['wpcrl_enable_captcha'] == '1') { ?>
                        <div class="form-group">
                            <label class="control-label" id="captchaOperation"></label>

                            <input type="text" placeholder="Captcha answer" class="form-control" name="wpcrl_captcha" />

                        </div>
                    <?php } ?>

                    <!--<div class="g-recaptcha" data-sitekey="6LddMDgUAAAAAOAC7nBcPlXzp6YSL0jBEM5xGCmt"
                         style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>-->

                    <div class="form-group">
                            <!-- The captcha container -->
                            <div id="captchaContainer"></div>
                        <!--style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"-->
                    </div>

                    <input type="hidden" name="wpcrl_current_url" id="wpcrl_current_url" value="<?php echo get_permalink(); ?>" />
                    <input type="hidden" name="redirection_url" id="redirection_url" value="<?php echo get_permalink(); ?>" />

                    <?php
                    // this prevent automated script for unwanted spam
                    if (function_exists('wp_nonce_field'))
                        wp_nonce_field('wpcrl_register_action', 'wpcrl_register_nonce');

                    ?>

                    <div class="form-group">
                        <label class="agreement-terms">
                            <div class="agreement-input-wrap">
                                <input type="checkbox" name="agreement_terms" value="">
                            </div>
                            
                                   <span><?php echo __( 'agreement terms text', 'preico' ); ?>
                     <a href="#"><?php echo __( 'agreement terms link', 'preico' ); ?></a> </span>
                        </label>
                    </div>

                    <div class="col-md-12 clear-pads">
                        <button type="submit" class="registration-submit">
                            <?php
                            $submit_button_text = empty($wpcrl_form_settings['wpcrl_signup_button_text']) ? 'Register' : $wpcrl_form_settings['wpcrl_signup_button_text'];
                            _e($submit_button_text, $this->plugin_name);

                            ?></button>
                    </div>
                    <div class="social-auth text-center mobile">
                        <p><?php echo __( 'Connect via your favorite network', 'preico' ); ?></p>
                        <div class="register-vk"></div>
                        <div class="fbregister register-fb"></div>
                        <div class="google-register register-g+"></div>
                    </div>
                </form>



                <?php
            else:
                $current_user = wp_get_current_user();
                //$logout_redirect = (empty($wpcrl_form_settings['wpcrl_logout_redirect']) || $wpcrl_form_settings['wpcrl_logout_redirect'] == '-1') ? '' : $wpcrl_form_settings['wpcrl_logout_redirect'];
                $logout_redirect = site_url();

                echo 'Logged in as <strong>' . ucfirst($current_user->user_login) . '</strong>. <a href="' . $logout_redirect . '">Log out ? </a>';
            endif;

            ?>
        </div>

        <div class="col-lg-5 col-md-5 hidden-sm hidden-xs soc-auth-wrapper right">

            <h2><?php echo __( 'Connect via your favorite network', 'preico' ); ?></h2>




            <div class="col-md-12 social-auth text-center">
                <div class="or"><p><?php echo __( 'Or', 'preico' ); ?></p></div>
                <div class="register-vk"></div>
                <div class="fbregister register-fb"></div>
                <div class="google-register register-g+"></div>
            </div>





            <script type="text/javascript">
//                VK.init({
//                    apiId: 6265623
//                });

                


//                function authInfo(response) {
//                    if (response.session) {
//
//                        VK.Api.call('users.get', {user_ids: response.session.mid, fields: 'email' }, function(data) {
//                            if( data.response ){
//                                jQuery( "#wpcrl_fname" ).val( data.response[ 0 ].first_name );
//                                jQuery( "#wpcrl_lname" ).val( data.response[ 0 ].last_name );
//                            }
//                        });
//
//
//
//                    } else {
//                        console.log('not auth');
//                    }
//                }

//                function getInitData() {
//                    var code;
//                    code = 'return {'
//                    code += 'me: API.getProfiles({uids: API.getVariable({key: 1280}),  fields: "email"})[0]';
//                    code += '};';
//                    VK.Api.call('execute', { 'code': code }, onGetInitData);
//                }
//                function onGetInitData(data) { console.log( data );
//                    var r;
//                    if (data.response) {
//                        r = data.response;
//                        if (r.me) {
//
//                            console.log(r);
//
//                        }
//                    }
//                }
//                VK.Auth.getLoginStatus(authInfo);
//                VK.UI.button('vk_login_button');
            </script>

            <!-- VK Widget -->
<!--            <div id="vk_auth"></div>-->
<!--            <script type="text/javascript">-->
<!--                VK.Widgets.Auth("vk_auth", {"authUrl":"/dashboard"});-->
<!--            </script>-->
            
            <div id="google-sign-in" class="g-signin2 hidden" data-onsuccess="onSignIn"></div>

            <script src="https://apis.google.com/js/platform.js?onload=onLoadCallback" async defer></script>
        </div>

</div>
