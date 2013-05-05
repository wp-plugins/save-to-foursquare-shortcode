<?php
/*
	Plugin Name: Save to foursquare Shortcode
	Plugin URI: http://devin.reams.me/
	Description: Add the "Save to foursquare" button to posts with a simple WordPress Shortcode
	Version: 1.0
	Author: Devin Reams
	Author URI: http://devin.reams.me/
	License: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/
//	Learn more: https://foursquare.com/buttons/savetofoursquare

// [sfoursquare uid=900 vid=49c69305f964a52060571fe3]
add_shortcode ( 'sfoursquare' , 'dr_stfs_shortcode' );
function dr_stfs_shortcode ( $atts ) {

	// uid = referred by, vid = venue id
	extract( shortcode_atts( array(
		'uid' => '900', // Devin Reams
		'vid' => '49c69305f964a52060571fe3', // Crowd Favorite
	), $atts ) );

	// output the inline anchor tag
	$output = '
		<a href="https://foursquare.com/intent/venue.html" class="fourSq-widget" data-variant="wide">Save to foursquare</a>
		';

	// output the JavaScript to load the button on the page
	// TODO: output to footer (after anchor tag) only once to allow multiple on the page
	$output .= "
		<script type='text/javascript'>
		  (function() {
			window.___fourSq = { \"uid\": \"".$uid."\", \"vid\": \"".$vid."\"};
			var s = document.createElement('script');
			s.type = 'text/javascript';
			s.src = 'http://platform.foursquare.com/js/widgets.js';
			s.async = true;
			var ph = document.getElementsByTagName('script')[0];
			ph.parentNode.insertBefore(s, ph);
		  })();
		</script>
		";

	return $output;
}