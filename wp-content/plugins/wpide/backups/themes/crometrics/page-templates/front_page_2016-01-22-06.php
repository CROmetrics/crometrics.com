<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "07c026866fdfb395aacc228d533d81feee42117937"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/themes/crometrics/page-templates/front_page.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/plugins/wpide/backups/themes/crometrics/page-templates/front_page_2016-01-22-06.php") )  ) ){
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
<h3 class="text-uppercase text-center"><?php the_field( "what_we_do_title" ); ?></h3>
<!-- Example row of columns -->
<div class="row">

<?php if( get_field('what_we_do_strip') ): ?>							 
		<?php $i=1; while( has_sub_field('what_we_do_strip') ): ?>
  <div class="col-md-4">
	<img class="center-block" src="<?php the_sub_field('image'); ?>" />
	<h2 class="text-center"><?php the_sub_field('title'); ?></h2>
	<p><?php the_sub_field('content'); ?></p>
  </div>  
  		<?php $i++; endwhile; ?>		                
<?php endif; ?>  
  
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
<?php $awards_titl = ot_get_option('awards_title'); ?>
<?php $awards_subtitl = ot_get_option('awards_subtitle'); ?>
<?php $company_image = ot_get_option('company_logo'); ?>

  <h3 class="text-uppercase text-center"><?php echo $awards_titl ; ?></h3>
  <h2 class="text-center"><?php echo $awards_subtitl ; ?></h2>
  <div class="row">
<?php 
	if (function_exists('ot_get_option')) {
	$socail_conten = ot_get_option('awards_icon');?> 
	
	<?php foreach($socail_conten as $socail_cont){
		if($socail_cont['link'] != '' || $socail_cont['image'] != '' ){ ?>
	<div class="col-md-4">
	  <a href="<?php echo $socail_cont['link'];?>"><img src="<?php echo $socail_cont['image'];?>" alt="<?php echo $socail_cont['title'];?>" class="center-block"></a>
	  <h4 class="text-center"><?php echo $socail_cont['title'];?></h4>
	</div>
	    <?php } 
	} ?>	
<?php } ?> 	
  </div>
  <h3 class="text-center"><?php echo $company_image ; ?></h3>
</div>
</div>



<?php
endwhile;
?> 


<?php
get_footer();
