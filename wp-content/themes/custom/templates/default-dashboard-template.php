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
                            <p class="info-title">Ваш баланс</p>
                            <p class="info">1,0005</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="gray-bg">
                        <div class="description">
                            <p class="info-title">Текущий бонус</p>
                            <p class="info green">1,0005</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="gray-bg">
                        <div class="description">
                            <p class="info-title">Цена продажи</p>
                            <p class="info">1,0005</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="gray-bg">
                        <div class="description">
                            <p class="info-title">Цена WP Coin</p>
                            <p class="info">1,0005</p>
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

    <div class="col-md-12 col-sm-12 col-xs-12 dashboard-modals">
        <?php get_template_part('partials/dashboard/user-edit-form');?>
    </div>
<?php get_footer(); ?>