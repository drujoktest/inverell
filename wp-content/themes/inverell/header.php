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
        <a href="<?php echo home_url('/'); ?>your-council/contact-us" class="toplinks"><i class='material-icons'>mail_outline</i> Contact the Council</a>
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
											<li><a href="<?php echo home_url('/'); ?>your-council/about-council">About Council</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/access-to-information-held-by-council">Access to Information Held by Council</a>
                                            	<ul>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/access-to-information-held-by-council/disclosure-log-of-access-applications-gipa">Disclosure Log of Access Applications (GIPA)</a></li>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/access-to-information-held-by-council/open-access-information-not-publicly-available-gipa">Open Access Information Not Publicly Available (GIPA)</a></li>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/access-to-information-held-by-council/register-of-council-contracts-with-private-sector-gipa">Register of Council Contracts with Private Sector (GIPA)</a></li>
                                                </ul>
                                            </li>
											<li><a href="<?php echo home_url('/'); ?>your-council/aspirations-and-destinations">Aspirations and Destinations</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/business-papers-minutes-council-meetings">Business Papers & Minutes (Council Meetings)</a>
                                            	<ul>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/business-papers-minutes-council-meetings/ordinary-council-meeting">Ordinary Council Meeting</a></li>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/business-papers-minutes-council-meetings/economic-community-sustainability-committee">Economic & Community Sustainability Committee</a></li>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/business-papers-minutes-council-meetings/civil-environmental-services-committee">Civil & Environmental Services Committee</a></li>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/business-papers-minutes-council-meetings/s375a-record-of-voting-on-planning-matters">S375A Record of Voting on Planning Matters</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo home_url('/'); ?>your-council/citizenship">Citizenship</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>your-council/contact-us">Contact Us</a>
                                            	<ul>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/contact-us/council-contact-information">Council Contact Information</a></li>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/contact-us/after-hours-emergency-contacts">After Hours Emergency Contacts</a></li>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/contact-us/complaints-requests-and-enquiries">Complaints, Requests and Enquiries</a></li>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/contact-us/report-a-problem">Report A Problem</a></li>
                                                </ul>
                                            </li>
											<li><a href="<?php echo home_url('/'); ?>your-council/council-land-bank-register">Council Land Bank Register</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/council-publications">Council Publications</a>
                                            	<ul>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/council-publications/20172018-draft-budget-released">2017/2018 Draft Budget Released</a></li>
                                                </ul>
                                            </li>
											<li><a href="<?php echo home_url('/'); ?>your-council/fit-for-the-future">Fit for the Future</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/major-projects">Major Projects</a>
                                            	<ul>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/major-projects/ashford-water-treatment-plant-renewal">Ashford Water Treatment Plant Renewal</a></li>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/major-projects/town-centre-renewal-plan">Town Centre Renewal Plan</a>
                                                    	<ul>
                                     	           			<li><a href="<?php echo home_url('/'); ?>your-council/major-projects/town-centre-renewal-plan/plane-tree-management">Plane Tree Management</a></li>
                                                        </ul>
                                                    </li>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/major-projects/inverell-sewerage-treatment-plant-rehabilitation">Inverell Sewerage Treatment Plant Rehabilitation</a></li>
                                                </ul>
                                            </li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>your-council/media-release">Media Release</a>
                                            	<ul>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/media-release/mayors-message">Mayor's Message</a></li>
                                                </ul>
                                            </li>
											<li><a href="<?php echo home_url('/'); ?>your-council/positions-vacant">Positions Vacant</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/rates-and-water">Rates and Water</a>
                                            	<ul>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/rates-and-water/make-an-online-payment">Make An Online Payment</a></li>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/rates-and-water/online-form-notification-of-change-of-name-postal-address">Online Form: Notification of Change of Name / Postal Address</a></li>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/rates-and-water/online-form-request-rates-water-notice-by-email">Online Form: Request Rates / Water Notice by Email</a></li>
                                                	<li><a href="<?php echo home_url('/'); ?>your-council/rates-and-water/special-rate-variation">Special Rate Variation</a></li>
                                                </ul>
                                            </li>
											<li><a href="<?php echo home_url('/'); ?>your-council/small-business-friendly-council-program">Small Business Friendly Council Program</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/strategic-planning">Strategic Planning</a></li>
											<li><a href="<?php echo home_url('/'); ?>your-council/tenders-and-expressions-of-interest-requests">Tenders and Expressions of Interest Requests</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="<?php echo home_url('/'); ?>services-and-facilities">Services and Facilities</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>services-and-facilities/emergency-operational-centre">Emergency Operational Centre</a></li>
											<li><a href="<?php echo home_url('/'); ?>services-and-facilities/inverell-memorial-swimming-pool">Inverell Memorial Swimming Pool</a></li>
											<li><a href="<?php echo home_url('/'); ?>services-and-facilities/library">Library</a></li>
											<li><a href="<?php echo home_url('/'); ?>services-and-facilities/pound-facility">Pound Facility</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>services-and-facilities/public-maps">Public Maps</a></li>
											<li><a href="<?php echo home_url('/'); ?>services-and-facilities/roads-and-traffic">Roads and Traffic</a></li>
											<li><a href="<?php echo home_url('/'); ?>services-and-facilities/roadworks-affecting-traffic">Roadworks Affecting Traffic</a></li>
											<li><a href="<?php echo home_url('/'); ?>services-and-facilities/services-applications-and-specifications">Services Applications and Specifications</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>services-and-facilities/temporary-road-closures">Temporary Road Closures</a></li>
											<li><a href="<?php echo home_url('/'); ?>services-and-facilities/waste-management">Waste Management</a></li>
											<li><a href="<?php echo home_url('/'); ?>services-and-facilities/water-and-sewerage">Water and Sewerage</a></li>
										</ul>
									</div>
									<div>
										
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="<?php echo home_url('/'); ?>community">Community & Recreation</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>community/cemetery">Cemetery</a></li>
											<li><a href="<?php echo home_url('/'); ?>community/community-website">Community Website</a></li>
											<li><a href="<?php echo home_url('/'); ?>community/community-safety-camera-program">Community Safety Camera Program</a></li>
											<li><a href="<?php echo home_url('/'); ?>community/community-and-business-guides">Community and Business Guides</a></li>
											<li><a href="<?php echo home_url('/'); ?>community/events">Events</a></li>
											<li><a href="<?php echo home_url('/'); ?>community/inclusion-disability-action-plan">Inclusion (Disability) Action Plan</a>
                                            	<ul>
                                                	<li><a href="<?php echo home_url('/'); ?>community/inclusion-disability-action-plan/national-disability-insurance-scheme">National Disability Insurance Scheme</a></li>
                                                </ul>
                                            </li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>community/inverell-art-gallery">Inverell Art Gallery</a></li>
											<li><a href="<?php echo home_url('/'); ?>community/inverell-tourism">Inverell Tourism</a></li>
											<li><a href="<?php echo home_url('/'); ?>community/inverell-town-hall">Inverell Town Hall</a></li>
											<li><a href="<?php echo home_url('/'); ?>community/liberty-swing">Liberty Swing</a></li>
											<li><a href="<?php echo home_url('/'); ?>community/parks">Parks</a></li>
											<li><a href="<?php echo home_url('/'); ?>community/sportsgrounds">Sportsgrounds</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>community/street-flags-banners">Street Flags & Banners</a></li>
											<li><a href="<?php echo home_url('/'); ?>community/street-stall-raffle-ticket-stands">Street Stall & Raffle Ticket Stands</a></li>
											<li><a href="<?php echo home_url('/'); ?>community/white-ribbon-community">White Ribbon Community</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="<?php echo home_url('/'); ?>building-and-development">Building & Development</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/advertised-development-applications">Advertised Development Applications </a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/application-tracking">Application Tracking </a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/asbestos">Asbestos</a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/building-and-development-application-forms"> Building and Development Application Forms</a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/building-and-development-fact-sheets">Building and Development Fact Sheets</a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/building-and-development-policies">Building and Development Policies</a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/buying-or-selling-a-property">Buying or Selling a Property</a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/complying-development">Complying Development </a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/construction-certificate">Construction Certificate</a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/development-applications">Development Applications</a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/development-control-plan">Development Control Plan</a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/exempt-development">Exempt Development </a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/history-and-heritage">History and Heritage </a>
                                            	<ul>
                                                    <li><a href="<?php echo home_url('/'); ?> building-and-development/history-and-heritage/cemeteries">Cemeteries</a></li>
                                                    <li><a href="<?php echo home_url('/'); ?>building-and-development/history-and-heritage/conservation-areas">Conservation Areas </a></li>
                                                    <li><a href="<?php echo home_url('/'); ?>building-and-development/history-and-heritage/heritage-advisor-service">Heritage Advisor Service </a></li>
                                                    <li><a href="<?php echo home_url('/'); ?>building-and-development/history-and-heritage/heritage-listing"> Heritage Listing </a></li>
                                                    <li><a href="<?php echo home_url('/'); ?>building-and-development/history-and-heritage/heritage-publications-and-photographs"> Heritage Publications and Photographs</a></li> 
                                                    <li><a href="<?php echo home_url('/'); ?>building-and-development/history-and-heritage/heritage-services"> Heritage Services </a></li>
                                                    <li><a href="<?php echo home_url('/'); ?>building-and-development/history-and-heritage/inverells-history"> Inverell's History </a></li>
                                                    <li><a href="<?php echo home_url('/'); ?>building-and-development/history-and-heritage/local-heritage-assistance-fund"> Local Heritage Assistance Fund</a></li>
                                                    <li><a href="<?php echo home_url('/'); ?>building-and-development/history-and-heritage/newstead"> Newstead</a></li> 
                                                    <li><a href="<?php echo home_url('/'); ?>building-and-development/history-and-heritage/war-memorials"> War Memorials</a></li>
                                                </ul>
                                            </li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/local-environmental-plan">Local Environmental Plan</a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/modification-of-consents">Modification of Consents </a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/nsw-planning-viewer">NSW Planning Viewer </a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/other-building-and-development-information">Other Building and Development Information </a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/preliminary-development-advice">Preliminary Development Advice </a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/public-open-space-strategy">Public Open Space Strategy </a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/register-of-variations-to-development-standards">Register of Variations to Development Standards </a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/s375a-record-of-voting-on-planning-matters">S375A Record of Voting on Planning Matters </a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/section-68-approvals">Section 68 Approvals </a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/subdivision-certificates">Subdivision Certificates </a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/swimming-pool-legislation">Swimming Pool Legislation </a></li>
											<li><a href="<?php echo home_url('/'); ?>building-and-development/wind-farms">Wind Farms</a>
                                                <ul>
                                                    <li><a href="<?php echo home_url('/'); ?>building-and-development/wind-farms/white-rock-wind-farm">White Rock Wind Farm </a></li>
                                                    <li><a href="<?php echo home_url('/'); ?>building-and-development/wind-farms/sapphire-wind-farm">Sapphire Wind Farm  </a></li>
                                                </ul>
                                            </li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li><a href="<?php echo home_url('/'); ?>environment-waste">Environment & Waste</a>
						<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>environment-waste/animals-and-pets">Animals and Pets </a>
                                            	<ul>
                                                    <li><a href="<?php echo home_url('/'); ?>environment-waste/animals-and-pets/animal-complaints">Animal Complaints </a></li>
                                                    <li> <a href="<?php echo home_url('/'); ?>environment-waste/animals-and-pets/change-of-owner-details">Change of Owner / Details</a></li>
                                                    <li><a href="<?php echo home_url('/'); ?>environment-waste/animals-and-pets/deceased-pets">Deceased Pets </a></li>
                                                    <li> <a href="<?php echo home_url('/'); ?>environment-waste/animals-and-pets/microchipping-and-lifetime-registration">Microchipping and Lifetime Registration</a></li>
                                                    <li> <a href="<?php echo home_url('/'); ?>environment-waste/animals-and-pets/pet-de-sexing">Pet De-sexing</a></li>
                                                    <li> <a href="<?php echo home_url('/'); ?>environment-waste/animals-and-pets/pound-facility">Pound Facility</a></li>
                                                </ul>
                                            </li>
											<li><a href="<?php echo home_url('/'); ?>environment-waste/epa-licenced-premises-monitoring">EPA Licenced Premises Monitoring </a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="http://www.nirw.org.au/" target="_blank">Northern Inland Regional Waste</a></li>
											<li><a href="<?php echo home_url('/'); ?>environment-waste/northern-lights-program">Northern Lights Program</a>
											</li>
											<li><a href="<?php echo home_url('/'); ?>environment-waste/pollution-incident-response-management-plans">Pollution Incident Response Management Plans</a></li>
											<li><a href="<?php echo home_url('/'); ?>environment-waste/recycling">Recycling </a>
                                            	<ul>
													<li><a href="<?php echo home_url('/'); ?>environment-waste/recycling/e-waste">E-Waste </a></li>
                                                </ul>
											</li>
											<li><a href="<?php echo home_url('/'); ?>environment-waste/waste-management">Waste Management </a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="<?php echo home_url('/'); ?>environment-waste/weed-management">Weed Management </a>
                                            	<ul>
                                                    <li><a href="<?php echo home_url('/'); ?>environment-waste/weed-management/noxious-weeds">Noxious Weeds </a></li>
                                                    <li><a href="<?php echo home_url('/'); ?>environment-waste/weed-management/pesticide-use-notification-plan">Pesticide Use Notification Plan</a></li>
                                                    <li><a href="<?php echo home_url('/'); ?>environment-waste/weed-management/weed-of-the-week">Weed of the Week</a></li>
                                                </ul>
                                            </li>
										</ul>
									</div>		
			
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
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
            	<li><a href="<?php echo home_url('/'); ?>">Find my Bin Collection Dates<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="<?php echo home_url('/'); ?>your-council/contact-us/report-a-problem">Report an Issue<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="<?php echo home_url('/'); ?>your-council/rates-and-water/make-an-online-payment">Make Online Payment<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="<?php echo home_url('/'); ?>">Pay Rates<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="<?php echo home_url('/'); ?>your-council/contact-us">Contact Council<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="<?php echo home_url('/'); ?>services-and-facilities/library">Find Local Library<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="<?php echo home_url('/'); ?>community/events">See all Local Events<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="<?php echo home_url('/'); ?>environment-waste/animals-and-pets">Register my dog or cat<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="<?php echo home_url('/'); ?>building-and-development/development-control-plan">Plan a Development<i class='material-icons'>keyboard_arrow_right</i></a></li>
            	<li><a href="<?php echo home_url('/'); ?>">Apply for a job<i class='material-icons'>keyboard_arrow_right</i></a></li>
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