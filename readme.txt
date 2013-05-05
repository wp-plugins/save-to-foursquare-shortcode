=== Save to foursquare Shortcode ===
Contributors: devinreams
Donate link: http://www.kiva.org/
Tags: foursquare, shortcode
Requires at least: 2.5
Tested up to: 3.6
Stable tag: 1.0
License: GPLv2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

Add the "Save to foursquare" button to posts with a simple WordPress Shortcode.

== Description ==

If you reference venues on [foursquare](http://foursquare.com/) you may want to include the Publisher ["Save to foursquare" button](https://foursquare.com/buttons/savetofoursquare) inline within your WordPress posts.

This plugin is a simple shortcode that accepts two parameters:

* uid = foursquare user ID (numeric) to appear as 'referred' by' on foursquare once saved to a user's list
* vid = the venue's ID (hash at the end of a venue URL)

This was built for my own purposes but am happy to accept pull requests [on GitHub](https://github.com/devinreams/wp-save-to-foursquare-shortcode) for any improvements to make this more useful to the community: https://github.com/devinreams/wp-save-to-foursquare-shortcode

== Installation ==

1. Upload `save-to-foursquare-shortcode` to the `/wp-content/plugins/` directory or install from the WordPress dashboard
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `[sfoursquare uid=900 vid=49c69305f964a52060571fe3]` in your post where you'd like the button to appear

The two parameters are:

* uid = foursquare user ID (numeric) to appear as 'referred' by' on foursquare once saved to a user's list
* vid = the venue's ID (hash at the end of a venue URL)

== Changelog ==

= 1.0 =
* Initial release