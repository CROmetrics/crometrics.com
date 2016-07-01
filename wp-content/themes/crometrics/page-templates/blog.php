<?php
/**
 * Template Name: Blog Page
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
  
<?php endwhile; ?>
  
  <div class="container">
    <div class="left_blog">
        <?php global $wp_query;
        $wp_query = new WP_Query("post_type=post&post_status=publish");?>
        <?php while (have_posts()) : the_post(); ?> 
           <div class="bloglist"> <h3 class="blog-page-blog-excerpt-header"><?php the_title(); ?></h3>
            <?php the_excerpt(); ?> </div>  
        <?php endwhile; wp_reset_query(); ?> 
    </div>
    <div class="right_blog">
        <?php dynamic_sidebar('Blog Sidebar'); ?>
    </div>
    <div class="clear"></div>
  </div>
  
  


<?php
get_footer();
