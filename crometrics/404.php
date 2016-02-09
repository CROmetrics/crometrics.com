<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!-- Contact -->
  <div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="contact-modal-label">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
         <?php dynamic_sidebar('Contact Form'); ?>
      </div>
    </div>
  </div>
  <!-- /Contact -->


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
			  <!-- Main jumbotron for a primary marketing message or call to action -->
                <div class="container-fluid bg-gray-darker">
                  <div class="container">
		        		<h3 class="page-title"><?php _e( 'Not Found', 'twentyfourteen' ); ?></h3>
		        		 </div>
  </div>
			</header>

			<div class="page-content">
			<div class="container">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen' ); ?></p>

				<?php get_search_form(); ?>
			</div>				
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php

get_footer();
