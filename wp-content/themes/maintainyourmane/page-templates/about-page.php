<?php
/**
 * Template Name: About Page
 * Description: Displays about page.
 *
 * @package WordPress
 * @subpackage COG Bolton
 */
?>

<?php BsWp::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section id="what-we-do" class="section bg-light-grey">
    <div class="container">

        <div class="row">
          <div class="col-sm-6 text-left">
              <h3 id="intro-text" class="fw-900 text-dark-blue text-uppercase sp-4"><?php the_field('what_we_do');?></h3>
              <h5 class="text-medium-grey fw-400 margin-top-35 line-height-35"><?php the_field('what_we_do_text');?></h5>
          </div>
        </div>

     </div>
  </section>

  <section id="services" class="section bg-white">
    <div class="container">
      <?php
            $args = array('post_type' => 'service');
            $service_query = new WP_Query($args);
              if( $service_query->have_posts() ) : while ( $service_query->have_posts() ) : $service_query-> the_post(); ?>
              <div class="col-sm-4 text-left service">
                <h5 id="intro-text" class="fw-900 text-dark-blue text-uppercase sp-4"><?php the_field('service_title');?></h5>
                <h5 class="text-medium-grey fw-400 margin-top-35 line-height-35"><?php the_field('service_text');?></h5>
                <h6 class="text-medium-grey fw-400 margin-top-35 italic"><?php the_field('service_price');?></h6>
              </div>
          <?php endwhile; else: ?>
            <p> There are no projects yet. </p>
          <?php endif;?>
              <?php wp_reset_query(); ?>
     </div>
  </section>




<?php endwhile; endif; ?>
<?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>
