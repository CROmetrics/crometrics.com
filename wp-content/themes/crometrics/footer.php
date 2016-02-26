<?php
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
<?php $phone_n = ot_get_option('phone_no'); ?>
<?php $copyrigh = ot_get_option('copyright'); ?>

      <div><script>_dw.w(_dw.eStart);</script>Email<script>_dw.w(_dw.eEnd);</script>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x2706;&nbsp;<?php echo $phone_n ; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $copyrigh ; ?></div>
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
            $( ".jumbotron p" ).contents('a').unwrap();
        });
    </script>

	<?php wp_footer(); ?>
</body>
</html>