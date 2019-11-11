=== UofT Bootstrap 3 ===
Contributors: Strategic Communications & Marketing
Requires at least: 4.1
Tested up to: 4.1
Stable tag: 4.1
License: To be updated...


CHANGE LOG
-------------------------------
2015.01.20 - version 2.0.0

1. Seach integration:
"Search U of T Sites" and "Search This Site (WordPress site search)" have been integrated into one search feature so that users can choose the search scope from "Search this site" or "Search all U of T sites". When users press "Enter" key without selecting the search scope, the WordPress site search will be shown by default.

2. Multilevel navigation menus:
The primary navigation has been replaced with the WordPress' default navigation that supports multi-level dropdown menus. (dropped Wp-bootstrap-navwalker class)

3. Bootstrap upgrade to v3.3.2 (http://getbootstrap.com):
To format correctly in IE8, Bootstrap.css is loaded locally and not through a CDN.
Something with respond.js doesn’t allow it to parse the CSS correctly when it’s loaded through an @import or through the CDN.

4. Outdated browser message for older IE browsers (IE8-):
Although this theme supports IE8, we added an outdated browser message box at the top of the page for IE8-  as we identified many popular WordPress plugins come with browser compatibility issues with IE8-.
When the site loads, the IE script detects older IE browsers(IE8-) and shows a friendly warning advising the user to update the browser.

5. Templates:
Default template (A page with a right sidebar) – page.php
A page with a right sidebar template:  page-leftSidebar.php
A page with a left sidebar template:  page-rightSidebar.php
A full width page template: page-fullwidth.php
Default homepage (or front page) template: By default, homepage points to front-page.php.

6. Widgets:
Global Sidebar - this will be shown in all pages except full-width page
Homepage Sidebar - this will be shown only in the front-page.php template page
Subpage Sidebar - this will be shown in all page templates except full-width page and front-page.

7. Others:
All css and javascript files are minified.
A touch error for the SVG logo has been fixed.


RECOMMENED PLUG-INS
-------------------------------
To be updated....
