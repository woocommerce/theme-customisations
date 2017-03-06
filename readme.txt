=== Theme Customisations ===
Contributors: jameskoster, woothemes
Tags: theme, edit, edits, customise, customisation, customize, customization, css, php, jquery
Requires at least: 3.0.0
Tested up to: 4.5.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A handy little plugin to contain your theme/plugin customisation snippets.

== Description ==

Think of this plugin as an alternative to adding code snippets to the functions.php, or style.css file in your child theme. Why? It keeps all of your changes in one location, independent of the other components that make up your web site. That means you can safely perform theme / plugin updates without the worry of losing your modifications as well as easily deactivating your customisations to check for conflicts.

*Note:* This plugin doesn't actually do anything on its own. It is purely a convenient place for you to store your own theme/plugin customisations.

== Installation ==

1. Upload `theme-customisations` to the `/wp-content/plugins/` directory
2. Add your customisations to the plugin either locally or via Plugins > Editor in the Dashboard
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Done!

== Usage ==

* Add any CSS snippets to `custom/style.css`. This file is found in this plugin.
* Add any PHP snippets to `custom/functions.php`. This file is found in this plugin.
* Add any jQuery snippets to `custom/custom.js`. This file is found in this plugin.
* Add custom top level template files (page.php, single.php etc) to `custom/templates/`. You will need to create the templates folder.
* Add any WooCommerce template files to `custom/templates/woocommerce`. You will need to create the templates and woocommerce folders.
* Activate the plugin.

== Frequently Asked Questions ==

= Isn't this what child themes are for? =

Well, kind of. Sure, you can put your modifications in a child theme, but there are many places (including woothemes.com and wordpress.org) to download and use child themes. If you decide to use a child theme built by a third party and make modifications there, you would lose them when performing updates. Also if you make all your modifications in your own custom child theme then realise that you want to use a child theme from your favorite theme vendor, you'll have to move all of your modifications somewhere else. To avoid that hassle, use this plugin.

= What templates can I override via this plugin? =

As you know, to override a parent themes template file via child theme you can just copy/paste it into your child theme. This is the one drawback of using this plugin - you can only override top level templates - not template partials. This means that you could add a `page.php` template file to the `/custom/templates/` dir of this plugin and it would work fine. You could not however add a `header.php` or `footer.php` template file. Those would not work.

= Should I put all my customisations in this single plugin? =

That's entirely up to you. There's nothing to stop you from duplicating this plugin and changing the name. That way you could theoretically keep each of your customisations in their own individual plugins. This can be very handy when debugging, or if you want to quickly enable/disable a specific customisations temporarily.
