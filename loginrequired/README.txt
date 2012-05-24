Elgg Loginrequired plugin
Latest Version: 1.8.3
Released: 2012-05-25
Contact: iionly@gmx.de
License: GNU General Public License version 2
Copyright: (c) iionly, Khaled Afiouni



Requirements:

For release r3 and newer at least Elgg 1.8.1 is required.



What this plugin does:

- No direct access to any site urls for non-logged-in visitors is possible with the exception of the pages explicitly allowed (login, registration, lost-password, external pages),
- When not logged in to the site only the login widget is displayed,
- It checks Elgg's walled-garden plugin hook for public pages,
- In addition it introduces it's own plugin hook to define public pages, i.e. the plugin hook defined in Khaled Afiouni's plugin can still be used in Elgg 1.8 with this plugin.
  Check the function login_required_default_allowed_list in start.php to see how you can define public pages in your plugins or add more pages to be viewable by not-logged-in users via this plugin.



ATTENTION: If using this plugin, please don't enable the walled-garden option on Elgg's advanced settings page.



Installation:

1. Copy the loginrequired plugin folder into you mod folder,
2. Make sure that in Advanced Settings the Elgg default walled-garden option is disabled,
3. Enable the loginrequired plugin in the admin section of your.

If you want to change the layout of the login page look at the file loginrequired/views/default/page/layouts/loginrequired_index_example.php. This is an alternative for loginrequired_index.php. The example loginrequired_index_example.php includes a right column with a widget, some text in the widget and an image shown in the widget. You can modify loginrequired_index_example.php according to your needs and then replace loginrequired_index.php with your version.


Changelog:

1.8.3:

- Code cleanup.


1.8.2:

- Added cache urls for css and js to allowed urls (thanks Hector),
- fixed a deprecated function issue I had missed in start.php.


r3:

- Upgraded for Elgg 1.8.1.


r2:

- Separate index page when not logged in that only shows the login widget,
- No site menu and search box when not logged in.


r1:

- Initial release.