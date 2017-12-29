<?php
/**
 * Template Name: Questions
 */
get_header(); ?>
<div class="questions-template">
    <div class="col-md-12 col-sm-12 col-xs-12 clear-pads" id="questions">

        <?php get_template_part('partials/menu');?>

        <div class="container">


            <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <div class="question-toggle">
                    Question
                    <span>
                        <img class="bullet" src="<?php bloginfo('template_directory');?>/resources/images/yellow-arrow.png">
                    </span>
                </div>
            </a>

            <div class="collapse" id="collapseExample">
                <div class="questions">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div>

            <a class="" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                <div class="question-toggle">
                    Question2
                    <span>
                        <img class="bullet" src="<?php bloginfo('template_directory');?>/resources/images/yellow-arrow.png">
                    </span>
                </div>
            </a>

            <div class="collapse" id="collapseExample2">
                <div class="questions">
                    Anim pariatur cliche repreh endfgg fgeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div>
        </div>

    </div>


</div>

<?php get_footer(); ?>