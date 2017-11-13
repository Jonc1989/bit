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

<div id="wpcrlLoginSection" class="container-fluid">

        <div class="col-xs-8 col-sm-7 col-md-7 left">
            <?php
            $wpcrl_redirect_settings = get_option('wpcrl_redirect_settings');
            $wpcrl_form_settings = get_option('wpcrl_form_settings');

            // check if the user already login
            if (!is_user_logged_in()) :
                
                $form_heading = empty($wpcrl_form_settings['wpcrl_signin_heading']) ? 'Login' : $wpcrl_form_settings['wpcrl_signin_heading'];
                $submit_button_text = empty($wpcrl_form_settings['wpcrl_signin_button_text']) ? 'Login' : $wpcrl_form_settings['wpcrl_signin_button_text'];
                $forgotpassword_button_text = empty($wpcrl_form_settings['wpcrl_forgot_password_button_text']) ? 'Forgot Password' : $wpcrl_form_settings['wpcrl_forgot_password_button_text'];
                $is_url_has_token = $_GET['wpcrl_reset_password_token'];
                ?>
                <form name="wpcrlLoginForm" id="wpcrlLoginForm" method="post" class="<?php echo empty($is_url_has_token) ? '' : 'hidden' ?>">
                    
                    <h4><?php _e($form_heading, $this->plugin_name); ?></h4>
                    <div id="wpcrl-login-loader-info" class="wpcrl-loader" style="display:none;">
                        <img src="<?php echo plugins_url('images/ajax-loader.gif', dirname(__FILE__)); ?>"/>
                        <span><?php _e('Please wait ...', $this->plugin_name); ?></span>
                    </div>
                    <div id="wpcrl-login-alert" class="alert alert-danger" role="alert" style="display:none;"></div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="wpcrl_username" id="wpcrl_username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="wpcrl_password" id="wpcrl_password" placeholder="Password" >
                    </div>
                    <?php
                    $login_redirect = (empty($wpcrl_redirect_settings['wpcrl_login_redirect']) || $wpcrl_redirect_settings['wpcrl_login_redirect'] == '-1') ? '' : $wpcrl_redirect_settings['wpcrl_login_redirect'];
                    
                    ?>
                    <input type="hidden" name="redirection_url" id="redirection_url" value="<?php echo get_permalink($login_redirect); ?>" />

                    <?php
                    // this prevent automated script for unwanted spam
                    if (function_exists('wp_nonce_field'))
                        wp_nonce_field('wpcrl_login_action', 'wpcrl_login_nonce');

                    ?>
                    <button type="submit" class="login-submit"><?php _e($submit_button_text, $this->plugin_name); ?></button>
                    <?php
                        //render forgot password button
                        if($wpcrl_form_settings['wpcrl_enable_forgot_password']){                            
                    ?>
                    <button id="btnForgotPassword" type="button" class="forget-password"><?php _e($forgotpassword_button_text, $this->plugin_name); ?></button>
                    <?php
                        }
                    ?>
                </form>
                <?php
                    //render the reset password form
                    if($wpcrl_form_settings['wpcrl_enable_forgot_password']){
                        do_shortcode('[wpcrl_resetpassword_form]');
                    }
                ?>
            
                <?php
            else:
                $current_user = wp_get_current_user();
                $logout_redirect = (empty($wpcrl_redirect_settings['wpcrl_logout_redirect']) || $wpcrl_redirect_settings['wpcrl_logout_redirect'] == '-1') ? '' : $wpcrl_redirect_settings['wpcrl_logout_redirect'];
                
                echo 'Logged in as <strong>' . ucfirst($current_user->user_login) . '</strong>. <a href="' . wp_logout_url(get_permalink($logout_redirect)) . '">Log out ? </a>';

            endif;

            ?>
        </div>
        <div class="col-xs-4 col-sm-5 col-md-5 clear-pads soc-auth-wrapper right">

            <h2><?php echo __( 'Connect via your favorite network', 'preico' ); ?></h2>
            <div class="col-md-12 col-xs-12 col-sm-12 social-auth text-center">
                <div  class="vk"><img src="<?php bloginfo('template_directory');?>/resources/images/icons/55/vk.png"> </div>
                <div class="fb"><img src="<?php bloginfo('template_directory');?>/resources/images/icons/55/fb.png"></div>
                <div class="g+"><img src="<?php bloginfo('template_directory');?>/resources/images/icons/55/g+.png"></div>
            </div>
        </div>

</div>
