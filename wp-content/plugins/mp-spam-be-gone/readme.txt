=== MP Spam Be Gone ===
Contributors: MikesPickz
Donate link: http://mikespickzws.com/wordpress-plugins/mp-spam-be-gone/
Tags: spam, antispam, anti-spam, comments, comment, comment spam, spam free wordpress, CAPTCHA, block spam, spam free, spambot, bot, recaptcha, pingbacks, trackbacks, security, Spam Free WordPress, Growmap Anti Spambot, Simple Trackback Validation with Topsy Blocker
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: 3.0

MP Spam Be Gone is the simplest, most effective Spam blocker.

== Description ==

MP Spam Be Gone is the simplest, most effective Spam blocker. This plugin was inspired by some of the best Anti-Spam plugins available on WordPress.

**Version 3.0 has been re-written to exclude the use of jQuery, which I believe was causing the problem for some users where the checkbox was not appearing. The other reason that this plugin may not work for you, is that your theme is not using the comment_form() function which was introduced with WordPress 3.0. Themes that have not updated to use this method of displaying the Comment Form are incompatible, as I hook into that to make the modifcations.**

Inspirations:
Spam Free WordPress by Todd Lahman, LLC
Growmap Anti Spambot Plugin by Andy Bailey
Simple Trackback Validation with Topsy Blocker by Tobias Koelligan

This plugin has aspects from all of the above mentioned plugins to form the most complete and dead simple Anti Spam plugin on WordPress. This plugin doesn't write anything to your database while preventing comment spam and trackback spam.

From Growmap Anti Spambot Plugin, I used the concept of having a checkbox display to the user in order to prevent automated Spam. To me this is the best way (and least intrusive) to completely prevent automated spam from ever even being written to the database in the spam que. It is physically impossible to get a false positive, since you either checked the button or not. The flaw with this plugin is that it does not work with Javascript disabled.

To combat that flaw, I use the copy and paste password fields from the Spam Free WordPress plugin. These fields are in a `<noscript>` tag, and only appear if Javascript is disabled. Unlike, the Spam Free WordPress plugin, these passwords are generated on the fly and never stored in the database.

These plugins primarily stop comment spam. In order to stop trackback spam, I added the IP address check, URL check, and Topsy check functions from Simple Trackback Validation with Topsy Blocker. If a trackback is identified as spam because of the IP address or Topsy, it is deleted and never written to the database. If a trackback is identified as spam because of the URL, it is marked as spam and sent to the Spam que. The reason that these are not automatically deleted, is because it is possible that the referring page is using a shortlink and therefore the full URL would not appear on the page in the first place.

When combined, this plugin will stop all automated spam and trackbacks.

It is intended to replace the above plugins.

You can't find a plugin simpler than this - set it and forget it. No options = no modifications to the database.

== Installation ==

1. Upload the `mp-spam-be-gone` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Do I need to do anything after activating this plugin? =
Absolutely not. Set it and forget it (and it will be easy to forget, when the spam stops).

= The checkbox is not appearing on my comment form? =
If Version 3.0 does not correct this problem, please check your theme templates. In the comments.php page, you should see a function - comment_form(). This function was added with WordPress 3.0 and is required for my plugin to hook into the comment form.

== Screenshots ==


== Upgrade Notice ==

1.Version 3.0 switches to a pure javascript method of adding the checkbox, jQuery is no longer used. If Version 2.0 works for you, there is no need to upgrade.

== Changelog ==

= 3.0 =
* Switches from using jQuery to display the checkbox, to a pure javascript method for even faster performance.

= 2.0 =
* Fixes the bug that caused the checkbox to not appear in the comment form

= 1.0 =
* Initial Release