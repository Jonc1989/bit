<?php
/**
 * Template Name: Dashboard
 */

get_header(); ?>
<?php $page = get_page_by_title( 'Dashboard' );
$content = apply_filters('the_content', $page->post_content); ?>


	<div class="col-md-12 col-sm-12 col-xs-12 clear-pads dashboard-template">

        <?php get_template_part('partials/dashboard/side-menu');?>

        <div class="content-wrap col-md-12 col-sm-12 col-xs-12 extended">


            <?php get_template_part('partials/dashboard/header');?>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12">
                    <h4><?php echo __( 'Личный кабинет', 'preico' ) ?></h4>
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
                    <?php echo $content; ?>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12" style="">
                    <a href="" class="" data-toggle="modal" data-target="#videoModal">
                        <div class="col-md-12 col-sm-12 col-xs-12 clear-pads video-preview" style="">

                        </div>
                    </a>


                </div>
            </div>
        </div>





	</div>

    <div class="dashboard-modals">
        <div class="modal fade" id="videoModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body"><button type="button" class="close" data-dismiss="modal">&times;</button>
                        <iframe

                            src="https://www.youtube.com/embed/iXAbte4QXKs"
                            frameborder="0" gesture="media"
                            allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
        <?php get_template_part('partials/dashboard/user-edit-form');?>
    </div>
<?php get_template_part('partials/footer-scripts');?>