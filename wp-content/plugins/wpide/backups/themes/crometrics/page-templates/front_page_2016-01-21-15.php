<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "07c026866fdfb395aacc228d533d81fe83a300be6b"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/themes/crometrics/page-templates/front_page.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/plugins/wpide/backups/themes/crometrics/page-templates/front_page_2016-01-21-15.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: The Front Page
 * 
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header(); ?>

<?php
while(have_posts()): the_post();
?> 

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
<div class="jumbotron">
<div class="container">
  <?php the_content(); ?>
</div>
</div>

<div class="container">
<h3 class="text-uppercase text-center">What we do</h3>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4">
	<img class="center-block" src="<?php echo get_template_directory_uri(); ?>/images/rocket.png" />
	<h2 class="text-center">We get your growth programs launched.</h2>
	<p>CROmetrics provides marketing, product, design, and engineering expertise to expand your team's capacity. We can implement these growth programs end-to-end for you or can work alongside your existing teams.</p>
  </div>
  <div class="col-md-4">
	<img class="center-block" src="<?php echo get_template_directory_uri(); ?>/images/iterate.png" />
	<h2 class="text-center">We help you learn and rapidly iterate.</h2>
	<p>We create elegant, simple user experiences that engage your customers. We design, build, and run these experiments for you. We'll draw insight from the data to iterate rapidly and often.</p>
  </div>
  <div class="col-md-4">
	<img class="center-block" src="<?php echo get_template_directory_uri(); ?>/images/growth.png" />
	<h2 class="text-center">We help you grow<br />customers and revenue.</h2>
	<p>Our clients achieve higher conversions, earn greater profits, and see accelerated growth. Our clients also evolve to become more lean and data-driven.</p>
  </div>
</div>
</div>

<div class="container-fluid bg-gray-lighter">
<?php the_field( "crometrics_content" ); ?>
</div>

<div class="container-fluid bg-gray">
<div class="container">
  <h3 class="text-uppercase text-center"><?php the_field( "services_title" ); ?></h3>
  <div class="row">
  
<?php if( get_field('services_strip') ): ?>							 
		<?php $i=1; while( has_sub_field('services_strip') ): ?>	
	<div class="col-md-4">
	  <h2 class="text-center"><?php the_sub_field('title'); ?></h2>
	  <hr class="small brown">
	  <p><?php the_sub_field('content'); ?></p>
	</div>
		<?php $i++; endwhile; ?>		                
<?php endif; ?>  

	
  </div>
</div>
</div>

<div class="container">
<h3 class="text-uppercase text-center"><?php the_field( "success_title" ); ?></h3>
<div class="row">

<?php if( get_field('success_strip') ): ?>							 
		<?php $i=1; while( has_sub_field('success_strip') ): ?>	
  <div class="col-md-6">
	<img src="<?php the_sub_field('image'); ?>" class="center-block">
	<div class="divider">
	  <hr class="small gray">&#8220;
	  <hr class="small gray">
	</div>
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

<div class="container-fluid bg-gray-lighter">
<div class="container">
  <h3 class="text-uppercase text-center">Awards</h3>
  <h2 class="text-center">CROmetrics is proudly listed as a 3-star Optimizely partner, the highest distinction given to solutions partners.</h2>
  <div class="row">
	<div class="col-md-4">
	  <img src="<?php echo get_template_directory_uri(); ?>/images/opties-winner-2015.png" class="center-block">
	  <h4 class="text-center">Most Impactful Use of Personalization</h4>
	</div>
	<div class="col-md-4">
	  <img src="<?php echo get_template_directory_uri(); ?>/images/opties-winner-2015.png" class="center-block">
	  <h4 class="text-center">Experience of the Year</h4>
	</div>
	<div class="col-md-4">
	  <img src="<?php echo get_template_directory_uri(); ?>/images/opties-winner-2015.png" class="center-block">
	  <h4 class="text-center">The Better Together Award</h4>
	</div>
  </div>
  <h3 class="text-center">Winner of three 2015 Optie Awards</h3>
</div>
</div>



<?php
endwhile;
?> 


<?php
get_footer();
