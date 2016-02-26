<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "07c026866fdfb395aacc228d533d81feee42117937"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/themes/crometrics/page-templates/optimizely.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/plugins/wpide/backups/themes/crometrics/page-templates/optimizely_2016-01-22-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Optimizely Page
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
  <div class="jumbotron">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </div>

<?php $awards_footer_tex = ot_get_option('awards_footer_text'); ?>

  <div class="container-fluid extra-margin-tb">
    <div class="container">
      <h3 class="text-uppercase text-center"><?php echo $awards_footer_tex ; ?></h3>
      <div class="row">
<?php 
	if (function_exists('ot_get_option')) {
	$socail_conten = ot_get_option('awards_icon');?> 
	
	<?php foreach($socail_conten as $socail_cont){
		if($socail_cont['link'] != '' || $socail_cont['image'] != '' ){ ?>
		
        <div class="col-md-4">
          <img src="<?php echo $socail_cont['image'];?>" class="center-block">
          <h4 class="text-center"><?php echo $socail_cont['title'];?></h4>
        </div>
        <?php } 
	} ?>	
<?php } ?>         
      </div>
    </div>
  </div>

  <div class="container-fluid bg-gray-lighter">
    <div class="row">
      <div class="col-md-5 center">
        <h2 class="text-center"><?php the_field( "big_thumb_title" ); ?></h2>
        <img src="<?php the_field( "big_thumb_image" ); ?>"/>
      </div>
      <div class="col-md-7">        
        <?php if( get_field('testimonials_strip') ): ?>							 
		    <?php $i=1; while( has_sub_field('testimonials_strip') ): ?>	
		        <?php the_sub_field('content'); ?>
		    <?php $i++; endwhile; ?>		                
		  <?php if($i==1){?>  <div class="clearboth" style="height:40px;"></div> <?php }?>
        <?php endif; ?>  
        
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="container center">
        <?php the_field( "optimizely_content" ); ?>

      <img src="<?php the_field( "image" ); ?>"/><br/>
      <img src="<?php the_field( "optimizely_image" ); ?>"/><br/><br/>
        <?php the_field( "optimizely_bottom_content" ); ?>
    </div>
  </div>

  <hr class="keyline-hr" style="width:90%;"/>

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

  <div class="container-fluid bg-gray-lighter">
    <div class="container">
      <?php the_field( "bottom_content" ); ?>
    </div>
  </div>

<?php endwhile; ?>

<?php
get_footer();
