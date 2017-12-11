<div class="col-md-12 col-sm-12 col-xs-12" id="roadmap">
	<h1 class="title white"><?php echo __( 'Road map', 'preico' ) ?></h1>
	<ul>
        <?php if( get_field( 'roadmap_events' ) ){
            while(has_sub_field('roadmap_events')):?>
            <?php $file = get_sub_field('roadmap_img');?>
                <li>
                    <div class="li-img-wrap">
                        <img src="<?php echo $file;?>">
                    </div>
                    <div class="li-txt-wrap">
                        <p class="title-text"><?php echo get_sub_field('roadmap_text');?></p>
                        <p class="date-description"><?php echo get_sub_field('roadmap_time');?></p>
                    </div>
                </li>
            <?php endwhile;
        } ?>

	</ul>
</div>