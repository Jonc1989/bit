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
			
			<div class="progress-bar-wrap">
				<h4>PRE ICO progress bar</h4>
				<p>Minimal contribution: 3 ETH</p>
				<div class="stat-levels">
					<div class="stat-2 stat-bar">
						<span class="stat-bar-rating" role="stat-bar" style="width: 45%;">45%</span>
					</div>
				</div>
				<p>Currantly received 1224 ETH</p>
			</div>
			
		</div>
	</div>

</div>