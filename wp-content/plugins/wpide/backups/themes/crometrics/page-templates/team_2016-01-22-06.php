<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "07c026866fdfb395aacc228d533d81feee42117937"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/themes/crometrics/page-templates/team.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/plugins/wpide/backups/themes/crometrics/page-templates/team_2016-01-22-06.php") )  ) ){
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
      <h3 class="text-uppercase text-light-gray center">Meet the Team</h3>
      <h2 class="center">Our success depends on our clients' success.</h2>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 center">
        <div class="image-circle-mask-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/images/bio-chris.jpg" />
        </div>
        <h2 class="uppercase">Chris Neumann</h2>
        <h2 class="sub-h2">Founder &amp; Principal</h2>
        <hr class="keyline-hr"/>
      </div>
      <div class="col-md-6 team-bio-div">
        <p>Chris’s entrepreneurial skills emerged in high school, when he made money selling candy to fellow students in study hall. He sharpened this acumen as an undergraduate at Bucknell University, when he co-founded a desktop publishing company that is still operating today. After receiving a bachelor’s degree in mechanical engineering, Chris followed his passion for bike racing to become director of marketing for Spinergy, a venture-funded manufacturer of carbon fiber bicycle wheels. In 2001, while living in San Francisco, he started First Person Software, which created and patented software that resides on USB drives and allows automatic personalization of any computer. The technology was purchased in 2004 by Migo, which still exists today. Chris also has founded Dovetail TV, an Internet-based distributor of high quality independent films; and Face It (now Appsorama), a Facebook application company. He has even tackled product management for Sling Media, ScanCafe and other startups.</p>

        <p>When he’s not launching companies, he’s launching planes; Chris has his pilot’s license and has logged more than 300 hours of flight time. He also enjoys road and mountain biking in Marin County, California, where he lives with his wife and daughters.</p>
      </div>
      <div class="col-md-6 team-bio-div">
        <h3>Career Highlights</h3>
        <br/>
        <ul>
          <li>Founded, funded and ran OEM software company that sold in 2004 for $5 million.</li>
          <li>Positive review from Walt Mossberg in the Wall Street Journal highlighting the Migo.</li>
          <li>Practices lean startup techniques including low-cost market validation for new products and split-testing for Web site optimization.</li>
          <li>Logged more than 10 years of experience developing web- and desktop-based OEM and consumer software applications.</li>
          <li>Compiled a strong knowledge of social media and marketing while working on several Top 10 Facebook apps.</li>
          <li>Developed deep experience and success in recruiting and managing outsourced U.S.- and overseas-based software engineering teams.</li>
        </ul>
      </div>
    </div> <!-- end of row -->
  </div> <!-- end of container-->

  <div class="container">
    <div class="row">
   		
   	  <!-- Product Management column -->
      <div class="col-md-6 team-bio-div">
        <div class="center">
          <h3 class="team-category uppercase">Product Management</h3>
        </div>
        <div>
          <div class="image-circle-mask-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bio-brian.jpg" style="width:300px;"/>
          </div>
          <div class="center">
            <h2 class="team-name">BRIAN SCHMITT</h2>
            <hr class="keyline-hr" style="width:70%;"/>
          </div>
          <div class="col-md-12 team-bio-div">
            <p>Hauling bales of hay is not how someone usually describes their foray into an entrepreneurial life, but that is exactly how Brian cut his small business teeth in high school. Continuing his entrepreneurial education in college he started a landscape construction business with two classmates that lasted an entire three months.</p>

            <p>Swinging from one extreme to the other, Brian began an apprenticeship in the jewelry trade in the late 90’s. This led to a great mentor who taught him about the relationships of business and many of the principles he operates by today. While buying and selling diamonds Brian designed and implemented an open-to-buy system that increased inventory turnover by 50%, bringing the company’s turnover rate to double the industry average.</p>

            <p>In 2003 he left one of the largest privately held, independent jewelry stores in the country to start a luxury watch repair website. After a year making some fantastic mistakes he joined Rockbridge Seminary to launch the first fully online seminary. Brian led the seminary in marketing, technology and finance as the VP of Operations for over eight years. In July of 2013 the seminary successfully became the first fully online seminary to be accredited.</p>

            <p>Brian enjoys the endless summer where he lives in West Palm Beach, Florida, with his family.</p>
          </div>
        </div>

        <div>
          <div class="image-circle-mask-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bio-ann.jpg" style="width:300px;"/>
          </div>
          <div class="center">
            <h2 class="team-name">Ann Devens</h2>
            <hr class="keyline-hr" style="width:70%;"/>
          </div>
          <div class="col-md-12 team-bio-div">
            <p>Ann thrives on the challenge of improving online experiences to help companies grow. Her work experience includes early-stage product management and digital marketing roles at companies including Stella &amp; Dot, Levi Strauss &amp; Co., and weddingchannel.com. She has a tendency to think in user stories, and enjoys improving user experiences by running experiments and implementing successful designs.</p>

            <p>Ann grew up in Portland, Oregon, but converted to Californian when she attended Stanford as an undergrad. She now lives with her family in San Francisco.</p>
          </div>
        </div>

        <div>
          <div class="image-circle-mask-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bio-eddie.jpg" style="width:300px;"/>
          </div>
          <div class="center">
            <h2 class="team-name">Eddie Solis</h2>
            <hr class="keyline-hr" style="width:70%;"/>
          </div>
          <div class="col-md-12 team-bio-div">
            <p>Eddie first started showing an interest in Marketing after joining an early-stage Saas business as the Director of Customer Experience. It was during this time that he began to really understand how a user's experience could really make an impact on a company's marketing efforts. The venture was a member of the 500 Startups accelerator program based in Silicon Valley, and was later acquired in Spring 2015.</p>

            <p>When Eddie isn't working alongside his clients, he enjoys strumming his guitar and frequently performs around his current home in Austin, TX. </p>

            <p>Eddie holds an MBA from Belmont University in Nashville, TN.</p>
          </div>
        </div>
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
          <h3 class="team-category uppercase">Engineering</h3>
        </div>
        <div>
          <div class="image-circle-mask-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bio-eric.jpg" style="width:300px; margin: -40px 0 0 0;"/>
          </div>
          <div class="center">
            <h2 class="team-name">Eric Newland</h2>
            <hr class="keyline-hr" style="width:70%;"/>
          </div>
          <div class="col-md-12 team-bio-div">
            <p>Eric’s background as a designer has taken a back seat since he discovered a love of code and problem-solving. After teaching himself how to use Drupal and expanding his knowledge of HTML, PHP, CSS, and Javascript, he successfully migrated a previous employer’s static website to a highly customized Drupal installation. He has been working with CROmetrics since April, 2014.</p>

            <p>A/B testing doesn’t just happen and is often a lot more complex than changing text or colors, so Eric uses his Javascript and CSS expertise to implement difficult tests and create custom goals for data collection. Whether it’s tweaking a sales funnel full of modal forms, adding a completely new plugin to the site, or redesigning a page from header to footer, Eric specializes at making sure CROmetrics’ tests just work.</p>

            <p>Eric has a BA and 10 years’ experience in graphic and web design and development. He lives in Dayton, Ohio with his wife and two children.</p>
          </div>
        </div>

        <div>
          <div class="image-circle-mask-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bio-jerome.jpg" style="width:300px;"/>
          </div>
          <div class="center">
            <h2 class="team-name">Jerome Choo</h2>
            <hr class="keyline-hr" style="width:70%;"/>
          </div>
          <div class="col-md-12 team-bio-div">
            <p>As far as he can remember, Jerome has always had a burning curiosity to figure out how things work. Naturally, he entered the field of engineering to satiate this curiosity and graduated from Georgia Tech with a degree in Biomedical Engineering. Soon after he co-founded an education technology startup that provides specialized tools for reading teachers.</p>

            <p>More recently, Jerome has been developing an interest in the psychology behind the user experience and ultimately, the buying experience of products. He joined CROmetrics for this reason, helping the engineering team with implementation and product management.</p>

            <p>Jerome is based out of Austin, Texas. He enjoys traveling and exploring new hobbies that he might or might not be terrible at.</p>
          </div>
        </div>
      
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
