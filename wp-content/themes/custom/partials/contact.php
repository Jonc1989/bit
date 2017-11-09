<div class="col-md-12 clear-pads" id="contact">
	<div class="container border-bottom">

		<h1 class="title">Свяжитесь с нами</h1>

		<div class="col-md-12 clear-pads">
			<?php if( get_field( 'contact_form' )){ ?>
				<?php echo do_shortcode( get_field( 'contact_form' ) );?>
			<?php } ?>

			<div class="col-md-6 contactinfo">
				<div class="col-md-12 address">
					<div class="address-icon"></div>
					<p>182250, Псковцкая обл., Себежцкий п н г Себеж, ул. В И Марго д 32</p>
				</div>
				<div class="col-md-12 phone border-bottom">
					<div class="phone-icon"></div>
					<p>+ 371 29120386</p>
				</div>
				<div class="col-md-12 clear-pads soc-icons">
					<a href="#" class="vk"><div class="vk-yellow-icon"></div> </a>
					<a href="#" class="fb"><div class="fb-yellow-icon"></div></a>
					<a href="#" class="telegraph"><div class="telegraph-yellow-icon"></div></a>
					<p> <?php echo  __( 'Наши страницы в социальных сетях', 'preico' );?> </p>
				</div>
			</div>
		</div>
	</div>
</div>

