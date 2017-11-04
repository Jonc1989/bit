<div class="col-md-12 clear-pads" id="progress">
	<div class="container">
		<div class="col-md-6">
			<?php if(get_field('pre_ico_progress_fields')):?>


				<?php $n = 1; while(has_sub_field('pre_ico_progress_fields')):?>

					<p><?php echo get_sub_field('progress_title');?></p>
					<p><?php echo get_sub_field('progress_description');?></p>

					<?php $n++; endwhile;?>

			<?php endif;?>
		</div>
		<div class="col-md-6">
			PRE ICO progress bar
		</div>
	</div>

</div>