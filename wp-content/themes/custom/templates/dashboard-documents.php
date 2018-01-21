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
                                    <div class="col-md-12">
                                        <?php echo get_sub_field( 'category_name' ); ?>
                                        <div class="collapse-arrow">

                                        </div>
                                    </div>

                                </div>


                            </a>

                            <div class="collapse" id="<?php echo $id;?>">

                                <div class="col-md-12 document-list-header border-bottom">
                                    Name
                                </div>

                                <?php while(has_sub_field( 'document_files' )):?>
                                    <div class="col-md-12 document-item border-bottom">
                                        <div class="col-md-9 col-sm-8 col-xs-8 clear-pads">
                                            <?php echo get_sub_field( 'document_title' ); ?>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 clear-pads">
                                            <a target="_blank" href="<?php echo get_sub_field( 'document_file' ); ?>">
                                                <div class="open-document">
                                                    Open
                                                </div>
                                            </a>
                                        </div>

                                    </div>




                                <?php endwhile; ?>
                            </div>



                        <?php } ?>

                    <?php endwhile; ?>
                <?php } ?>
            </div>
        </div>





    </div>
<?php get_footer(); ?>