<?php
/**
 * Template Name: Custom Page 
 * Description: Custom page.
 *
 * @package WordPress
 * @subpackage buoy
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
            
            <div class="row">
              <div class="col-sm-12">
                  <?php the_content(); ?>
              </div>
            </div>
            
        </div>
</section>

  




<?php endwhile; endif; ?>
<?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>
