<?php
/**
 * Template Name: Our Clients Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<!-- Contact -->
  <div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="contact-modal-label">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <?php dynamic_sidebar('Contact Form'); ?>
      </div>
    </div>
  </div>
  <!-- /Contact -->

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron jumbo2">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </div>

  <div class="container">
    <h3 class="text-uppercase text-center"><?php the_field( "client_success_title" ); ?></h3>
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-1 col-xs-1"></div>
      
<?php if( get_field('client_success_strip') ): ?>							 
		<?php $i=1; while( has_sub_field('client_success_strip') ): ?>	
      <div class="col-md-2 lrpad10">
        <div class="panel">
          <img class="center-block" src="<?php the_sub_field('icon'); ?>" />
          <h1 class="text-center"><?php the_sub_field('price'); ?></h1>
          <h2 class="text-center"><?php the_sub_field('title'); ?></h2>
          <p><?php the_sub_field('content'); ?></p>
        </div>
      </div>      
		<?php $i++; endwhile; ?>		                
<?php endif; ?> 
      
      <div class="col-md-1 col-xs-1"></div>
    </div>
  </div>

  <div class="container-fluid bg-gray-lighter">
    <div class="container">
      <h3 class="text-uppercase text-center"><?php the_field( "testimonials_title" ); ?></h3>
      <h2 class="text-center"><?php the_field( "testimonials_subtitle" ); ?></h2>
      <h5 class="text-center"><?php the_field( "testimonials_content" ); ?></h4>

      <div class="row">
        <div class="col-md-2 hidden-xs">
        </div>
        <div class="col-md-8 col-xs-12 testimonials-wrapper">

          <div class="row">
            <div class="col-md-12 col-xs-12">
              <div class="infobar">
                <div class="cblock" style="font-size:44px;margin-right:5px;">
                  87
                </div>
                <div class="cblock" style="margin-top:2px;">
                  <span style="font-size:20px;">NPS</span><br/>score
                </div>
                <div class="cblock vdivide">
                </div>
                <div class="cblock nps-scale">
                  0 - 10 SCALE
                </div>
              </div>
            </div>
          </div>
          
<?php if( get_field('testimonials_strip') ): ?>							 
		<?php $i=1; while( has_sub_field('testimonials_strip') ): ?>	
          <div class="row">
            <div class="col-md-2 col-xs-3 ten-line-wrapper-col">
              <div class="ten-line"></div>
            </div>
            <div class="col-md-10 col-xs-9">
              <div class="testimonial-block">
                <?php the_sub_field('content'); ?>
              </div>
            </div>
          </div> 
		<?php $i++; endwhile; ?>		                
<?php endif; ?> 

        </div>
        <div class="col-md-2 hidden-xs">
        </div>
      </div>
    </div>
  </div>

  <div class="container client-logos-container">
    <h3 class="text-uppercase text-center"><?php the_field( "delighted_clients_title" ); ?></h3>
    
<?php if( get_field('delighted_clients_logo') ): ?>							 
		<?php $i=1; while( has_sub_field('delighted_clients_logo') ): ?>	

    <div class="row">
        <div class="col-md-12 client-logos">
    
    <?php if( get_sub_field('four_logo_strip') ): ?>							 
		<?php $i=1; while( has_sub_field('four_logo_strip') ): ?>	
        <img src="<?php the_sub_field('logo'); ?>"/>	
      		<?php $i++; endwhile; ?>		                
<?php endif; ?>  

        </div>      
    </div>
    
		<?php $i++; endwhile; ?>		                
<?php endif; ?>  
    
  </div>

  <div class="container-fluid bg-gray-lighter">
        <?php the_field( "clients_bottom_content" ); ?>
  </div>

<?php endwhile; ?>

<?php
get_footer();
