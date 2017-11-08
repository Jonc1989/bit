<div class="col-md-12 clear-pads" id="contact">
	<div class="container border-bottom">

		<h1 class="title">Свяжитесь с нами</h1>


		<?php if( get_field( 'contact_form' )){ ?>
			<?php echo do_shortcode( get_field( 'contact_form' ) );?>
		<?php } ?>

		<div class="col-md-6">

		</div>
		<div class="col-md-6">

		</div>
	</div>
</div>

