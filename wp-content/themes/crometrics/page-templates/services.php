<?php
/**
 * Template Name: Services Page
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

  <div class="container-fluid bg-gray-darker">
    <div class="container">
        <?php the_content(); ?>      
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
<?php if( get_field('services_strip') ): ?>							 
		<?php $i=1; while( has_sub_field('services_strip') ): ?>	
		
      <div class="col-md-4">
        <img class="center-block" src="<?php the_sub_field('image'); ?>" />
        <?php the_sub_field('content'); ?>
      </div>
      
		<?php $i++; endwhile; ?>		                
<?php endif; ?>       
    </div>
  </div>

  <div class="container-fluid bg-gray">
    <div class="container">
      <h3 class="text-uppercase text-center"><?php the_field( "who_calls_title" ); ?></h3>
      <div class="row">
       
<?php if( get_field('who_calls_strip') ): ?>							 
		<?php $i=1; while( has_sub_field('who_calls_strip') ): ?>	
	<div class="col-md-4">
	  <h2 class="text-center"><?php the_sub_field('title'); ?></h2>
	  <hr class="small brown">
	  <?php the_sub_field('content'); ?>
	</div>
		<?php $i++; endwhile; ?>		                
<?php endif; ?>  
       
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h2 class="text-center"><?php the_field( "left_content" ); ?></h2>
      </div>
      <div class="col-md-7">
        <?php the_field( "right_content" ); ?>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-gray-lighter">
    <div class="container">
      <?php the_field( "bottom_content" ); ?>
    </div>
  </div>

<?php endwhile; ?>

<?php
get_footer();
