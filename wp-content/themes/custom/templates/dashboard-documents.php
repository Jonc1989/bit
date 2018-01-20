<?php
/**
 * Template Name: Dashboard documents
 */

get_header(); ?>



    <div class="col-md-12 col-sm-12 col-xs-12 clear-pads dashboard-template">

        <?php get_template_part('partials/dashboard/side-menu');?>

        <div class="content-wrap col-md-12 col-sm-12 col-xs-12 extended">


            <div class="col-md-12 col-sm-12 col-xs-12 dashboard-header yellow-bg">
                <div class="balance">
                    <div class="text">Ваш баланс</div>
                    <div class="summ">2,0007</div>
                    <img src="<?php bloginfo('template_directory');?>/resources/images/vikup_tokena.png">
                </div>

                <button class="btn- btn-success invest">Инвестировать</button>
                <a class="user-info" href="""><?php echo wp_get_current_user()->user_login ; ?></a>
            </div>


            <div class="col-md-12 col-sm-12 col-xs-12 dashboard">
                <?php if( get_field( 'document-category' )){ ?>
                    <?php while(has_sub_field( 'document-category' )):?>
                        <?php if( get_sub_field( 'category_name' )){ ?>



                            <?php $id = randomString();?>
                            <a class="" data-toggle="collapse" href="#<?php echo $id;?>" role="button" aria-expanded="false" aria-controls="<?php echo $id;?>">
                                <div class="document-category gray-bg">
                                    <?php echo get_sub_field( 'category_name' ); ?>
                                    <div class="collapse-arrow">

                                    </div>
                                </div>
<span>

                            </span>

                            </a>

                            <div class="collapse" id="<?php echo $id;?>">
                                <?php while(has_sub_field( 'document_files' )):?>


                                    <?php echo get_sub_field( 'document_title' ); ?>


                                <?php endwhile; ?>
                            </div>



                        <?php } ?>

                    <?php endwhile; ?>
                <?php } ?>
            </div>
        </div>





    </div>
<?php get_footer(); ?>