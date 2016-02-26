<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "07c026866fdfb395aacc228d533d81feee42117937"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/themes/crometrics/page-templates/our_clients.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/plugins/wpide/backups/themes/crometrics/page-templates/our_clients_2016-01-22-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Our Clients Page
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
  <div class="jumbotron jumbo2">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </div>

  <div class="container">
    <h3 class="text-uppercase text-center"><?php the_field( "client_success_title" ); ?></h3>
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-1 col-xs-1"></div>
      
<?php if( get_field('client_success_strip') ): ?>							 
		<?php $i=1; while( has_sub_field('client_success_strip') ): ?>	
      <div class="col-md-2 lrpad10">
        <div class="panel">
          <img class="center-block" src="<?php the_sub_field('icon'); ?>" />
          <h1 class="text-center"><?php the_sub_field('price'); ?></h1>
          <h2 class="text-center"><?php the_sub_field('title'); ?></h2>
          <p><?php the_sub_field('content'); ?></p>
        </div>
      </div>      
		<?php $i++; endwhile; ?>		                
<?php endif; ?> 
      
      <div class="col-md-1 col-xs-1"></div>
    </div>
  </div>

  <div class="container-fluid bg-gray-lighter">
    <div class="container">
      <h3 class="text-uppercase text-center">Client Testimonials</h3>
      <h2 class="text-center">Our NPS score from 44 clients over the last year is an astounding 87!</h2>
      <h5 class="text-center">Feedback from our clients as part of our NPS survey if they would recommend CROmetrics services to a friend (0-10 scale):</h4>

      <div class="row">
        <div class="col-md-2 hidden-xs">
        </div>
        <div class="col-md-8 col-xs-12 testimonials-wrapper">

          <div class="row">
            <div class="col-md-12 col-xs-12">
              <div class="infobar">
                <div class="cblock" style="font-size:44px;margin-right:5px;">
                  87
                </div>
                <div class="cblock" style="margin-top:2px;">
                  <span style="font-size:20px;">NPS</span><br/>score
                </div>
                <div class="cblock vdivide">
                </div>
                <div class="cblock nps-scale">
                  0 - 10 SCALE
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-2 col-xs-3 ten-line-wrapper-col">
              <div class="ten-line"></div>
            </div>
            <div class="col-md-10 col-xs-9">
              <div class="testimonial-block">
                <p>
                  "Everything I've seen so far from the CROmetrics team is high-quality and professional. Their advice is valuable and delivered quickly and frankly. Looking forward to what we can achieve together."

                  <p class="testimonial-quote">- <b>Dana Kitrelle,</b> Product Mgr, Taulia</p>
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-2 col-xs-3 ten-line-wrapper-col">
              <div class="ten-line"></div>
            </div>
            <div class="col-md-10 col-xs-9">
              <div class="testimonial-block">
                <p>
                  "Smart people, very helpful, they know Optimizely better than anyone! Great to work with."

                  <p class="testimonial-quote">- <b>Lauren Halbrich,</b> Digital Mktg Mgr, Mogl</p>
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-2 col-xs-3 ten-line-wrapper-col">
              <div class="ten-line"></div>
            </div>
            <div class="col-md-10 col-xs-9">
              <div class="testimonial-block">
                <p>
                  "You guys are great. Hope you enjoy a high NPS!"

                  <p class="testimonial-quote">- <b>Bob Glotfelty,</b> Director Marketing, Taulia</p>
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-2 col-xs-3 ten-line-wrapper-col">
              <div class="ten-line"></div>
            </div>
            <div class="col-md-10 col-xs-9">
              <div class="testimonial-block">
                <p>
                  "Chris and his team are a pleasure to work with and deliver a ton of value at a great price. They are super creative, responsible and organized.To be successful CRO will need close collaboration with your employees but they will be an incredible force multiplier for whoever is working on improving your site's conversion."

                  <p class="testimonial-quote">- <b>Jeremy Karmel,</b> Growth Product Mgr, Hired.com</p>
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-2 col-xs-3 ten-line-wrapper-col">
              <div class="ten-line"></div>
            </div>
            <div class="col-md-10 col-xs-9">
              <div class="testimonial-block">
                <p>
                  "Working with you guys is a million times better than arguing about opinions."

                  <p class="testimonial-quote">- <b>Thomas Feagin,</b> Web Developer, Thomsons Safaris</p>
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-2 col-xs-3 ten-line-wrapper-col">
              <div class="ten-line"></div>
            </div>
            <div class="col-md-10 col-xs-9">
              <div class="testimonial-block">
                <p>
                  "Proven and improved conversion rates and performance “10 - Very analytical and technical with good insights."

                  <p class="testimonial-quote">- <b>Theresa Lee,</b> Design Director, Dodocase</p>
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-2 col-xs-3 ten-line-wrapper-col">
              <div class="ten-line"></div>
            </div>
            <div class="col-md-10 col-xs-9">
              <div class="testimonial-block">
                <p>
                  "Chris is 1) an expert in the field and 2) easy to get long/work with. He's been instrumental is helping us develop a growth strategy and providing us with the tools to streamline and execute on it."

                  <p class="testimonial-quote">- <b>Vish Natarajan,</b> Marketing &amp; Sales, Feed.fm</p>
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-2 col-xs-3 ten-line-wrapper-col">
              <div class="ten-line"></div>
            </div>
            <div class="col-md-10 col-xs-9">
              <div class="testimonial-block">
                <p>
                  "Chris, Brian, and team have been instrumental in helping us improve our engagement metrics. They have great ideas and do most of the work for us. :)"

                  <p class="testimonial-quote">- <b>Susan Bloomberg,</b> Analytics and Monetization Manager, Trulia</p>
                </p>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-2 hidden-xs">
        </div>
      </div>
    </div>
  </div>

  <div class="container client-logos-container">
    <h3 class="text-uppercase text-center">More Delighted Clients</h3>

    <div class="row">
      <div class="col-md-12 client-logos">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-facebook.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-99designs.gif"/>
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-stella.gif"/>
			  <img src="<?php echo get_template_directory_uri(); ?>/images/logo-trulia.gif"/>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 client-logos">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-hired.gif"/>
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-crowdtap.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-fuzebox.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-taulia.gif"/>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 client-logos">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-rickshaw.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-bankcard.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-truckerreport.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-feedfm.gif"/>

      </div>
    </div>

    <div class="row">
      <div class="col-md-12 client-logos">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-dodocase.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-education.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-goodbed.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-trumaker.gif"/>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 client-logos">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-lifefactory.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-tuft.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-mogl.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-ingenio.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-seavees.gif"/>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 client-logos">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-biolite.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-thomson.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-vector.gif"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-spartan.png"/>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-gray-lighter">
    <h2 class="text-center">We expect to deliver tremendous results in every single one of our engagements. If we don’t feel we can add value, we won’t take you on as a client.</h2>

    <hr class="keyline-hr"/>

    <h1 class="text-center">Wondering if we can help your business?</h1>
    <p class="text-center"><a href="#" data-toggle="modal" data-target="#contact-modal" class="btn btn-primary btn-lg">CONTACT US AT ANYTIME</a></p>
  </div>

<?php endwhile; ?>

<?php
get_footer();
