<?php
/**
 * Template Name: Booking Page
 * Description: Displays booking page.
 *
 * @package WordPress
 * @subpackage MYM
 */
?>

<?php BsWp::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


  <section id="booking-cal" class="section bg-white">
        <div class="row">
          <div class="col-sm-12">
            <?php
			the_content();
		      ?>
          </div>
      </div>
     </section>

<?php endwhile; endif; ?>
<?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>
