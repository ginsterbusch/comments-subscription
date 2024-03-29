=== Comments Subscription ===
Contributors: Fabian Wolf
Tags: comments, subscribe, double opt in, kommentar, abonnieren, opt in, optin, kommentare, benachrichtigung, mail
Requires at least: 3.2
Tested up to: 3.9
Stable tag: 2.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

An effort to combine features of other forks of the well-known Subscribe-to-Comments PlugIn with the Subscribe-to-Double-Opt-In-Comments plugin, which features double-opt-in to prevent spam and stay in line with European laws.

== Changelog ==

= 2.0 =

* Changed the version number to 2.0 to reflect the name change
* Partial rewrite adding templates incl. override option via current theme
* Added customizable comment URL (mostly to add the current comment ID as hash)

= 6.4.1 =
* fixed warning: illegal string offset

= 6.4.0 =
* small bugfixes

= 6.3.1 =
* removed deprecated mysql_*() calls

= 6.3.0 =
* tested with WP 3.9

= 6.2.1 =
* repaired wrong translations and generated a new .pot file

= 6.2.0 =
* removed deprecated code

= 6.1.8 =
* tested with WP 3.7.1

= 6.1.7 =
* tested with WP 3.6

= 6.1.6 =
* multisite bugfixes

= 6.1.5 =
* minor bugfixes

= 6.1.4 =
* bugfixes
* more translations

= 6.1.3 =
* .pot language file updated
* Screenshot update
* German translation update
* Copyright notice could be made invisible for customer projects, donation via paypal is appreciated!

= 6.1.2 =
* Tested with 3.4.1

= 6.1.1 =
* Added Romanian translation, big thanks to: Web Geek Science (<a href="http://webhostinggeeks.com/">Web Hosting Geeks</a>)

= 6.1.0 =
* Merged multisite and normal version!

= 6.0.10 =
* added new translation: Dutch. Thanks to Florian!
* minor bug fixes

= 6.0.9 =
* minor bug fixes

= 6.0.8 =
* added 3.3 support
* added multisite version, but currently disabled, you have to enable it manually if you like to

= 6.0.7 =
* fixed some minor bugs

= 6.0.6 =
* Added new language: Lithuanian (thx to Nata, webhostinghub.com)

= 6.0.5 =
* Fixed some HTML markup
* Fixed double footer problem
* Tested with 3.2

= 6.0.4 =
* Fixed headline bug 

= 6.0.3 =
* Fixed bug with lost footer (using own style)

= 6.0.2 =
* Added support for Portuguese (Brazilian) [thanks to Leandro]
* 3.1.3 compatible

= 6.0.1 =
* Fixed minor bugs

= 6.0 =
* Fixed Bugfix within deletion of subscriptions

= 5.9 =
* Changed apostrophe compatibility
* Minor bugfixes within e-mail sending function

= 5.8 =
* Minor bug fixes
* Checked WP 3.1 compatibility

= 5.7 =
* Minor bug fixes

= 5.6 =
* New css class to style the Verify-Page: verify_succeeded and verify_failed
* Higher security for generated verify-token implemented
* Improved code formatting

= 5.5 =
* Checked 3.0.4 compatibility
* Bugfix with standalone subscribe

== Upgrade Notice ==

Currently none.

== Description ==

= English =

Allows readers to receive notifications of new comments that are posted to an entry, with double-opt-in Feature. 
First, the user will get an e-mail with a confirmation link, after the user has confirmed the subscription, he or she will be noticed about new comments. 
Plugin based on Mark Jaquith "Subscribe to Comments".
More information on my blog: <a href="http://www.sjmp.de/internet/subscribe-to-comments-mit-double-opt-in-pruefung/">sjmp.de</a>.

Language support: English, German, Slovak, Turkish, Danish, Belorussian, Spanish (Argentina), Ukrainian, Italian, Hebrew, Arabic, Portuguese (Brazilian), Lithuanian, Dutch, Romanian.

= Deutsch =

Weiterentwicklung der bekannten Version des "Subscribe to Comments" Plugins von Mark Jaquith.
Jetzt mit Double-Opt-In Feature. Wichtig f&uuml;r deutsche Blogger. User m&uuml;ssen ein Abo eines Blogposts erst via E-Mail bestaetigen.
Danach erhalten sie erst eine Mail falls ein neuer Kommentar gepostet wurde. So werden Spameintragungen ausgeschlossen.
Mehr dazu auch auf meinem Blog: <a href="http://www.sjmp.de/internet/subscribe-to-comments-mit-double-opt-in-pruefung/">sjmp.de</a>.

Sprachunterst&uuml;tzung: Deutsch, Englisch, Slowakisch, T&uuml;rkisch, D&auml;nisch, Wei&szlig;russisch, 
Spanisch (Argentinien), Ukrainisch, Italienisch, Hebr&auml;isch, Arabisch, Portugiesisch (Brasilien), Litauisch, Niederl&auml;ndisch, Rum&auml;nisch.

== Installation ==

= English =

1. Upload all files to the "/wp-content/plugins/" directory
2. Activate the plugin through the "Plugins" menu in your WordPress Adminpanel
3. Set settings via "Settings" menu in WordPress
4. Ready, steady, go :)

Questions? Go to <a href="http://www.sjmp.de/internet/subscribe-to-comments-mit-double-opt-in-pruefung/">this page</a> and leave a comment!

= Deutsch =

1. Dateien ins "/wp-content/plugins" Verzeichnis laden
2. Im Adminbereich das Plugin aktivieren
3. Einstellungen anpassen, ebenfalls im Adminbereich!
4. Fertig, jetzt darf man sich freuen :)

Fragen? Du kannst deine Fragen <a href="http://www.sjmp.de/internet/subscribe-to-comments-mit-double-opt-in-pruefung/">hier</a> stellen! Einfach einen Kommentar hinterlassen.

== Frequently Asked Questions ==

= How can I change the place of the subscription checkbox? =

Use this code (within the loop) in your template file, to change the place of the checkbox: <code><?php show_subscription_checkbox(); ?></code>

= Can people subscribe manually without commenting? =

Yes, just place this code snippet in your template (outside the comments form): <code><?php show_manual_subscription_form(); ?></code>

= I use Hosteurope.de as my website hoster and I cannot send e-mails via this plugin =

See this (german) comment for a solution: <a href="http://www.sjmp.de/internet/subscribe-to-comments-mit-double-opt-in-pruefung/comment-page-10/#comment-4460">Go to Comment</a>

== Screenshots ==

1. Part of the settings menu.
2. The checkbox to subscribe to a comment thread.
