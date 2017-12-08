<?php if( get_option( 'show_counter' )){ ?>
	<div class="col-md-12 col-sm-12 col-xs-12 clear-pads" id="counter">
		<h4><?php echo __( 'До конца PRE ICO', 'preico' ) ?></h4>
		<div class="counter-wrap">
			<div class="days dark-bg">
				<div class="counter-number"></div>
				<div class="counter-text"><?php echo __( 'Days', 'preico' ) ?></div>
			</div>
			<div class="hours dark-bg">
				<div class="counter-number"></div>
				<div class="counter-text"><?php echo __( 'Hours', 'preico' ) ?></div>
			</div>
			<div class="minutes dark-bg">
				<div class="counter-number"></div>
				<div class="counter-text"><?php echo __( 'Minutes', 'preico' ) ?></div>
			</div>
			<div class="seconds dark-bg">
				<div class="counter-number"></div>
				<div class="counter-text"><?php echo __( 'Seconds', 'preico' ) ?></div>
			</div>
		</div>
	</div>
<?php }?>

