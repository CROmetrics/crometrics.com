<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "07c026866fdfb395aacc228d533d81fe83a300be6b"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/themes/crometrics/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/plugins/wpide/backups/themes/crometrics/footer_2016-01-21-14.php") )  ) ){
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
      <ul class="nav navbar-nav">
        <li><a href="services.html">Our Services</a></li>
        <li><a href="team.html">Meet the Team</a></li>
        <!--<li><a href="clients.html">Our Clients</a></li>-->
        <li><a href="http://www.growth-hacker.com/" target="_blank">Blog</a></li>
        <li><a href="#" data-toggle="modal" data-target="#contact-modal">Contact Us</a></li>
      </ul>
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
            $( ".navbar-nav li a" ).wrapInner( "<span class='btn'></span>" );
            $( ".navbar-nav li a" ).attr( "title", "Photo by Kelly Clark" );
        });
    </script>

	<?php wp_footer(); ?>
</body>
</html>