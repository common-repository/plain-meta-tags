=== Plain Meta Tags===
Contributors: Pickling Jar
Donate link: http://www.thepicklingjar.com/
Tags: meta keywords, meta description, meta tags, meta
Requires at least: 3.1.2
Tested up to: 3.1.2
Stable tag: 1.0

A manual meta tag plugin that adds meta keywords and descriptions to pages and posts

== Description ==

This plugin adds meta information to posts and pages from custom fields "description" and "keywords"

To add a meta description to a post or a page, edit your post and add a new custom field with "Name: description" and "Value: your meta description here"

To add a meta keywords to a post or a page, edit your post and add a new custom field with "Name: keywords" and "Value: keywords1,keyword2,keyword3"

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `plain-meta-tags.php` to the `/wp-content/plugins/plain-meta-tags/` directory
2. Activate the `Plain Meta Tags` through the 'Plugins' menu in WordPress
3. Add "description" and "keywords" to custom fields

== Frequently Asked Questions ==

= No meta tags showing? =

Check that wp_head() is called in your themes header.php

Check that the post/page has custom fields "description" and "keywords" and that values are set

= Need Support? =
Although we do not offer support you can contact us via our homepage [The Pickling Jar Ltd](http://www.thepicklingjar.com/ "The Pickling Jar Ltd")

== Screenshots ==

1. Example of how to setup the custom fields

2. How the custom fields are displayed in html

== Changelog ==

= 1.0 =
* First release of plain meta tags

== Upgrade Notice ==

= 1.0 =
First release

