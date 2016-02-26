<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "07c026866fdfb395aacc228d533d81feee42117937"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/themes/crometrics/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/plugins/wpide/backups/themes/crometrics/footer_2016-01-22-06.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		<!-- Footer -->
  <footer class="bg-gray-dark">
    <div class="container">
        <?php wp_nav_menu( array('menu' => 'Main menu', 'menu_id' => '',  'menu_class' => 'nav navbar-nav', 'container' => '')); ?>      
      <div><script>_dw.w(_dw.eStart);</script>Email<script>_dw.w(_dw.eEnd);</script>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x2706;&nbsp;415-505-7625&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CROmetrics&nbsp;&copy;&nbsp;2015</div>
    </div>
  </footer>
  <!-- /Footer -->

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/forms.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/custom.js"></script>
  
    <script type='text/javascript'>
        $( document ).ready(function() {
            $( "#navbar .navbar-nav li a" ).wrapInner( "<span class='btn'></span>" );
            $( ".navbar-nav li.cont a" ).attr( "data-toggle", "modal" );
            $( ".navbar-nav li.cont a" ).attr( "data-target", "#contact-modal" );
            $( "#navbar .navbar-nav li.cont a span" ).addClass( "btn-primary" );            
        });
    </script>

	<?php wp_footer(); ?>
</body>
</html>