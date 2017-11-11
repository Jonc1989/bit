<div class="col-md-12 clear-pads" id="banner">
	<div class="container">

		<div class="col-md-6">
			<div class="yellow-text yellow-bg"><?php echo get_bloginfo( 'name' ) ?></div>
			<h1><?php echo get_bloginfo( 'description' ) ?></h1>
			<p>Индустрия по производству
				пеллет в блокчейне</p>

			<div class="clear-pads col-md-12 documents">
				<?php if( get_field( 'documents' ) ){
					while(has_sub_field('documents')):?>
						<div class="col-md-12 yellow">
							<div class="row document">
								<?php if( get_sub_field( 'document_file' )){ ?>
									<a href="<?php echo get_sub_field('document_file');?>">
										<?php if( get_sub_field( 'document_icon' )){ ?>
											<img src="<?php echo get_sub_field('document_icon');?>">
										<?php } else { ?>
											<img src="<?php bloginfo('template_directory');?>/resources/images/icons/download.png">
										<?php } ?>

										<?php if( get_sub_field( 'document_title' )){ ?>
											<span><?php echo get_sub_field('document_title');?></span>
										<?php } else { ?>
											<span>|<?php __( 'Document', 'preico' ) ?> </span>
										<?php } ?>
									</a>
								<?php } ?>
							</div>
						</div>
					<?php endwhile;
				} ?>
			</div>


			<div class="clear-pads col-md-12 documents">
				<?php if( get_field( 'external_links' ) ){
					while(has_sub_field('external_links')):?>
						<div class="col-md-12 yellow">
							<div class="row document">
								<?php if( get_sub_field( 'link_url' )){ ?>
									<a href="<?php echo get_sub_field('link_url');?>">
										<?php if( get_sub_field( 'link_name' )){ ?>
											<span><?php echo get_sub_field('link_name');?></span>
										<?php } else { ?>
											<span>|<?php __( 'Url', 'preico' ) ?> </span>
										<?php } ?>
									</a>
								<?php } ?>
							</div>
						</div>
					<?php endwhile;
				} ?>
			</div>
			


		</div>
		<div class="col-md-6">
			<?php get_template_part('partials/header/circle');?>


			<div class="col-md-12 clear-pads welcome-links">
				<a class="btn join-link" href="/login">УЧАСТВОВАТЬ</a>
			</div>
		</div>
	</div>
</div> 