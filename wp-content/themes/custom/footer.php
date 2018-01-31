
<div class="register-login-modals">
	<!-- Modal -->
	<div class="modal fade" id="registrationModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">

				<div class="modal-body"><button type="button" class="close" data-dismiss="modal">&times;</button>
					<?php echo do_shortcode("[wpcrl_register_form]"); ?>
				</div>

			</div>

		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="loginModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body"><button type="button" class="close" data-dismiss="modal">&times;</button>
					<?php echo do_shortcode("[wpcrl_login_form]"); ?>
				</div>
			</div>

		</div>
	</div>

    <?php $data = get_user_meta( get_current_user_id() );  ?>
    <div class="modal fade" id="user_details" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body"><button type="button" class="close" data-dismiss="modal">&times;</button>

                    <form name="userUpdateForm" id="userUpdateForm" method="post">

                        <div class="form-group hidden">
                            <input type="text" class="form-control hidden" name="wpcrl_id" id="wpcrl_id">
                        </div>

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



                        <div class="form-group">
                            <button type="submit" class="update btn"> Update</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>


<?php wp_footer(); ?>

<?php get_template_part('partials/footer');?>
<script src="<?php bloginfo('template_directory');?>/resources/vendor/bxslider/dist/jquery.bxslider.js"></script>
<script src="<?php bloginfo('template_directory');?>/resources/vendor/progressbar.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/resources/js/app.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</body>
</html>