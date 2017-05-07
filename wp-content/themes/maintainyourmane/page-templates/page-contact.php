<?php
/**
 * Template Name: Contact Page
 * Description: Displays contact page.
 *
 * @package WordPress
 * @subpackage COG Bolton
 */
?>

<?php BsWp::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section id="page-custom" class="section margin-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <h3 id="intro-text" class="fw-900 text-gold sp-2 margin-top text-uppercase"><?php the_title(); ?></h3>
                </div>
            </div>
        </div>
</section>

  <section id="contact-form" class="section bg-white">
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]');?>
          </div>
        </div>
      </div>
     </section>

<?php endwhile; endif; ?>
<?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>
