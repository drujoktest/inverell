<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
<!-- Bootstrap -->
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body>
<div class="row nop header">
  <div class="container nop">
    <div class="col-md-3 logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" width="336" height="101"></a></div>
    <div class="col-md-9 headertop">
      <div class="row topbar">
        <a href="#" class="toplinks"><i class='material-icons'>mail_outline</i> Contact the Council</a>
        <a href="tel:0267288288" class="toplinks"><i class='material-icons'>phone</i> (02) 6728 8288</a>
        
        <div class="resize">Text Size<a href="#" id="increaseFont"></a><a href="#" id="decreaseFont"></a>
        </div>
		<div id="weather"></div>

      </div>
      <div class="row navg">
      <nav id="cbp-hrmenu" class="cbp-hrmenu">
					<ul>
						<li>
							<a href="your-council">Your Council</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>your-council/catch-the-bullet">Catch the Bullet</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/snoopydoo">Snoopydoo</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/fallen-angel">Fallen Angel</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/sui-maker">Sui Maker</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/wave-master">Wave Master</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/golf-pro">Golf Pro</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>your-council/gadget-finder">Gadget Finder</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/green-tree-express">Green Tree Express</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/green-tree-pro">Green Tree Pro</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/wobbler-3-0">Wobbler 3.0</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/coolkid">Coolkid</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>your-council/learn-thai">Learn Thai</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/math-genius">Math Genius</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/chemokid">Chemokid</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/success-1-0">Success 1.0</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/moneymaker">Moneymaker</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="<?php echo home_url('/'); ?>services">Services</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>services/catch-the-bullet">Catch the Bullet</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/snoopydoo">Snoopydoo</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/fallen-angel">Fallen Angel</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/sui-maker">Sui Maker</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/wave-master">Wave Master</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/golf-pro">Golf Pro</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/fallen-angel">Fallen Angel</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/">Sui Maker</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/wave-master">Wave Master</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/golf-pro">Golf Pro</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>your-council/gadget-finder">Gadget Finder</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/green-tree-express">Green Tree Express</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/green-tree-pro">Green Tree Pro</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/wobbler-3-0">Wobbler 3.0</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/coolkid">Coolkid</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>your-council/learn-thai">Learn Thai</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/math-genius">Math Genius</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/chemokid">Chemokid</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/success-1-0">Success 1.0</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/moneymaker">Moneymaker</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="<?php echo home_url('/'); ?>">Community & Recreation</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>services/catch-the-bullet">Catch the Bullet</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/snoopydoo">Snoopydoo</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/fallen-angel">Fallen Angel</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/sui-maker">Sui Maker</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/wave-master">Wave Master</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/golf-pro">Golf Pro</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/fallen-angel">Fallen Angel</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/">Sui Maker</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/wave-master">Wave Master</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/golf-pro">Golf Pro</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>your-council/gadget-finder">Gadget Finder</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/green-tree-express">Green Tree Express</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/green-tree-pro">Green Tree Pro</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/wobbler-3-0">Wobbler 3.0</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/coolkid">Coolkid</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>your-council/learn-thai">Learn Thai</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/math-genius">Math Genius</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/chemokid">Chemokid</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/success-1-0">Success 1.0</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/moneymaker">Moneymaker</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="<?php echo home_url('/'); ?>building-development">Building & Development</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>services/catch-the-bullet">Catch the Bullet</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/snoopydoo">Snoopydoo</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/fallen-angel">Fallen Angel</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/sui-maker">Sui Maker</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/wave-master">Wave Master</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/golf-pro">Golf Pro</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/fallen-angel">Fallen Angel</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/">Sui Maker</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/wave-master">Wave Master</a></li>
											<li><a href="<?php echo home_url('/'); ?>services/golf-pro">Golf Pro</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>your-council/gadget-finder">Gadget Finder</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/green-tree-express">Green Tree Express</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/green-tree-pro">Green Tree Pro</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/wobbler-3-0">Wobbler 3.0</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/coolkid">Coolkid</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>your-council/learn-thai">Learn Thai</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/math-genius">Math Genius</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/chemokid">Chemokid</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/success-1-0">Success 1.0</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/moneymaker">Moneymaker</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li><a href="<?php echo home_url('/'); ?>environment-waste">Environment & Waste</a></li>
						<li><a href="<?php echo home_url('/'); ?>business-industry">Business & Industry</a></li>
					</ul>
				</nav>
      </div>
    </div>
  </div>
</div>
<div class="row nop coloredbar">
  <div class="container nop">
    <div class="fblock blue nop"></div>
    <div class="fblock viol nop"></div>
    <div class="fblock pink nop"></div>
    <div class="fblock green nop"></div>
    <div class="fblock yelo nop"></div>
    <div class="fblock lightblu nop"></div>
  </div>
</div>
<div class="row nop ss">
  <?php if(is_front_page()){ 
$hb_post_id = 4;
$hb_page_post = get_post( $hb_post_id, ARRAY_A );
$content_hb = $hb_page_post['post_content'];
echo $content_hb ;?>
<div class="homesstab">
        <div id="tabbed-nav"> 
        
        <!-- Tab Navigation Menu -->
        <ul>
          <li><a>I want to</a></li>
          <li><a>Enter keywords here</a></li>
        </ul>
        
        <!-- Content container -->
        <div> 

          
          <div>
            <ul>
            	<li><a href="#">Find my Bin Collection Dates<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="#">Report an Issue<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="#">Make Online Payment<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="#">Pay Rates<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="#">Contact Council<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="#">Find Local Library<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="#">See all Local Events<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="#">Register my dog or cat<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="#">Plan a Development<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="#">Apply for a job<i class='material-icons'>keyboard_arrow_right</i></a></li>
            </ul>
          </div>
          
          <div>
            <!-- <form name="form2" method="post" action="" class="topsearchform">
              <input type="text" name="textfield2" id="textfield2" placeholder="Enter Keyword">
              <input type="submit" name="button2" id="button2" value="Submit">
            </form> -->
<form action="<?php echo home_url( '/' ); ?>" method="get" class="topsearchform">
	<input type="text" name="s" id="search" value="<?php the_search_query();?>" placeholder="Enter Keyword"/>
	 <input type="submit" name="button2" id="button2" value="Submit">
</form>
          </div>
        
        </div>
        </div>
  </div>
<?php } else { 
	if(function_exists('show_media_header')){ show_media_header(); } 
} ?>
</div>
<div class="row nop coloredbar topbtns">
  <div class="container nop">
    <div class="fblock blue nop"><a href="<?php echo home_url('/'); ?>contact-us"><i class='material-icons'>perm_phone_msg</i>Contact Us</a></div>
    <div class="fblock viol nop"><a href="<?php echo home_url('/'); ?>your-council"><i class='material-icons'>account_balance</i>Council Meetings</a></div>
    <div class="fblock pink nop"><a href="<?php echo home_url('/'); ?>public-library"><i class='material-icons'>local_library</i>Public Library</a></div>
    <div class="fblock green nop"><a href="<?php echo home_url('/'); ?>contact-us"><i class='material-icons'>description</i>Find a Form</a></div>
    <div class="fblock yelo nop"><a href="<?php echo home_url('/'); ?>items-on-exhibition"><i class='material-icons'>view_carousel</i>Items on Exhibition</a></div>
    <div class="fblock lightblu nop"><a href="<?php echo home_url('/'); ?>online-payments"><i class='material-icons'>payment</i>Online Payments</a></div>
  </div>
</div>
<div class="row nop contentarea">
  <div class="container nop">