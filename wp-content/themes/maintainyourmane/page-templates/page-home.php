<?php
/**
 * Template Name: Home Page
 * Description: Displays contact page.
 *
 * @package WordPress
 * @subpackage COG Bolton
 */
?>

<?php BsWp::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section id="banners" class="clearfix">
        <div class="row">
            <div class="banners">
                <ul>
                    <!--loop starts here-->
                    <?php if (have_rows('slider')):
                        while (have_rows('slider')) : the_row(); ?>
                            <li
                                    style='background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("<?php the_sub_field('banner_image'); ?>");background-size: cover;background-attachment: fixed; height: 60vh;'>
                                <div class="col-sm-12 banner-text text-right">
                                    <h2><?php the_sub_field('heading'); ?></h2>
                                    <h1><?php the_sub_field('sub_heading'); ?></h1>
                                    <h4><?php the_sub_field('sub_text'); ?></h4>
                                    <a class="btn btn-style-4" href="<?php echo the_sub_field('slider_url'); ?>">View
                                        Range</a>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <li>You haven't added any data yet.</li>
                    <?php endif; ?>
                    <!--loop ends here-->
                </ul>
            </div>
        </div>
    </section>


    <section id="blocks" class="clearfix text-center">
        <div class="row">
            <!--loop starts here-->
            <?php if (have_rows('featured')):
                while (have_rows('featured')) : the_row(); ?>
                    <div class="col-sm-4">
                        <div class="hvr-glow block" style='background: <?php the_sub_field('background_color'); ?>;'>
                            <div class="circle-bg">
                                <h3><?php the_sub_field('featured_icon'); ?></h3>
                                <h5><?php the_sub_field('featured_title'); ?></h5>
                            </div>
                            <h3><?php the_sub_field('featured_sub_title'); ?></h3>
                            <a class="btn btn-style-3" href="<?php the_sub_field('featured_url'); ?>">More
                                Information</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>You haven't added any data yet.</p>
            <?php endif; ?>
            <!--loop ends here-->
        </div>
    </section>

    <section id="info" class="section bg-light-grey clearfix full-height">
        <div class="container-fluid">
            <div class="col-sm-12">
                <!--loop starts here-->
                <?php if (have_rows('latest')):
                    while (have_rows('latest')) : the_row(); ?>

                        <div class="<?php the_sub_field('columns'); ?> text-center">
                            <div class="info-content hvr-glow full-width clearfix"
                                 style='background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?php the_sub_field('image'); ?>");background-size: cover; height: 400px; background-position: center center;'>
                                <h3 id="intro-text"
                                    class="fw-900 white-heading-text animated fadeInLeft wow text-uppercase text-white"
                                    data-wow-delay=".1s"><?php the_sub_field('title'); ?></h3>
                                <h5 class="fw-400 margin-top-35 animated fadeInLeft wow italic text-opaque-white line-height-35"
                                    data-wow-delay=".2s"><?php the_sub_field('sub_title'); ?></h5>
                                <a href="<?php the_sub_field('url'); ?>" class="btn white-button">Shop Now <i
                                            class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>You haven't added any data yet.</p>
                <?php endif; ?>
                <!--loop ends here-->
            </div>
        </div>
    </section>

    <section id="portfolio-snips" class="section clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center margin-bottom">
                    <h2 class="black-heading-text">#maintainyourmane</h2>
                </div>
            </div>
            <div class="row">
                <?php
                $args = array('post_type' => 'portfolio-item',
                    'posts_per_page' => 4);
                $staff_query = new WP_Query($args);
                if ($staff_query->have_posts()) : while ($staff_query->have_posts()) : $staff_query->the_post(); ?>
                    <div class="col-sm-3 col-xs-12 first text-center p-wrap">
                        <div class="p-item hvr-glow"
                             style="background-image: linear-gradient(rgba(219, 212, 189, 0.7), rgba(219, 212, 189, 0.7)), url('<?php echo get_the_post_thumbnail_url($post_id, 'large'); ?>');background-position: center center; background-size: cover;">


                            <div class="p-desc">
                                <p class="p-name" href="#"> <?php the_title(); ?></p>
                            </div>
                        </div>
                    </div>

                <?php endwhile;
                else: ?>
                    <p> There are no portfolio items yet. </p>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>

    <div id="review-slides" class="section clearfix bg-light-grey">
        <div class="row">
            <div class="testimonials">
            <ul>
                <?php
                $args = array('post_type' => 'testimonial',
                    'posts_per_page' => 4);
                $staff_query = new WP_Query($args);
                if ($staff_query->have_posts()) : while ($staff_query->have_posts()) : $staff_query->the_post(); ?>
                    <li class="review-slide">
                        <div class="col-md-8 col-md-offset-2">
                            <h3> <i class="fa fa-quote-left" aria-hidden="true"></i></h3>
                            <h3>
                                <?php the_content();?>
                            </h3>
                            <h6> - <?php the_title();?></h6>
                        </div>
                    </li>

                <?php endwhile;
                else: ?>
                    <p> There are no testimonials yet. </p>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </ul>
            </div>
        </div>
    </div>


    <section id="book-now" class="section bg-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5">
                   
                </div>
                <div class="col-sm-12">
                    <h5 class="text-dark-grey fw-400 margin-top-35 line-height-35"><?php the_field('donate_text'); ?></h5>
                    <a href="#" class="btn btn-style-3">Book Now</a>
                </div>

            </div>
        </div>
    </section>


<?php endwhile; endif; ?>
<?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>
