<?php if( !is_user_logged_in() ){ header('Location: '. site_url()); } ?>
<?php
/**
 * Template Name: Default dashboard template
 */

get_header(); ?>



    <div class="col-md-12 col-sm-12 col-xs-12 clear-pads dashboard-template">

        <?php get_template_part('partials/dashboard/side-menu');?>

        <div class="content-wrap col-md-12 col-sm-12 col-xs-12 extended">


            <?php get_template_part('partials/dashboard/header');?>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12">
                    <h4></h4>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 rounded">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="yellow-bg">
                        <div class="description">
                            <p class="info-title"><?php echo __( 'Ваш баланс', 'preico' ) ?></p>
                            <p class="info">1,0005</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="gray-bg">
                        <div class="description">
                            <p class="info-title"><?php echo __( 'Скидка', 'preico' ) ?></p>
                            <p class="info green">1,0005</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="gray-bg">
                        <div class="description">
                            <p class="info-title"><?php echo __( 'Заработок ETH', 'preico' ) ?></p>
                            <p class="info">1,0005</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="gray-bg">
                        <div class="description">
                            <p class="info-title"><?php echo __( 'Статус', 'preico' ) ?></p>
                            <p class="info">Premium</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><div class="col-md-12 col-sm-12 col-xs-12"><div class="col-md-12 col-sm-12 col-xs-12 border-bottom"></div></div></div>

            <div class="col-md-12 col-sm-12 col-xs-12 dashboard">
                <div class="col-md-6 col-sm-12 col-xs-12">

                </div>

            </div>
        </div>





    </div>

    <div class="dashboard-modals">
        <?php get_template_part('partials/dashboard/user-edit-form');?>
    </div>
<?php get_template_part('partials/footer-scripts');?>