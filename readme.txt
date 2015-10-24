=== Theme Customisations ===
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

A very simple plugin to house theme (or plugin) customisations. Think of this as an alternative to adding code snippets to the functions.php, or style.css file in your child theme. Why? It keeps all of your changes in one location, independent of the other components that make up your web site. That means you can safely perform theme / plugin updates without the worry of losing your modifications as well as easily deactiating your customisations to check for conflicts.

"But isn't that what child themes are for?" Well, kind of. Sure, you can put your modifications in a child theme, but there are many places (including woothemes.com and wordpress.org) to download and use child themes. If you decide to use a child theme built by a third party and make modifications there, you would lose them when performing updates. So instead of doing that, use this plugin.

== Usage ==

* Add any CSS snippets to `custom/style.css`.
* Add any PHP snippets to `custom/functions.php`.
* Add custom top level template files (page.php, single.php etc) to `custom/templates/`.
* Activate the plugin.

Simple!