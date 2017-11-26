<div class="col-md-12 col-sm-12 col-xs-12" id="footer-wrap">
	<div class="container">

		<div class="col-md-12 clear-pads">
			<a href="#">
				<div class="logo">
					<img src="<?php bloginfo('template_directory');?>/resources/images/logo.png"
					     srcset="<?php bloginfo('template_directory');?>/resources/images/logo@3x.png 3x"
					     class="header-logo">
				</div>
			</a>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 clear-pads">
			<div class="pipka"></div>
		</div>
		<div class="col-md-4 clear-pads">
			<?php
			$menu_locations = get_nav_menu_locations();
			$menu = $menu_locations[ 'footer' ];
			$menu = wp_get_nav_menu_items( $menu );
			?>
			<ul >
				<?php foreach ( $menu as $item ){?>
					<li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
				<?php } ?>

			</ul>
		</div>
        <div class="col-md-4">
            <div class="col-md-6 clear-pads">
                <ul >
                <?php foreach ( $menu as $item ){?>
                    <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                <?php } ?>
                </ul>
            </div>
            <div class="col-md-6 clear-pads">
                <ul >
                <?php foreach ( $menu as $item ){?>
                    <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                <?php } ?>
                    </ul>
            </div>
        </div>

		<div class="col-md-4 contactinfo clear-pads">
			<p class="addressinfo"><?php echo get_option( 'address_input' );?></p>
			<p ><?php echo get_option( 'phone_input' );?></p>
			<p><?php echo get_option( 'admin_email' );?></p>
		</div>

		<div class="col-md-12 clear-pads">
			<div class="copyright">Copyright © ПРОЕКТ “WOOD PELLETS”</div>
		</div>
	</div>

		<div id="widgetized-footer">
		<?php /*if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer')) : else : */?>
			<!--<div class="pre-widget">
				<p><strong>Widgetized Footer</strong></p>
				<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
			</div>-->
		<?php /*endif; */?>

	</div>
</div> 