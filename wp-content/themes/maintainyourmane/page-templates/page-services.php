<?php
/**
 * Template Name: Services Page
 * Description: Displays who  we are page.
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
        </div>
</section>

 <section id="services" class="section clearfix">

        <div class="container">
            
                          <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                  
                        <li role="presentation" class="active"><a href="#all" aria-controls="home" role="tab" data-toggle="tab">All</a></li>
                  
                  <?php if( have_rows('the_services') ):

                        while ( have_rows('the_services') ) : the_row(); ?>
                  
                          <li role="presentation" class=""><a href="#<?php the_sub_field('service_name');?>" aria-controls="home" role="tab" data-toggle="tab"><?php the_sub_field('service_name');?></a></li>

                  <?php endwhile; else : ?>

                        <p>there are no services, fuck off</p>

                   <?php endif;?>
              
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="<?php the_sub_field('service_name');?>">
                  
                      <p> put whatever the fuck you want in here</p>
                </div>
                   <?php if( have_rows('the_services') ):

                        while ( have_rows('the_services') ) : the_row(); ?>
                  
                         <div role="tabpanel" class="tab-pane" id="<?php the_sub_field('service_name');?>">
                  
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div id="service-icon" class="col-md-6">
                                    <?php the_sub_field('service_icon');?>
                                </div>
                                <div id="service-name-text" class="col-md-6">
                                    <?php the_sub_field('service_name');?>
                                </div>
                                <div id="service-text-p" class="col-md-12">
                                    <?php the_sub_field('service_text');?>
                                </div>  
                             </div>
                  
                        </div>

                  <?php endwhile; else : ?>

                        <p>there are no services, fuck off</p>

                   <?php endif;?>
               
                  
              </div>
        </div>
    </section>


<?php endwhile; endif; ?>
<?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>
