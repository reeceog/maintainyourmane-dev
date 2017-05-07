<?php
/**
 * Template Name: Portfolio Page
 * Description: Displays portfolio page.
 *
 * @package WordPress
 * @subpackage COG Bolton
 */
?>

<?php BsWp::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section id="title-banner" class="section bg-light-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 id="intro-text"
                        class="fw-900 text-red sp-2 margin-top">Portfolio</h3>
                    <h5 class="text-dark-grey fw-400 margin-top-35 line-height-35">Lorem ipsum dolor est amet</h5>
                </div>
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
                $args = array('post_type' => 'portfolio-item');
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


<?php endwhile; endif; ?>
<?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>
