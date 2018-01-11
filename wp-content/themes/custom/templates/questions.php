<?php
/**
 * Template Name: Questions
 */
get_header(); ?>
<div class="col-md-12 col-sm-12 col-xs-12 questions-template">
    <div class="col-md-12 col-sm-12 col-xs-12 clear-pads" id="questions">

        <?php get_template_part('partials/menu');?>

        <div class="container">

            <div class="question-wrap col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-offset-0 col-xs-12">
                <?php
                $args = array(
                    'post_type'      => 'questions',
                    'post_status'    => 'publish',
                    'orderby'        => 'post_date',
                    'order'          => 'DESC'
                );
                $posts = new WP_Query( $args );

                if ( $posts->have_posts() ) : ?>

                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

                    <a class="" data-toggle="collapse" href="#id<?php echo get_the_ID();?>" role="button" aria-expanded="false" aria-controls="id<?php echo get_the_ID();?>">
                        <div class="question-toggle">
                            <div class="question-title"> <?php the_title(); ?></div>

                            <span>
                                <img class="bullet" src="<?php bloginfo('template_directory');?>/resources/images/yellow-arrow.png">
                            </span>
                        </div>
                    </a>

                    <div class="collapse" id="id<?php echo get_the_ID();?>">
                        <div class="questions">
                            <?php the_content(); ?>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>