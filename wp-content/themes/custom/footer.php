
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
</div>


<?php wp_footer(); ?>

<?php get_template_part('partials/footer');?>
<script src="<?php bloginfo('template_directory');?>/resources/js/vendor/bxslider-4-master/dist/jquery.bxslider.js"></script>
<script src="<?php bloginfo('template_directory');?>/resources/js/vendor/progressbar.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/resources/js/app.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</body>
</html>