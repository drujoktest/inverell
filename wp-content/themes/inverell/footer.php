<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
 </div>
</div>
<?php
	/*
	 * A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

			<div class="row nop fslidr"><div class="container">
	<h2>OTHER COUNCIL AFFILIATED WEBSITES</h2>
    <ul class="prslider">
    	<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/logo1.jpg" width="256" height="100"></a></li>
    	<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/logo2.jpg" width="256" height="100"></a></li>
    	<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/logo3.jpg" width="256" height="100"></a></li>
    	<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/logo4.jpg" width="256" height="100"></a></li>
    	<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/logo5.jpg" width="256" height="100"></a></li>
    	<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/logo1.jpg" width="256" height="100"></a></li>
    	<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/logo2.jpg" width="256" height="100"></a></li>
    	<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/logo3.jpg" width="256" height="100"></a></li>
    	<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/logo4.jpg" width="256" height="100"></a></li>
    	<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/logo5.jpg" width="256" height="100"></a></li>
    </ul>
</div></div> 

<div class="row nop footertop"><div class="container">
	<div class="col-md-4">
   	  <h3>CONTACT THE COUNCIL</h3>
        <p>Opening Hours: <br>
          Monday - Friday <br>
        8:30am - 4:30pm<br>
		Correspondence:<br>
		General Manager<br>
		PO Box 138 Inverell NSW 2360</p>
      <h3>Administration Centre:</h3>
        <p>144 Otho Street <br>
          Inverell NSW 2360<br>
        </p>
        <p>Phone: <a href="tel:0267288288">(02) 6728 8288</a><br>
          Fax: <a href="tel:0267288277">(02) 6728 8277</a><br>
          Email: <a href="mailto:council@inverell.nsw.gov.au">council@inverell.nsw.gov.au</a><br>
        ABN: 72 695 204 530</p>
    </div>
	<div class="col-md-4 subbox">
   	  <h3>CONNECT WITH US</h3>
        <p>Subscribe to receive council newsletters, event information and more straight to your inbox.</p>
        <!-- <form name="form1" method="post" action="">
          <input name="textfield" type="text" id="textfield" value="Your email id">
          <input type="submit" name="button" id="button" value="Submit">
        </form> -->
		 <?php echo do_shortcode('[simplenewsletter]');?> 
    </div>
	<div class="col-md-4 footerlogo">
    	<img src="<?php bloginfo('template_directory'); ?>/images/footer-logo.png" width="311" height="93">
        <p class="pp">THE SAPPHIRE CITY</p>
        <p>All rights reserved 2017</p>
    </div>
</div></div>

<div class="row nop footer"><img src="<?php bloginfo('template_directory'); ?>/images/web123.png" width="262" height="33"> </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --> 
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.simpleWeather.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/zozo.tabs.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/cbpHorizontalMenu.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bwlaccordion.js"></script>
<script type="text/javascript">
	
	$(function(){
		
		// Accordion with default settings.
		$("#default_accordion").bwlAccordion();
		
		// Accordion with pagination.
		$("#pagination_example").bwlAccordion({     
			pagination: true,
			limit: 4,
			theme: 'theme-red',
			nav_box: 'square'
		});
		
		// Accordion with expand all/ collapse all button.
		$("#exp_coll_btn_accordion").bwlAccordion({     
			ctrl_btn: true,
			closeall: true,
		   nav_box: 'arrow',
			theme: 'theme-blue'
		});
		
		// Accordion with toggle section.
		$("#toggle_accordion").bwlAccordion({
			toggle: true
		});
		
		// Accordion with all closed section.
		$("#all_closed_accordion").bwlAccordion({
			closeall: true,
			theme: 'theme-green'
		}); 
		
		// RTL mode example
		$("#rtl_accordion").bwlAccordion({
			rtl : true,
			animation: 'fadeleft',
			placeholder: 'بحث .....',
			msg_item_found : ' البند (ق) وجدت!',
			msg_no_result : 'العثور على أي شيء!'
		}); 

		
	});
	
</script>

<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
