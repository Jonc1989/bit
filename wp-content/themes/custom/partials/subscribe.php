<div class="col-md-12" id="subscribe">


	<div class="container subscription-container">

		<div class="col-md-6 subscribe-description">
			<div class="col-md-3">
				<img src="<?php bloginfo('template_directory');?>/resources/images/mail.png">
			</div>
			<div class="col-md-9">
				<h1>Подпишитесь</h1>
				<p>еженедельную подпискa новостей.
					Информация, которая будет отсилаться
					при подписке.
				</p>
			</div>

		</div>
		<div class="col-md-6">
			<?php es_subbox( $namefield = "YES", $desc = "", $group = "" ); ?>

		</div>
	</div>
</div> 