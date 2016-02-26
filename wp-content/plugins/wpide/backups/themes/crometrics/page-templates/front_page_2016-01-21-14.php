<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "07c026866fdfb395aacc228d533d81fe83a300be6b"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/themes/crometrics/page-templates/front_page.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/plugins/wpide/backups/themes/crometrics/page-templates/front_page_2016-01-21-14.php") )  ) ){
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
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <h2 class="modal-title" id="contact-modal-label">Contact Us</h2>
	  <p>Call Chris on his cell phone at any time: <script>_dw.w(_dw.cCode);</script> or email <script>_dw.w(_dw.eStart);_dw.w(_dw.eCode);_dw.w(_dw.eEnd);</script>, or fill out the form below and we'll get in touch.</p>
	</div>
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
<h1 class="text-center">Want to learn more about CROmetrics?</h1>
<p class="text-center"><a href="#" data-toggle="modal" data-target="#contact-modal" class="btn btn-primary btn-lg">CONTACT US</a></p>
</div>

<div class="container-fluid bg-gray">
<div class="container">
  <h3 class="text-uppercase text-center">Our Services</h3>
  <div class="row">
	<div class="col-md-4">
	  <h2 class="text-center">Optimization<br />Strategy</h2>
	  <hr class="small brown">
	  <p>We begin by developing a deep understanding of your business, KPIs, and customers. We'll perform customer research &amp; review website analytics to uncover problematic areas. We'll then map out a strategy and roadmap for experimentation &amp; optimization.</p>
	</div>
	<div class="col-md-4">
	  <h2 class="text-center">Design &amp;<br />Implementation</h2>
	  <hr class="small brown">
	  <p>We'll come up with hypotheses to test. We'll design elegant solutions based on an understanding of your customers and UX best practices. Our team is agile and disciplined. We'll build your experiments with minimal impact on your internal resources.</p>
	</div>
	<div class="col-md-4">
	  <h2 class="text-center">Data Analytics &amp;<br />Iteration</h2>
	  <hr class="small brown">
	  <p>We'll tap into the best web &amp; mobile analytics tools available to accurately &amp; objectively measure the performance of your experiments over time. We'll use knowledge of what worked &amp; didn't work to iterate on future experiments likely to yield big "wins".</p>
	</div>
  </div>
</div>
</div>

<div class="container">
<h3 class="text-uppercase text-center">Client Successes</h3>
<div class="row">
  <div class="col-md-6">
	<img src="<?php echo get_template_directory_uri(); ?>/images/trulia-logo.png" class="center-block">
	<div class="divider">
	  <hr class="small gray">&#8220;
	  <hr class="small gray">
	</div>
	<p>CROmetrics ran over a year's worth of optimizations for the rentals and mortgages verticals with fantastic results. One big "win" was the introduction of an infinite scroll feature which dramatically improved the user experience, and resulted in a 15% improvement in leads. We won 2 Optie awards as a result of our work with CROmetrics</p>
	<p class="text-right attribution"><em>- <strong>Gaurav Hardikar</strong>, Head of Product, Trulia Rentals</em></p>
  </div>
  <div class="col-md-6">
	<img src="<?php echo get_template_directory_uri(); ?>/images/99designs-logo.png" class="center-block">
	<div class="divider">
	  <hr class="small gray">&#8220;
	  <hr class="small gray">
	</div>
	<p>CROmetrics helped us set up a series of A/B tests to develop the most impactful site copy &amp; marketing messages for different traffic sources (e.g. Adwords, partnerships, SEO). By personalizing the purchase funnel based on inbound marketing channels, we were able to dramatically improve overall purchase conversion. We were awarded the "Most Impactful Use of Personalization" Optie for this innovation.</p>
	<p class="text-right attribution"><em>- <strong>Pam Webber</strong>, CMO, 99designs</em></p>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
	<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-logo.png" class="center-block">
	<div class="divider">
	  <hr class="small gray">&#8220;
	  <hr class="small gray">
	</div>
	<p>We brought in CROmetrics because we needed an outside perspective on key drivers of growth and user engagement. Their analysis and creativity brought us ideas we otherwise would not have discovered.</p>
	<p class="text-right attribution"><em>- <strong>Sophie-Charlotte Moatti</strong>, Head of Mobile Engagement, Facebook</em></p>
  </div>
  <div class="col-md-6">
	<img src="<?php echo get_template_directory_uri(); ?>/images/fuzebox-logo.png" class="center-block">
	<div class="divider">
	  <hr class="small gray">&#8220;
	  <hr class="small gray">
	</div>
	<p>CROmetrics helped introduce data-driven decision-making into our organization, allowing us to dramatically accelerate our growth. They were one of the original &#8216;growth hackers&#8217; before the term became popular.</p>
	<p class="text-right attribution"><em>- <strong>Jeff Cavins</strong>, CEO, Fuzebox</em></p>
  </div>
</div>
</div>

<div class="container-fluid bg-gray">
<div class="container">
  <h3 class="text-uppercase text-center">Who calls on us</h3>
  <div class="row">
	<div class="col-md-4">
	  <h2 class="text-center">CEO / General<br />Manager</h2>
	  <hr class="small brown">
	  <ul>
		<li>We expand the organization’s capabilities</li>
		<li>We help teams make intelligent data-informed decisions</li>
		<li>We help develop an internal culture of experimentation</li>
		<li>We quantify the potential ROI of future products &amp; services</li>
	  </ul>
	</div>
	<div class="col-md-4">
	  <h2 class="text-center">VP of<br />Marketing</h2>
	  <hr class="small brown">
	  <ul>
		<li>We partner on campaign strategy and can even help run your paid campaigns</li>
		<li>We build landing pages including copy, images &amp; calls-to-action</li>
		<li>We improve ROI of ad spend by improving the customer conversion funnel</li>
	  </ul>
	</div>
	<div class="col-md-4">
	  <h2 class="text-center">VP of<br />Product</h2>
	  <hr class="small brown">
	  <ul>
		<li>We help teams understand their customers through user testing tools (surveys, usability tests, heat-map visualization, A/B tests, etc.)</li>
		<li>We are an extension of the product, design &amp; engineering teams to assist with faster experimentation</li>
		<li>We help inform the product roadmap by running tests that identify the biggest "wins"</li>
	  </ul>
	</div>
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
