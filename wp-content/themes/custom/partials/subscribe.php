<div class="col-md-12 col-sm-12 col-xs-12" id="subscribe">


	<div class="container subscription-container">

		<div class="col-md-6 col-sm-6 subscribe-description ">
			<div class="col-md-3 col-sm-12 clear-pads">
				<img src="<?php bloginfo('template_directory');?>/resources/images/mail.png">
			</div>
			<div class="col-md-9 col-sm-12">
				<h1><?php echo __( 'Подпишитесь', 'preico' ) ?></h1>
				<p><?php echo __( 'еженедельную подпискa новостей.
					Информация, которая будет отсилаться
					при подписке.', 'preico' ) ?>
				</p>
			</div>

		</div>
		<div class="col-md-6 col-sm-6">
			<?php es_subbox( $namefield = "YES", $desc = "", $group = "" ); ?>

		</div>
	</div>
</div> 