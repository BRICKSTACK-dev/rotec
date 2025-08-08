=== Get Filesize Shortcode ===
Contributors: ikaring
Tags: shortcode, filesize, pdf
Requires at least: 3.0.1
Tested up to: 4.9
Stable tag: 1.0.8
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

"Get Filesize Shortcode" is a simple shortcode to get filesize of a file( eg. PDF, JPG, PNG ... ).

== Description ==

"Get Filesize Shortcode" is a simple shortcode to get filesize of a file( eg. PDF, JPG, PNG ... ) with a human readable format, using the largest unit the bytes will fit into.

#### Usage

Put `[filesize]http:yoursite.com/path/to/file.pdf[/filesize]` anywhere in a post.

Or you can use url attr instead. `[filesize url='http:yoursite.com/path/to/file.pdf']`

Also you can place `<?php echo do_shortcode('[filesize]http:yoursite.com/path/to/file.pdf[/filesize]'); ?>` in your templates.

#### Note

*   File must be in your server
*   With files larger than 2MB, it might return different number due to the spec of filesize function of PHP.

== Installation ==

1. Upload `get-filesize-shortcode` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

None yet.

== Screenshots ==

None.

== Upgrade Notice ==

None.

== Changelog ==

= 1.0.8 =
* 2018-08-16
* Update readme.txt, remove 'Donate link'

= 1.0.4 =
* 2018-08-08
* Update readme.txt

= 1.0.3 =
* minor bug fix

= 1.0.2 =
* 2018-08-08
* Support url attribute

= 1.0 =
