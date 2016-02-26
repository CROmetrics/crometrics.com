<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "07c026866fdfb395aacc228d533d81fe304c360bb3"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/themes/crometrics/page-templates/blog.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/plugins/wpide/backups/themes/crometrics/page-templates/blog_2016-01-27-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
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
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>            
        <?php endwhile; wp_reset_query(); ?> 
    </div>
    <div class="right_blog">
        <?php dynamic_sidebar('Blog Sidebar'); ?>
    </div>
    <div class="clear"></div>
  </div>
  
  


<?php
get_footer();
