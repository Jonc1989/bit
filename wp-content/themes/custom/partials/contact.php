<div class="col-md-12 col-sm-12 col-xs-12 clear-pads" id="contact">
	<div class="container border-bottom">

		<h1 class="title"><?php echo __( 'Свяжитесь с нами', 'preico' ) ?></h1>

		<div class="col-md-12 col-sm-12 col-xs-12 clear-pads">
            <div class="col-md-6 col-sm-12 col-xs-12 contactinfo">
                <div class="col-md-12 col-sm-6 clear-pads">
                    <div class="address">

                        <img class="address-icon" src="<?php bloginfo('template_directory');?>/resources/images/icons/address.png">
                        <p><?php echo get_option( 'address_input' ); ?></p>
                    </div>
                    <div class="phone">

                        <img class="phone-icon" src="<?php bloginfo('template_directory');?>/resources/images/icons/phone.png">
                        <p><?php echo get_option( 'phone_input' ); ?></p>
                    </div>
                </div>

                <div class="col-md-12 col-sm-6 clear-pads soc-icons">
                    <a href="#" class="vk"><div class="vk-yellow-icon"></div> </a>
                    <a href="#" class="fb"><div class="fb-yellow-icon"></div></a>
                    <a href="#" class="telegraph"><div class="telegraph-yellow-icon"></div></a>
                    <p> <?php echo  __( 'Наши страницы в социальных сетях', 'preico' );?> </p>
                </div>
            </div>

            <?php if( get_field( 'contact_form' )){ ?>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<?php echo do_shortcode( get_field( 'contact_form' ) );?>
			</div>
			<?php } ?>


		</div>
	</div>
</div>

