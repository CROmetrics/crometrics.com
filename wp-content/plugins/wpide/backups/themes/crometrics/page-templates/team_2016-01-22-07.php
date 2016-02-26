<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "07c026866fdfb395aacc228d533d81feee42117937"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/themes/crometrics/page-templates/team.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/plugins/wpide/backups/themes/crometrics/page-templates/team_2016-01-22-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Team Page
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
    <div class="row">
      <div class="col-md-12 center">
        <div class="image-circle-mask-wrapper">
          <img src="<?php the_field( "chris_neumann_photo" ); ?>" />
        </div>
        <h2 class="uppercase"><?php the_field( "chris" ); ?></h2>
        <h2 class="sub-h2"><?php the_field( "founder" ); ?></h2>
        <hr class="keyline-hr"/>
      </div>
      <div class="col-md-6 team-bio-div">
        <?php the_field( "left_content" ); ?>
      </div>
      <div class="col-md-6 team-bio-div">
        <?php the_field( "right_content" ); ?>
      </div>
    </div> <!-- end of row -->
  </div> <!-- end of container-->

  <div class="container">
    <div class="row">
   		
   	  <!-- Product Management column -->
      <div class="col-md-6 team-bio-div">
        <div class="center">
          <h3 class="team-category uppercase"><?php the_field( "product_title" ); ?></h3>
        </div>
        
<?php if( get_field('product_management_strip') ): ?>							 
		<?php $i=1; while( has_sub_field('product_management_strip') ): ?>
        <div>
          <div class="image-circle-mask-wrapper">
            <img src="<?php the_sub_field('image'); ?>" style="width:300px;"/>
          </div>
          <div class="center">
            <h2 class="team-name"><?php the_sub_field('name'); ?></h2>
            <hr class="keyline-hr" style="width:70%;"/>
          </div>
          <div class="col-md-12 team-bio-div">
            <?php the_sub_field('content'); ?>
          </div>
        </div>
		<?php $i++; endwhile; ?>		                
<?php endif; ?>          
        
      </div>
        
        <!-- Add new product managers here
        <div>
          <div class="image-circle-mask-wrapper">
            <img src="images/..." style="width:300px;"/>
          </div>
          <div class="center">
            <h2 class="team-name">NAME</h2>
            <hr class="keyline-hr" style="width:70%;"/>
          </div>
          <div class="col-md-12 team-bio-div">
          	BIO
          </div>
        </div>
      -->

	  <!-- Engineering column -->
      <div class="col-md-6 team-bio-div">
        <div class="center">
          <h3 class="team-category uppercase"><?php the_field( "engineering_title" ); ?></h3>
        </div>
        
<?php if( get_field('engineering_strip') ): ?>							 
		<?php $i=1; while( has_sub_field('engineering_strip') ): ?>
        <div>
          <div class="image-circle-mask-wrapper">
            <img src="<?php the_sub_field('image'); ?>" style="width:300px; <?php if($i==2){?>margin: -40px 0 0 0;<?php }?>"/>
          </div>
          <div class="center">
            <h2 class="team-name"><?php the_sub_field('name'); ?></h2>
            <hr class="keyline-hr" style="width:70%;"/>
          </div>
          <div class="col-md-12 team-bio-div">
            <?php the_sub_field('content'); ?>
          </div>
        </div>
        <?php $i++; endwhile; ?>		                
<?php endif; ?>  

             
        <!-- Add new engineers here
        <div>
          <div class="image-circle-mask-wrapper">
            <img src="images/..." style="width:300px;"/>
          </div>
          <div class="center">
            <h2 class="team-name">NAME</h2>
            <hr class="keyline-hr" style="width:70%;"/>
          </div>
          <div class="col-md-12 team-bio-div">
          	BIO
          </div>
        </div>
      -->
      
      </div> <!-- /Engineering -->
    </div> <!-- /row -->
  </div> <!-- /container-->

<?php endwhile; ?>

<?php
get_footer();
