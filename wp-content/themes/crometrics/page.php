<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
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
  <div class="container-fluid bg-gray-darker">
    <div class="container">
      <h3 class="text-uppercase text-light-gray"><?php the_title(); ?></h3>
      <h2><?php the_field( "subtitle" ); ?></h2>
    </div>
  </div>
  
  <div class="container">
    <?php the_content(); ?>
  </div>
  
  
<?php endwhile; ?>

<?php

get_footer();
