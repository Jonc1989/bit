<?php
/**
 * Template Name: Dashboard documents
 */

get_header(); ?>



    <div class="col-md-12 col-sm-12 col-xs-12 clear-pads dashboard-template">

        <?php get_template_part('partials/dashboard/side-menu');?>

        <div class="content-wrap col-md-12 col-sm-12 col-xs-12 extended">

            <?php get_template_part('partials/dashboard/header');?>

            <div class="col-md-12 col-sm-12 col-xs-12 dashboard">
                <?php if( get_field( 'document-category' )){ ?>
                    <?php while(has_sub_field( 'document-category' )):?>
                        <?php if( get_sub_field( 'category_name' )){ ?>


                        <div class="col-md-12 col-sm-12 col-xs-12 clear-pads doc-block">
                            <?php $id = randomString();?>
                            <a class="" data-toggle="collapse" href="#<?php echo $id;?>" role="button" aria-expanded="true" aria-controls="<?php echo $id;?>">
                                <div class="document-category gray-bg">
                                    <div class="clear-pads col-md-12 col-sm-12 col-xs-12 doc-category-title">
                                        <?php echo get_sub_field( 'category_name' ); ?>

                                    </div>
                                    <div class="collapse-arrow"><div class="collapse-arrow-img"></div></div>
                                </div>
                            </a>

                            <div class="col-md-12 col-sm-12 col-xs-12 clear-pads collapse in" id="<?php echo $id;?>">
                                <div class="col-md-12 col-sm-12 col-xs-12 document-list-header border-bottom">



                                    <div class="col-md-9 col-sm-8 col-xs-8 clear-pads"><?php echo __( 'Название документа', 'preico' ) ?></div>
                                    <div class="col-md-3 col-sm-4 col-xs-4 clear-pads">
                                        <div class="right-column"><?php echo __( 'Действие', 'preico' ) ?></div>
                                    </div>


                                </div>
                                <?php while(has_sub_field( 'document_files' )):?>
                                    <div class="col-md-12 document-item border-bottom">
                                        <div class="download-name col-md-9 col-sm-8 col-xs-8 clear-pads">
                                            <?php echo get_sub_field( 'document_title' ); ?>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 clear-pads">
                                            <a target="_blank" href="<?php echo get_sub_field( 'document_file' ); ?>">
                                                <div class="open-document">
                                                    <?php echo __( 'Смотреть', 'preico' ) ?>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>


                        <?php } ?>

                    <?php endwhile; ?>
                <?php } ?>
            </div>
        </div>





    </div>

    <div class="dashboard-modals">
        <?php get_template_part('partials/dashboard/user-edit-form');?>
    </div>
<?php get_template_part('partials/footer-scripts');?>