<?php
/*
Template Name: Search Page
 */
?>>
<?php
/**
 * The template for displaying search results
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="container-fluid bg-gray-darker">
    <div class="container">
      <h3 class="text-uppercase text-light-gray"><?php the_title(); ?></h3>
      <h2><?php the_field( "subtitle" ); ?></h2>
      <?php get_search_form(); ?>
      <p>foo</p>
    </div>
  </div>
  
  <div class="container">
    <?php the_content(); ?>
  </div>
  
  

<?php

get_footer();
