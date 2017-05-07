<?php
/**
 * Template Name: Store Page
 * Description: Displays store page.
 *
 * @package WordPress
 * @subpackage Buoy
 */
?>

<?php BsWp::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section id="what-we-do" class="section bg-light-grey">
        <div class="container">

            <div class="row">
                <div class="col-sm-6 text-left">
                <?php echo do_shortcode('');?>
                </div>
            </div>

        </div>
    </section>






<?php endwhile; endif; ?>
<?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>
