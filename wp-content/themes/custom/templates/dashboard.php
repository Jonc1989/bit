<?php
/**
 * Template Name: Dashboard
 */

get_header(); ?>

<style>
	.menu-container{
		background-color: #110f0e;
	}
</style>
	<div class="col-md-12 clear-pads dashboard-template">

        <div class="col-md-3 side-menu clear-pads">
            <a href="<?php echo home_url() ?>">
                <div class="logo">
                    <img src="<?php bloginfo('template_directory');?>/resources/images/logo.png"
                         srcset="<?php bloginfo('template_directory');?>/resources/images/logo@3x.png 3x"
                         class="header-logo">
                </div>
            </a>
            



            <div class="roadmap-item">
                <div class="li-img-wrap">
                    <img src="<?php bloginfo('template_directory');?>/resources/images/marketing.png">

                </div>
                <p class="title-text"><?php echo __( 'Маркетинговая составляющая', 'preico' ) ?></p>
            </div>

            <div class="roadmap-item">
                <div class="li-img-wrap">
                    <img src="<?php bloginfo('template_directory');?>/resources/images/registracija.png">

                </div>
                <p class="title-text"><?php echo __( 'Пегистрационные процессы', 'preico' ) ?></p>
            </div>



        </div>
        <div class="clear-pads col-md-9">
            <div class="col-md-12 dashboard-header yellow-bg">
                <span>Ваш баланс</span>
                <button class="btn- btn-success">Инвестировать</button>
                <span style="float: right;"><?php echo wp_get_current_user()->user_login ; ?></span>
            </div>

            <div class="col-md-12">
                <h4>Dashboard</h4>
            </div>

            <div class="col-md-12 rounded">
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

            <div class="col-md-12">
                <div class="col-md-6">
                    Что необходимо для выведение средств
                    Обратный выкуп опционов WPCoin начнется через 15 месяцев после окончания сбора средств в размере
                    , 50% от прибыли исходя из квартальных отчетов.
                    Также инвесторы получат право обмена WPCoin на соответствующее количество древесных гранул исходя
                    из расчета  1тонна древесных гранул =100 WPCoin = на условиях FCA:
                    Lorem ipsum dolor sit amet.
                    consectetur adipisicing elit, sed do eiusmod tempo.
                    labore et dolore magna aliqua.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                    aperiam, eaque ipsa quae ab illo inventore.
                </div>
                <div class="col-md-6" style="">
                    <a href="" class="" data-toggle="modal" data-target="#videoModal">
                        <div class="col-md-12 clear-pads video-preview" style="">

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