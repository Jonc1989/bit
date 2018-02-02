<?php if( !is_user_logged_in() ){ header('Location: '. site_url()); } ?>
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
                    <?php echo $content; ?>
                </div>

                <?php
                $video_id = null;
                if( strpos( get_field( 'video_url' ), "=") != 0 ){
                    $video_id  = substr( get_field( 'video_url' ), strpos( get_field( 'video_url' ), "=") + 1);
                }else{
                    $parts = explode("/", get_field( 'video_url' ) );
                    $video_id = $parts[ count( $parts ) - 1 ];
                }

                $preview = '';
                if(@file_get_contents("https://img.youtube.com/vi/".$video_id."/maxresdefault.jpg"))
                {
                    $preview = "https://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
                }
                elseif( @file_get_contents("https://img.youtube.com/vi/".$video_id."/maxresdefault.jpg") )
                {
                    $preview = "https://img.youtube.com/vi/".$video_id."/sddefault.jpg";
                }else{
                    $preview = "https://img.youtube.com/vi/".$video_id."/0.jpg";
                }
                ?>
                <div class="col-md-6 col-sm-12 col-xs-12" style="">
                    <a href="" class="" data-toggle="modal" data-target="#videoModal">
                        <div class="col-md-12 col-sm-12 col-xs-12 clear-pads video-preview" style="background: url(<?php echo $preview; ?>)no-repeat center center;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;">

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

                            src="<?php echo get_field( 'video_url' );?>"
                            frameborder="0" gesture="media"
                            allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
        <?php get_template_part('partials/dashboard/user-edit-form');?>
    </div>
<?php get_template_part('partials/footer-scripts');?>