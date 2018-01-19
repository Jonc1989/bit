<?php
/**
 * Template Name: Dashboard
 */

get_header(); ?>
<?php $page = get_page_by_title( 'Dashboard' );
$content = apply_filters('the_content', $page->post_content); ?>


	<div class="col-md-12 col-sm-12 col-xs-12 clear-pads dashboard-template">



        <div class="content-wrap col-md-12 col-sm-12 col-xs-12 extended">
            <div class="col-md-3 col-sm-3 col-xs-3 side-menu clear-pads open">
                <a class="home-link" href="<?php echo home_url() ?>">
                    <div class="logo">
                        <img src="<?php bloginfo('template_directory');?>/resources/images/logo.png"
                             srcset="<?php bloginfo('template_directory');?>/resources/images/logo@3x.png 3x"
                             class="header-logo">
                    </div>
                </a>
                <div class="menu">
                    <a href="http://localhost/bitcoin/dashboard-documents">
                        <div class="menu-item">
                            <div class="li-img-wrap">
                                <img src="<?php bloginfo('template_directory');?>/resources/images/marketing.png">

                            </div>
                            <p class="title-text"><?php echo __( 'Маркетинговая составляющая', 'preico' ) ?></p>
                        </div>
                    </a>
                    <a href="">
                        <div class="menu-item">
                            <div class="li-img-wrap">
                                <img src="<?php bloginfo('template_directory');?>/resources/images/registracija.png">

                            </div>
                            <p class="title-text"><?php echo __( 'Пегистрационные процессы', 'preico' ) ?></p>
                        </div>
                    </a>

                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 menu-collapse">
                    <div class="colapse-text">2Collapse</div>
                    <img src="<?php bloginfo('template_directory');?>/resources/images/vikup_tokena.png">
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 dashboard-header yellow-bg">
                <div class="balance">
                    <div class="text">Ваш баланс</div>
                    <div class="summ">2,0007</div>
                    <img src="<?php bloginfo('template_directory');?>/resources/images/vikup_tokena.png">
                </div>

                <button class="btn- btn-success invest">Инвестировать</button>
                <a class="user-info" href="""><?php echo wp_get_current_user()->user_login ; ?></a>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12">
                    <h4>Dashboard</h4>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 rounded">
                <div class="col-lg-2 col-md-4 col-sm-6 ">
                    <div class="yellow-bg">
                        <div class="description">
                            <p class="info-title">ООО «Ланган»</p>
                            <p class="info">1,0005</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 ">
                    <div class="gray-bg">
                        <div class="description">
                            <p class="info-title">ООО «Ланган»</p>
                            <p class="info">1,0005</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 ">
                    <div class="gray-bg">
                        <div class="description">
                            <p class="info-title">ООО «Ланган»</p>
                            <p class="info">1,0005</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 ">
                    <div class="gray-bg">
                        <div class="description">
                            <p class="info-title">ООО «Ланган»</p>
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
                </div>
            </div>
        </div>





	</div>
<?php get_footer(); ?>