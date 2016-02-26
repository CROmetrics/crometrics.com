<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "07c026866fdfb395aacc228d533d81fe83a300be6b"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/themes/crometrics/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog58024/oqmmlveba558024/wp-content/plugins/wpide/backups/themes/crometrics/header_2016-01-21-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="Chris Neumann">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	
    <meta name="description" content="CROmetrics is an award winning Conversion Rate optimization agency. We run A/B experiments for companies to help increase conversions and grow traffic, engagement, and revenue."/>    
    <meta name="keywords" content="CRO, conversion rate optimization, conversion rate experts, digital marketing, growth hacking, A/B testing, data-driven experimentation, data-driven marketing, Optimizely, Optimizely solutions partner"/>
    
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/styles.css" rel="stylesheet">
    
    <?php wp_head(); ?>	
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script>
    var _dw = {
    w: function(text) {
    document.write(atob(text));
    },
    eStart: 'PGEgaHJlZj0ibWFpbHRvOmNocmlzQGNyb21ldHJpY3MuY29tIj4=',
    eEnd: 'PC9hPg==',
    eCode: 'Y2hyaXNAQ1JPbWV0cmljcy5jb20=',
    cCode: 'NDE1LTUwNS03NjI1'
    }
    </script>
    <!-- Hotjar Tracking Code for www.crometrics.com -->
    <script>
    (function(h,o,t,j,a,r){
    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
    h._hjSettings={hjid:14097,hjsv:5};
    a=o.getElementsByTagName('head')[0];
    r=o.createElement('script');r.async=1;
    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
    a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
	
</head>

<body <?php body_class(); ?>>
<!-- Navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" width="132" height="18" alt="CROmetrics"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <?php wp_nav_menu( array('menu' => 'Main menu', 'menu_id' => '',  'menu_class' => 'nav navbar-nav navbar-right text-uppercase', 'container' => '')); ?>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->
