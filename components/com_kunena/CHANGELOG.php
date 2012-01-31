<?php
/**
* Kunena Component
* @package Kunena
*
* @Copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.org
**/

// no direct access
defined( '_JEXEC' ) or die();

?>
<!--

Changelog
------------
This is a non-exhaustive (but still near complete) changelog for
Kunena 1.6.x, including beta and release candidate versions.

Legend:

* -> Security Fix
# -> Bug Fix
+ -> Addition
^ -> Change
- -> Removed
! -> Note

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Kunena 1.7.2

31-January-2012 Matias
# [#251] Wrong link in eg-GB.com_kunena.install.ini (line 142)
# [#186] Prepare 1.7.2 Release

30-January-2012 Matias
+ [#250] Create installable language pack when building Kunena

29-January-2012 Matias
# [#249] Workaround crash in PHP 5.3 method_exists() if class doesn't exist

28-January-2012 Matias
# [#231] J2.5 Select box not working in category manager (better fix)
# [#247] Clean up all languages, add pt-PT to distribution

27-January-2012 Matias
# [#242] Fix language installation in Joomla 2.5

25-January-2012 Matias
# [#225] Add support for JUpgrade 2.5.0 - fixing some bugs
# [#235] Joomla 2.5: profile integration in menuitem always links to Kunena

24-January-2012 Matias
# [#222] Do not allow login in CB integration if user has logged in
# [#238] Fix pl-PL language installation

20-January-2012 810
# [#231] J2.5 Select box not working in category manager
# [#237] Add html5: Tabindex

20-January-2012 Xillibit
# [#233] Kunena report generator does not display the installed path of Kunena
# [#232] Kunena report generator not to conceal menu items

15-January-2012 Matias
# [#222] CB integration login breaks user ACL (workaround Joomla 1.7.3 bug)
# [#224] Bulk Actions post URL issues
# [#223] Broken RSS link and other &amp; issues in English language
# [#202] Automatically rename attachment if filename has no allowed characters
# [#225] Add support for JUpgrade 2.5.0

07-January-2012 Xillibit
# [#219] Fatal Error: Call to a member function enqueueMessage() in karma

30-December-2011 Matias
# [#214] Fatal Error: Class 'JToolBarHelper' not found in toolbar.kunena.html.php
# [#211] reCAPTCHA causes topic split
# [#207] Latest posts show only first post as being new
# [#210] No posts on the profile if new user has used discuss plugin
# [#217] Discuss Plugin should not set meta keywords and description

27-December-2011 Xillibit
# [#212] URLs are broken in RSS Atom feed

14-December-2011 Xillibit
# [#206] Fatal error in preview if topic has attachments (regression)
# [#204] Administration: Report configuration, Fatal error in detecting AUP (Little fix)

12-December-2011 Xillibit
# [#203] Personal text overflows into other elements of Kunena user profile

11-December-2011 Xillibit
# [#205] Chrome: white page blinks after saving profile
# [#204] Administration: Report configuration, Fatal error in detecting AUP
# [#206] Fatal error in preview if topic has attachments

10-December-2011 Matias
# [#119] Text looking like bbcode becomes empty message
# [#194] Blank message because of a bug in BBCode URL shortening
+ [#189] Add readme file for extra languages
# [#192] Infinite redirect in installer (Chrome)
# [#195] Password Reset, Remind and Registration URL not routed
# [#191] Category index: URL to last post is wrong
# [#174] Set upper limit to number of posts displayed
# [#171] Fix UTF-8 URL encoding problem in IE
! Note: Urls having illegal or reserved characters: ()*! will change!
# [#200] Automatically sync all new users into Kunena

24-November-2011 Xillibit
# [#193] All new users are hidden in Kunena

23-November-2011 Matias
# [#188] Undefined property in CKunenaLogin::getReturnURL()
# [#190] Fatal error in module/plugin administration if Kunena not fully installed

20-November-2011 Matias
^ [#186] Update version to 1.7.2

14-November-2011 Xillibit
# [#182] Duplicated COM_KUNENA_MENU_SEARCH in language file

Kunena 1.7.1

16-November-2011 Matias
^ [#123] Update languages
^ [#123] Simplify language string for removing Kunena
- [#123] Remove pl-PL and fi-FI (we need to be under 2M limit)
^ [#123] Kunena 1.7.1 Release (UnderUret)

14-November-2011 Matias
# [#179] CB integration: registration not using CB setting

13-November-2011 810
+ [#178] Add youtube parameter CC

12-November-2011 Matias
# [#81] Joomla 1.7: 404 error after logout
# [#177] C:\fakepath when attaching file (remove path)
* [#137] JomSocial Activity Stream displaying private posts

5-November-2011 Xillibit
# [#175] When an user vote for a poll the time isn't saved

31-October-2011 Matias
# [#169] Hide some extra information from configuration report (part 2)

29-October-2011 Matias
# [#168] UTF title issue
* [#169] Hide some extra information from configuration report

27-October-2011 Matias
* [#163] Fix some issues with Canonical URL

26-October-2011 Xillibit
# [#147] The points aren't gived with AUP under J!1.7+ (regression on access check)

26-October-2011 Matias
# [#147] Add support for access levels and improve user groups support (also in J!1.5)
# [#155] Apostrophes do not appear in the notification messages
# [#159] Undefined proporties if duplicate identical message

22-October-2011 Xillibt
# [#147] The points aren't gived with AUP under J!1.7+ (improvements on access check)

17-October-2011 Matias
# [#118] Installer says: Install Kunena 1.6

16-October-2011 Xillibt
# [#147] The points aren't gived with AUP under J!1.7+ (somes little improvements)

13-October-2011 Matias
# [#150] Access control: Do not check Joomla groups if all users have access
# [#151] reCaptcha: Fix error message if server cannot be connected
# [#152] Allow [url] to start with index.php

08-October-2011 Xillibt
# [#147] The points aren't gived with AUP under J!1.7+

07-October-2011 Xillibt
# [#145] Users can't remove posts

26-September-2011 Xillibit
# [#140] Undefined property: stdClass::$description

23-September-2011 Xillibit
# [#138] When Deleting a message with attachment, attachment still remains

10-September-2011 Xillibit
# [#133] Bug in page titles and meta descriptions

3-September-2011 Xillibit
# [#120] PHP Fatal error: Class 'JDocumentHTML' not found in template
# [#104] Template Manager cannot list more then 20 templates

2-September-2011 Matias
# [#129] Fix canonical URLs
^ [#130] Improved JUpgrade support (package)

1-September-2011 Matias
# [#126] Articles bbcode: \n is converted to <br>
^ [#128] Use update collection in Joomla 1.7 (show updates also for modules)
^ [#130] Improved JUpgrade support (usergroups, install Kunena)

31-August-2011 Matias
# [#121] Joomla 1.7: fix broken French admin language file
# [#121] Add missing nb-NO language
# [#122] Fatal Error: Undeclared static property in KunenaAccessJoomla16
^ [#123] Prepare 1.7.1 Release: update version information

30-August-2011 Xillibit
# [#118] Installer says: Install Kunena 1.6 (update fr-FR)

Kunena 1.7.0

29-August-2011 Matias
^ [#107] Update credits
# [#108] English language: Category Manager locked description error
# [#111] Lightbox image width leads to invalid html, trim long urls break
^ [#98] Update nl-NL
^ [#45] Kunena 1.7.0 Release (Tale)

28-August-2011 Xillibit
# [#110] Undefined property: stdClass::$category_alias

27-August-2011 Matias
# [#98] Fix broken language files

26-August-2011 Xillibit
# [#102] Don't select super user in userlist doesn't work

26-August-2011 Matias
^ [#98] Update ar-AA, bg-BG, ca-ES, cs-CZ, da-DK, de-DE, el-GR, es-ES, fa-IR
^ [#98] Update fi-FI, hu-HU, id-ID, it-IT, ja-JP, km-KH, lt-LT, mk-MK, nb-NO
^ [#98] Update nl-NL, pl-PL, pt-BR, pt-PT, ro-RO, ru-RU, sr-RS, sr-YU, sv-SE
^ [#98] Update th-TH, tr-TR, vi-VN, zh-CN, zh-TW
+ [#98] Add languages az-AZ, et-EE, he-IL, sq-AL and .tx/config file
- [#99] Remove ar-AA, bg-BG, ca-ES, da-DK, fa-IR, hu-HU, id-ID, nb-NO, nl-NL, ro-RO, th-TH, tr-TR
# [#96] Joomla 1.5: Last login time in user list uses wrong timezone (part 2)
# [#100] Joomla 1.7: Warning: preg_match() when editing profile
+ [#95] Template chooser: Add &func=template&name=xxx
# [#95] Template chooser: Fix a bug where images come from the wrong template

25-August-2011 Matias
# [#95] Fix broken template chooser support
# [#96] Joomla 1.5: Last login time in user list uses wrong timezone

24-August-2011 Xillibit
^ [#94] Update fr-FR language

23-August-2011 Xillibit
# [#92] Article links under J1.6+ doesn't take care of seo (Part 2)

22-August-2011 Xillibit
# [#92] Article links under J1.6+ doesn't take care of seo

22-August-2011 Matias
# [#89] Joomla 1.7: Add ACL support to backend

21-August-2011 Xillibit
# [#86] Let user to put only 8 attachments

21-August-2011 Matias
# [#82] AUP integration: better detection to prevent crash on older versions
# [#83] Joomla 1.5: Access levels are not working
# [#84] Joomla 1.5: "Primary/Secondary Includes Child Groups" doesn't work
# [#59] Joomla 1.5: Fix Mootools 1.12 support when editing category
# [#59] Joomla 1.5: On Public category there's no need to show Public / Public Back-end

19-August-2011 Matias
# [#69] Make local URIs to work in all tags [url], [url=xxx] and [img]
# [#76] Joomla 1.7: Multi-language menu support is missing

18-August-2011 Matias
# [#71] Improve English language by using category and topic instead of forum and thread
# [#71] Improve English language (small changes)
^ [#45] Rename release to Kunena 1.7.0
^ [#45] Update version requirements
^ [#46] Hide JXtended and NoixACL Access control options if they are not used (deprecated)
# [#77] Joomla 1.6/1.7 and IE9: empty page flickers after posting

17-August-2011 Matias
# [#71] Improve English language in forum configuration

16-August-2011 Matias
# [#66] Extra SQL queries to fetch moderators if there are no moderators
# [#69] Parser double escapes all URLs resulting &amp;

15-August-2011 Matias
# [#64] Fix naming conflict with Nooku

14-August-2011 Matias
# [#57] Hide quick reply if captcha is enabled

13-August-2011 Matias
+ [#57] Create Kunena 2.0 compatible version of captcha + code improvements
+ [#57] Add new option to challenge new users with captcha
+ [#62] Save written message when posting/editing fails because of a mistake
! NOTE: Old templates keep on working, but are missing new features!

12-August-2011 Xillibit
+ [#57] Captcha plugin doesn't work in J1.6+
# [#57] Captcha plugin doesn't work in J1.6+ (missing recaptcha class and rename class methods in the right way)

12-August-2011 Matias
# [#59] Add support for access levels in category permissions
# [#58] Blocked users are getting email notifications on public categories

11-August-2011 Xillibit
^ [#53] Move logout and login methods outside of display

11-August-2011 Matias
^ [#44] Subscription tries to send too many emails: add configuration options

10-August-2011 Xillibit
# [#53] With CB 1.7.0 not possible to logout from Kunena

10-August-2011 Matias
# [#48] Notice: Use of undefined constant KUNENA_JOOMLA_COMPAT
# [#50] Joomla 1.7: Fix missing menu when not using default Kunena Menu
# [#19] Problem with two-tiered duplicate menus
# [#25] bbcodes in JomSocial activity stream
* [#55] Only global moderators should be able to ban users
# [#44] Subscription tries to send too many emails (hosts have limits: 10/sec)

4-August-2011 Matias
# [#45] Prepare 1.6.6 Release: increase version
# [#43] [quote] and other tags appears
# [#46] Joomla 1.6+: Disable JXtended and NoixACL

3-August-2011 Xillibit
# [#41] When thank you, the activity stream add more text than needed
# [#37] thank you max number does not work
# [#39] Some cancel buttons in backend doesn't back at the right place

2-August-2011 Xillibit
* [#36] Function getAccess in Jomsocial activity returns nothing

31-July-2011 Xillibit
# [#36] Jomsocial 2.2.3 error J17 K1.6.5

Kunena 1.6.5

27-July-2011 Matias
# [#27] Fixing broken language files (best effort)
- [#27] Removing Macedonian language as it doesn't fit into package and hasn't been updated
- [#27] Removing Czech language as it doesn't fit into package and hasn't been updated
# [#27] Fix invalid syntax in a few language files
^ [#2] Add missing configuration options to install.xml file
^ [#2] Kunena 1.6.5 Release (Babel)

27-july-2011 810
^ [#27] Change Dutch language

26-July-2011 svanschu
^ [#27] pulling from transifex
^ [#27] revert the \n to <br /> commit

25-July-2011 Matias
# [#21] Fix version detection for Joomla 1.7 (remaining cases)

24-july-2011 810
^ [#30] Css J17 backend template manager
^ [#27] Update English language
^ [#31] Css J16/J17 img border

24-July-2011 Xillibit
# [#18] RSS Feeds are broken

22-July-2011 svanschu
^ [#27] change \n to <br />

22-july-2011 810
^ [#27] Change Dutch language

22-July-2011 Xillibit
# [#32] Make better third party component detection in report configuration setting

19-July-2011 Xillibit
# [#32] Backport fix for kunena 2.0 for access under j1.6/j1.7 (use function do detect joomla version)

19-July-2011 draganz
# [#26] fix inline linked images in post area

17-July-2011 Xillibit
# [#22] Feed rss is set always on rss type and never on atom type
# [#32] Backport fix for kunena 2.0 for access under j1.6/j1.7

09-July-2011 lorddarkangel
^ [#16] fixing en-GB for transifex

8-July-2011 Xillibit
# [#14] Category manager set item unpublished when filtered

7-July-2011 fxstein
^ [#10] Updated README.md for github (and builder)
^ [#9] Increase avatar database column to 255 - to support longer paths from conversions

4-July-2011 Matias
# [#7] CB integration: Login and logout doesn't work
^ [#4] Improve Error handling for administrator

1-July-2011 Matias
# [#3] Fix Joomla version detection for 1.7+
# [#1] Joomla 1.6: JomSocial ActivityStream broken
^ [#4] Improve Error handling in Kunena administration
# [#5] Wrong user count in statistics
# [#6] User Ban: Modifying ban causes private and public reason to flip

23-June-2011 Matias
# [#26236] Fix Kunena Internal Error on ill-formed attachments
# [#26237] Fix Kunena login/logout form URL for sh404SEF

21-June-2011 Matias
+ [#26213] Add very basic RTL support for default template

19-June-2011 Xillibit
# [#25980] Some strings are defined multiples times in en-GB file in frontend

15-June-2011 Xillibit
# [#25980] A string was defined twice time in en-GB file in backend

14-June-2011 Matias
# [#26152] KunenaAccess::loadSubscribers(): warning if all users gets removed from the list

14-June-2011 Xillibit
# [#25980] Fix typo in en-GB file in backend

13-June-2011 Matias
^ [#25917] Merged revision 4936 from /branches/1.6.5-LDA-language-2011-05-20
^ [#25917] Merged revisions 4932-4934 from /branches/1.6.5-xillibit-fixes-11-06-2011

11-June-2011 Xillibit
# [#26141] Use third parties API to get version of AUP and Uddeim (AUP version)
# [#26140] J1.7 support : Systematic elimination of DS as directory separator (Backend part)
# [#26140] J1.7 support : Systematic elimination of DS as directory separator (Frontend part)

11-June-2011 LDA
^ [#25944] update id-ID (thanks Daniel)
+ [#25944] added fa-IR (thanks Abdulhalim)

9-June-2011 Matias
# [#26152] Fix undefined properties when approving messages (and showing system topic icon)

7-June-2011 Matias
^ [#25917] Merged revision 4866 from /branches/1.6.5-810-18-05-2011
^ [#25917] Merged revisions 4890-4909 from /branches/1.6.5-xillibit-fixes-15-05-2011
^ [#25917] Merged revision 4868 from /branches/1.6.5-LDA-language-2011-05-20

3-June-2011 Xillibit
# [#26042] In config report for third party components under Joomla! 1.6 the wrong xml file is called

2-June-2011 Xillibit
# [#26036] Add in userlist and stats a user count like jomsocial
^ [#25980] Weird characters in en-GB language file in backend (thanks nima.abbc)

31-May-2011 Matias
^ [#25917] Merged revisions 4862-4890 from /branches/1.6.5-xillibit-fixes-15-05-2011

28-May-2011 Xillibit
+ [#25998] Add setting to allow the user to show the number wanted of thankyou in the message

25-May-2011 Xillibit
- [#25992] Revert change : Categories locked are showed in drop-down list
^ [#25993] Add language string instead the JText::sprintf('Read more...') into article bbcode
# [#25993] When setting full is choosed in discuss plugin, only the part after the readmore is showed in Kunena
^ [#25980] Typo in en-GB language file in backend (thanks nima.abbc)

23-May-2011 Xillibit
# [#25972] Global settings in profile doesn't follow disable or enable setting

22-May-2011 Xillibit
# [#25959] Error 500 when you submit a pol without check any case
# [#25931] Member Search from Memberlist not working
# [#25960] When set a number limit for poll vote, the limit isn't reach

20-May-2011 LDA
^ [#25944] update el-GR (thanks Chrysovalantis Mochlas)
^ [#25944] update hu-HU (thanks pedrohsi)
^ [#25944] update th-TH (thanks drlovecat)
^ [#25944] update pt-BR (thanks iLucato)

20-May-2011 Xillibit
# [#25939] Missing image causes Invalid argument supplied in BBCode parser

18-May-2011 810
^ [#25934] fix quote button
^ [#25934] fix pagination size for rockettheme, yootheme ect templates
^ [#25934] Minor CSS fixes

17-May-2011 Matias
^ [#25917] Merged revisions 4857-4862 from /branches/1.6.5-xillibit-fixes-15-05-2011

16-May-2011 Xillibit
^ [#25895] Simplify lightbox setting
# [#24888] Under J!1.6, just sync user in right way when save profile to avoid issues

15-May-2011 Xillibit
^ [#25895] Let user choose to load completelly the lightbox (class and script) or just set the class on images
# [#25896] Links in RSS Feed go to first page of thread when thread is more than 1 page
# [#25897] Notice: Undefined variable: jconfig_smtpuser in administrator/components/c​om_kunena/admin.kunena.php
^ [#25898] Instead of showing "the profile page ins't available for guests" in system message, show it just below the loginbox
# [#25899] Endtime of poll doesn't work

12-May-2011 Xillibit
^ [#24703] Update version info to 1.6.5-DEV

10-May-2011 severdia
# [#25856] Fixed regression in image set selection
# [#25859] Fixed toggler rollover

Kunena 1.6.4

7-May-2011 fxstein
# [#24703] Update readme and version info

4-May-2011 Matias
# [#25819] Add Joomla 1.5 to 1.6 migration support

2-May-2011 Xillibit
# [#25799] Joomla! 1.6 : when you set an admin group in a category, it doesn't saved

27-April-2011 Matias
# [#25597] Joomla 1.6: Edit profile / Global Settings are not showing up
# [#25770] Joomla 1.6: All dates are presented in UTC
# [#25762] Joomla 1.6: Fix geshi highlighting (thanks JoniJnm)
# [#25168] CSS fix to show Topic started Today by User in right order (thanks Jelle)

26-April-2011 Matias
# [#25756] Joomla 1.6: Menu creation fails on duplicated menu alias (profile)
# [#25095] Subscription email: remove hardcoded "XXX forum"
^ [#15886] Merged revisions 4801-4802 from /branches/1.6.4-810-15-04-2011

23-April-2011 Xillibit
^ [#24847] Make all updates on fr-FR languages files which are remaining

21-April-2011 810
^ [#24847] updated nl-NL
# [#25718] PermDelete redirecting

20-April-2011 Matias
^ [#15886] Merged revisions 4778-4793 from /branches/1.6-xillibit-fixes-02-04-2011
# [#25168] CSS coloration and layout fixes (thanks Jelle)
# [#25710] Adminitration: Behavior reversed for Show Deleted Messages options

19-April-2011 Xillibit
# [#25644] Image attachement can't be saved by right clicking the image, just allowing it in message
^ [#24847] Little update on fr-FR translation in backend
# [#25592] Set true for JHtml::_('behavior.framework') to load mootools more

18-April-2011 Xillibit
# [#25655] Categories locked are showed in drop-down list - Display locked cats in search

17-April-2011 Xillibit
^ [#24847] Little update on fr-FR translation
# [#25664] Javascript error : document.id("postcatid") is null
# [#25656] Date 1999-11-30 If someone has never logged-in

16-April-2011 Matias
^ [#15886] Merged revisions 4711-4778 from /branches/1.6-xillibit-fixes-02-04-2011
^ [#15886] Merged revisions 4720-4780 from /branches/1.6.4-language-LDA-2011-04-03
^ [#15886] Merged revisions 4773-4779 from /branches/1.6.4-810-15-04-2011

16-April-2011 svens(LDA)
^ [#24847] update fi-FI (thanks Mortti)

15-April-2011 810
^ [#25168] Minor CSS fixes
^ [#24847] updated nl-NL
# [#25656] Last visit date is 1999-11-30 if user has never logged in

15-April-2011 Xillibit
# [#25654] J1.6: the submenu created are not the right access
# [#25655] Categories locked are showed in drop-down list

14-April-2011 svens(LDA)
^ [#24847] update ru-RU (thanks Zarkos)

12-April-2011 svens (LDA)
^ [#24847] update de-DE (thanks rich)

9-April-2011 Xillibit
# [#25594] Remove adress mail from report kunena config
# [#25595] Get menu details in report configuration doesn't work when it's translated in J1.6.1+

8-April-2011 Xillibit
# [#25592] Under J1.6.1+ need to load proper for javascript and mootools

7-April-2011 Xillibit
# [#23443] Article BBCode: dispatch onPrepareContent only after filling $article->text

5-April-2011 Matias
# [#25326] Turn off PHP notice/warning handlers when not in debug mode (Joomla 1.5 surpresses way too many errors with @)
^ [#15886] Merged revisions 4714-4720 from /branches/1.6.4-language-LDA-2011-04-03

3-April-2011 LDA
^ [#24847] update es-ES (thanks Kunena Spanish Team)
^ [#24847] update ar-AA (thanks baazza)
^ [#24847] update ru-RU (thanks Zarkos)
^ [#24847] update lt-LT (thanks joomla123.lt)

29-March-2011 Matias
# [#24991] Birthdate in kunena profile is different under Joomla 1.6 and Joomla 1.5

26-March-2011 Severdia
# [#25329] Fixed avatar border regression

26-March-2011 Xillibit
# [#25460] Issue on Joomla! 1.6 which prevent to show menu details in configuration report

25-March-2011 Xillibit
# [#25448] Timestamp isn't saved in database on anonymous post

22-March-2011 Matias
# [#24762] Regression in Installer: generate new moderator index only once

21-March-2011 Matias
# [#24379] Fix Regression: undefined variable

18-March-2011 Matias
# [#25168] Fix CSS color issue in sticky messages
# [#25375] BBcode color editor doesn't display colors
# [#24185] Joomla 1.6: Category ACL is not optimal (NOTE: migration from J1.5 needs manual step)

15-March-2011 Matias
# [#25339] Joomla 1.6: Change event names
# [#25343] Joomla 1.6: All links in modules have Itemid=0
# [#25345] Userlist does not obey user setting to hide his email address
^ [#15886] Merged revisions 4567-4644 from /branches/1.6.4-LDA(svens)-language-2011-02-23

15-March-2011 LDA
^ [#24847] updated ar-AA (thanks baazza)
^ [#24847] updated pl-PL (thanks Andrzej Makowiecki)
^ [#24847] updated ru-RU (thanks Zarkos)

14-March-2011 Xillibit
# [#25334] Object doesn't support this property or method in IE compatibility mode

13-March-2011 Severdia
# [#25335] Fixed Javascripts errors in IE compatibility mode. (thanks to srebbul)
# [#25329] Fixed missing style for search page header (from template param)

13-March-2011 Matias
+ [#25326] Implement improved PHP error handlers (backport from K2.0)
^ [#15886] Merged revisions 4567-4614 from /branches/1.6.4-LDA(svens)-language-2011-02-23

12-March-2011 svens(LDA)
^ [#24847] updated cs-CZ (thanks David Mara)
^ [#24847] updated ca-ES (thanks Arivor)
^ [#24847] updated nb-NO (thanks Joomla! i Norge)
^ [#24847] updated lt-LT (thanks Joomla123.lt)
^ [#24847] updated pl-PL (thanks JoomlAdmin.pl)
^ [#24847] updated fi-FI (thanks Mortti)

11-March-2011 Severdia
^ [#25296] Optimized images showing up as not fully optimized in Page Speed
# [#25299] Fixed missing active menu for Atomic under Joomla 1.6

10-March-2011 Matias
^ [#15886] Merged revisions 4549-4590 from /branches/1.6-xillibit-01-03-2011

9-March-2011 Xillibit
# [#25242] Load default icons backend J15 & J16 and fix calendar in new ban

9-March-2011 Matias
# [#24783] Regression in installer: fix wrong message when uninstalling K1.6 and backup exists
# [#24985] Threaded view broke Kunena Discuss
# [#25254] Fix a bug where recent topics was very slow for visitors
^ [#25254] New users get unread messages from last 14 days, not 30 days as before

9-March-2011 810
^ [#25168] Fix CSS layout and color issues (j16 fixes)

8-March-2011 Xillibit
# [#25227] Joomla! 1.6: changes for plugins directories and report configuration settings
# [#25216] JomSocial activity stream integration shows unapproved posts

8-March-2011 810
# [#24306] Max width bug image link
^ [#25168] Fix CSS layout and color issues (IE7 fixes, j16 fixes frontend)

8-March-2011 Matias
# [#25205] Joomla 1.6: admin isn't by default a global moderator
# [#24130] Joomla 1.6: Sending subscriptions doesn't work

7-March-2011 Matias
# [#25198] Fix infinite redirect loops, show warning instead
# [#25198] Warning: Invalid argument supplied for foreach() in KunenaRouter
# [#25130] Improve Mootools version detection and warnings (under debug mode)
^ [#15886] Merged revisions 4531-4549 from /branches/1.6-xillibit-01-03-2011
^ [#15886] Merged revisions 4486-4567 from /branches/1.6.4-LDA(svens)-language-2011-02-23
^ [#24847] updated fi-FI (thanks Mortti)
^ [#15886] Merged revisions 4548-4569 from /branches/1.6.4-810-fixes-4-3-2011

6-March-2011 810
^ [#25168] Fix CSS layout and color issues (double div.kmsgtext in css)
^ [#24847] updated nl-NL
^ [#25168] Fix CSS layout and color issues (read announcement)

6-March-2011 svens(LDA)
^ [#24847] updated ru-RU (thanks Zarkos)
^ [#24847] updated de-DE (thanks rich)
^ [#24847] updated id-ID (thanks Daniel)
^ [#24847] disabled nb-NO version 1.6.1
^ [#24847] disabled pt-BR version 1.6.1

6-March-2011 Matias
# [#25192] Regression: the "insert" button for adding a url to a post does not work
# [#25191] Joomla 1.6: Kunena system plugin not installed
# [#25191] Joomla 1.6: Untranslated string in menu manager: plg_system_kunena
# [#25190] Joomla 1.6: User profiles are not created automatically into database
# [#25190] Joomla 1.6: Administrators do not have administrative permissions
# [#24960] Update example template to have all the new features
+ [#25197] Debug mode: Add JavaScript to detect some of the most common MooTools issues

5-March-2011 Matias
# [#25166] Can't ban users in backend
# [#23815] Deleted attachments are not removed from disk
# [#25187] Joomla 1.6 workaround: Use two separate manifest files and hope that right one gets picked up
# [#25188] Installer: Improve error reporting by showing all enqueued messages
# [#25189] Joomla 1.6: Kunena System plugin isn't removed on uninstall
# [#24184] Joomla 1.6: Menu creation fails on error if same alias is already defined
# [#24184] Joomla 1.6: Menu item wasn't created into main menu

4-March-2011 810
^ [#25168] Fix CSS layout and color issues (Whoisonline)
^ [#25168] Fix CSS layout and color issues (few little fixes)

4-March-2011 Xillibit
# [#25123] Cast all values to be int for security purpose (Part 2)
^ [#24847] Update fr-FR language

4-March-2011 Matias
^ [#25026] Make new subcription options more powerful
^ [#25026] Make new subcription options to work with custom templates (without changing them)
# [#25142] Menu creation: New menu link into Kunena Menu should be unpublished by default
# [#25142] Regression in Administration: Create Menu: menu link doesn't get updated
# [#25140] Regression in CSS: Kunena menu tabs have too much left padding in some templates
# [#25095] Subscription email: "Subject: xxx" gets filtered from the message
# [#25095] Subscription email subject should be topic subject, not message subject
+ [#24023] Add instruction to moderator dropdowns
# [#24469] Add configuration option to prevent Guests from viewing members' user profiles
# [#25171] Cloak all Email addresses (in BBCode, profile, userlist)
# [#24758] Confidential tags hide text from admins/mods in topic history and message preview
# [#25178] Statistics page: database error
# [#25168] Fix misc CSS layout and color issues (thanks 810)

3-March-2011 Xillibit
# [#25123] Cast all values to be int for security purpose

3-March-2011 Matias
+ [#25026] Administration: Add more subscription options (thanks Frank Gore)
+ [#25023] Limit notification emails until user visits the topic again (thanks Frank Gore)
+ [#25023] Limit notification emails on category subscriptions for new topics only
+ [#25023] Add configuration option for limiting emails
# [#25023] Do not show error message on sending emails if Kunena email address is empty
^ [#25023] Improve subscription emails to contain more relevant information

2-March-2011 svens(LDA)
^ [#24847] updated hu-HU (thanks pedrohsi)

2-March-2011 Matias
# [#25130] Avoid JavaScript $() conflicts with JQuery and other frameworks
^ [#15886] Merged revisions 4522-4531 from /branches/1.6-xillibit-01-03-2011

2-March-2011 Xillibit
# [#25123] trashUserMessages() in users manager doesn't work like excepted (Part 2)
# [#25133] Mark all forum read fails under J! 1.6
# [#25087] Show none in report configuration settings when there are no plugins, modules...

1-March-2011 Xillibit
# [#25084] Moving topics shows unpulished categories in the pull-down
# [#25083] "There are no forums in the category"
# [#25093] Change "forum" to "category" in subscription emails
# [#25100] Change translation of COM_KUNENA_BBCODE_HIDE
# [#25123] trashUserMessages() in users manager doesn't work like excepted

27-February-2011 svens(LDA)
+ [#24847] added cs-CZ (thanks David Mara)
^ [#24847] updated el-GR (thanks Chrysovalantis Mochlas)
^ [#24847] updated da-DK (thanks Lars Westermann)
^ [#24847] updated ru-RU (thanks Zarkos)
^ [#24847] updated nl-NL (thanks weenkbuul)
^ [#24847] updated es-ES (thanks Kunena Spanish Team)

26-February-2011 Matias
# [#25087] Administrator: Fatal error in Report Configuration Settings
# [#24924] Userlist: MySQL error when getting usercount
# [#24364] Fix broken layout in Google maps

23-February-2011 Matias
^ [#15886] Merged revisions 4401-4471 from /branches/1.6.3-language-LDAsvens-2011-01-22
^ [#15886] Merged revisions 4458-4462 from /branches/1.6-xillibit-19-02-2011
^ [#24847] update fi-FI
# [#25051] Migration from older versions fail because of missing KunenaFactory
# [#25048] Ordering of categories go random when >127 categories in one section
# [#24902] Installer: Migrating Kunena fails under MySQL 5.5
# [#24787] Make ZIP smaller than 2M by removing languages which haven't been updated since K1.6.0
- [#24787] Remove languages: ar-AA, el-GR, it-IT, ja-JP, pl-PL, pt-PT, sr-RS, sr-YU, sv-SE, vi-VN, zh-CN, zh-TW
# [#25000] Editor: add space before emoticon (fix broken emoticons when no space)
# [#25001] RSS: add &format=feed into URI to prevent plugins outputing into stream
# [#24379] Many repeated use of smileys causes white page
# [#24824] Menu link should not have the same name.. (part 2: do not replace users own menu item)

22-February-2011 Matias
# [#25046] Regression: deleted and unapproved messages are not gray when inside topic

21-February-2011 svens(LDA)
^ [#24847] update da-DK (thanks Lars Westermann)
^ [#24847] update de-DE (thanks rich)

21-February-2011 Severdia
# [#24364] CSS fix for pagination and announcement links (regression from Joomla 1.6 fixes)

20-February-2011 svens(LDA)
^ [#24847] update hu-HU (thanks pedrohsi)

19-February-2011 Xillibit
# [#24924] Add configuration setting to let users choose the way to count totalusers (Part 2)
^ [#24841] Report configuration settings: missing plg_jomosocial_groups and plg_jxfinder
# [#24992] JFolder::delete : path isn't a folder administrator/components/com_kunena/archive , language...

19-February-2011 svens(LDA)
^ [#24847] update ru-RU (thanks Zarkos)
^ [#24847] update th-TH (thanks drlovecat)
^ [#24847] update tr-TR (thanks cumla)
^ [#24847] update zh-TW (thanks gewed)

19-February-2011 Matias
# [#24985] Threaded layout was missing an image
# [#24985] Fix wrong kind of link in threaded view
# [#24985] Threaded view: Minor fix in message tree

18-February-2011 svens(LDA)
^ [#24847] update mk-MK (thanks Baze)
^ [#24847] update fi-FI (thanks Mortti)

18-February-2011 Matias
+ [#24985] Feature: Threaded and indented layouts for topics (disabled in configuration)

17-February-2011 Matias
# [#24959] Always initialize session if allowed=na
+ [#24985] Feature: Threaded and indented layouts for topics

16-February-2011 Matias
# [#24948] Administrator: Workaround for Joomla 1.5 bug where translations aren't shown in Menu Manager
# [#24949] Installer: Parse error in PHP4
# [#24824] Menu link should not have the same name as the real menu item
# [#24783] Remove option to restore backup from K1.5 when K1.6 has already been installed
^ [#15886] Merged revisions 4391-4419 from /branches/1.6-xillibit-fixes-8-02-2011
# [#24841] Cleanup configuration settings report
# [#24841] Configuration report: improve menu item list (show all published items pointing to Kunena)
# [#24784] SVN Install: Install new language files before entering into installer
# [#22933] Add dropdown for Admin view trashed items (part 2: don't change meaning of old settings)

16-February-2011 Xillibit
+ [#24924] Add configuration setting to let users choose the way to count totalusers

14-February-2011 Xillibit
# [#24818] MySQL tables are case insensitive: installation fails on JOS_ prefix

13-February-2011 Xillibit
^ [#24841] Remove in kunena report configuration the empty settings
# [#24781] Administration: When creating new category, access control cannot be set
# [#24842] Warning division by zero in latestx.php
# [#24888] Under Joomla 1.6 avatar doens't update in kunena_users

13-February-2011 Severdia
# [#24364] CSS fix for color coded user names (regression from Joomla 1.6 fixes)

12-February-2011 Xillibit
# [#24843] Fatal error: Class 'JParameter' not found in /components/com_kunena/kunena.php on line 210

10-February-2011 svens(LDA)
^ [#24847] update ca-ES (thanks Arivor)
^ [#24847] update de-DE (thanks rich)

7-February-2011 Xillibit
# [#23443] update french language file about edittime and gracetime
# [#24755] Best credit to designers (thanks gonzaunit)
# [#24784] Check if DOMDocument class exists and fail installation if it doesn't
# [#24788] Allow permament delete on all topics, not just deleted ones
^ [#22933] Add dropdown for Admin view trashed items

5-February-2011 Matias
# [#24761] Ban manager is not showing all the information
# [#24762] Performance optimization for getting moderators by CB team (Thanks Beat!)
# [#24763] NoixACL integration: fatal error while checking subscriber rights
# [#24764] Using user defined title from menu Items breaks SEO in some environments (remove feature)

4-February-2011 Severdia
# [#24364] CSS fixes for Joomla 1.6 (Beez and Atomic)

3-February-2011 Severdia
+ [#24745] Add new color options for template params (BlueEagle only)
^ [#24745] Changed admin config buttons
# [#24364] CSS fixes for Joomla 1.6 (Beez and Atomic)

31-January-2011 fxstein
^ [#24703] Update version info to 1.6.4-DEV

Kunena 1.6.3

31-January-2011 fxstein
^ [#24074] Update README.txt for 1.6.3 release
^ [#23898] Updated changelog date one more time to 2011

31-January-2011 Matias
# [#24690] Profile/Recent view: Fix bug where clicking on More shows your own posts instead of users

30-January-2011 fxstein
^ [#23898] Updated kunena_upgrade.xml to use build variables
^ [#23898] Updated 2011 dates (additional)
^ [#24074] Update version info to 1.6.3 (Parlare)

30-January-2011 Severdia
# [#22921] Updated Template Manager icon in menu
^ [#23898] Updated 2011 dates and .org instead of .com
# [#24687] Fixed button text color when skinner is activated
^ [#24688] Reverted publish/unpublish images to Joomla 1.5 defaults
# [#24022] Fixed extra table spacing on module positions
# [#24022] Added check for module position to hide row if no module published.

30-January-2011 Matias
* [#24563] Security (High/High): SQL injection vulnerability in search (thanks Adam Nichols)
# [#24682] Joomla 1.6: Kunena Menu doesn't show up

29-January-2011 Matias
# [#24656] CommunityBuilder: fix performance issues from loading users one by one (CB1.4+)
^ [#15886] Merged revisions 4298-4317 from /branches/1.6.3-language-LDAsvens-2011-01-22

29-January-2011 svens(LDA)
^ [#24560] update fi-FI (thanks Mortti)

28-January-2011 Severdia
# [#24659] Fixed Google maps controls CSS

28-January-2011 Matias
^ [#24385] Performance optimization for high joomla guest counts by CB team (Thanks Beat!)
^ [#15886] Merged revisions 4303-4304 from /branches/1.6-xillibit-fixes-27-01-2011
+ [#24655] Add activity events for subscribe, favorite, sticky, lock, karma and onBeforePost/Reply/Edit
+ [#24656] CommunityBuilder: improve integration by adding support for all activity events (CB1.4+)
# [#24656] Fix wrong parameters in onAfterThankyou and onAfterKarma

27-January-2011 svens(LDA)
^ [#24560] update ru-RU (thanks Zarkos)

27-January-2011 Xillibit
# [#24272] When you want edit an anouncement unpublished, the forms is empty (Part 2)

27-January-2011 Severdia
# [#24649] Fixed template params for header color in IE

26-January-2011 Matias
^ [#15886] Merged revisions 4157-4285 from /branches/1.6-xillibit-fixes-20111205
^ [#15886] Merged revisions 4274-4291 from /branches/1.6.3-language-LDAsvens-2011-01-22

26-January-2011 svens(LDA)
^ [#24560] update es-ES (thanks Kunena Spanish Team)
^ [#24560] update en-GB

24-January-2011 Xillibit
# [#24590] Topic/Create: Showing poll and anonymous options works only in FireFox

23-January-2011 Xillibit
^ [#24413] Add title parameter in function CKunenaLink::GetThreadPageLink for module latest (Part 2)

22-January-2011 svens(LDA)
^ [#24560] update de-DE (thanks Rich)
^ [#24560] update ar-AA (thanks baazza)
^ [#24560] update di-FI (thanks Morrti)
^ [#24560] update es-ES (thanks Kunena Spanish Team)
^ [#24560] update ru-RU (thanks Zarkos)

22-January-2011 Matias
# [#24563] Search does not check all variables

22-January-2011 Xillibit
# [#24559] Hide confidential information also from moderators who are not moderating current category

19-January-2011 Xillibit
# [#24277] Kunena userlist under J! 1.6 grab super admin with userid=62 instead of 42 (Part 2)

19-January-2011 Matias
# [#24480] Regression: Do not send email to author itself
* [#24494] Security (Low/Low): User can make XSS attack to himself (thanks Ervis Tusha)

17-January-2011 Xillibit
# [#24443] BBCode help input need to be disabled to avoid to be edited

16-January-2011 Xillibit
# [#24368] Set the subject for all replies on moderate doesn't work
# [#24374] Fix PHP notices and warnings
# [#24412] bulk actions delete permanently and restore shows up to moderators even if they have no permission to do those tasks
^ [#24413] Add title parameter in function CKunenaLink::GetThreadPageLink for module latest

15-January-2011 Matias
^ [#15886] Merged revisions 4181-4182 from /branches/1.6-LDAsvens-bugs-2011-01-13

14-January-2011 fxstein
^ [#24385] Performance optimization for high joomla guest counts by CB team (Thanks Beat!)

13-January-2011 Xillibit
# [#24367] Kunena report function shows form even if id is empty

13-January-2011 svens(LDA)
# [#24366] Joomla 1.6: Missing backend translations

13-January-2011 Matias
# [#23920] Fix a bug when getting subscribers if string gets passed instead of an array
# [#24357] CommunityBuilder integration: Fix white pages in CommunityBuilder backend
# [#24357] CommunityBuilder integration: Fix broken sidebar modes in Community Builder Forum Plugin
# [#24357] Change rank detection code to check category administrators (used in ACL integration)
# [#24358] Fix broken Moderator rank detection
# [#24359] Router: Undefined index 'func' in ParseRoute
# [#23920] Fix another Kunena Internal Error when posting (subscriptions)

10-January-2011 Xillibit
# [#24272] When you want edit an anouncement unpublished, the forms is empty
# [#24277] Kunena userlist under J! 1.6 grab super admin with userid=62 instead of 42

9-January-2011 Xillibit
# [#24239] When guest posting, the field name isn't displayed and it's empty, so the form can't validate
* [#24073] Remove Kunena version put in RSS feed header
^ [#24073] When RSS feed is disabled show error 404 instead of a die()

8-January-2011 Xillibit
# [#24230] Mark all forum read fails under J! 1.6

7-January-2011 Xillibit
# [#23704] First item in breadcrumbs links to entrypage, not top-level index
# [#23801] bug in aup activity integration which show subject for users which are not right to see it

7-January-2011 Matias
^ [#15886] Merged revisions 4157-4162 from /branches/1.6-xillibit-fixes-20111205

6-January-2011 Xillibit
# [#24149] Redirect loop in userlist and update translation
# [#24170] When save user profile under J! 1.6 the user is not assigned to any group

5-January-2011 Xillibit
# [#24064] Fix some undefined variables in kunena report configuration
# [#24156] Error message on start of installation on archive which is not here
# [#24155] When posting as anonymous, no username is displayed in listcat and showcat

5-January-2011 Matias
# [#24147] Show user defined title from menu Item (Parameters (System) > Page Title)

4-January-2011 Matias
# [#24083] Joomla 1.6: generate Kunena Menu during installation
^ [#15886] Merged revisions 4049-4142 from /branches/1.6.3-jomsocial
# [#24129] Fix conflicts with JXtended
^ [#15886] Merged revisions 4149-4153 from /branches/1.6.3-xillibit-j1.6fixes-01012011
# [#23920] Fix Kunena Internal Error when posting (subscriptions)

4-January-2011 Xillibit
# [#24064] Put some code in kunena report configuration into functions to be more readable
# [#24094] Joomla 1.6: Article BBCode doesn't work

3-January-2011 Matias
# [#24076] Profile user settings doesn't work in J!1.6 (part 2)
^ [#15886] Merged revisions 4141-4147 from /branches/1.6.3-xillibit-j1.6fixes-01012011

3-January-2011 Xillibit
# [#24076] Profile user settings doesn't work in J!1.6

2-January-2011 Xillibit
# [#24064] Joomla 1.6: Don't check if component is enabled, because it doesn't seem to work
# [#24073] Joomla 1.6: Use Joomla! JDocumentFeed to generate RSS feed instead of Joomla! deprecated library
# [#24081] Remove bbcode attachment and code from JS activity stream
# [#24075] PDF generation is broken under J! 1.6

2-January-2011 Matias
# [#24080] Kunena Discuss: Fatal error when sending subscription emails
# [#24077] Joomla! version check in integration is slightly broken
^ [#15886] Merged revisions 4127-4135 from /branches/1.6.3-xillibit-j1.6fixes-01012011
# [#24078] Joomla 1.6: Categories are not displayed in select lists
# [#24084] Joomla 1.6: Kunena menu items are missing select for categories
# [#24093] Joomla 1.6: Usergroups cannot be assigned into categories
# [#24088] Installer: Add a few new breakpoints into database migration/upgrade process

2-January-2011 fxstein
^ [#24074] Update version info to 1.6.3-DEV

01-January-2011 Xillibit
^ [#23293] Update xml language file for fr-FR because doesn't work and fixes issues in fr-FR and en-GB
# [#24062] Fix issue under J! 1.6 Fatal error: Cannot access protected property TableKunenaCategory::$_db in admin.kunena.php on line 1331
# [#24063] Fix issue under J! 1.6 Fatal Error: Call to undefined method JSite::addCustomHeadTag() in kunena.parser.php on line 1074
# [#24064] Report kunena configuration settings is broken under J! 1.6
# [#24065] SQL Error when post new topic or reply under J! 1.6
# [#24066] Credit has a space when the variable $this->params->get('templatebyName') is empty (thanks gonzaunit)
# [#24071] Poll expired setting doesn't work in form and calendar doesn't open in J! 1.6
^ [#23293] Little update on fr-FR and en-GB to don't have issue with languages

21-December-2010 Matias
^ [#23920] Cleanup all KunenaAccess classes
# [#23920] Fix a few bugs which broke up ACL
# [#23920] Fix a bug making too many dummy queries when instantiating categories
+ [#23920] Administration: Display JomSocial group in category list, hide group info from edit
+ [#23920] Make Joomla 1.5 ACL integration to use phpgacl making it to work with a few ACL components
# [#23920] Fix a bug where ACL groups were not shown at all

20-December-2010 Matias
^ [#23152] Update version info to 1.6.3 (Chama = group, society)
+ [#23920] Move some functions/functionality from derived classes into KunenaAccess
+ [#23920] Separate Kunena logic from ACL in KunenaAccess::getSubscribers()
+ [#23920] Add KunenaCategory::getCategoriesByAccess()
^ [#23920] Change session handling to accept new version of access classes
^ [#23920] Simplify structure in KunenaAccessXXX::loadAllowedCategories() functions
+ [#23920] Add CommunityBuilder triggers: loadAdmins, loadModerators, checkSubscribers

19-December-2010 Matias
+ [#23920] Add JomSocial groups support: Create new fields into tables
+ [#23920] Backport KunenaAccess classes from Kunena 2.0

Kunena 1.6.2

29-December-2010 fxstein
^ [#23152] Update ReadMe for 1.6.2 Release

29-December-2010 Severdia
# [#22979] Small CSS tweaks on spacing for subcategories.

25-December-2010 fxstein
^ [#23152] Update version info to 1.6.2 stable (Team)
^ [#23152] Update automatic version info for all languages
# [#23152] Added missing index.html files to various languages
^ [#23152] Update automatic version info for default template
+ [#23152] Add Update version expansion to builder for default templates

24-December-2010 fxstein
^ [#15886] Merged revisions 4036-4063 from /branches/1.6-810-fixes-20101219
^ [#15886] Merged revisions 4052-4056 from /branches/1.6-LDAsvens-language-20101221
^ [#15886] Merged revisions 4005-4043 from /branches/1.6-xillibit-fixes-20101216

24-December-2010 810
^ [#23875] Minor html fixes backend (Joomla 1.6 Part 2)

23-December-2010 810
^ [#23875] Minor html fixes backend (Joomla 1.6)

21-December-2010 svens(LDA)
^ [#23293] update ru-RU (thanks Zarkos)
^ [#23293] update fi-FI (thanks Mortti)

20-December-2010 Xillibit
^ [#23293] Added french translation fr-FR.com_kunena.sys.ini

19-December.2010 Matias
# [#23884] Add basic Joomla 1.6 support for menu items: latest, listcat, post, profile, showcat
# [#23826] Fix regression in Category Manager: escaped too much
# [#23885] Restore support for old templates from K1.6.1

19-December-2010 Xillibit
+ [#23892] Show in report configuration settings the Kunena template details
# [#23798] On reply postcatid is undefined in javascript

18-December-2010 Matias
+ [#23863] Add support for language installation for j1.6
^ [#23863] Install language files during SVN install
^ [#23863] Remove special SVN language file handling
^ [#15886] Merged revisions 4005-4025 from /branches/1.6-xillibit-fixes-20101216
# [#23872] Rename CKunenaFolder::makeSafe() as it conflicts with Joomla 1.6
# [#23884] Support Joomla 1.6 in KunenaRoute class
# [#23884] Add Joomla 1.6 translations: en-GB.com_kunena.sys.ini
# [#23884] Fix menu highlight in Joomla 1.6
# [#23884] Add basic Joomla 1.6 support for menu items: entrypage, help, rules, search
# [#23798] Fix wrong case in filename: Kunena.special.js.php

18-December-2010 Xillibit
^ [#23863] Add support for language installation for j1.6

18-December-2010 810
^ [#23875] Minor html fixes backend
^ [#23875] Minor html fixes backend (part2)
^ [#23875] Minor html fixes backend (part3)

16-December-2010 Xillibit
# [#23798] Remove ajax for show poll icon and anonymous field on new topic button tab (Part 3)
^ [#23821] Replace some select list in advanced search by JHTML things
^ [#23828] Save changed poll vote function use JDate instead of now() from mysql

16-December-2010 Matias
* [#23813] Administration: Prevent possible XSS attacks

16-December-2010 810
^ [#23293] add/update languages Dutch
^ [#23854] Hyperlink announcement
^ [#23829] Double lines in flat.php because off ktopicmodule

15-December-2010 fxstein
^ [#15886] Merged revisions 3995-3996 from /branches/1.6.2-810-bugfixes-29-10-2010
^ [#15886] Merged revisions 3973-3997 from /branches/1.6-xillibit-fixes-20101130

15-December-2010 Xillibit
^ [#23798] Remove ajax for show poll icon and anonymous field on new topic button tab
# [#23180] Don't need a function to get the client_id in KunenaUser
# [#23763] Change single quoted HREFs in URLs generated by BBcode
# [#23798] Remove ajax for show poll icon and anonymous field on new topic button tab (Part 2)

15-December-2010 810
# [#23320] Auto Blending Feature (skinner) Color Bug
# [#23293] add/update languages Dutch

14-December-2010 Xillibit
# [#23760] when you select cb in integration: Profiles and User List, userlist don't work anymore

14-December-2010 Severdia
# [#23251] Added fix from Jelle for broken ability to move posts (to fix Florian's previous fix)

13-December-2010 Xillibit
# [#23251] When you merge topics even if there is no polls, the topics are not merged
# [#23180] CB avatars aren't displayed in kunena user manager

13-December-2010 fxstein
# [#23767] Add ksource=kunena into com_content events triggered by Kunena to prevent recursion
- [#23767] Remove global variable: kunena_in_event - requires new release of discuss plugin

12-December-2010 Severdia
# [#23251] Added fix from Xillibit for broken ability to move posts.

12-December-2010 Xillibit
# [#23251] Prevent to move a topic with a poll into another topic with a poll and display an error message (fix regression)
# [#23732] Can't add poll on new topic tab button untill the user has choosed a right section
# [#23625] Change spoiler behaviour in Jomsocial activty stream and rss, remove [hide][/hide] from rss feed
# [#23732] Can't add poll on new topic tab button untill the user has choosed a right section (Part 2)

11-December-2010 Matias
^ [#15886] Merged revisions 3960-3970 from /branches/1.6-xillibit-fixes-20101130
^ [#15886] Merged revisions 3921-3968 from /branches/1.6-LDAsvens-language-20101112

11-December-2010 svens(LDA)
+ [#23293] added id-ID Bahasa Indonesia (thanks Daniel)
^ [#23293] update de-DE (thanks rich)

11-December-2010 Xillibit
# [#23724] Userlist show all show nothing
# [#23726] Usernames Showing Instead of Full Name

10-December-2010 Xillibit
# [#23716] Kunena report configuration settings cause blank page when is putting in [code][/code]
^ [#23293] Update some strings in english language file and french too

08-December-2010 Xillibit
# [#23482] Strip space in attachments filename because broke the lightbox

06-December-2010 Xillibit
^ [#23293] Update some strings in english language file

05-December-2010 Xillibit
# [#23625] emo Jomsocial activity stream, show hidden text to everyone

01-December-2010 Xillibit
# [#23609] Spoiler does not operate in message preview (New Topic)
^ [#23293] Update some strings in english language file

30-November-2010 Xillibit
# [#23251] Fix issues which don't display message that the topic can't be moved and fix a little issue

29-November-2010 Matias
^ [#15886] Merged revisions 3945-3948 from /branches/1.6.2-810-bugfixes-29-10-2010
^ [#15886] Merged revisions 3939-3945 from /branches/1.6-xillibit-fixes-20101107
# [#23567] Show confidential information also for the author of the message
# [#19693] Searches with - ' " return no results

27-November-2010 810
# [#23528] Set none to profiles and user list
# [#23529] "This file is hidden for" message when guests cannot view attachments
# [#22795] The tab text is truncated under IE 8.0

26-November-2010 Matias
# [#23564] Fix error: You are not allowed to change your name!

26-November-2010 Xillibit
# [#22704] Fix regression which prevent to display guests or members

25-November-2010 Xillibit
# [#23326] Bug when moving a post to a different category and leaving a shadow
^ [#23293] Update and fix some typos in fr-FR language translation (thanks lavsteph)
+ [#23453] Add configuration setting to restrict userlist to registred user only

24-November-2010 Xillibit
# [#23251] Prevent to move a topic with a poll into another topic with a poll and display an error message
# [#23483] Find a way to avoid warning when the poll has been deleted or has disappeared

24-November-2010 Matias
^ [#15886] Merged revisions 3896-3930 from /branches/1.6-xillibit-fixes-20101107

23-November-2010 svens(LDA)
^ [#23293] updated it-IT (thanks onishima and ohifra)

21-November-2010 Xillibit
# [#23251] When moving a topic with polls in another topics need to handle polls (fix regression)
+ [#22704] Add configuration option to show online users by minutes or session time
# [#23394] BBcode form editor issues

19-November-2010 svens(LDA)
^ [#23293] updated mk-MK (thanks Baze)

18-November-2010 Xillibit
^ [#23321] Need to extend Report Config with menu info
# [#23251] When moving a topic with polls in another topics need to handle polls

17-November-2010 Xillibit
^ [#23322] Need to extend Report Config with 3rd part SEF info

16-November-2010 Xillibit
# [#23332] Improve accessibility for visually-impaired users - user edit profile tabs

16-November-2010 Severdia
# [#22979] Fixed spacing between pagination in forum listing

15-November-2010 Matias
^ [#15886] Merged revisions 3892-3899 from /branches/1.6-LDAsvens-language-20101112
^ [#15886] Merged revisions 3879-3896 from /branches/1.6-xillibit-fixes-20101107

14-November-2010 Xillibit
# [#23182] Total users doesn't match up
# [#23311] When a topic is moved all the subject replies are identical to the parent message

12-November-2010 Xillibit
# [#23286] Add autocomplete off on password fields in profile

12-November-2010 svens(LDA)
^ [#23293] updated es-ES (thanks Alakentu)
^ [#23293] updated lt-LT (thanks Zylkin, Andrius Balsevičius)

11-November-2010 Xillibit
# [#23224] Don´t show karma in horizontal profile
+ [#23250] Configuration setting to set since which time to show topics in latestx class and works too independently wth Klatest module

9-November-2010 Severdia
# [#22979] Fixed display of bullets

8-November-2010 Xillibit
# [#23001] CSS lightbox issue under chrome 7, use now mediaboxadvanced tested under IE8, Firefox, Google chrome

7-November-2010 Xillibit
^ [#23154] Move in an another screen the button move user messages in kunena user manager
^ [#23155] Change Mark all categories read and remove word forum which are inappropriate
^ [#23157] Cancel button in kunena template manager go back to control panel

6-November-2010 fxstein
^ [#23152] Update version info
- [#22805] Remove remaining skinner ini files and references from some languages

Kunena 1.6.1

6-November-2010 fxstein
^ [#15886] Merged revisions 3761-3851 from branches/1.6-LDAsvens-language-20101021
^ [#22690] Update version info for 1.6.1 release
^ [#22690] Update README.txt for 1.6.1 release

5-November-2010 fxstein
^ [#23138] Change all copyright and credits information to kunena.org

4-Nov-2010 svens (LDA)
^ [#22975] update ru-RU (thanks ZARKOS)
^ [#22975] updated fi-FI (thanks Mortti)

3-Nov-2010 svens (LDA)
^ [#22975] update de-DE (thanks rich)

2-November-2010 Matias
# [#20084] KunenaDiscuss: Fix incomplete URL in subscription email

1-November-2010 Matias
# [#20084] KunenaDiscuss: Do not show unapproved/deleted messages
# [#20084] KunenaDiscuss: Fix white page when article gets rendered inside event

31-October-2010 fxstein
+ [#22849] Add new module position kunena_topic_1 through kunena_topic_n
^ [#15886] Merged revision 3828 from /branches/1.6-xillibit-fixes-20101017

31-October-2010 svens (LDA)
^ [#22975] update ca-ES (thanks garrotix)

31-October-2010 Xillibit
# [#22971] Fix issue which prevent to add points on delete and strings on thank you are wrong

31-October-2010 Matias
# [#20084] KunenaDiscuss: Fix message ordering to obey configuration

30-October-2010 Matias
^ [#15886] Merged revisions 3784-3802 from /branches/1.6-LDAsvens-language-20101021
^ [#15886] Merged revisions 3769-3801 from /branches/1.6-xillibit-fixes-20101017

30-October-2010 Xillibit
# [#22971] Check now that the rules are enabled in AUP before adding points (thanks Bernard)
# [#22919] Make working the limit on thank you in latestx, to show the correct number of messages in latest module

30-October-2010 svens (LDA)
^ [#22975] update de-DE (thanks rich)
^ [#22975] update nb-NO (thanks rued, Roar and Bjørn)

29-October-2010 Xillibit
# [#20084] Fix undefined variable on parser.php line 642 and wrong location of link readmore when there is not params used
+ [#23060] Add the possibility to choose if you want suscribe to a topic in quick reply

28-October-2010 Xillibit
^ [#20084] Change how to works the [article] bbcode which supports now some parameters (link, full, intro)
# [#20084] Fix Fatal error: Call to protected method CKunenaPost::isUserBanned() from context 'plgContentKunenaDiscuss' in kunenadiscuss.php on line 604
# [#20084] Fix some wrongs visiblity for methods in post.php to be allowed to use these methods in kdiscuss

26-October-2010 Xillibit
+ [#20084] Make the possibility to set a specific for a new topic (when using kdiscuss) and new bbcode [articlelink] and [articlecontentlink]

26-October-2010 svens (LDA)
^ [#22975] update ru-RU (thanks ZARKOS)
^ [#22975] update de-DE (thanks rich)

25-October-2010 Matias
# [#23015] If open_basedir exludes /tmp, PHP warning is shown

24-October-2010 Matias
^ [#22979] Split default css into styling and coloration files to enable more than one color style

24-October-2010 fxstein
^ [#22979] Adjustable and inhertited link coloration

23-October-2010 Xillibit
# [#22971] Use new namming convention for aup plg and use differents if an old AUP verison is installed

23-October-2010 fxstein
^ [#22979] Default template version and settings updated
+ [#22979] Merge Skinner into default template

23-October-2010 Severdia
^ [#22979] First clean up pass on skinner CSS file
^ [#22979] Clean up aliasing on all emoticons and topic icons, skinner fixes

23-October-2010 Matias
^ [#15886] Merged revisions 3741-3760 from /branches/1.6-xillibit-fixes-20101017
^ [#15886] Merged revisions 3761-3772 from /branches/1.6-LDAsvens-language-20101021
^ [#15886] Merged revision 3757 from /branches/1.6.1-810-bugfixes-19-10-2010

23-October-2010 svens (LDA)
^ [#22975] Updated fi-FI (thanks Mortti), it-IT (thanks ohifra and scherman83)
# [#22975] Fix da-DK language comments from # to ;
+ [#22975] Add new languages to build.xml

22-October-2010 Severdia
+ [#22979] Added Skinner parameter in default template

21-October-2010 svens (LDA)
^ [#22975] Updated tr-TR (thanks Tolga), th-TH (drlovecat), hu-HU (pedrohsi) , es-ES (Neon26), ca-ES  (Neon26), fi-FI (Mortti)
+ [#22975] added pt-PT (thanks Aurélio Vieira and Mickael Cavaco), nb-NO (Joomla! i Norge), ja-JP (Masato Sato)

21-October-2010 Xillibit
+ [#22971] AUP integration adds points on delete message
# [#22972] Issue metadesc isn't cut with function which support uft8

21-October-2010 Severdia
# [#22979] Removed duplicate property in CSS
+ [#22979] Added Skinner override in default template CSS folder (needs to be hooked up in params)
+ [#22977] Added markup for color coding of write status (needs the conditional reworked to work)

20-October-2010 810
# [#22627] Many updates on nl-NL translation

20-October-2010 svens (LDA)
^ [#22975] Updated de-DE, it-IT, pt-BR
+ [#22975] added da-DK, pt-PT, sv-SE

20-October-2010 Xillibit
# [#22950] Hide preview buttons for guest users
^ [#16390] Change "Mark all forums read" into "Mark all categories read"
^ [#16390] Fix some typos in french translations (fr-FR) (thanks lavsteph)

19-October-2010 fxstein
^ [#16390] Updated it-IT: Fixed incorrect date/time format

18-October-2010 Severdia
# [#22934] Fixed spelling errors in English language files (minor cleanup, no keys changed)

18-October-2010 Matias
# [#22713] Improve routing: Simplify KunenaRoute::getDefault()
# [#22713] Improve routing: Add support for default values to get rid fields with default values in URI
# [#22713] Improve routing (No Menu): Do not redirect into another location, if there's nowhere to go
# [#22713] Improve routing: remove &view field also when there's no Itemid

17-October-2010 Xillibit
# [#22919] Some update on latestx class to make working correctly the module klatest
^ [#22907] Add commas after each user name in Who Is Online box
* [#22920] Remove confidential information from RSS feed

17-October-2010 fxstein
# [#22713] Fix bug in route.php with illegal array index

17-October-2010 Matias
# [#22838] Saving profile doesn't work in latest Google Chrome / IE9 (autocomplete issue)

16-October-2010 Matias
# [#22898] Activity Stream integration: attachments do not show up in the stream
^ [#15886] Merged revisions 3718-3725 from /branches/1.6-xillibit-fixes-20101010
# [#22871] JomSocial Activity Stream: thankyou gives points to wrong user
# [#22871] JomSocial Activity Stream: actor is user, who gives the points
# [#22713] Improve routing: If there is no menu, redirect to Kunena Menu
# [#22713] Improve routing: If in Kunena menu and default menu has simple menuitem to Kunena, highlight it
# [#22713] Improve routing: Router didn't remove extra &func=xxx parameter, giving results like /forum/recent/latest

15-October-2010 Matias
+ [#22694] Add support for ArtOfUser ACL without needing JXtended library
+ [#22694] Add class JDatabaseQuery, imported by kimport('joomla.database.databasequery')

15-October-2010 fxstein
# [#22880] Fix forum header color through template parameters - make menu use the same color

14-October-2010 Xillibit
# [#22869] Bug which does not allow user to delete his own posts
# [#22829] Make sure that menu aliases are in lower case

14-Octover-2010 fxstein
+ [#22864] Limit jomSocial activity stream content with new setting + Read More link

14-October-2010 Matias
# [#22863] Subscriptions query gets slow if there are a lot of users (even if there are few subscriptions)
^ [#22842] Cleanup install.xml file on deprecated configuration options, add missing options
# [#22866] AUP integration: link to userlist doesn't have menu item assigned to it (thanks Bernard)

13-October-2010 Xillibit
# [#22706] Show in configuration report the default joomla and details on joomla menu items
# [#22805] File name incorrect in xml for en-GB.com_kunena.tpl_skinner.ini

13-October-2010 fxstein
+ [#22849] Add new module position kunena_section_1 through kunena_section_n

12-October-2010 Matias
^ [#15886] Merged revisions 3700-3712 from /branches/1.6-xillibit-fixes-20101010
^ [#15886] Merged revisions 3697-3709 from /branches/1.6-LDAsvens-bugs2-20101010
- [#22842] Cleanup deprecated code: Administration has integration options which haven't been used since K1.5
- [#22842] Remove deprecated configuration option: imageprocessor
^ [#22842] Move all new language strings into the end of the ini files

12-October-2010 svens (LDA)
# [#22827] Check old folder/file to delete on upgrade Part 1

11-October-2010 svens (LDA)
# [#22810] Some escape issue in title

11-October-2010 Xillibit
# [#22627] Some updates on fr-FR translation
+ [#22821] Display categories subscriptions in kunena user manager

10-October-2010 svens (LDA)
+ [#22780] Jomsocial User Points for Thankyou and wall notice

10-October-2010 Xillibit
# [#22805] Some language files issues in skinner
# [#22801] Add configuration setting to disable lightbox

10-October-2010 Matias
# [#22800] Fix KunenaCategory->delete() when user uses custom database prefix
# [#22693] [#22694] Fix bug in NoixACL and JXtended integration when sending subscriptions
^ [#15886] Merged revisions 3668-3680 from /branches/1.6-LDAsvens-bugs-20101008
^ [#15886] Merged revisions 3681-3684 from /branches/1.6-xillibit-fixes-20101005
# [#22718] All moderators show up as global moderators (coloration)

10-October-2010 Xillibit
# [#22766] Guests appearing on the who's online stats when the access to the forum is registered and above
+ [#22799] AUP integration adds points on thank you
# [#22772] Forum statistics: Warning: Invalid argument supplied for foreach()

9-October-2010 svens (LDA)
# [#22779] menuconfiguration rules don't schow the parameter created help view
# [#22773] Menu: Profile doesn't obey integration option

9-October-2010 Matias
^ [#15886] Merged revisions 3642-3664 from /branches/1.6-xillibit-fixes-20101005

8-October-2010 svens (LDA)
# [#22774] Welcome box: avatar doesn't have link pointing to profile

8-October-2010 Xillibit
# [#21992] Bug when moving a post to a different category and leaving a shadow

8-October-2010 svens (LDA)
# [#22774] Welcome box: avatar doesn't have link pointing to profile
# [#22074] Untranslated/hardcoded language strings
# [#22779] menuconfiguration rules don't schow the parameter renaming view/articel to view/rules

7-October-2010 Xillibit
# [#22703] Send email to subscribers when moderator approves post

7-October-2010 Matias
# [#22694] Improve JXtended detection to fix potential white page

6-October-2010 Xillibit
# [#22731] Update message subject on all replies when you split a topic
# [#22696] Disable disabled bbcode tags (spoiler, video, ebay)
# [#22688] Anonymous moderation: Profile link to own profile

6-October-2010 Matias
# [#22733] Installer: Fix fatal error if PHP <5.2
+ [#22694] Add support for JXtended Access Control
+ [#22693] Add support for NoixACL Access Control

5-October-2010 Xillibit
# [#22627] Iimprove accessibility for visually impaired users for collaspse/expand buttons
# [#22583] Same successfull message when you delete a topic or a message
# [#22715] Welcome mat text need to be updated
# [#22706] Administrator: Fatal error in Report Configuration Settings

5-October-2010 fxstein
^ [#22716] New default colors for the template manager backend settings
^ [#22716] Additional color changes
+ [#22716] Initial skeleton of new Skinner template

5-October-2010 Matias
^ [#22713] Improve routing: Change notification messages to debug only, use better descriptions
^ [#22713] Improve routing: Use views instead of funcs in the router to simplify logic
# [#22713] Improve routing: Better support for Kunena 1.5 menu items
# [#22713] Improve routing: Add support for Entry Page 'aliases' when real menu aliases do not work
# [#22713] Improve routing: Better missing menu detection
# [#22713] Improve routing: Detect loops when redirecting to right page

4-October-2010 Matias
^ [#22690] Update version info to K1.6.1-DEV (Timu = team in Swahili)

Kunena 1.6.0

3-October-2010 fxstein
^ [#22524] Updated README.txt

3-October-2010 Matias
# [#22684] Load Mootools 1.2 manually if 'System - Mootools Upgrade' or 'System - Mootools 1.2' plugin is not enabled in Joomla 1.5
# [#22684] Detect and show noticifation to administrators if 'System - Mootools Upgrade' isn't installed into Joomla 1.5
# [#22684] Detect and show noticifation to administrators if a plugin is loading Mootools 1.1 or custom version of JHTMLBehavior
# [#22684] Do not enable 'System - Mootools Upgrade' during installation
^ [#16390] Updated ca-ES (Neon26), es-ES (Alakentu)
# [#22687] Menu: Support rounded corners in Opera 10 and Chrome 5
# [#22687] Greatly improved credits page (thanks Sven)
^ [#15886] Merged revisions 3622-3627 from /branches/1.6-xillibit-fixes-20101002

3-October-2010 Xillibit
# [#19288] Render smilies and bbcode into pdf, but remove map, ebay and video
# [#22600] Render in pdf only the actual page to avoid maximum time execution exceeded

2-October-2010 Matias
# [#22674] Installer: Do not fail if language is broken
^ [#16390] Updated fi-FI (thanks Mortti), de-DE (rich), el-GR (valandis), es-ES (Alakentu), th-TH (drlovecat), tr-TR (cumla)
+ [#16390] Added ar-AA (thanks Omar), pt-BR (thanks rgponce)
# [#20071] Router: Workaround for Joomla bug when SEF URL /components/kunena is used
# [#20071] Routing: Redirect to Kunena menu if Itemid=0 or using legacy menu item (silently fixes missing menu)
# [#20071] Routing: Add numerous notices to help administrator to find potential issues in his menu
# [#20071] Routing: If Default Menu Item in Entry Page points somewhere else, redirect
^ [#15886] Merged revision 3614 from /branches/1.6-810-bugfixes-24-09-2010
^ [#15886] Merged revisions 3610-3612 from /branches/1.6-xillibit-fixes-20101002
# [#19288] Fix missing translation: COM_KUNENA_BUTTON_GENERATEPDF_TOPIC

2-October-2010 Xillibit
# [#19288] Fix regression in javascript $('postcatid') is null
* [#19288] Remove confidential information from pdf
# [#22507] Show filled name is nickname change is allowed

2-October-2010 810
^ [#19288] Update dutch language Final

1-October-2010 Matias
# [#19288] Fix long words in all topics by adding zero width spaces
^ [#15886] Merged revisions 3575-3599 from /branches/1.6-810-bugfixes-24-09-2010
^ [#15886] Merged revisions 3562-3606 from /branches/1.6-xillibit-fixes-20100923

1-October-2010 Xillibit
# [#22601] Kunena Search "Also search in child forums" set no has no effects (Part 2)
# [#22578] Fix Notice: Undefined index: _default in kunena.parser.php on line 844 (Part 2)
+ [#22600] Add button to generate a pdf of topic (Part 2)
# [#22507] Fix issue the field is not showed when the user is guest, so it can't post anything (Part 2)

29-September-2010 Xillibit
# [#22636] Wrong error message when upload images/files aren't allowed for register user

29-September-2010 810
^ [#19288] Update dutch language
+ [#19288] Add full screen + hd button youtube

28-September-2010 Xillibit
# [#19288] Update fr-FR translation (thanks lavsteph)
# [#22370] HTML incorrect tags : <br> <br /> <br /> in languages files newly updated (Part 2)

27-September-2010 Xillibit
# [#22612] id_last_msg isn't saving the info when topic is under review.

26-September-2010 Xillibit
+ [#22600] Add button to generate a pdf of topic (need specific button for it)
# [#22601] Kunena Search "Also search in child forums" set no has no effect

24-September-2010 Xillibit
# [#22507] Fix issue the field is not showed when the user is guest, so it can't post anything

24-September-2010 810
# [#19288] Long words in topics breaks listcat layout (fixed message)
# [#19288] Fix hyperlink @ mail

24-September-2010 Matias
# [#22119] Fix PHP Notice: Undefined variable in KunenaCategory
# [#22119] Fix PHP Error: KunenaError not included in KunenaCategory & Table
# [#22579] KunenaCategory: Fix saving new category

24-September-2010 fxstein
^ [#19064] Finalize tableau bbcode

23-September-2010 Xillibit
# [#22578] Fix Notice: Undefined index: _default in kunena.parser.php on line 844
# [#19288] Fix typo in admin replace px by kB in maximum file size
# [#22581] Fix typo in template.xml in button iconsetname

23-September-2010 810
# [#19288] Issue when video provider is null and size
# [#19288] Long words in topics breaks listcat layout
# [#19288] Preview doesn't render xml in code tags

23-September-2010 Matias
# [#22579] Fix fatal error in CommunityBuilder integration (backend)
^ [#22579] Improve KunenaCategory class for GroupJive integration
# [#22579] Fix bug in global moderator detection

21-September-2010 Severdia
+ [#22547] Added after save & delete events for JX Finder search integration (courtesy of the infamous Mr. Landry)

21-September-2010 Matias
^ [#22534] Update SQL upgrade script for K1.6.0

20-September-2010 fxstein
# [#22524] Update version info to K1.6.0 stable!

Kunena 1.6.0-RC3

20-September-2010 fxstein
# [#22196] Updated ReadMe.TXT
# [#19288] Preserve original authorname on post edits

20-September-2010 Matias
# [#22510] Show the right information in RSS feeds (post, first in topic, last in topic)
# [#16390] Fix wrong encoding in zh-CN and zh-TW (thanks baijianpeng)
# [#19288] Remove some debug messages

19-September-2010 LittleJohn
# [#22510] Rewrite RSS to use CKunenaLatest for better performance
# [#22510] Enable caching in RSS, make it configurable
^ [#22510] RSS: Support also 'not in' categorie

19-September-2010 Matias
^ [#22510] RSS: Add CKunenaLatest::getLatestTopics() and allow time limit / custom category selection in post/topics
^ [#22510] RSS: Use always visitor session (predictable results, works with caching)
# [#22510] Hide RSS icon when category is not public
^ [#16390] Updated fi-FI (thanks Mortti), ru-RU (ZARKOS), th-TH (drlovecat), es-ES (Alakentu)
+ [#16390] Added zh-CN and zh-TW (thanks baijianpeng)

19-September-2010 810
# [#19288] some IE7 css fixes
# [#19288] Message title and time fix on profile left
^ [#16390] Updated nl-NL

18-September-2010 Matias
# [#19251] SQL optimizations for large forums when getting topics from only some categories
# [#22506] Prevent Kunena session from being shorter than Joomla session
# [#22507] Fix bug in anonymous posting where anonymous posting option/username was not shown
# [#22507] Add some JavaScript to make anonymous posting more logical

18-September-2010 fxstein
# [#19288] Duplicate string in english language file

17-September-2010 Matias
# [#19288] IE7 fix for quick reply (thanks 810)
# [#19288] Fix broken language files (xx-XX.com_kunena_tpl_example.ini)
# [#22490] Fix broken attachments in quotes
# [#19288] Fix many layout issues in IE6 making it usable

16-September-2010 fxstein
# [#19288] IE7 fixes for preview and attachments

16-September-2010 Matias
^ [#15886] Merged revisions 3487-3497 from /branches/1.6-xillibit-fixes-20100914
# [#19345] Update all *bird button sets (missing icon), added graybird
^ [#16390] Updated fi-FI (thanks Mortti), ru-RU (ZARKOS), tr-TR (Tolga)
+ [#16390] Added hu-HU (thanks pedrohsi), lt-LT (ZYLKIN), vi-VN (lmt-net)
# [#22473] Kunena Menu missing in userlist, announcements etc..
* [#22478] Category Index: Do not show hidden subcategories
# [#22478] Category Index: Minor fix in category ordering if entries have no real ordering (order by ordering, name)
# [#22479] Use default topic icon from default template if no topic icons are defined

15-September-2010 Xillibit
# [#22463] No need to verify your password when changing profile info
^ [#22464] Frontend statistics page remove repeated items
# [#19399] Solution to fix the issue whith timelimit in RSS (need check)

14-September-2010 Xillibit
# [#22377] Fix regression Fatal Error: Call to undefined method CKunenaLink::GetUserlistURLNoIntegration()
# [#19399] Regression on RSS class Fatal error: Call to undefined method CKunenaRSSView::()
^ [#22151] Typo in browse browseUploaded() in backend
# [#22446] Super Administrator can't upload image
# [#22377] Wrong query in userlist which prevent to sort items
# [#19288] Update french translation (fr-FR)

14-September-2010 fxstein
# [#19288] Re-enable missing keep alive in post screen
* [#22367] Disable embedded flash files

13-September-2010 LittleJohn
# [#19399] RSS feeds: change logic to be closer to K1.5

13-September-2010 Matias
# [#22402] Do not enable Kunena System plugin in the backend
# [#22402] Add error handler to Kunena debug mode -- display all errors into the page regardless of user settings
# [#22119] Fix some hidden PHP Notices silenced by @
^ [#15886] Merged revisions 3458-3475 from /branches/1.6-xillibit-fixes-20100908

12-September-2010 Xillibit
* [#22367] Absolute file path disclosure
# [#22254] Get Uddeim exact version from xml file instead of API

12-September-2010 Severdia
+ [#19356] Added IDs to table rows on new topic page
^ [#19356] Minor class change to login links

10-September-2010 Xillibit
# [#22377] Sort items in userlist when integrated with third components doesn't come back to Kunena userlist
# [#22370] HTML incorrect tags : <br> <br/> <br />
# [#22368] Typo in en-GB admin language

10-September-2010 Matias
# [#19255] Administrator: Uniform look for category, user, template, smiley, rank and trash manager
# [#19255] Administrator: Fix many XHTML validation issues in various pages

9-September-2010 Matias
^ [#19255] Update example template to have all the fixes/changes from default template
# [#22343] Use topic icons, smileys, ranks and moved icon from current template
^ [#15886] Merged revisions 3451-3461 from /branches/1.6-810-bugfixes-08-09-2010
# [#22344] New Topic: Category selection defaults on section in Chrome
# [#22345] Video BBcode does not honour height parameter
+ [#22348] Add KunenaCategory class and use it in Category Manager
# [#22348] Administrator: Fix broken check out logic in Category Manager
# [#22348] Administrator: Add missing token checks in Category Manager
# [#22348] Administrator: Improve error handling in Category Manager
# [#22348] Administrator: Delete categories: only delete messages if category was really deleted
# [#22348] Administrator: Make all icons in Category Manager clickable
# [#22348] Administrator: Edit category: remove Unpublish icon
# [#22278] Administrator: User type need to follow translation in Category Manager (part 2)
# [#19255] Administrator: Fix XHTML validation issues: non-escaped links
# [#19255] Administrator: Fix XHTML validation issues: img tags missing alt, termination
# [#19255] Administrator: Fix XHTML validation issues: input tags not terminated + other issues
# [#19255] Administrator: Fix XHTML validation issues: form tags have invalid method POST
# [#19255] Administrator: Fix XHTML validation issues in User Manager
# [#19255] Administrator: Make User Manager to more similar to Category Manager, fix some bugs

8-September-2010 Xillibit
# [#22333] Check that the user has filled a password with at least 5 characters

8-september-2010 810
# [#19288] Update dutch translation (nl-NL)
# [#19288] Can't hide the "Edited Mark Up"
# [#19288] Menu: Template Manager link is pointing to main page

8-september-2010 Matias
+ [#22323] Migration from K1.5: Use default database collation using $db->getCollation() in all tables
# [#22324] Conflicting SQL declarations during import from K1.5 (utf8 vs latin1)
# [#22336] Menu: Allow multiple categores in entry page
^ [#22336] Minimum required Joomla is 1.5.20 (no more routing workarounds for multi-categories)
# [#22337] Menu: Add option integration=yes/no to profile menu items to allow direct access to Kunena profile
# [#19064] PHP Fatal error: Class 'ContentHelperRoute' not found in article BBCode

8-september-2010 fxstein
+ [#19288] Create index.html in upload and thumbnail directories

7-september-2010 fxstein
+ [#22197] Display Joomla 1.5 JArchive error on failed extraction
+ [#19064] Dedicated css styling for [article] bbcode
^ [#19064] Display Intro Text with Read More for [article] bbcode
# [#19064] Proper error handling for invalid articles
# [#22254] Incorrect color coding in system settings report for mootools12 plugin

7-september-2010 Matias
# [#22300] Fatal error: Class 'KunenaUser' not found in CKunenaListcat->loadCategories()
^ [#15886] Merged revision 3435 from /branches/1.6-xillibit-fixes-20100905
# [#22309] Installer: Fix broken menu items not pointing to Kunena
+ [#22197] Improve language installation: Add missing languages to the new system
# [#19255] Fix &amp; in redirects: post, edit, delete, undelete, moderate, approve, karma, thankyou
# [#22316] Fix auto-linking on broken/hidden img, file and attachment tags
# [#22316] BBcode (file/img): Remove legacy attachments from attachments list if they are included into message
# [#22316] BBcode (file): Strip URL and use fixed legacy attachments path to the file
# [#22316] BBcode (file): If file doesn't exist, use the same error as with attachment tag

6-September-2010 Xillibit
# [#22258] Change logic for save updated polls during edit (Part2)

6-September-2010 Severdia
# [#19356] Fixed button styles on profile page, fixed old CSS syntax
# [#19356] Fixed duplicate ID in post profile info
# [#19356] Fixed language string on stats page
# [#19356] Fixed English errors in language strings
# [#19356] Fixed validation errors on profie and new topic (missing IDs, missing attributes, etc.)
# [#19356] Fixed class in parser
# [#19356] Fixed template CSS validation errors
# [#19356] Fixed long post title wrapping
# [#19356] General language fixes, capitalization issues
+ [#19356] Added missing Restore button to CSS sprite
# [#19356] Fixed buttons on Adv. Search & polls

6-September-2010 Matias
^ [#15886] Merged revisions 3419-3424 from /branches/1.6-xillibit-fixes-20100905
# [#19255] Fix broken CSS: Use default values for empty configurable variables (initialize.php)
# [#19255] Fix XHTML validation issue in userlist links
# [#22286] Show time in site timezone if user hasn't set his own (instead of UTC)
# [#19255] Fix XHTML validation issue in [spoiler]
# [#19255] Fix XHTML validation issues: escaped all JavaScript with CDATA
# [#19255] Fix XHTML validation issues in latestx time selection
# [#19255] Fix XHTML validation issues in CKunenaLink::GetSamePageAnkerLink()

5-September-2010 Xillibit
# [#22254] Configuration report settings : check that the filed are right of type char, vachar, text... (Part 2)
# [#22258] Change logic for save updated polls during edit
# [#22278] User type need to follow translation in category manager
# [#22279] Thank you list in profile is showed even for visitors

5-September-2010 Severdia
# [#19356] Removed duplicate CSS in intialize.php, cleaned up
^ [#19356] Added default initialize.php styles to template CSS file

4-September-2010 Severdia
# [#19356] Fixed table alignments in admin
^ [#19356] Renamed button sets & fixed corresponding language strings
^ [#19356] Changed default icon to Joomla 1.6 image
^ [#19356] Updated topic arrow image

3-September-2010 Matias
+ [#22267] Administration: Add configuration setting to hide moderators in category listing
^ [#15886] Merged revisions 3408-3414 from /branches/1.6-xillibit-fixes-20100902

3-September-2010 Xillibit
# [#22254] Configuration report settings : check that the filed are right of type char, vachar, text...
# [#22160] Regression the image when insered in message aren't are showed like links instead images
# [#22258] Prevent to save a poll with some options empty

2-September-2010 Xillibit
# [#19288] Typo in config with showpopthankysoustats
# [#19288] Typo in /components/com_kunena/language/ru-RU/ru-RU.com_kunena.ini
# [#19288] Update french translation (fr-FR)
# [#19288] Typo in config.class on the load for js file in the path
# [#19288] Missing alt in pollbox for bar.png

2-September-2010 Matias
# [#22238] Administration: Resetting to default configuration breaks the forum
# [#22239] Many links point to wrong page when message ordering is not the default one

1-September-2010 Matias
^ [#22196] Changed version to 1.6.0-RC3
- [#19295] Cleanup code: remove unused plupload library
+ [#22197] Improve language installation: Create installable language packs
+ [#22197] Improve language installation: Install all enabled languages during installation process
# [#22201] Kunena packages: use same archiver for every file (zip/tar/tar.gz/tar.bz2)
# [#22074] Untranslated strings in Administration > Components > Kunena Forum
^ [#15886] Merged revisions 3356-3377 from /branches/1.6-xillibit-fixes-20100830
+ [#19064] Add new bbcodes: pre, tt, hr -- list fixed

31-August-2010 Xillibit
# [#22175] When you insert an attachment in a message, the smilies aren't interprepted
^ [#22092] Report configuration detect utf8 but not an exact collation (like utf8_general)
# [#22179] Others than Kunena avatars aren't showed when you edit a profile in backend
# [#22184] Top profiles doesn't take care of number of items defined in stats module

30-August-2010 Xillibit
^ [#22151] Characters, units in files and images in browse uploaded files in backend and in frontend
# [#22160] Show images for guests doesn't work for all attachements
# [#22015] When delete a thread perminantly, delete too the items in kunena_messages_text and all attachments in that thread

Kunena 1.6.0-RC2

31-August-2010 Matias
+ [#20084] Allow posting by using different user in CKunenaPosting class (needed in Kunena Discuss plugin)
# [#20084] White page in Kunena Discuss plugin when it tries to post message with JomSocial and AUP integration
# [#22173] New installation fails on white screen
^ [#16390] Updated languages: ca-ES (thanks Neon26), es-ES (Alakentu), fi-FI (Mortti), ru-RU (ZARGOS)
+ [#16390] Added new languages: el-GR (thanks valandis), pl-PL (Randal), th-TH (drlovecat), tr-TR (cumla)

30-August-2010 fxstein
- [#19064] Disable [module] bbcode to avoid security risk due to public misuse - need to limit access
^ [#21993] Updated topic icon - same as moved but different color/saturation to match rest of icon set
+ [#19288] Add form-validation background color for invalid fields
+ [#21993] Add PSD source file for new moved topic icon
^ [#21993] New topic moved icon to differentiate from topic icons

29-August-2010 Xillibit
# [#19288] Update french translation (fr-FR)
# [#22120] Error displaying names of moderators
# [#22015] Logic to restore posts now restore all thread to be sure
# [#22015] Not possible to restore a message directly in message view
^ [#21993] Usability issue- Moved Icon
# [#22128] New category permdelete/restore function not present in showcat
# [#22129] Admin sub menu strings incorrect

29-August-2010 Matias
# [#22119] Fix PHP Notice: Undefined variable: items in KGetArrayInts() and KGetArrayReverseInts()
# [#22119] Fix PHP Warning: Offset not contained in string in kunena.parser.bbcode.php on fb_stripos()
# [#22119] Fix PHP Warnings when SQL query in routing fails
# [#22108] Fix white page when integration fails because of failed requirements
# [#19255] Fix XHTML validation errors: br tag not closed
^ [#15886] Merged revisions 3327-3337 from /branches/1.6-xillibit-fixes-20100829

28-August-2010 Matias
^ [#15886] Merged revisions 3273-3317 from /branches/1.6-xillibit-fixes-20100823
# [#22107] Menu creation: menu alias into default menu
# [#22108] White page if avatar integration = none

28-August-2010 fxstein
# [#16390] Updated fi-FI (thanks Mortti)
# [#19064] Google maps img styling for certain browsers (810 fix variation)
# [#16390] Minor modification to english admin language file to clarify guest access settings

27-August-2010 Xillibit
^ [#22092] Add in report configuration settings version of JS, CB, AUP and UddeIm
# [#19288] Update french translation (fr-FR) (thanks lavsteph)

26-August-2010 Xillibit
# [#19288] Missing index.php in /components/com_kunena/funcs/
^ [#22092] Add in report configuration settings the list of kunena modules/plugins and the versions

25-August-2010 Xillibit
# [#19288] Update french translation (fr-FR)
# [#19288] Update some english strings
# [#22017] Link in report message email go to the wrong message (check if userid =0)
# [#22015] Topics cannot be deleted/purged or restored from showcat (check if a message is on hold = 2 and delete the thread)
^ [#22041] Add Trash Manager to Kunena Submenu & other changes

25-August-2010 Severdia
# [#19356] Language cleanup in admin backend
^ [#19356] CSS cleanup in installer/upgrader
^ [#19356] Language fixes and missing strings

25-August-2010 Matias
# [#19288] Fix TableKunena::exists() returning null
^ [#21955] Kunena system plugin: Include code to sync users on registration (not enabled)
# [#22073] CKunenaLink: Fix links to myprofile/noreplies pages to use &func=latest&do=x format that works with menu

24-August-2010 fxstein
+ [#21955] Kunena Factory helper to load language files - support for modules and plugins
^ [#21955] Change backend language file to reflect unsername vs realname selection

23-August-2010 Xillibit
^ [#22015] Topics cannot be deleted/purged or restored from showcat
# [#21994] Date of move on shadow topics is incorrect
# [#22017] Link in report message email go to the wrong message

22-August-2010 Matias
+ [#20084] Add function to fetch icons and topic icons to KunenaTemplate class
# [#22008] Pathway doesn't work well if SEF is turned off

20-August-2010 Matias
+ [#21955] Kunena system plugin: Create basic structure and logic into administrator/com_kunena/install/system
+ [#21955] Kunena system plugin: Add logic to install and uninstall plugin during installation
^ [#21955] Replace api.php with temporal file during installation to improve site stability on modules/plugins, add Kunena::enabled()
^ [#21955] Get rid of some legacy API features that have not been needed since K1.5, use new API in some other places
# [#16390] Updated fi-FI (thanks Mortti), ru-RU (thanks ZARKOS), es-ES (thanks Alakentu)

19-August-2010 Matias
# [#21939] Attachments not migrated to new directory structure, file size 0 bytes
# [#21940] Avatar galleries and category images are not migrated
# [#21942] JomSocial activity stream integration works only if auto detected
^ [#15886] Merged revisions 3239-3245 from /branches/1.6-xillibit-fixes-20100818
# [#21883] Use Community Builder integration to login/logout from Kunena (part 2), now with email login support
# [#21926] Subscriptions are not sent when message gets approved
# [#21935] Only moderator can use bulk unsubscribe (etc)
* [#21950] Posts can be written anonymously into any category

18-August-2010 Xillibit
# [#21844] Button search and cancel - order is reversed from k1.5
# [#21911] Open lightbox even on archive and not only on image files
# [#21937] Some methods of class CKunenaFile needs to be static on Joomla! 1.6
# [#21937] Methods of class CKunenaFile and KProfiler needs to be static on Joomla! 1.6 in a way that don't break K API

18-August-2010 Matias
^ [#15886] Merged revisions 3217-3231 from /branches/1.6-xillibit-fixes-20100816
# [#21884] Regression: CommunityBuilder was not detected
# [#19312] English: Gallery path wrong in the configuration option description
# [#21933] New indication layout is broken if text is written in RTL language (thanks Cerberus)

17-August-2010 Xillibit
# [#21893] Select topic icons are showed even on reply page (forgot to check under edit)
# [#19288] Update french language file (fr-FR)
# [#21877] My posts listing in profile - limited to the first n items on one "page" (fix undefined variable on showcat)
# [#19288] Update Credits language strings
# [#19288] Little typo for check is user is a moderator to show the warning info for approval
# [#21911] Attachments list: Use popup image instead of showing image in white page

17-August-2010 Matias
# [#21889] Version Check is broken in Backend
# [#21892] Clicking BBcode buttons scrolls view to top of message
# [#21894] Menu, Category Index: cannot select sections
# [#21895] Editing user profile: global settings are not translated (Joomla parameters)
# [#21896] Pathway fails to list most users
# [#21898] BBCode parser generates invalid html (ol, ul, table)
* [#21830] User can "THANK YOU" himself or non-existing message
# [#21901] Rules or Help Page - Select view inverted
- [#19293] Remove deprecated configuration options: alphauserpoints, alphauserpointsrules, js_actstr_integration
# [#21907] Recent Topics - time selection does not work

16-August-2010 Xillibit
# [#21844] Button submit and back - order is reversed from k1.5 (missing to change order in quick reply)
# [#21878] Use KunenaParser::JSText in kunena.google.maps.class to escape strings in javascript
# [#21877] My posts listing in profile - limited to the first n items on one "page"
# [#21882] Polls - changing a vote loses all other votes cast

16-August-2010 fxstein
# [#20100] Removed legacy rules and help settings, updated en-GB language file
- [#21890] Remove <em> tags from subscription language strings

16-August-2010 Matias
^ [#15886] Merged revisions 3162-3185 from /branches/1.6-littlejohn-20100804
^ [#15886] Merged revision 3195 from /branches/1.6-LDAsvens-thankyou-20100813
^ [#15886] Merged revisions 3200-3204 from /branches/1.6-810-bugfixes-14-08-2010
^ [#15886] Merged revisions 3172-3209 from /branches/1.6-xillibit-fixes-20100808
^ [#21857] Better configuration options for img tag
# [#21883] Use Community Builder integration to login/logout from Kunena
# [#21884] Minimum required CB version is 1.2.3, do not enable CB integration with older releases (fix crash)
# [#21885] White page in frontend during upgrade -- Kunena class missing
# [#21886] Fix crash in JomSocial 1.5 avatar integration
# [#19288] Regression: Message numbering doesn't work

15-August-2010 Xillibit
# [#19288] Update french language file (fr-FR)
# [#21847] Sort items in userlist give javascript error
# [#21849] Not possible to write anonymously a message
# [#21851] Moderated topic - Missing warning info
# [#21850] One separator in frontstat has not the same color that the others (thanks etusha)
# [#21855] When a moderator deletes avatar from the gallery, it gets deleted from the filesystem
# [#21857] New configuration setting for img tag
# [#21860] Category statistics not updated when approving messages
# [#21859] AUP points in profile needs to use activity integration

14-August-2010 Xillibit
^ [#21844] Button submit and back - order is reversed from k1.5

14-August-2010 810
# [#19288] Recount statistics when restoring posts from the backend
# [#19288] Css - Fix Joomla Templates which override the text-align center in the profile box

13-August-2010 Xillibit
# [#19288] Fix small bugs on announcements (thanks etusha)
# [#19288] Use _getPosts function from CKunenaLatest to show only latest messages with KLatest module

13-August-2010 svens(LDA)
* [#21829] Authentication check in profile thank you listing (no not show posts which user cannot see)

13-August-2010 Matias
^ [#15886] Merged revisions 3087-3089 from /branches/1.6-b2-language-svens-20100721
^ [#15886] Merged revision 3166 from /branches/1.6-810-bugfixes-07-08-2010

12-August-2010 LittleJohn
^ [#19693] Search function: Lowered # of required characters to 2 and added check to see if minus is used in conjunction of a word

12-August-2010 fxstein
^ [#21818] Update keywords:ID on all source files
# [#19333] Regression: Fix category subscription email generation bug

11-August-2010 fxstein
^ [#21803] Update Version info to 1.6.0 RC2
# [#19333] Regression: Fix category subscription email generation bug

08-August-2010 Xillibit
# [#19288] Select topic icons are showed even on reply page
# [#19288] Little change for kunena latest module to allow show only messages in right way
# [#19288] Update french language file (fr-FR)

7-August-2010 810
^ [#19288] IE7 CSS fix - Menu
^ [#19288] Css - Fix layout on backend statistics

5-August-2010 LittleJohn
^ [#19399] New RSS feeds: Added admin option author_in_titles and option to allow both username and email in rss author field)
^ [#19399] New RSS feeds: Changed labels to more human understandable & corrected 1 bug in getPosts())

03-August-2010 Xillibit
# [#19288] Wrong way for ordering system display
# [#19288] Issue with poll migration with first version of hack which don't set auto_increment
# [#19288] Add link in profile to show the full view

21-July-2010 Sven
^ [#16390] Update German language files

Kunena 1.6.0-RC1

9-August-2010 fxstein
^ [#21727] Update package README.txt

8-August-2010 fxstein
+ [#19288] Add moderateuser link func to bypass profile integration for moderator access

7-August-2010 fxstein
+ [#19288] Add internal moderate this user link to message moderation page

5-August-2010 Matias
# [#16390] Updated fi-FI (thanks Mortti), ru-RU (thanks ZARKOS)

5-August-2010 fxstein
^ [#21727] Update version info to 1.6.0 RC1
- [#20081] Reverted changes to Joomla error styles

04-August-2010 @quila
# [#19288] Fixed Profile page, replaced div with table
# [#19288] Fix regression - id message in history page
# [#19288] Fix regression - announcement layout

4-August-2010 Matias
# [#16390] Updated fi-FI (thanks Mortti)
^ [#15886] Merged revisions 3129-3144 from /branches/1.6-dragan-IE7fix-31.07.2010
^ [#15886] Merged revisions 3149-3151 from /branches/1.6-dragan-fix-04.08.2010
# [#19288] Use KPATH_SITE instead of JPATH_COMPONENT, which doesn't work in modules/plugins/integration

3-August-2010 Severdia
+ [#20081] Added missing error styles

3-August-2010 Matias
# [#19288] Add installable language packs support for Kunena
^ [#15886] Merged revisions 3137-3142 from /branches/1.6-xillibit-fixes-20100801
# [#19288] Installer: better detection and handling for failed installs

02-August-2010 @quila
# [#19288] IE7 css fix - removed scrollbar in quote message
# [#19288] IE7 css fix - width of profile position in topic view page
# [#19288] IE7 css fix - show date before topic subject in right, top and bottom position
# [#19288] IE7 css fix - removed black border on submit button
# [#19288] IE7 css fix - aligned insert and remove buttons in attachment function
# [#19288] IE7 css fix - two js error with multi-attachment
# [#19288] IE7 css fix - scroll bar on quote in history of reply

2-August-2010 Matias
# [#19288] Template manager: Make it possible to translate example template parameters
# [#19288] Template manager: Use English language is current language is not complete
# [#19288] Templates: Rename all language files to xx-XX.com_kunena.tpl_foldername.ini

02-August-2010 Xillibit
# [#19288] Now you can unsuscribe the categories in your profile
# [#19288] Fix issue in review class which prevents to show only the messages from a specific category
# [#19288] Add check token on mark read and subscricat in showcat
# [#19288] In profile when you want check all items, nothing happens because the id is not unique

01-August-2010 Xillibit
# [#19288] Little changes to fix some FIXMEs
# [#19288] Update French language file
# [#19288] Wrong link to support website in backend
# [#19288] Redirect on the correct message when you use karma and thank you functions
# [#19288] When edit a message in a category in review, show that the message is gonna to be moderated

31-July-2010 @quila
# [#19288] Added IE7 fixes
# [#19288] Fixed moderation page display in Chrome and Safari
# [#19288] Fixed profile page display
# [#19288] Added Template Designer Credits option in the footer
# [#19288] Centered Credits link

31-July-2010 Matias
# [#19288] CKunenaPost::post(): Use of undefined constant name - assumed 'name'
# [#19288] BBCode parser: Undefined index: size in file tag
# [#19288] Who is online: use mod_whosonline (from Joomla) to count users and guests
- [#19293] Remove deprecated configuration option fbdefaultpage
# [#20071] KunenaRoute: Simplify default page handling (and fix unexpected behavior)
# [#19288] Create menu: Use default menu item from K1.5 configuration
^ [#15886] Merged revisions 3130-3132 from /branches/1.6-dragan-IE7fix-31.07.2010

30-July-2010 Matias
^ [#19288] Installer: Add layout=schema to show current schema and diff during installation
# [#19288] Installer: Do not show backup tables in schema
# [#19288] Installer: Minor fix in schema to detect difference between NULL, 0 and ''
# [#19288] Installer: Schema: Do not use timestamps where they are not well suited
^ [#16390] Updated ru-RU (thanks ZARKOS), es-ES (thanks Alakentu)
^ [#16390] Added ca-ES (Catalan) and mk-MK (Macedonian) languages
^ [#19288] Fix some random language mistakes
# [#19288] CKunenaLink::GetMessageURL() Undefined property: CKunenaPost::$myprofile
# [#19288] Search: disable search word highlighting from message body as it breaks html and causes white screens
# [#19288] CKunenaAjaxHelper: PHP Fatal error: Call to a member function Quote() on a non-object (and few others)
# [#19288] BBCode parser: Fix HTML issue in img tag (Lightbox code)
# [#19288] BBCode parser: use div in quote, hide and confidential as span causes validation to fail

29-July-2010 Matias
# [#19288] Installer: Keep integration settings from older versions
# [#19288] Installer: Split upgrade php files by meaning and improve error detection during installation
# [#19288] Installer: Reset version information when starting installation
# [#19288] Installer: Use new XML schema to create tables
# [#19288] Installer: Fix stalled install in J1.6
# [#19288] Enable redirect when viewing messages (fixes search and moved messages)
^ [#15886] Merged revisions 3116-3118 from /branches/1.6-xillibit-fixes-20100727

28-July-2010 Xillibit
# [#19288] Re-write of review to use a class and put a new tab in profile
# [#19288] Escape strings when create a menu because the query fail with commas in some language

28-July-2010 Matias
^ [#15886] Merged revisions 3113-3115 from /branches/branches/1.6-xillibit-fixes-20100727
# [#19288] Installer: Add KunenaSchema class and install.xml to check current database schema against XML file (run manually)
# [#19288] Installer: Move SQL queries from version 1.0.5 to 1.0.0-1.0.4 to avoid DB errors
# [#19288] Installer: Make sure that clean installations from FB1.0.0 to FB1.5.2RC2 generate identical DB schema to the new installation
# [#19288] Installer: Migrate configuration from FB <= 1.0.4 (no more external tools needed)
# [#19288] Installer: Move/rename files to make installer easier to understand

27-July-2010 Xillibit
# [#19288] Update language file
# [#19288] Add missing tokens on some urls (subscribe, favorite...)
# [#19288] When you delete a topic, only the first message is in gray
# [#19288] Put a button back in moderate template page
# [#19288] Locked icon renamed to lock_sm.png because old name can cause issues when upgrading Kunena

26-July-2010 Xillibit
# [#19288] Add missing tokens to forms
# [#19288] Update french language file and little on english language file

26-July-2010 Matias
^ [#15886] Merged revisions 3092-3106 from /branches/1.6-xillibit-fxies-20100724
# [#19288] Admin: If installer needs to be run, redirect to installer instead of using current URL
# [#19288] Installer: Avatar migration fails because of missing directory
# [#19288] Installer: Improve avatar migration not to use default avatar if file copy failed

25-July-2010 Matias
# [#19288] Installer: Add options to install/upgrade, migrate and uninstall
# [#19288] Installer: Make installation more robust
# [#19288] Installer: Hide load sample data status text when no sample data gets inserted
# [#19288] Installer: Hide enabling Mootools 1.2 status text if it is already enabled

25-July-2010 Xillibit
# [#19288] Some language strings missing when set status on install/model.php

24-July-2010 Matias
# [#19288] Installer: Fix menu creation
# [#19288] Installer: Fix small issue when deleting menu
# [#19288] Regression: Fix white page when showing birthdate in profile

24-July-2010 Xillibit
# [#19288] Prevent to give thank you to yourself
# [#19288] Fix wrong geshi path in kunena.parser (thanks jonijnm)
# [#19288] Fix issue in report configuration and add details on mail configuration
# [#19288] Fix some language strings
# [#19288] Function to escape language strings because breaks some languages when you using quote with javascript editor functions
# [#19288] Missing banned rank in sampledatas
# [#19288] Wrong slash in ranks and smileys which prevent to display them in ranks and smileys manager
# [#19288] Don't show the name input when you are not anonymous
# [#19288] Some CSS fixes (thanks Cerberus)
# [#19288] Update French language

23-July-2010 Matias
# [#19288] User online detection is using wrong timezone

20-July-2010 Matias
# [#19288] Revert online status back to showing too many users (=same numbers as Joomla stats module)

19-July-2010 Matias
# [#19288] Uninstall fails because of missing class KunenaError
# [#19288] Broken HTML with several templates when Kunena Menu is activated
# [#19288] Changed Windows linefeeds (\r\n) into unix (\n) in all php, js and xml files

19-July-2010 fxstein
^ [#21302] Update version info for 1.6.0 Beta 2 release (Kuongea = chat, converse in Swahili)

Kunena 1.6.0-BETA1

19-July-2010 fxstein
# [#19345] Updated credits page - contributor/developer and moderator grouping.
^ [#21302] Update version info for 1.6.0 Beta 2 release (Kuongea = chat, converse in Swahili)

18-July-2010 Matias
^ [#15886] Merged revisions 3070-3075 from /branches/1.6-810-bugfixes-19-07-2010
# [#19288] Changed Windows linefeeds (\r\n) into unix (\n) in templates

19-July-2010 810
+ [#19388] Add Dutch language nl-NL
^ [#19288] Double slashes in frontend and backend stats

18-July-2010 @quila
^ [#16390] Update serbian and serbian latin languages

18-July-2010 Xillibit
^ [#19388] Update french language file

18-July-2010 Matias
# [#19288] Simplify online status logic and move the code into KunenaUsers
# [#19288] Fix bug in online stats showing too many users as being online
^ [#15886] Merged revisions 3058-3066 from /branches/1.6-dragan-update-18.07.2010
+ [#16390] Add German locale de-DE (thanks LDA)
+ [#16390] Add Italian locate it-IT (thanks rinuccio sp)
^ [#16390] Languages updated: es-ES (Alakentu), fi-FI (Mortti), ru-RU (ZARKOS)
+ [#19345] Add own icon for Thank You button
+ [#19345] Add high contrast buttons

17-July-2010 810
# [#19288] Fix select bug IE
^ [#19388] w00t.png fix in spoiler

17-July-2010 Matias
# [#19288] Move configuration setting "Allow to moderator to view and restore deleted messages" into security tab
# [#19288] Admin: move inline css into its own file (media/css/admin.css) for easier styling
# [#19288] My Topics does not show latest postings from user
# [#19288] User Points/Medals are not shown in the profile page
# [#19288] AUP integration is not always using API
# [#19288] Fix regression: BBCode and smileys do not work in IE7-9
# [#19288] Installer: Translate all menu items (move code into installer)
# [#19288] Installer: Simplify menu creation logic in J1.5
# [#19288] Menu: Update Kunena Menu to use real views instead of funcs
# [#19288] Menu: Do not add menu item for "Welcome"
# [#19288] Administrator: Create menu now destroys Kunena Menu and creates it from scratch
# [#19288] Administrator, Create menu: Do not modify Forum in main menu if it already exists
# [#19288] Installer: Use English if current language haven't been fully translated
^ [#15886] Merged revisions 3045-3049 from /branches/1.6-810-bugfixes-16-07-2010

16-July-2010 fxstein
- [#19064] Remove google maps API key setting - not needed for API V3

16-July-2010 Matias
^ [#15886] Merged revisions 3030-3037 from /branches/1.6-xillibit-fixes-20100712
# [#19288] Fix online/offline status in userlist
# [#19288] Fix autocompleter (css issues)
# [#19288] Fix Editor / Add file from changing size on hover
# [#19288] Hide Birthdate from the message when its unknown
# [#19288] Ranks Admin: fixed missing rank icons if template does not have ranks directory
# [#19288] Smiley Admin: fixed missing smiley icons if template does not have ranks directory
^ [#16390] Move language credits translation into top of the file with a comment how to fill it
# [#19288] Profile page: rank icon was missing if template did not have ranks directory

15-July-2010 Matias
^ [#19244] Change minimum Joomla requirement to 1.5.19 (Mootools 1.2)
- [#19380] Remove Mootools plugin archive; we do not need it anymore

15-July-2010 Xillibit
^ [#19288] Hide backend submenu, because of we have our own navigation

14-July-2010 Xillibit
# [#19288] Little change on translation on credit page
# [#19288] Fix profile / ban to have enough room to have complete expire date and time
# [#19288] Fix Kunena installer creating non-UTF8 tables in some servers
+ [#19288] Add remember me input field in login box
+ [#19288] Add configuration setting to let moderators to see/restore deleted messages in frontend

14-July-2010 Matias
+ [#16390] Add Kunena 1.5 to 1.6 language converter into scripts/
# [#19288] Fixed editor to act like the old one when there was no selection
# [#19288] Fixed editor to be easier to use and covering more different ways to use it
# [#19288] After creating/editing a message, show message that was just created or edited (if possible)
# [#19288] After moderating a message, show message that was just moved
# [#19288] After approving/deleting/restoring a message, show that message (if possible)

13-July-2010 Xillibit
^ [#19288] Update french translation
# [#19288] On edit template, the path for language file (xx-XX.tpl_default.ini) is incorrect

13-July-2010 Matias
^ [#16390] Updated Spanish (thanks Alakentu) and Russian (thanks ZARKOS) languages
# [#19288] Escape variables in userlist

12-July-2010 fxstein
+ [#19064] Basic geocoding for google maps added; map size increased
+ [#19064] Added geocode error handling and language strings

12-July-2010 Severdia
# [#20081] Google maps fix
+ [#19356] Added Thank You icon to PSD source file (needs to be added to sprite)

12-July-2010 Xillibit
# [#19288] Add french language file in template languages
# [#19288] Fix issue show &amp; instead & in message title
# [#19288] The checkbox for select all item is out of horizontal alignment
# [#19288] Fix issue when insering a map, the emoticons insered after aren't interpreted
# [#19288] Fix Notice: Undefined property: stdClass::$numLink in history.php line 37
# [#19288] Re-put minus and plus icons for add poll options because it was disappeared

12-July-2010 Matias
^ [#15886] Merged revisions 2992-3001 from /branches/1.6-xillibit-fixes-20100711
# [#19288] Preview filters everything between < and > (thanks JoniJnm)
# [#19288] Installer: XML Parsing Error at 1:0. Error 4: not well-formed (invalid token)
^ [#15886] Merged revisions 3013-3022 from /branches/1.6-xillibit-fixes-20100712
# [#19288] Allow saving <foo> into signature
* [#19288] Fix regression: XSS vulnerability when posting reply
# [#19288] Editor: Keep selection in order to allow users to chain actions (all simple BBCodes)
# [#19288] Fix sup and sub BBCode layout in some Joomla templates
# [#19288] Add missing index.html files (thanks Etusha2)
# [#19288] SQL syntax error when user is trying to delete his own post (thanks Etusha2)
# [#19345] New version of dtp2.nl buttons
^ [#19345] Update example template CSS

11-July-2010 Xillibit
# [#19288] Fix issue with polls stats which doesn't count the right number of poll votes
# [#19288] Little change on thank you part of API to get correct datas
+ [#19288] Search filter in category manager with cat name or cat id
# [#19288] Little change on latestx class due to a change on the kunena latest module

11-July-2010 Matias
^ [#15886] Merged revisions 3006-3007 from /branches/1.6-dragan-fix-20100711

11-July-2010 fxstein
^ [#15886] Merged revisions 2984-2998 /branches/1.6-dragan-fix-20100711
+ [#19064] Scaffolding for google maps integration
+ [#19064] basic css setup for embedded google maps
# [#19288] Fix Regression: profile page formatting (thanks cerberus)
# [#19288] Fix: misaligned checkbox (thanks cerberus)

11-July-2010 @quila
# [#19288] Fix Regression: Pagination in recent discussions page
# [#19288] Fix Regression: "Powered by Kunena" text smaller
# [#19288] Fix Regression: Changed member name coloring
# [#19288] Fix Regression: Removed pathway header
# [#19288] Fix Regression: Position of "check all" checkbox
# [#19288] Fix Regression: Added padding to message area and aligned date of message in history page
^ [#16390] Updated serbian language
# [#19288] Fix Regression: Correction in thank you language string
+ [#16390] Added template language files for english, serbian and serbian latin
# [#19288] Fix Regression: missing " in installation language file (english and russian)
# [#19288] Fix Regression: missing tip on website name in editprofile.php
# [#19288] Fix Regression: right column margin in profile page
# [#19288] Fix Regression: icon show in profile page
# [#19288] Fix Regression: alignment in credit page
# [#19288] Fix Regression: width of search page when left module is active
# [#19288] Fix Regression: message body too height in IE, Chrome, Opera
# [#19288] Fix Regression: vertical alignment of website and pm icons
# [#19288] Fix Regression: changed position of Thank You button
# [#19288] Fix Regression: new language string for poll statistic

10-July-2010 Matias
# [#19288] Fix Regression: Some profile icons missing from profile page
# [#19345] Simplify CSS for kicon-button
# [#19345] Simplify CSS for kicon-editor
# [#19288] Change Online/Offline buttons to text, making it possible to translate them
# [#19345] Better layout for pagination
# [#19345] Small layout tweaks in many pages
^ [#15886] Merged revisions 2898-2978 from /branches/1.6-dragan-merged-20100702
^ [#19380] Update Mootools plugin to latest version, fixes bug in modal.js
^ [#16390] Upgraded Spanish language (thanks Alakentu)

10-July-2010 @quila
# [#19288] Moved button thank you and subject in other place
# [#19288] Changed colors of users
# [#19288] Fix top/bottom message header
# [#19288] Reorder css file
# [#19288] Fix right message header
# [#19288] Fix configuration 5 thank you received
# [#19288] Changed table header in message.php with divs
# [#19288] Fixed small css bugs
# [#19288] Changed Avatar Position to Profile Position in template configuration

10-July-2010 fxstein
# [#19345] Updated credits page copyright years
+ [#19064] Added google maps api key config setting for map and earth bbcode
^ [#19064] Resize ebay widget inside of text based on config settings
+ [#19064] Embed google maps inside of text

9-July-2010 Matias
# [#19345] Change layout logic to use individual files in message profilebox
# [#19345] Separate menu, login and logout to their own template files in default/loginbox
# [#19345] Simplify CSS for kicon-profile
# [#19345] Modify profile next to message have same height in all rows
# [#19345] Change order of profile info (vertical) to look better

9-July-2010 @quila
# [#19288] Review template and change class names in some files
# [#19288] Added infomessage.php and function to call when in the forum no categories
# [#19288] Added lock_sm.png and delete lock_xsm.png file
# [#19288] Split profilebox.php
# [#19288] Split message.profilebox.php
# [#19288] Renaming of some classes
# [#19288] Redesign for credits page
# [#19288] Fixes for top/bottom profilbox in message post
# [#19288] CSS fixes for bottom button row in showcat page

9-July-2010 Matias
^ [#19380] Update Mootools plugin to latest version, fixes bug with Window.onDomReady()
# [#19288] Polls: Fix wrong URL when you change your vote (non-AJAX version)
# [#19288] Polls: Disable AJAX for now as it does not work

8-July-2010 Matias
# [#19345] Simplify initialize.php in default template

8-July-2010 @quila
# [#19288] Cleanup whole template, fix some minor bugs (parts 7-8)
# [#19288] Fix float of sticky icon in post.php, more clean in css file

8-July-2010 Matias
+ [#16390] Added Russian language (thanks ZARKOS)

7-July-2010 Matias
# [#19288] Move sample data translations into en-GB.com_kunena.install.ini to be able to translate it without main language files
# [#19288] Sample data: Fix truncated multi-line translations to work around J1.5 limitation
# [#19288] Sample data: Add missing translations for ranks
# [#19288] Fix PHP Notice: Trying to get property of non-object, when trying to locate moved message that does not exist (view)
# [#19288] Fix urls like ../../default/../default in example template

6-July-2010 fxstein
+ [#19288] New CSS class for hidden text - separate background color

6-July-2010 Matias
# [#19288] Fix showcat in menu item acting like listcat
# [#19288] Installer script didn't get copied in J1.5
# [#19288] Fix missing manifest (kunena.xml) file in administration
# [#19288] Remove old manifest.xml during upgrade -- Joomla cannot decide which one it should use
# [#20038] Joomla 1.6: Workaround J! feature that loads both old and new installer
# [#20038] Joomla 1.6: Fix missing admin menus in J1.6 Beta5+ (needs a fix in Joomla, thanks Sam!)
# [#19288] Fix fatal error when uploading attachments: undefined method CKunenaUpload::fileInfo()
# [#19288] Fix PHP Notice: Undefined index: mime, when uploading attachments
# [#19288] Fix PHP Notice: Undefined index: index in KunenaUser class
# [#19288] Fix PHP Notice: Use of undefined constant name - assumed 'name', when uploading attachment fails
# [#19288] Fix "Failed to store attachment into database."
# [#19288] Fix Undefined offset in many BBCode video types
# [#19288] Remove new BBCode tags when stripping BBCode
# [#19288] Fix PHP Notice: Undefined index, when uploading attachments
# [#19288] Installer: Minor fix/improvement when importing attachments

5-July-2010 @quila
# [#19288] Cleanup whole template, fix some minor bugs (part 6)

5-July-2010 fxstein
- [#21302] Remove Child Board header
^ [#21314] Updated Meta Description Logic - Thx JoniJnm

4-July-2010 fxstein
^ [#21302] Update version info for 1.6.0 Beta 1 release

4-July-2010 Matias
# [#19288] Fix topic icons and broken lock image in custom templates
# [#19288] Fix ranks, emoicons in custom templates
# [#19288] Fix ranks and emoticons from administration
# [#19288] Set max width 100% for images inside message body / signature, limit height
# [#19288] Fix bug in installer where BETA < ALPHA
# [#19288] Fix undefined variable in Category Subscriptions
# [#19288] Simplify profile merging both subscriptions tabs and both thank you tabs
# [#19288] Better layout/information for category subscriptions
# [#19288] Disable unsubscribe category in profile as it didn't work
# [#19288] Add/Edit Announcement does not work
# [#19288] Fix bug in date offset normalization during migration

4-July-2010 @quila
# [#19288] Cleanup whole template, fix some minor bugs (part 5)

3-July-2010 Matias
^ [#19380] Update Mootools plugin to latest version
# [#19288] Fix warnings in editor.js
# [#19288] Use [quote="username" post=1234] instead of [b]username[/b][quote]
# [#19288] Use [attachment=123]filename.zip[/attachment] to make it easier to resolve attachment quote
# [#19288] Fix small bug in editor.js: attachment name was undefined
# [#19288] Fix wrong version information in administration
# [#19288] Fixed bug which prevented loading css from the selected template without copying initialize.php into template
# [#19288] Accept only K1.6 templates in frontend
+ [#21301] Create example template

2-July-2010 @quila
# [#19288] Cleanup whole template, fix some minor bugs (part 4)

1-July-2010 Matias
# [#19288] Cleanup whole template, fix some minor bugs (part 3)
^ [#15886] Merged revisions 2829-2891 from /branches/1.6-dragan-fix-20100624
^ [#15886] Merged revisions 2880-2890 from /branches/1.6-xillibit-fixes-20100629
^ [#15886] Merged revisions 2873-2885 from /branches/1.6-810-feature-Stats

01-July-2010 Xillibit
# [#19288] Show categories subscriptions in user profile

30-June-2010 810
^ [#19288] Add showstats (part 2)

30-June-2010 Matias
# [#19288] Cleanup whole template, fix some minor bugs (part 2)

30-June-2010 Xillibit
# [#19288] Change on geshi paths to load the correct things if you use j1.5 or j1.6
# [#19288] Fix issue with contant KUNENA_ABSCATIMAGESPATH which is wrong

29-June-2010 Matias
# [#19288] Cleanup whole template, fix some minor bugs (part 1)

29-June-2010 Xillibit
# [#19288] Put nameQuote() and Quote() in each query to be sure that the queries has escaped

28-June-2010 @quila
# [#19288] escaped whole template
# [#19288] Replace online/ofline icons from icons.php to css icons in userlist
# [#19288] fix small bugs
^ [#16390] updated serbian languages
# [#19288] revert some changes in escape template

28-June-2010 Matias
+ [#16390] Added Spanish language (thanks Alakentu)
# [#19288] Fix a bug that prevents latest module from working in the right way
# [#21203] Fix IE8 bug on multi-file attachments
+ [#21161] Attachments: Show image instead of file if it can be shown
# [#19288] UddeIM 2.0 integration: Fix language string double definition bug when CB is installed
# [#19288] AlphaUserPoints integration: Undefined function when getting userlist with older AUP versions
# [#19288] AlphaUserPoints integration: Missing avatar if user does not exist
# [#19288] No avatar: Undefined property: CKunenaViewMessage::$avatar
# [#19288] Undefined property: CKunenaViewMessage::$inline_attachments
# [#19288] Installer: Detect FB 1.0.0 correctly
# [#19288] Fix layout issues in message body, [code] BBCode, profile, announcements
^ [#15886] Merged revisions 2850-2874 from /branches/1.6-xillibit-fixes-20100623

27-June-2010 Xillibit
# [#19288] Add stings in credits page to the language file to be translated easily
# [#19288] Add small section for language credits in credits page
# [#19288] Change a bit CKunenaLatestX class to work properly with kunena latest module
# [#19288] Add small section for language credits in credits page (add css)

28-June-2010 severdia
# [#21206] Restyling attachment buttons

27-June-2010 Xillibit
# [#19288] Update french translation
# [#19288] In user manager in backend show user avatar a bit small instead of a big one

27-June-2010 fxstein
# [#21203] Workaround for IE8 bug to enable size and color selection in bbcode editor
^ [#20833] Adjusted english language strings for Thank You feature

26-June-2010 @quila
# [#19288] escaped "categories.php" in the template

25-June-2010 Xillibit
+ [#19288] Add kunena_upgrade.xml to check latest kunena version
# [#19288] Make odering categories in backend with numbers like joomla articles
# [#19288] Fix undefined variable catinfo in libraries/integration/jomsocial/activity.php with jfirephp enabled and when reply topic or new thread
# [#19288] Make odering categories in backend with numbers like joomla articles (Part 2)
# [#19288] Fix issue with RSS icon which have a clikable link

25-June-2010 Matias
# [#20071] KunenaRoute: Fix a small bug in index highlighting
^ [#15886] Merged revisions 2824-2847 from /branches/1.6-xillibit-fixes-20100623
^ [#15886] Merged revisions 2830-2834 from /branches/1.6-dragan-fix-20100624
+ [#16390] Enable Serbian languages during installation process
# [#19288] Fix undefined variables during installation
+ [#21161] Add possibility to insert attachment BBCode into message
^ [#19448] Move code out of template: Attachments
# [#19288] Fix some small issues in category configuration
# [#19288] Fix undefined variable catinfo in libraries/integration/jomsocial/activity.php (thanks Xillibit)

24-June-2010 @quila
# [#19288] Untranslated "Delete" in multiattachment
^ [#19288] Removed deprecated configuration for enable rules and help page
+ [#19288] Added serbian languages for installation
+ [#19288] Set keywords for serbian language files
# [#19288] Fixed two problems with resize image in [img] tag

24-June-2010 Matias
# [#19288] Minor fix in CKunenaDateformat class for KunenaLatest module
# [#19288] Fix error during saving attachments: cannot move file
+ [#21161] Add new [attachment] BBCode (sequential order, id and filename supported)
# [#19288] A few small fixes: # comments in PHP, trim message etc
+ [#16390] Add language files: Finnish translation for the installer

23-June-2010 Xillibit
# [#19288] Update french translation in backend and frontend
# [#19288] Check that the file exist template.xml and if don't exist abort the installation of template

23-June-2010 Matias
^ [#15886] Merged revisions 2810-2817 from /branches/1.6-xillibit-fixes-20100620
^ [#20729] Update version info to 1.6.0-ALPHA3

22-June-2010 Xillibit
# [#19288] Add configuration settings for thank you stats
# [#19288] Put old code back for code when user disable code highlighting
# [#19288] Fix Notice: Undefined offset: 1  on kunena.parser.php when the image has no extensions

22-June-2010 Matias
# [#19288] Make sure that all KunenaUser instances have key > 0
+ [#20071] KunenaRoute: Add support for menu links, allow menu to be restricted to one category
# [#20071] KunenaRoute: If no menu item matches, use /component/com_kunena instead of current menu item
# [#20071] KunenaRoute: No need to look for more menu parents when getKunenaRoot() sees view=entrypage
# [#20071] Ignore default menu item detection if we see HTTP POST request in kunena.php
# [#20071] Menu item without children: Find closest match in Kunena Menu and use it instead menu item itself
+ [#20071] Add new class JElementKunenaCategories
+ [#20071] Menu: Change text field to category list to all catid configuration options
# [#19288] KunenaUser: Fix fatal SQL error when loading online status

21-June-2010 Xillibit
# [#19288] Upgrade poll tables structure when migrate from k1.5.x for all versions of hack
# [#19288] Don't hide the time to live input because doesn't work well with calendar
# [#19288] Put in stats the top thank you received and added a part in api

21-June-2010 Severdia
# [#21131] Removed inline styles on avatars in topics

19-June-2010 Xillibit
^ [#19288] Access now at stats page correctly via cpanel

19-June-2010 810
+ [#19288] Add showstats function, remove it from control panel
^ [#19288] Fixed css for cpanel, template date on showtemplates

Kunena 1.6.0-ALPHA2

20-June-2010 Xillibit
# [#19288] Update translation of fr-FR.com_kunena.install.ini
# [#19288] Fix undefined constant KUNENA_PATH_TEMPLATE during install
# [#19288] Use form validation instead alert when you edit announcements
# [#19288] Upgrade poll tables structure when migrate from k1.5.x
# [#19288] Fix issue in trash manager: can't delete topics with polls
# [#19288] Fix issue in template.xml: wrong avatar sizes
# [#19288] Show in trash manager the messages on hold=3 when you delete your own message
# [#19288] Add function in configuration panel to revert configuration to previous state

20-June-2010 Matias
^ [#15886] Merged revisions 2782-2793 from /branches/1.6-xillibit-fixes-20100619
# [#19345] Move JavaScript to the header in announcement/edit.php
# [#19345] Simplify #ktop (Kunena header) to div instead of table and remove duplicated html
^ [#15886] Merged revisions 2802-2806 from /branches/1.6-xillibit-fixes-20100620

19-June-2010 Xillibit
+ [#19288] Add code to have higlighted code with geshi (thanks JoniJnm)
# [#19288] Minor change to tooltips
# [#19288] Fix Class 'CKunenaWhoIsOnline' not found in libraries/user.php line 90
# [#19288] Fix Notice: Trying to get property of non-object in libraries/user.php line 272
# [#19288] Button thank you dosesn't display the favorite icon (thanks cerberus)
# [#19288] Make french translation for kunena installer
# [#19288] tsticky icon doesn't placed at the right place (thanks cerberus)
# [#19288] Fix Notice: Undefined variable: userlist in funcs\showcat.php line 198
# [#19288] Hide poll icon on new topic by default

19-June-2010 Matias
^ [#19345] Template Manager - Move avatar size configuration to template
- [#19345] Remove some unused CSS rules and images
# [#19288] Fix regression - Fix CSS for rounded buttons

19-June-2010 Severdia
# [#19356] Fixed RSS icon, moved outside credits
# [#19356] Fixed profile tab widths
# [#19356] Poll cleanup
# [#19356] More poll fixes, semantic markup
+ [#19356] Added source PSD files

19-June-2010 fxstein
^ [#19251] Enhanced user caching

18-June-2010 Severdia
# [#19356] Fixed attachment icon on category list page
# [#19356] Fixed whois & stats icons

18-June-2010 Matias
^ [#15886] Merged revision 2737 from /branches/1.6-xillibit-fixes-20100612
^ [#15886] Merged revisions 2744 and 2765 from /branches/1.6-dragan-fix-20100613 with changes
# [#19288] Fix regression - CKunenaLink::GetSamePageAnkerLink() broken

18-June-2010 @quila
# [#19288] Replace all icons from icons.php to css icons
# [#19288] Remove deprecated configuration New Indicator
# [#19288] New Indicator moved to language file

17-June-2010 Matias
^ [#19380] Update Mootools plugin to latest plgSystemMTUpgrade, uninstall old plugin
# [#20038] Do not install Mootools plugin in J1.6
# [#19251] Reduce 1 SQL call / page in CKunenaConfig; move table creation to installer
- [#19295] Clean up code: we do not need to check if all tables exists, new installer should fix that issue
# [#19288] Fix regression - Too strict permissions in template ini file - Kunena fails to install
# [#19288] Fix regression - Do not include template ini file into distribution as it resets configuration
# [#19251] Reduce 1 SQL call / page in KunenaSession if user has not logged in
# [#19251] Reduce 1 SQL call / page in CKunenaPathway
# [#19251] Implement user caching to greatly reduce number of SQL queries
^ [#19295] Rename FbForum class to TableKunenaCategory
^ [#19295] Clean up code: Deprecate html_entity_decode_utf8(), remove utf8_urldecode(), fbReturnDashed()
# [#19345] Some CSS fixes for Beez2 (J1.6)

16-June-2010 @quila
+ [#19288] Add serbian and serbian latin language files
# [#19288] Added function to load icons in default template

16-June-2010 Matias
^ [#15886] Merged /branches/1.6-@quila-tpl-100607
# [#19345] Template Manager - Make loading template configuration more robust
# [#19288] Fix regression - Remove some Zend warnings (also move javascript out of php file)
# [#19288] Fix regression - Minified CSS does not exist in Kunena SVN version
# [#20038] Joomla 1.6 Admin: Fix template manager, control panel, side panel
# [#20038] Joomla 1.6: Fix KunenaRoute
# [#20038] Joomla 1.6: Frontend should work again
# [#20038] Joomla 1.6: Split install.kunena.php into three parts

15-Jun-2010 Xillibit
+ [#19288] Add french language files

15-June-2010 @quila
# [#19345] Template Manager - some more changes
# [#19288] Fix regression: Moderate Topic buton aligned

15-June-2010 Xillibit
# [#19345] Template Manager - Change xml name installer to kinstaller

15-June-2010 fxstein
+ [#20916] New helper functions to load minified css and js or full version when in forum debug
# [#21032] Fix manifest error that leads to Joomla 1.6 install error message
+ [#21032] Add admin menu definition to manifest for Joomla 1.6 install

15-June-2010 Matias
# [#20833] Thank You: Escape variables inside queries
# [#20833] Thank You: Make button similar to others, place it into message actions list
# [#20833] Thank You: Simplify thank you list
^ [#15886] Merged /branches/1.6-sven-thx-20100531
# [#19345] Template Manager - Check that archive contains templates and install all of them (ignoring the rest)
# [#19345] Template Manager - Delete old version of the template before installing new one
# [#19345] Template Manager - Add class KunenaTemplate (and KunenaFactory::getTemplate()), which loads template configuration
# [#19345] Template Manager - Keep template configuration when installing new version of the template
# [#19345] Template Manager - Do not allow anyone to delete our default template (Blue Eagle)

14-June-2010 @quila
# [#19345] Template Manager - some more changes
# [#19345] Template Manager - initialize.php now loaded from published template
# [#19345] Template Manager - fixed location for template_thumbnail.png (images folder of template)

14-June-2010 Sven
# [#20833] Thank You: undefined variable
^ [#20833] Thank You: naming of the functions (camelCase)
^ [#20833] Thank You: moved code for more flexible into message.thankyou.php
^ [#20833] Thank You: limit all querys with a default limit value of 10
# [#20833] Thank You: Undefined property

14-Jun-2010 Matias
^ [#15886] Merged revisions  2703-2722 from /branches/1.6-xillibit-fixes-20100612
# [#19288] Fix regression - Installation failed

13-June-2010 Matias
# [#19345] Template Manager - Change template even if configuration didn't exist
- [#19293] Remove deprecated configuration option templateimagepath
^ [#19345] Template Manager - Load javascript and css from the template (initialize.php)

13-June-2010 @quila
# [#19345] Template Manager - language strings, Apply button works, some more fix
# [#19345] Template Manager - fixed "Edit CSS" button
# [#19345] Template Manager - delete tmp "kinstall" folder after installation
+ [#19345] Template Manager - added "Uninstall" template function

13-June-2010 Sven
# [#20833] Thank You: correct wrong headers
^ [#20833] Thank You: moved backend statistic to libraries/thankyou.php and libraries/table/kunenathankyou.php
^ [#20833] Thank You: killed catid and id in #__kunena_thankyou
^ [#20833] Thank You: unique (postid,uid)
^ [#20833] Thank You: KEY `userid` (`userid`),	KEY `targetuserid` (`targetuserid`)
^ [#20833] Thank You: language renamed strings thread/post -> message
^ [#20833] Thank You: all querys using JTable

13-Jun-2010 Xillibit
# [#19288] Make configuration setting working for disable version check
# [#19288] Function getRulesHelpDatas removed during merge
^ [#19288] New png icons which replace old gif icons (thanks DTP2)
# [#19288] Fix for videos with missing parameter in array which throw an error (thanks JoniJnm)
# [#19288] Fix for select template by user cookie (thanks JoniJnm)
# [#19288] Fix issue with AUP integration on kimport undefined when you want see the userlist
# [#19288] Uniform tooltips on social icons
# [#19288] Fix issue in RSS (thanks JoniJnm)
^ [#19288] Put png icons for lightbox and group attachments in lightbox on each message

12-June-2010 @quila
+ [#19345] Template Manager - some more changes.

12-Jun-2010 Xillibit
# [#19288] Fix issue on changevote in poll which decreased everytime the poll votes
# [#19288] Put version check data in joomla session and put a configuration setting for disable version check
# [#19288] On edit ban, allow to remove the ban
# [#19288] Select only the item with func for show online user in pathway
# [#19288] Make working poll vote and change vote without ajax

12-Jun-2010 Matias
- [#19244] Remove deprecated ban logic from lib/kunena.moderation.tools.class.php
^ [#15886] Merged feature branch /branches/1.6-@quila-ban-100526
^ [#15886] Merged revisions 2677, 2687 and 2688 from /branches/1.6-@quila-fix-100608
^ [#15886] Merged revisions  2685 and 2686 from /branches/1.6-xillibit-fix
# [#19288] Fix regression - Admin: Undefined variables in report configuration if configuration hasn't been saved
^ [#15886] Merged revisions 2662-2674 from /branches/1.6-810-bugfixes
# [#19345] Template Manager - Make extract template to work

11-June-2010 Sven
# [#20833] Thank You: redirect with right message when user not loged in or session expired
+ [#20833] Thank You: Thank You statistic in kunena cpanel
+ [#20833] Thank You: Language strings for statistic
+ [#20833] Thank You: Where got thx, where said thx in Profile Tab

11-Jun-2010 Matias
# [#19244] Add basis for user caching in KunenaUserBan class
# [#19244] Fix user manager in administration and simplify code
# [#19244] Fix many bugs in ban (classes, profile, templates)
# [#19244] Modify link functions so that they do not need username (simplifies ban template/logic)
# [#19244] Add html escapes to the fields in the profile pages (prevents XSS attacks)

10-June-2010 @quila
# [#19288] Fix regression - Kunena in the footer don't point to kunena official site.
# [#19288] Fix regression - Correction of text in subscription email.

10-Jun-2010 Matias
# [#19288] Fix regression: Fix file upload (wrong permissions) in some environments
^ [#19244] Simplify ban templates as much as possible -- remove extra functionality to get everything to work
+ [#19244] Add new features to ban classes, make them more robust

9-June-2010 Xillibit
^ [#19288] Check new of versions of kunena with xml things
- [#19288] Remove the useless maxlength on links and images links

9-June-2010 severdia
# [#19356] Fixed top margin on attachment section

8-June-2010 810
# [#19288] Small Css fix - Boardcode

8-June-2010 @quila
# [#19288] Fix regression - subject message suffix wrong for new post.

8-Jun-2010 Matias
^ [#19244] Major changes on how ban works internally (JTable)
^ [#19244] Start using new ban class in the code
^ [#19244] Move ban tasks into profile (from class.kunena.php and kunena.php)
^ [#19244] Change minimum PHP requirement to 5.2.3 (we are using json functions)

8-June-2010 fxstein
+ [#20916] Add css and js minification logic to build process
+ [#20916] Add YUI Compressor libraries to build files

7-June-2010 @quila
+ [#19345] Template Manager - added toolbar menu buttons.
+ [#19345] Template Manager - added tasks for toolbar menu.
+ [#19345] Template Manager - added functions for display templates in backend.
+ [#19345] Template Manager - added language strings for html file.
+ [#19345] Template Manager - added functions for template and language strings.
+ [#19345] Template Manager - added icons and images.
+ [#19345] Template Manager - added variable for reading template parameters from params.ini.
+ [#19345] Template Manager - added files templateDetails.xml, params.ini and image template_thumbnail.png
^ [#19345] Template Manager - moved template and templateimagepath configuration from kunena to template manager
^ [#19345] Template Manager - moved Avatar Position configuration from kunena to template manager
^ [#19345] Template Manager - added button in kunena control panel

7-June-2010 810
# [#19288] Small Css fix - Thread action, Threads showcat, Boardcode

7-June-2010 Matias
^ [#15886] Merged revisions 2634-2659 from /branches/1.6-xillibit with changes
^ [#19244] Moderation feature: Rework ban tables, add banned field into user table

7-June-2010 severdia
# [#19356] Fixed rest of CSS underscores to dashes (consistent naming), synchronized styles

7-June-2010 fxstein
# [#19288] Fix regression - CSS fix for category description.

7-June-2010 @quila
# [#19288] Fix regression - active tab menu not working.
# [#19288] Fix regression - announcement don't show.
# [#19288] Fix regression - CSS fix for category description.
# [#19288] Fix regression - klist-avatar rules CSS.

7-June-2010 Xillibit
# [#19288] Use integration classes to show in stats the total number of profile views

6-June-2010 Xillibit
# [#19288] Fix misplaced moderate button, when kunena is in full width (thanks cerberus)
# [#19288] Fix undefined variables in libraries/route.php (Part 2)
# [#19288] Fix issue in notification mail, the word Subject is tripped by JMailHelper::cleanBody()
^ [#19288] Show AUP users medals on kunena profilebox

6-June-2010 fxstein
# [#19251] Fix for user caching: exclude empty userids from cache to avoid sql error

5-June-2010 Sven
+ [#20833] Thank You: usertab gotthankyou and saidthankyou
+ [#20833] Thank You: language strings

5-June-2010 Xillibit
# [#19288] Fix issue with AUP integration which doesn't provide the correct link for userlist with sef
# [#19288] Naming changes into CSS (thanks cerberus)
# [#19288] Fix undefined variables in libraries/route.php
# [#19288] Fix issues with jomsocial integration on loadusers, remove empty values to avoid failed query

4-June-2010 Sven
^ [#20833] Thank You: moved thank you button to subject
+ [#20833] Thank You: language string in front and backend
+ [#20833] Thank You: Option to deaktivate thank you in backend
^ [#20833] Thank You: function getThankyouUser so it also can show realname
^ [#20833] Thank You: added showthankyou row in #__kunena_config

4-June-2010 Matias
# [#20071] Change logic how Kunena detects current menu, fixing issues with missing tab menu in Kunena
# [#20071] Add new entry menuitem for Kunena, which can be used to make unlimited menus for Kunena anywhere in menu trees
# [#20071] Add support for arbitary default pages; fix issue with parameters
^ [#15886] Merged revisions 2619-2626 from /branches/1.6-xillibit with changes

4-June-2010 Xillibit
# [#19288] Check directory permissions on avatar upload and change it if needed

4-June-2010 fxstein
^ [#20841] Change logic for who is online stats to match Joomla

3-June-2010 Sven
+ [#20833] Thank You: kunena.thankyou.php
+ [#20833] Thank You: CKunenaThankYou class
+ [#20833] Thank You: Thankyou button right beside Quote
+ [#20833] Thank You: sql table #__kunena_thankyou

3-June-2010 Xillibit
# [#19288] Fix to avoid the issue rename failed at the end of installation
# [#19288] Remove email adress from report settings to avoid spam
# [#19288] Fix undefined variable on form.php line 86
# [#19288] AUP avatar can't be rezised below 100x100px
^ [#19288] Configuration settings to define the maxlength for url on links and images
# [#19288] Show joomla! tooltip on social icons in message profilebox and in profile
# [#19288] Fix issue which prevent to save poll vote and fix conflict with JHTML::_('behavior.tooltip') which load a new time MT library

3-June-2010 Matias
# [#20071] Make menu items visible in Joomla Menu Manager

1-June-2010 Matias
^ [#20729] Update version info to 1.6.0-ALPHA2
# [#19288] Replace router.php in the beginning of the installation to prevent error messages in frontend during installation
# [#19288] Installer: Better error detection
# [#19288] Installer: Sample data gets inserted too early - installation fails if there were no messages or categories
# [#19288] Undefined variables in CKunenaLatestX class if there are no threads to be shown
# [#19288] Undefined variable userkarma in CKunenaProfile class if karma is disabled

01-Jun-2010 @quila
^ [#19244] Moderation feature: cleanup ban manager

29-May-2010 Xillibit
# [#19244] Escape all database columns, little change on database structure
# [#19244] Add configuration setting to display ban reason in profile, set ban rank when an user is banned

28-May-2010 @quila
^ [#19244] Moderation feature: cleanup ban manager, ban history and add ban pages
^ [#19244] Moderation feature: new language strings for new ban system
# [#19244] Moderation feature: fixed some bugs in ban manager
+ [#19244] Moderation feature: new icons in ban manager

27-May-2010 Xillibit
^ [#19244] Tab ban history is working now
^ [#19244] Tab ban manager is working now and it's displayed only in mod profiles

26-May-2010 @quila
+ [#19244] Moderation feature: add Ban Manager, Ban History and Add Ban tabs in profile page
# [#19244] Moderation feature: improved template in "Add Ban" tab (rules in kunena.forum.css)
# [#19244] Moderation feature: created all language string in "Add Ban" tab

Kunena 1.6.0-ALPHA

30-May-2010 Severdia
^ [#19356] CSS updates for Chrome, etc.

30-May-2010 Matias
# [#20038] Installer: Keep forum offline until installation is complete
# [#19288] Fix regression: Uploaded avatars do not show up
# [#19288] Fix regression: Undefined property: CKunenaLatestX::$threads
# [#19288] Installer: Fix a bug in table migration code
# [#19288] Installer: Add logic to migrate avatars from Kunena / FB
# [#19288] Installer: Fix a bug where upgrade on larger forum does not get reloaded on DB upgrade
# [#19288] Change logic on how we save avatars to be uniform (no quessing)
# [#19288] Change logic on how we save resized avatars, should be a lot faster in large forums

29-May-2010 Severdia
^ [#19356] Changed CSS styles to format using k and dashes
^ [#19312] Cleanup English language file
# [#19356] Fixed IE/FF word wrap bug

29-May-2010 Matias
# [#19312] Cleanup English language file: Use sections/categories instead of categories/forum
# [#19288] Regression in Installer: Mootools 1.2 did not get installed
# [#19288] Regression in Installer: If server is too fast, KunenaFactory does not get loaded
# [#20038] Minimum Joomla version is 1.5.18 (older ones have bug in redirect)
# [#19288] Regression in pathway: Undefined variable: onlineUsersList

28-May-2010 Severdia
# [#19356] CSS fixes for broken layouts caused by no breaks in code tags, new images

28-May-2010 Matias
# [#19288] Regression in Installer: Fix migration when #__kunena_version gets created
# [#19288] Bug in Installer: Upgrade fails if #_kunena_attachments_bak exists and attachments haven't been converted
# [#19288] Fix regression (db error) when user tries to post a message
# [#19288] Upgrade Kunena database tables to use UTC instead of offset in Kunena configuration

27-May-2010 Xillibit
# [#19288] Fix issues when anynomous option is enabled, on new topic the checkbox isn't displayed (Part 2)
# [#19288] Remove queries in rules and help pages and call function instead

27-May-2010 Matias
# [#20038] Minimum Joomla version is 1.5.15
# [#20038] Make forum administration to work in J1.6 (except for ACL)
# [#20038] Edit Profile: Hide edit user information in J1.6 for now
# [#20038] Fix J1.6 incompatibilities in CKunenaPath class
^ [#15886] Merged revisions 2538-2565 from /branches/1.6-xillibit with changes
^ [#15886] Merged revision 2550 from /branches/1.6-@quila-fix-100526

26-May-2010 @quila
# [#19288] Fix regression - CSS and template fixes.

26-May-2010 Xillibit
^ [#19288] Combine #__kunena_banned_users and #_kunena_banned_ips table
# [#19288] Fix issues on javascript in profile moderation

26-May-2010 Matias
# [#19288] Replace old white error screen by less intrusive error messages
# [#19288] Fix regression: Bad category permissions in sample data

25-May-2010 Xillibit
# [#19288] Fix regression on userban and enable user in kunena user manager
# [#19448] Clean html by removing tables in rules, help, login and view.php
# [#19448] Move some code out from pathway , rules and help

25-May-2010 Matias
# [#19288] Fix a few bugs in installer that cause clean installation to fail in some environments
# [#19288] Remove all but one dependency to frontend files during installation
# [#19288] Fix undefined variable during uninstall
^ [#20038] Improve installer, make admin menu image to work in J1.6
# [#20038] Joomla 1.6: Use correct author for sample message (= user who installed Kunena)
# [#20038] Joomla 1.6: Implement isAdmin(), getAllowedCategories() and getSubscribers()
# [#19288] Fixed coloring for guests and global moderators
# [#19288] Fixed missing avatar sometimes when file cannot be found
# [#20038] Joomla 1.6: Make javascript to work (except for shrink/expand)
# [#20038] Joomla 1.6: Make editor to work again

24-May-2010 Matias
# [#20038] Create virtual view to have menu item for Joomla 1.6
^ [#15886] Merged revisions 2525-2532 from /branches/1.6-xillibit with changes

24-May-2010 Xillibit
# [#19288] Fix regression caused by undefined variables on AUP avatar integration class
# [#19288] Add clearstatcache() in kunena.file.class to avoid issues

23-May-2010 Matias
# [#20038] Split installer steps into tasks to avoid timeouts
# [#20038] Fix misc Joomla 1.6 issues in the installer
# [#20038] Move sample data into it's own file, make it more robust
# [#20038] Simplify kunena.install.upgrade.xml by running always install tables
# [#20038] Fix uninstall in Joomla 1.6
# [#20038] Remove dependencies to frontend during installation

23-May-2010 Xillibit
# [#20038] Function to delete menu on joomla 1.6 when kunena is uninstallated
# [#19288] Fix issues when anynomous option is enabled, on new topic the checkbox isn't displayed
# [#19288] Fix undefined variable $this->_app on ban function in class.kunena
# [#19288] Fix issue which doens't diplay avatar in correct size with AUP integration (Part 2)
# [#19288] Remove hard-coded url in anonymous check in new topic tab

21-May-2010 Matias
^ [#15886] Merged revisions 2508-2513 from /branches/1.6-xillibit with changes
# [#20038] Added our own images to installer
^ [#15886] Merged revision 2509 from /branches/1.6-@quila-bugfix

20-May-2010 Matias
# [#20038] Fix misc Joomla 1.6 issues in the installer

19-May-2010 Xillibit
# [#19288] Little change in CKunenaLastestX to be used properly with kunenalatest module
# [#19288] Fix Kunena stats to use proper configuration setting to check which profile integration is enabled
# [#19288] Fix issue which doens't diplay avatar in correct size with AUP integration

18-May-2010 @quila
# [#19288] Fix regression - small template fixes.

17-May-2010 Xillibit
# [#19288] Fix issue with UddeIM integration which doesn't show the unread messages but total messages

17-May-2010 Matias
# [#20038] Fix Joomla 1.6 issues in the installer (status: no menus, 3 queries still fail)

16-May-2010 fxstein
+ [#19251] Re-implement JomSocial user caching to reduce sql queries

16-May-2010 810
^ [#19356] Fix pagination layout

16-May-2010 Matias
^ [#15886] Merged revisions 2477, 2494 from /branches/1.6-@quila-bugfix with changes
^ [#15886] Merged revisions 2481, 2495 from /branches/1.6-810-bugfix with changes
# [#19288] Install Mootools 1.2 if Joomla doesn't already have it
# [#19288] No Replies page showed only less than a month old threads
# [#19288] CSS tweaks
# [#19288] Improve installer to better handle errors
# [#19288] Change internal ZIP files so that installation works with older Joomla releases

15-May-2010 Matias
^ [#20444] Convert our database tables to jos_kunena
^ [#20444] Add jos_fb to jos_kunena migration to installer, while keeping backup for K1.5
^ [#20444] Strip slashes from DB and remove all calls for addslashes() and stripslashes()
# [#20038] Basic Joomla 1.6 support: Installer now redirects to our own installer
# [#20444] Fix migration from J1.5: Attachments table conversion failed

14-May-2010 810
# [#19288] Fix regression: help/rules page Undefined property: KunenaApp::$catid
^ [#19312] Missing language strings added
^ [#19356] Minor HTML/CSS fixes in the backend

14-May-2010 @quila
# [#19288] Fix regression in language file - Who page.
# [#19288] Fix regression - Avatar is too large in top and bottom avatar position.
# [#19288] Fix regression - Number of Popular Polls in statistics.
# [#19288] Fix regression in profile: UddeIM Integration - PM Icon messed up in IE8.
# [#19288] Fix regression - List of Allowed file exstensions is not in tooltip in post page.
^ [#19345] Increased maxlenth for Poll Title (25 -> 100) and Options (25 -> 50), and added size to input.
# [#19356] Fixed template listcat.php. Aligment issue if there are no posts.
+ [#19345] Restyled Frontstats plugin - added stats icon.
+ [#19345] Restyled Who Is Online plugin.
+ [#19345] Added User Color Code Legend in Who Is Online plugin.
+ [#19345] Added more Color Code for Global Moderator, Users and Guests (not working).
+ [#19758] Added function for upload Emoticons in the backend Emoticon Manager.
+ [#19758] Added function for upload Rank Image in the backend Rank Manager.
^ [#19288] Kunena Header table moved from kunena.php to profilebox.php to improve template design.
^ [#19288] Added rss icon in the icons.php to improve template design.
^ [#19288] Removed rigid table from "Code" in kunena.parser.php and added class to improve template design.

14-May-2010 Matias
^ [#15886] Merged revisions 2437-2450 from /branches/1.6-xillibit with changes
^ [#20038] Basic Joomla 1.6 support: Move kunena.files.distribution to media/kunena
# [#20038] Basic Joomla 1.6 support: DB Installer for J1.6
# [#19288] Fix regression in installer: no translations in menus, sample data

13-May-2010 Matias
# [#19288] Fix regression in installer: clean install failed

12-May-2010 Matias
^ [#20038] Basic Joomla 1.6 support: New installer

11-May-2010 Xillibit
^ [#19288] Add user moderation tools or ban functions in kunena users manager and in profile page (Part 2)
^ [#19288] Show user avatar in kunena user manager list
# [#19288] Fix regression on kunena avatar integration which prevents to display avatars from gallery
# [#19288] Ban user or ip doesn't work properly
# [#19288] Add fields into profile to add expriration and message when moderator bans a user

11-May-2010 Severdia
# [#19356] Various CSS fixes for frontend, IE7 compatibility

11-May-2010 Matias
^ [#15886] Merged revisions 2434-2435 from /branches/1.6-xillibit
# [#20038] Basic Joomla 1.6 support: Fix archive and manifest to copy all files (including installer)
# [#19288] Fix regression: Forum ordering was not respected in subcategory level (listcat)
# [#19288] Do not add [attachment] tag for now -- it's not fully implemented

10-May-2010 Xillibit
^ [#19288] Add user moderation tools, ban functions in kunena users manager (not yet finished)

9-May-2010 Matias
^ [#15886] Merged revisions 2429-2431 from /branches/1.6-xillibit
# [#19288] Fix regression in profile: non-existing users cause page to crash

9-May-2010 Xillibit
# [#19288] Fix regression on summary.php on function getInboxLink()
# [#19288] Fix regression Undefined property: CKunenaPosting::$catid in kunena.posting.class.php
# [#19288] Show new bbcode [attachment][/attachment] in textarea when put new attachments
+ [#19288] Add user moderation tools or ban functions (thanks littlejohn)

8-May-2010 Xillibit
+ [#19288] Put links into profile page to access PM boxes
# [#19288] Don't let unregistered users to report message
# [#19288] Do not show login message if visitor tries to post new topic

8-May-2010 Matias
^ [#19448] Move code out of template: Announcements
^ [#19448] Move login.php and profilebox.php from plugins to template dir
^ [#19448] Clean up and simplify Announcements html
^ [#19448] Clean up and simplify Rules, Help & Forumjump html
^ [#19448] Clean up and simplify Search html
^ [#19448] No need to have 2 login areas, simplified login.php
^ [#15886] Merged revisions 2412-2424 from /branches/1.6-xillibit with changes

7-May-2010 Xillibit
# [#19288] Anonymous posting option isn't given when you begin a topic from the top tab new topic
# [#19288] Move report.class.php into lib directory

7-May-2010 Matias
# [#19288] Fix autocompleter in search
+ [#19244] Moderation feature: add autocompleter into userlist (Find User)
^ [#19448] Move code out of template: Userlist

6-May-2010 Xillibit
# [#19288] Fix regresion on who.class.php which break the viewing users in pathway
# [#19288] Put PM links (CB, Uddeim, Jomsocial) in profilebox
^ [#19288] Rewrite report.php as a class

5-May-2010 Matias
^ [#15886] Merged revision 2412 from /branches/1.6-xillibit
# [#19288] Fix regression in listcat: router list had wrong values -> extra queries
# [#19288] Fix regression in CKunenaWhoIsOnline: same task was done 2 times
# [#19255] Fix XHTML validation errors in search

5-May-2010 Xillibit
# [#19288] Fix regression in kunena.who.class.php with method GetCategoryListURL() undefined
# [#19288] Fix regresssion wrong hidden users display in whoisonline
# [#19288] Remove link for social buttons (skype, msn...) because doesn't work under IE

4-May-2010 Matias
^ [#19244] Implement new Moderation features: New topic/post moderation screen (no AJAX yet)
- [#19244] Remove deprecated moderation buttons, for now on every action will be move
# [#19244] Fixed a few bugs in moderator class, simplified logic
# [#19288] Fix regression: Preview is not working
# [#19288] Fix regression: CB/JomSocial installed, no integration: infinite redirect on Profile page
^ [#15886] Merged revisions 2380-2403 from /branches/1.6-xillibit with changes
+ [#19244] Implement new Moderation features: Add some AJAX to the move topic/post screen
+ [#19288] Add debug mode to Kunena
+ [#19244] Implement new Moderation features: Minor improvements to usability

03-May-2010 Xillibit
# [#19288] Put a constructor in the poll class with changes how to use it
# [#19288] Remove the useless query in poll to get parent
# [#19288] Put kunena.who.class.php in lib with a little change
# [#19288] Fix one warning detected in whoisonline.php in html

02-May-2010 Xillibit
# [#19288] Changes on CKunenaWhoIsOnline with functions to load templates : who.php and whoisonline.php
# [#19288] Fix links on who page

01-May-2010 Xillibit
# [#19288] Use CKunenaTimeformat::showDate() in who page
# [#19288] Rewrite who.class.php like a true class with little changes

30-Apr-2010 Xillibit
# [#19288] Fix undefined variables in parser.php on video size
# [#19288] Minimize javascript buttons on the Stats page not working
# [#19288] Add tab in profile to see Uddeim links with unreadmessages

30-Apr-2010 Matias
+ [#19356] New status based topicicons when users cannot pick up their own icons
+ [#19356] Topic icon: add link to first unread (or last) message

29-Apr-2010 Xillibit
# [#19288] Add $title parameter in function GetProfileLink() to be used in kunenalatest module
# [#19288] Extra slash in path of avatars in gallery
# [#19288] Add configuration setting to show or hide list of online users for security purpose
^ [#19288] change getName() function in user.php from protected to public

29-Apr-2010 Matias
# [#19288] Fix regression: JomSocial avatar integration is not working

28-Apr-2010 Severdia
+ [#19356] Tweak select box size on admin side.

28-Apr-2010 Xillibit
# [#19288] Give the possibility to disable or enable easily the topicicons with config settings
+ [#20254] Integration of lightbox on images using script based on MooTools (thanks Cerberus)

28-Apr-2010 Matias
# [#19288] Administration: Escape text input fields before showing them (to show "foo")
# [#19288] Magic Quotes setting in PHP adds slashes to configuration options and category names, desctriptions
# [#19288] Fix regression: Minimizing top profilebox does not work if you're not logged in
# [#19244] Implement new Moderation features: Show unapproved and deleted messages in most screens (if permissions)
# [#19244] Implement new Moderation features: Add func = unapproved/deleted
^ [#15886] Merged revisions 2370-2371 from /branches/1.6-xillibit
# [#19288] Fix regression: If function/category does not exist, show error page
# [#19288] Fix regression: Category administration: do not show non-existent moderators in the list
# [#19288] Allow user to reset Kunena configuration
# [#19288] By default, new category should be moderated
# [#19288] Remove confidential information from quoted text

27-Apr-2010 Xillibit
# [#19288] Hide about me when it's empty
# [#19288] Set standard width and height for video if the user forgot to put them in parser

27-Apr-2010 Matias
^ [#15886] Merged revisions 2360-2363 from /branches/1.6-xillibit with minor changes
# [#19288] Fix regression: Wrong menuitem gets highlighted if default page is not Index
# [#19288] Fix regression: Only one attachment can be deleted in edit
# [#19288] Uninstall does not remove Kunena menu (=> broken links)
# [#19288] Admin: Create menu does not reset kunenamenu, but users expect it to do it
# [#19288] Installing Kunena does not always create menus
# [#19288] Fix regression: Typo in CKunenaModeration::_Delete(): usersid

26-Apr-2010 Xillibit
# [#19288] Display userid in trash manager
# [#19288] Fix little regression on delete perminantly function
# [#19288] Put tooltip to show extensions allowed in form
# [#19288] Profile: Put the personnaltext (about me) below the avatar
# [#19288] Change how the functions Restore and Delete works (hold=2,3)
# [#19288] Fix undefined variable on line 95 on kunena.php (no Itemid)
# [#19288] Wrong width and height for video added by choosing the provider in the list and putting the video ID
# [#19288] Set standard width and height for video if the user forgot to put them
# [#19288] When you save your own avatar for the first time, you have the message JFolder::files: Path is not a folder:

26-Apr-2010 Matias
+ [#20071] KunenaRoute: Remove redirect when not in kunenamenu, set active menu item instead
^ [#15886] Merged revision 2349 from /branches/1.6-xillibit with changes
# [#19288] Make custom avatar galleries to work with SEF (thanks xillibit)
# [#19288] Use CKunenaAttachments in post history
# [#19288] Fix YouTube embed bug where some videos were not showing up
# [#19288] Do not redirect in CKunenaView->display(), fixes a bug in Kunena Discuss plugin

25-Apr-2010 Xillibit
# [#19288] Small change to gallery url

25-Apr-2010 Matias
# [#19288] Fix regression: Do not show gray/unused social icons when viewing a topic
^ [#15886] Merged revision 2345 from /branches/1.6-810
^ [#15886] Merged revision 2343 from /branches/1.6-xillibit with changes
# [#19288] Administration: Improve category lists for users and categories
+ [#19288] User Administration: Add missing Global Moderator option to the category list
# [#19295] Clean up code: remove a few unused or deprecated functions in administration
# [#19288] Fix moderate user layout (thanks Cerberus)
# [#20222] Do Not Use Category IDs: Router cannot decide which catid to use if categories have the same name

24-Apr-2010 Xillibit
# [#19288] Hide button Mark Forum Read if there are no posts in the cat
# [#19288] Show message "There are no posts in this forum" if there are no posts but there are sub-categories
# [#19288] Add a list of extensions file allowed in post form
# [#19288] Show description cat on hover on listcat
# [#19288] Put button delete permanently near to the button delete
# [#19288] Put new configuration setting to exclude or allow specifics cats from recent discussions page

24-Apr-2010 Matias
^ [#15886] Merged revisions 2332, 2333 and 2337 from /branches/1.6-810
^ [#15886] Merged revision 2335 from /branches/1.6-xillibit
# [#19288] Fix regression: Use avatar size/quality on avatar uploads, set maximum size to 200x200px
# [#19288] Use always new avatar class to show avatar (image may not exist)
# [#19288] Fix regression: Fix media URL in administration
# [#19288] Fix regression: In some cases users get attachments to their messages from nowhere
# [#19295] Clean up code: remove old attachment code, use always new CKunenaAttachments class
# [#19251] Reduce the number of SQL calls in forum prune (3x messages + 2x threads + 2 -> 2x threads + 3)
# [#19288] Do not delete files which are used in other attachments or are not really Kunena attachments
# [#19288] Fix regression: Deleting attachments didn't work, they were always deleted during edit

23-Apr-2010 Xillibit
# [#19288] Fix wrong description for social info in edit profile and wrong links
^ [#19288] Change ordering setting in profile by adding a kunena global option
# [#19288] Put karma details with icons minus and plus in profile
# [#19288] Add configuration setting to choose delete behaviour for user

23-Apr-2010 Matias
^ [#15886] Merged revision 2322 from /branches/1.6-810 with changes
# [#19288] Fix regression: Administration: fix IP listing in user manager
# [#19288] Fix last edit 0 minutes ago, if edit time was not saved (import?)
# [#19288] Fix regression: New smiley query in installer was slightly broken
# [#19288] Better error message if upload fails on extension check
# [#19288] Do not resize image if it is within allowed size limits (keeps animated gif working)
# [#19288] Handle correctly transparent images (including blending), keep image format
# [#19288] Save uploaded avatars to avarars/users/user123.jpg and sizeXX_user123.jpg etc
+ [#19288] Show avatar also in Categories page
^ [#19293] Remove deprecated configuration options: make avatar sizes to be template specific instead of global options

23-Apr-2010 810
# [#19288] Fix regression: Check all button didn't work in IE8
^ [#19758] Clean up Admin interface: New edit Forum style in backend
^ [#19758] Clean up Admin interface: New smillies header image fixed (first smiley not yet working)
^ [#19356] Minor HTML/CSS fixes in the backend

22-Apr-2010 severdia
^ [#19758] New smilies and new key combos (including maps to other forums)

22-Apr-2010 810
^ [#19758] Clean up Admin interface: New edit Profile style in backend
# [#19758] Clean up Admin interface: Fixed signature editing
# [#19288] Fix regression: Fix upload browsers

22-Apr-2010 Matias
# [#20203] Administrator has full moderator permissions, but that does not mean that he has to be one
# [#20204] Every moderator gets email when only global moderators and assigned moderators should get it
^ [#15886] Merged revisions 2316, 2318 and 2323 from /branches/1.6-xillibit

22-Apr-2010 Xillibit
# [#19288] Show attachments in post history
^ [#19288] Replace poll field add/remove icons, by icons minus and plus
# [#19288] Put tooltips on profile input field to better understand the format of strings to enter

21-Apr-2010 Xillibit
# [#19288] Fix issue which prevents to display images in browse images in backend (Part 2)
^ [#19764] Add new javascript part for common moderation page (not working yet)

19-Apr-2010 severdia
# [#19758] Fixes for admin UI, cross-browser issues

18-Apr-2010 Matias
^ [#15886] Merged revisions 2279-2288 from /branches/1.6-xillibit

18-Apr-2010 Xillibit
^ [#19764] New configuration setting to choose between multiples buttons or one button for moderation

17-Apr-2010 Xillibit
# [#19288] Fix issue which prevents to display images from not default gallery
# [#19288] Fix issue which prevents to display images in browse images in backend (not totally working)
# [#19288] Fix some language strings and little changes
# [#19288] Some little fixes and changes on backend
# [#19288] Make javascript working on select category when you aren't on new topic and hide poll icon

17-Apr-2010 Matias
# [#19288] Do not list moderators who do not exists (deleted or banned)
^ [#15886] Merged revisions 2239 and 2272 from /branches/1.6-xillibit-fixing with changes

15-Apr-2010 Matias
# [#19288] Fix regression: Fatal error when changing vote in a poll
# [#19288] Fix regression: Topic icon cannot be changed while editing post
# [#19288] Fix regression: Show images for guests and Show attachments for guests = 'No' have no effect
# [#19288] Fix regression: Only allow gif, jpeg, jpg and png images in avatar upload
# [#19288] Fix regression: Fix bug in API which prevented mod_kunenalatest from working with unregistered users

14-Apr-2010 Matias
# [#19288] Fix regression: Some old topics are invisible in current schema -- fix database during install
+ [#19288] Allow administrator to see deleted posts and undelete them
+ [#20050] Add new integration classes: Add new event onAfterUndelete to Activity class
# [#19288] Fix regression: do not allow anyone to reply hidden messages
# [#19288] Fix regression: do not use auto redirect to valid topic in KunenaDiscuss plugin
# [#19288] Fix regression: do not hide "Who is online" when Show Statistics = No
# [#19288] Fix regression: Disable emoticons = Yes has no effect when you write a new message
# [#19288] Fix regression: CommunityBuilder avatar for visitor was broken
# [#19288] Fix regression: Allow Subscriptions = No has no effect in profile page
# [#19288] Fix regression: Allow Favorites = No has no effect in profile page
# [#19288] Fix regression: If configuration option Allow Favorites = No, all topics have been favorited by visitor (part 2)
# [#19288] Fix regression: The NEW indicator doesn't show up in func=showcat
# [#19288] Fix regression: Users should not be able to upload image if only files are allowed and files if only images are allowed

13-Apr-2010 Matias
# [#19288] Anonymous posts should change name to "Anonymous" with a warning if username exists
# [#19288] Fix regression: Forum administration breaks up when there are no categories
# [#19288] Fix regression: Mark all forums read does not work
# [#19295] Clean up code: Delete post should use the same function as moderator and normal user
# [#19288] Fix regression: Delete post button shows up even if there are replies
# [#19288] Fix regression: Empty page in view if limitstart > messagecount (redirect to last page)
# [#19288] Fix regression: In move topic, "Leave ghost message in old forum" has no effect
# [#19288] Fix regression: Configuration option Ranking = No causes func=view to crash
# [#19288] Fix regression: Configuration option Show User Statistics = Yes has no effect in profile
# [#19288] Fix regression: "Rank" is not translated in profile/summary.php
# [#19288] Fix regression: If configuration option Allow Favorites = No, all topics have been favorited by visitor
# [#19288] Fix regression: Fix some minor bugs in router/routing

13-Apr-2010 Xillibit
^ [#19380] List attachments when editing post with checkboxes to delete the attachements

12-Apr-2010 Matias
^ [#20050] Move more code to KunenaParser
# [#19288] Fix regression: facebook gets value from skype when user edits profile
# [#19288] Fix regression: Users cannot post: You are not allowed to change your name!
# [#19288] Fix regression: Fatal error: Unable to load attachments in func=view
# [#19288] Fix regression: &amp;s in redirects - menu disappears
# [#19288] Fix regression: Better checks and error detection when deleting your own message
# [#19288] Fix regression: Allow user to post many attachments with the same name (just rename them)
# [#19288] Allow multipart file extensions: tar.gz etc
# [#19288] Fix regression: Configuration screen did not work in PHP <5.2.4
# [#19288] Fix regression: Edit profile url points to JomSocial (stay in Kunena)
# [#19288] Fix regression: No threads were marked read
# [#19288] Allow catid=0 in func=view (redirect it)
# [#19288] Fix regression: Show attachments while editing message
# [#19288] Fix regression: Profile in menu does not point into CB/JomSocial/AUP profile
# [#19288] Fix regression: Edit/Quote post adds &amp;s into the body

12-Apr-2010 Xillibit
- [#19764] Remove useless functions KUnfavorite() and KUnsubscribe() in class.kunena.php
^ [#19764] Replace all separte pages for moderation (split, move...) by one page (not fully tested)

12-Apr-2010 810
^ [#19356] Minor HTML/CSS fixes

11-Apr-2010 Matias
# [#19288] Fix regression: preview layout issues
# [#19288] Fix regression: anonymous button too large in Opera
# [#19288] Fix regression: some layout issues in func=view
# [#20141] Mark forum read can break your session
# [#19288] Fix regression: UTF8 letters breaks outer tags in bbcode
# [#19288] Fix regression: Allow username to be changed again from profile
# [#19288] Fix regression: Karma layout issue in IE8
+ [#20050] Add new integration classes: Add new events onAfterEdit/Delete to Activity class
^ [#15886] Merged revisions 2196-2213 from /branches/1.6-xillibit-fixing
# [#19288] Fix regression: KunenaRoute uses deprecated class initiation on config
# [#19288] Fix regression: Allow splitting topic into the same category (invalid check fixed)
# [#19288] Fix regression: Image MIME type (%s) is not allowed (%s).
# [#19288] Fix regression: UTF-8 letters will break preview
# [#19288] Fix regression: Birthdate should not use local timezone
# [#19288] Fix regression: Consistent usage of stripslashes() inside CKunenaTools::parseText/parseBBCode/stripBBCode()
# [#19288] Fix regression: More uniform usage of stripslashes() and htmlspecialchars() with bugfixes
+ [#20050] Add new class KunenaParser (html.parser), deprecated CKunenaTools::parseText/parseBBCode/stripBBCode()
# [#19288] Fix regression: Fix avatar/attachment upload not to scale up images

11-Apr-2010 Xillibit
# [#19380] Fix attachments links in message and add generic icons for attachments
# [#19288] Fix regression with post move
^ [#19288] Replace some hard coded text strings
# [#19288] Fix regression in who Undefined variable: kunena_my
# [#19288] Allow merge function to merge with any topics on the forum
# [#19288] When you upload an avatar, it doesn't show

10-Apr-2010 Matias
+ [#20050] Add new integration classes: Activity for CB
^ [#15886] Merged revision 2192 from /branches/1.6-xillibit-fixing with some changes
# [#19288] Fix regression: Search function is not working
# [#19288] Fix regression: Registered user is shown login screen if he does not have permissions to post

10-Apr-2010 Xillibit
# [#20100] Rules and help tabs is always displayed even if the settings are changed
# [#19288] Fix regressions in profile, use now new function for unfavorite and unsubscribe

9-Apr-2010 Matias
+ [#20050] Add new integration classes: Activity for JomSocial, AUP, None
# [#19288] Fix regression: Fixed JomSocial integration detection
^ [#19295] Clean up code: Removed all integration code from posting
^ [#15886] Merged revisions 2142-2160 from /branches/1.6-xillibit-fixing
# [#19288] Fix regression: HTML escaped in message and signature (func=view)

8-Apr-2010 Xillibit
# [#19288] Fix regression with profilebox in top Notice: Undefined property: CKunenaViewMessage::$textpersonal
# [#19288] Fix regression Notice: Undefined property: KunenaUser::$catid in \libraries\user.php  on line 242
# [#19288] Fix regression with AUP Notice: Undefined property: CKunenaViewMessage::$db in funcs\view.php  on line 143
^ [#19356] Replace karmaminus and karmaplus icons by icons in png

8-Apr-2010 Matias
# [#19288] Fix regression: not all $kunena_config parameters were removed from the code

7-Apr-2010 Matias
^ [#19448] Move code out of template: simplify func=view
^ [#19295] Clean up code: remove $kunena_config parameter from CKunenaLink functions

6-Apr-2010 Matias
+ [#20050] Add new integration classes: Avatar and Profile for AUP
+ [#20050] Add new integration classes: Make them configurable
+ [#20050] Add new integration classes: Profile for None
# [#19288] Fix regression: Sub-Categories are not showing up on showcat
# [#19288] Fix regression: Regular users couldn't post / edit messages
# [#19288] Fix regression: Improve user existance detection in KunenaUser
# [#19288] Fix regression: Toggler (show/hide) did not work
- [#19293] Remove deprecated configuration options: discussbot, showlatest, latestcount, latestcountperpage, latestsinglesubject, latestreplysubject, latestsubjectlength, latestshowdate, latestshowhits, latestshowauthor

5-Apr-2010 Matias
# [#20020] Total users number count also disabled users (from K1.5.12)
# [#19288] Fix regression: Restore old behaviour to report emails (send always to mods/admins)
^ [#15886] Merged revisions 2142-2160 from /branches/1.6-xillibit-fixing with some changes
^ [#15886] Merged revision 2154 from /branches/1.6-810

3-Apr-2010 Xillibit
^ [#20050] Fix somes missing things in stats API
# [#19288] Fix regression when you try to log in kunena with a new user
^ [#19356] On profilebox when you have pm enabled and AUP enabled the icons are misplaced

2-Apr-2010 Xillibit
^ [#20050] Stats API finished and frontstats leverages API methods

2-Apr-2010 810
# [#19288] Fix regression: Bug bbcode in internet explorer, changed the class name into kunenaclass in lib/bbcode.js.php

2-Apr-2010 Matias
# [#19288] Fix regression: Break compatibility (white screen) with older GroupJive releases

1-Apr-2010 Matias
# [#20071] KunenaRoute: Add support for default page, fix bug where wrong Itemid got selected
# [#20071] Routing: Add new option &post=new for new topics
# [#20071] KunenaMenu: Change New Topic to use &post=new (fixes suboptimal Itemid in routing)
^ [#20071] Simplify redirect and error handling for empty or illegal func
# [#20071] Routing: alter it to take account all variables in menu item, simplify logic
# [#19288] Fix regression: cannot post, reply topics
^ [#15886] Merged revisions 2124-2133 from /branches/1.6-xillibit-fixing with some changes
# [#19288] Fix regression: Session was not updated in API, causing sql query to fail
^ [#20050] Finish profile integration, remove deprecated code, fix some bugs

31-Mar-2010 Xillibit
# [#19288] The message subject in RSS have slashes
# [#19288] When you set profilebox in top or bottom position, the online image is misplaced
# [#19288] When the user choose last post first in his profile, this has no effect
+ [#19764] Add configuration setting to allow the user let the ghost message box checked or not
^ [#19395] Leverage of a better captcha plugin instead of the crappy thing

31-Mar-2010 Matias
+ [#20050] Add new integration classes: Profile for None, Kunena, CommunityBuilder, JomSocial
+ [#20071] KunenaRoute: make Kunena to find best possible Itemid
+ [#20071] KunenaRoute: Fix bugs in router.php, add support for intelligent routing
^ [#20071] KunenaRoute: Use KunenaRoute::_($url) in CKunenaLink, remove &amp;
# [#20071] KunenaRoute: Fix menuitems to be Joomla compatible
# [#19288] Fix regression: Bugs in Kunena user classes
# [#19288] Fix regression: Anonymous users had users avatar in view

30-Mar-2010 Xillibit
# [#19872] Externals urls in some places are considered like local urls
# [#19764] Delete attachments now delete from old locations
# [#19288] When you use quote function with content with double quote, it's showed in html in editmode
# [#19288] Quick reply function doesn't work, it need that you enter a name
+ [#20050] Add stats functions in API

29-Mar-2010 Matias
+ [#20050] Add new integration classes: Login/Registration for None, CommunityBuilder, JomSocial
+ [#20050] Add new integration classes: Avatar for None, Kunena, CommunityBuilder, JomSocial
# [#19288] Fix regression: Fixed many bugs in KunenaUser class
+ [#20050] Add new integration classes: Private for None, CommunityBuilder, JomSocial, UddeIM

29-Mar-2010 Xillbit
# [#19764] Fix small typo with button move message which doesn't diplay the icon
# [#19358] Fix an issue which prevent to display the poll under some conditions
# [#19764] Some fixes on moderation.class and functions which use this class
# [#20044] Undefined property: CKunenaPost::$email on components\com_kunena\template\default\editor\form.php on line 97

28-Mar-2010 Matias
+ [#20038] Add basic Joomla 1.6 support (no installer, no acl)
# [#20038] Add basic Joomla 1.6 support: use new format in language files
+ [#20039] Add kimport(), new location for libraries and static KunenaFactory class
^ [#20038] Add basic Joomla 1.6 support: move (C)KunenaSession and (C)KunenaUser to libraries
^ [#20038] Add basic Joomla 1.6 support: move access control to KunenaAccess in libraries
+ [#20038] Add basic Joomla 1.6 support: new KunenaIntegration classes, use them for login
# [#19288] Fix regression: Prune forums complains of missing CKunenaTimeformat class
# [#19288] Fix regression: First message in topic missing in func=view
# [#19288] Fix regression: CommunityBuilder profile integration did not fill all the fields
^ [#15886] Merged revisions 2098-2103 from /branches/1.6-xillibit-fixing
# [#19288] Fix regression: Do not mess up Joomla template (local css rules)
# [#19064] Add new bbcodes: Simple working implementation of MAP with external link
+ [#19064] Add new bbcodes: article tag pointing to com_content articles

27-Mar-2010 Xillibit
# [#19764] Fix undefined variables in post.php for merge function when there is only one thread in a cat
^ [#19764] For merge/slpit functions you can directly put the target thread/cat ID instead of search in a long list
^ [#19764] Add in split the possibility to split the actual message and newer messages (doesn't work)

25-Mar-2010 Xillibit
^ [#19764] Add the move function for one message
# [#19288] Fix regression - Fatal error: Class 'JMailHelper' not found in kunena.posting.class.php
^ [#20002] Do not allow moderator to move threads into sections
^ [#19764] Add in profile bulkaction the delete favorite and subscription functions
+ [#20021] Add few options to moderate user

21-Mar-2010 Xillibit
# [#19978] BUG: Editing posts containing quotation marks
# [#19983] Side-by-side preview is not side-by-side
# [#19825] BUG: Redirection on "Mark forum read" fails
^ [#19995] Remove favorites and subscriptions if thread gets deleted/merged (need testing)

21-Mar-2010 Matias
# [#19288] Fix regression: Subscription emails not sent, small bug in posting

20-Mar-2010 Matias
^ [#19277] Clean up and restructure post.php: Use class CKunenaPosting to post/reply message
^ [#19277] Clean up posting: remove deprecated code

18-Mar-2010 Matias
# [#19288] Fix regression: Typo in session handling
# [#19288] Fix regression: Circular class reference does not work with APC
^ [#19277] Clean up and restructure post.php: Use class CKunenaPosting to edit message

17-Mar-2010 Matias
# [#19288] Fix regression: Make CAPTCHA to work again
# [#19295] Clean up code: Improve session handling and fix access for global moderators

16-Mar-2010 Matias
^ [#19277] Clean up and restructure post.php: Make it a class in functions directory
^ [#19277] Clean up and restructure post.php: Split code into functions
^ [#19277] Clean up and restructure post.php: Move all html to the templates (editor & moderate directories)
^ [#19277] Clean up and restructure post.php: Move all code out from the templates
# [#19277] Clean up and fix many misc bugs in funcs/post.php

15-Mar-2010 Matias
- [#19383] Revise Profile Page: remove old profile code
# [#19954] Admin: Differentiate sections from categories, default new category parent to the first section
# [#19654] Edit category: allow public access to be changed to nobody
+ [#19956] Allow anonymous posts from registered users in special categories
+ [#19956] Allow anonymous also in Quick Reply
# [#19288] Fix regression: Do not show reply/quote for hidden posts

14-Mar-2010 Matias
^ [#19383] Revise Profile Page: Save all user information in a single form
^ [#19383] Revise Profile Page: Clean up changing avatar
+ [#19383] Revise Profile Page: Obey configuration

13-Mar-2010 Xillibit
^ [#19383] Make working the various actions for saveavatar, always an issue with avatar uplaoding

12-Mar-2010 Matias
^ [#19383] Revise Profile Page: Add parameters to edit user account
+ [#19383] Revise Profile Page: Add galleries to avatar tab

11-Mar-2010 Matias
^ [#19383] Revise Profile Page: Combine all edit actions under tabs
^ [#19383] Revise Profile Page: Fix layout for edit tabs

10-Mar-2010 Matias
# [#19288] Fix regression: User gender, birthdate, location and website missing from message info
# [#19233] Show Kunena login screen to visitors, if forum is for registered users only
^ [#15886] Merge revisions 2022-2032 from /branches/1.6-xillibit-fixing
- [#19383] Revise Profile Page: cleanup
# [#19380] Many fixes to CKunenaImage, CKunenaAttachments
# [#19383] Fix avatar upload, other logic still missing

10-Mar-2010 Xillibit
+ [#19383] Revise Profile Page: re-write page for edit joomla! and details, forum settings and avatar

07-Mar-2010 Xillibit
^ [#19764] Make moderation part in profile working almost (part 2)
# [#19764] Uncomment the function list_users() in userlist.php, add sortable, put new icons for users search

7-Mar-2010 Matias
^ [#19383] Revise Profile Page: Layout fixes

06-Mar-2010 Xillibit
# [#19649] Put error message when something goes wrong when user delete own post
# [#19764] Some fixes on CKunenaModeration class
^ [#19764] Make moderation part in profile working almost

05-Mar-2010 Xillibit
# [#19764] Fix delete the user from kunena table instead of put empty content
^ [#19764] Put the edit time check into a function in CKunenaTools
+ [#19649] Allow user to edit post while he can edit it

05-Mar-2010 Matias
+ [#19383] Revise Profile Page: added Posts tab

04-Mar-2010 Xillibit
# [#19764] Fix regressions in CKunenaModeration on undefined variable session
# [#19764] Fix undefined variable in post.php line 893
# [#19764] Fix wrong language string for merge in post.php
# [#19288] Fix regression - normal user can not go into read more for the announcement
# [#19764] Put auto-redirect when decreasing/increasing karma

04-Mar-2010 Matias
^ [#15886] Merge latest changes /branches/1.6-xillibit with some fixes and changes (not tested, may contain regression)

01-Mar-2010 Xillibit
+ [#19764] Add user blocking/unblocking functions in kunena users managers like in the j! user managers

28-Feb-2010 Xillibit
^ [#19764] Make split working with CKunenaModeration class
+ [#19607] Add option do hide user profile and information

27-Feb-2010 severdia
+ [#19356] New icons

27-Feb-2010 fxstein
+ [#19380] Extended upload (part 7) display existing attachments in edit mode
^ [#19380] Renamed KImage to CKunenaImage
+ [#19380] Additional AJAX translation strings
+ [#19380] New Ajax helper to delete/remove attachments by author/moderator/admin

27-Feb-2010 Xillibit
^ [#19764] Make merge working for one message and put things for split
+ [#19764] Add functions to logout an user and to delete an user from kunena user manager

26-Feb-2010 severdia
+ [#19356] New inactive icons

26-Feb-2010 Xillibit
^ [#19764] Make working move in message, and bulk delete/move with CKunenaModeration class
^ [#19764] Make working merge for complete thread only with CKunenaModeration class

26-Feb-2010 Matias
+ [#19356] New default rank, used also for visitors
+ [#19356] New greyed out social/message icons (logic)
+ [#19770] API: Implemented most of Kunena, KunenaUserAPI classes

26-Feb-2010 fxstein
+ [#19380] Extended upload (part 6) support gif, png in addition to jpeg; square thumbnails
^ [#19380] Display multiple attachments in a single row - shorten filenames to fit

25-Feb-2010 fxstein
+ [#19380] Extended upload (part 4) filesize display and filename shortener
+ [#19380] Extended upload (part 5) new KImage class

25-Feb-2010 Xillibit
+ [#19332] Change Delete behavior - add search function and now delete attachments with CKunenaModeration on kunena_attachments
+ [#19807] Add in search options, the options to search in trash for moderators
^ [#19764] Make delete a post and delete a thread in message using CKunenaModeration working in frontend

24-Feb-2010 severdia
+ [#19356] New rank image

24-Feb-2010 Matias
^ [#19380] Multi attachments: Plupload upgraded to version 1.1 (but is disabled for now)

24-Feb-2010 severdia
# [#19356] Random CSS fixes for UI
+ [#19356] New greyed out social/message icons (needs logic)

24-Feb-2010 fxstein
+ [#19380] Extended upload (part 2) automatic resize
+ [#19380] Extended upload (part 3) automatic thumbnail creation and display

24-Feb-2010 Xillibit
^ [#19764] Make delete and move functions in CKunenaModeration class functionnals (not fully tested)

23-Feb-2010 Xillibit
+ [#19764] Block/Unblock User in Admin Backend - trash all messages, move to categories and iplog implemented in backend

23-Feb-2010 severdia
^ [#19356] New PM icon
+ [#19380] New attachment CSS styles

23-Feb-2010 fxstein
+ [#19380] New MIME imagetype attachment config option
+ [#19380] New upload file processing based on config option
+ [#19380] Extended upload config options (part 1)

22-Feb-2010 fxstein
+ [#19774] New template loader helper: CKunenaTools::loadTemplate()
+ [#19380] New attachments template (scaffolding)
+ [#19295] Add svn:keywords Id to all new files
+ [#19380] New imagetype attachment config option

22-Feb-2010 Matias
# [#19288] Fix regression: New attachment table broke installation, upgrade works
+ [#19770] Add external API for other components: added api.php
# [#19288] Fix regression: New attachment table broke latestx, showcat, post
+ [#19770] Add external API for other components: added interfaces for user, forum and post

21-Feb-2010 Xillibit
# [#19288] Fix regression: Notice: Use of undefined constant _ANN_EDIT - assumed '_ANN_EDIT' in announcement.php
# [#19288] Fix regression: Notice: Undefined variable: kunena_config in admin.kunena.html.php on line 480
# [#19288] Fix regression: wrong type for the folder field in kunena.install.upgrade.xml for create jos_kunena_attachments
# [#19288] Fix regression: CKunenaTables doesn't check the table jos_kunena_attachments
# [#19690] Add configuration report system in Kunena backend - display kunena configs settings in a table and check for each kunena table which is in utf8
^ [#19358] Display the poll icon only on the first message of the thread
^ [#19358] Take care a bit of Class kunena.moderation.class.php
# [#19668] Show the checkbox for select all the checkboxes only for moderators

21-Feb-2010 severdia
^ [#19758] Clean up admin interface, language fixes

21-Feb-2010 Matias
^ [#19758] Clean up admin interface: move logo to toolbar, change emoticons path etc..
^ [#19758] Clean up admin interface: make logo a bit larger
^ [#19380] Multi attachments: Add basic old style attachments with some JavaScript for backup
# [#19380] Multi attachments: Try to make it to work with Chrome

20-Feb-2010 severdia
^ [#19758] Clean up admin interface, add tabs struture (still needs tab JS)

20-Feb-2010 Matias
# [#19288] Fix regression: Only the first rank image works (wrong url)
+ [#19380] Multi attachments: use new folder, add to database and assign to message

20-Feb-2010 fxstein
+ [#19380] Basic attachments display scaffolding added with sample display data
^ [#19380] Minor changes to attachments upgrade logic
+ [#19380] Multi attachments database integration for messages view

19-Feb-2010 fxstein
^ [#19380] Modified attachments table to support legacy folder structure

19-Feb-2010 Matias
^ [#19690] Rename bbcode [mod] to [confidential] and make small changes to it's logic

18-Feb-2010 Matias
# [#19399] Fixed undefined variable in RSS code

18-Feb-2010 fxstein
^ [#19399] Changed remaining _LISTCAT_RSS occurances to JText
^ [#19312] Changed "Posted at" to "Posted" in language file
+ [#19380] Create new attachment table for advanced multi attachment handling

18-Feb-2010 Matias
# [#19380] Multifile upload: Fixed fixed path to silverlight, flash runtimes

17-Feb-2010 fxstein
+ [#19399] merged new RSS code (part 1 - intial merge from littlejohn branch)
^ [#19399] merged new RSS code (part 2 - language string corrections)
+ [#19399] merged new RSS code (part 3 - dedicated section for RSS settings)
- [#19399] merged new RSS code (part 4 - remove security bypass)

17-Feb-2010 severdia
^ [#19345] Added new styles for pagination, but still needs correct output

17-Feb-2010 Matias
^ [#19345] Restyle Default template: pagination
^ [#15886] Merge latest changes /branches/1.6-xillibit, added minor fixes
# [#19380] Multifile upload: Fixed logic for gears, silverlight, flash uploads

17-Feb-2010 Xillibit
+ [#19690] Add configuration report system in Kunena backend - add new bbcode [mod][/mod] for show content only for mods and admins

15-Feb-2010 Xillibit
+ [#19668] Add parser logic for map

14-Feb-2010 Matias
^ [#19380] Multifile upload: Working logic for html5 uploads (not saved into DB yet)

14-Feb-2010 severdia
# [#19356] More CSS fixes and reworked Report to Mod page

13-Feb-2010 severdia
# [#19356] More CSS fixes for default Joomla templates

13-Feb-2010 Matias
^ [#19380] Multifile upload: Yet another try with plupload 1.0 (supports flash, html5 etc)

13-Feb-2010 Xillibit
# [#19332] Change Delete behavior - add sortables on all items
^ [#19358] Apply some changes on the polls - wrong path for bar.png, remove url in javascript for vote

12-Feb-2010 Xillibit
# [#19690] Add configuration report system in Kunena backend - add function to select all text, add two configurations settings

12-Feb-2010 severdia
# [#19356] CSS fixes for Afterburner

12-Feb-2010 Matias
# [#19288] Fix regression: AJAX Upload broke up during merge

10-Feb-2010 Xillibit
+ [#19690] Add configuration report system in Kunena backend

08-Feb-2010 littlejohn
+ [#19399] New RSS feeds (part 5 - added frontend view and rss class)
- [#19399] New RSS feeds (part 4 - removed old frontend)
# [#19399] New RSS feeds (part 3 - removed trailing space from parser affecting all templates)
^ [#19399] New RSS feeds (part 2 - changed and corrected administrative options)

08-Feb-2010 Xillibit
# [#19332] Change Delete behavior - fixes to solve an issue in trash manager and now put the poll deletion in trash manager

07-Feb-2010 Xillibit
# [#19631] Re-implement quick reply by using mootools - fix a bug which create new threads instead replies
+ [#19668] Re-implement bulkactions with mootools
+ [#19668] Write javascript logic for video in editor

07-Feb-2010 severdia
# [#19356] CSS fixes, rounded tabs (CSS3 only)

07-Feb-2010 Matias
# [#19288] Fix regression: New installation did not work because of old sample data
# [#19288] Fix regression: Missing language strings in installer and in backend
# [#19288] Fix regression: Create menu item: Kunena cannot be selected
# [#19288] Fix regression: Upgrade failed if configuration did not exist

07-Feb-2010 severdia
# [#19312] Language fixes (thanks again to kmilos)

06-Feb-2010 severdia
+ [#19312] Checkbox for check toggle
# [#19356] CSS fixes

05-Feb-2010 fxstein
^ [#19345] Display page creation time in footer
+ [#19251] Jomsocial user prefetch caching to reduce query counts - showcat
! [#19657] Merge latest branch provided by xillibit

05-Feb-2010 Xillibit
# [#19631] Re-implement quick reply by using mootools - little changes
# [#19288] Fix regression - remove deprecated $mainframe put in trash manager

04-Feb-2010 Xillibit
^ [#19639] Add form-validation instead alert
# [#19639] Add form-validation instead alert - some fixes on this, now work like it should

04-Feb-2010 fxstein
^ [#19345] Re-style child board counts to match new template
^ [#19645] More language conversion changes
+ [#19345] Display page creation time in footer
- [#19634] Shorten Changelog to 1.6 changes

04-Feb-2010 severdia
# [#19312] Language fixes (thanks to kmilos)

04-Feb-2010 Matias
# [#19288] Fix regression: Posting new message did not work
# [#19561] Fix poll ajax calls: broken SQL, only first element got matched in JS
# [#19380] Many small fixes to the editor ajax calls (language strings, error handling)
^ [#19645] Convert Language files to native Joomla 1.5/6 ini's
^ [#19645] Convert all language strings to use JText::_()
# [#19645] Fix missing quotes from language strings, use new language files

03-Feb-2010 Xillibit
+ [#19631] Re-implement quick reply by using mootools

03-Feb-2010 Matias
# [#19251] Advanced special user prefetch: bugfix
# [#19380] Multifile upload: didn't work while editing a post
- [#19293] Remove deprecated PM Systems: mypms, missus, jim
- [#19295] Clean up code: remove unused code in kunena.php + PMS options
# [#19288] Fix regression: Installer does not work

03-Feb-2010 fxstein
+ [#19251] Jomsocial user prefetch caching to reduce query counts
^ [#19634] Update package file name for internal night build

03-Feb-2010 littlejohn
^ [#19399] New RSS feeds (part 1 - adding administrative options)

02-Feb-2010 fxstein
+ [#19251] Advanced special user prefetch caching to reduce query counts

02-Feb-2010 Matias
+ [#19380] Multifile upload: upload files to server by using iframe (part 2)
# [#19624] Improve sending moderator/subscription mail (check email addresses, cleanup contents, etc)
- [#19380] Multifile upload: no more Fancy Upload

01-Feb-2010 fxstein
^ [#19236] Revert category overlay colors
# [#19356] Center menu tabs and make spacing font size relative
+ [#19380] Multifile upload (part 1)

01-Feb-2010 severdia
# [#19356] Random CSS fixes for UI

31-Jan-2010 severdia
+ [#19383] Added uknown gender icon/option
+ [#19356] Moved icons to proper folders, new icons
+ [#19356] More new icons

31-Jan-2010 Matias
+ [#19383] Revise Profile Page: added Started Topics and Posted Topics tabs
+ [#19383] Revise Profile Page: show users post count
^ [#19598] Make topic icons configurable in icons.php
# [#19278] Keep topic icon after editing message (make it better)
+ [#19383] Revise Profile Page: hide moderation from myself, regular users
^ [#19383] Revise Profile Page: fix unknown location, gender
# [#19288] Fix regression: Pending messages query
# [#19288] Fix regression: undefined variable during posting
+ [#19599] Moderators should be able to see unapproved messages while reading thread and approve them

31-Jan-2010 fxstein
+ [#19592] Add JFirePHP support
+ [#19592] Add initial profiling info via JFirePHP
+ [#19592] Implement KProfiler

31-Jan-2010 severdia
# [#19356] Added missing social icons, new topic icons
# [#19356] Added CSS for red forum suffix

30-Jan-2010 Xillibit
# [#19561] Put the poll form into the new editor - little changes

29-Jan-2010 fxstein
^ [#19561] Poll ajax interface naming changes

28-Jan-2010 Xillibit
# [#19561] Put the poll form into the new editor - poll options doesn't saved when you edit a post

28-Jan-2010 fxstein
# [#19380] Preliminary video option submenu
+ [#19380] Include fancyupload libraries in project

27-Jan-2010 Xillibit
^ [#19561] Put the poll form into the new editor

27-Jan-2010 fxstein
# [#19356] Fix html regression in message.php
# [#19380] Implement new resize function and modify preview css

26-Jan-2010 severdia
# [#19380] Fixed preview splitter

26-Jan-2010 fxstein
+ [#19380] New insert link function, added poll icon to toolbar
+ [#19380] New insert image link function, new help button and function pointing at our wiki
+ [#19380] Basic split screen preview support added to bbcode editor
+ [#19380] Automatic preview update on change (every 1000ms) added
^ [#19380] Redo preview layout to use a simple div - not table
^ [#19380] Revert poll changes for now

26-Jan-2010 severdia
# [#19356] Reworked profile area on posts

26-Jan-2010 Matias
# [#19288] Fix regression: Broken/missing queries during upgrade
# [#19288] Fix regression: undefined variables, minor bugs
# [#19251] Reduce the number of SQL calls in view
# [#19448] Move code out of template: smile.class.php
- [#19295] Clean up code: remove unused code (plugins/profiletools, plugins/emoticons)
# [#19397] Fix date format in Kunena: use user/site timezone, keep saving with internal time
^ [#19345] Restyle Default template (view): remove viewcovers, change logic from online status
+ [#19303] Add new social icons to profile: ICQ, MSN
^ [#19380] Replace jQuery with Mootools 1.2: convert remaining togglers

26-Jan-2010 Xillibit
^ [#19023] Text filtering not working for title, done in every places

26-Jan-2010 @quila
^ [#19288] Fix regression - remove js folder from manifest.xml

25-Jan-2010 severdia
# [#19356] New icons, removed English folder in images (moved images up one level), refined forum colors

25-Jan-2010 Xillibit
^ [#19395] Add better captcha support with recaptcha - don't show the html tables if the puglin is unpublished, rewrite of language strings
^ [#19288] Fix regression - remove one extra query added in kunena.login.php

25-Jan-2010 fxstein
+ [#19380] New bbcode editor (part 5) - New font size selector, refactor color selector
^ [#19380] Modified text alignment and line heights for text size selector
+ [#19539] Add image sources to svn
+ [#19380] Additional bbcode editor toolbar icons

25-Jan-2010 Matias
# [#19448] Move most of the html from lib/ to default template
# [#19316] Fix remaining double SQL calls, add checks for failed queries

25-Jan-2010 @quila
+ [#19359] Color Code moderator and admin username - different css classes to moderator and admin usernames.

24-Jan-2010 Xillibit
+ [#19395] Add better captcha support with recaptcha (http://www.joomlaez.com/joomla-plugins/joomla-captcha-solution.html)
^ [#19395] Add better captcha support with recaptcha - delete old plugin captcha and set the captcha language which depends of joomla! language

24-Jan-2010 fxstein
+ [#19380] New bbcode editor (part 4) - All alt, title and helptext strings and conditionals added
^ [#19380] New bbcode editor (part 5) - Integrate and refactor base class and java script

24-Jan-2010 @quila
+ [#19233] Add Kunena Login into the new default template

23-Jan-2010 fxstein
+ [#19380] New bbcode editor (part 3) - All Smilies added, message name regression fixed

23-Jan-2010 Matias
# [#18974] Categories and sections mixed up
# [#19253] Do not allow forum parent to be it's own child
^ [#19295] Clean up code: use always new profile, improvements on moved topics
# [#19035] Call to undefined method JDocumentRAW::addCustomTag()
# [#19376] attach file when the file have is extension in capital letters, exemple : myfile.JPG doesn't work
- [#19293] Remove deprecated configuration options: default_view, numchildcolumn, cb_profile

23-Jan-2010 Xillibit
# [#19486] Remove all: die ("Hacking attempt");

22-Jan-2010 fxstein
+ [#19380] New bbcode editor (part 2) - All buttons added as css sprite

22-Jan-2010 Xillibit
^ [#19485] Add AJAX call to check if polls are allowed if category changes

21-Jan-2010 fxstein
+ [#19380] New bbcode editor (part 1)
^ [#19380] New Joomla 1.5.16 / 1.6 style framework bahvior; remove secondary mootools 1.2 libraries

21-Jan-2010 Xillibit
^ [#19332] Change Delete behavior - show in backend too the posts wrote by visitors and sortable list on the title
^ [#19066] Make jomSocial Activity stream integration configurable

20-Jan-2010 Matias
^ [#19295] Clean up code: merge showcat subcategories code with listcat
# [#19251] Do not query SQL for new topics when the information isn't used (latestx, showcat)
# [#19383] Make subscriptions and favorites to work better inside Profile page
# [#19288] Fix regression in showcat: There are no forums in this category!

20-Jan-2010 Xillibit
^ [#19358] Apply some changes on the polls - publish or unpublish a category allowed for polls directly in forum administration

20-Jan-2010 fxstein
^ [#19380] Drop jQuery; rewrite bbcode editor functions using mootools
^ [#19380] Change emoticon to color in preview
^ [#19380] Hide preview section when not active - display and grow on demand
+ [#19295] Add missing index.php files
^ [#19295] Move bbcode editor into seperate file: editor/bbcode.php
+ [#19295] Add svn:keywords Id to all new files

19-Jan-2010 svens LDA
# [#19339] Incorrect implementation of links in CKunenaLink class - Part 3

19-Jan-2010 Matias
# [#19288] Fix regression: add missing directories to manifest.xml
# [#19288] Fix regression: missing info in showcat
^ [#19295] Clean up code: latestx, flat, part of showcat, fix warnings
+ [#19383] Revise Profile Page: add rough version of favorites, subscriptions
- [#19295] Clean up code: remove plugins/fbprofile

19-Jan-2010 fxstein
# [#19358] Fix incorrect install file logic, add upgrade step and cleanup prior changes.
- [#19380] Remove Chili code high lighter as part of transition to mootools

19-Jan-2010 Xillibit
^ [#19234] Hide IP addresses from Moderators - add configuration option in backend
^ [#19358] Apply some changes on the polls - set the categories allowed for polls in forum administration
^ [#19358] Apply some changes on the polls - fix a regression introduced when you post a new thread
# [#19252] Fix slow SQL queries in RSS feed
^ [#19358] Apply some changes on the polls - fix a regression introduced when you post a new thread (part 2)

18-Jan-2010 fxstein
+ [#19067] Add messages in registered only categories to jomsocial activity stream and set access control
^ [#19479] Enable upgrade logic to work in Joomla debug mode

18-Jan-2010 Matias
^ [#19448] Move code out of template: listcat
# [#19251] Reduce the number of SQL calls in listcat

18-Jan-2010 Xillibit
^ [#19358] Apply some changes on the polls - rewrite the javascript to use mootools

18-Jan-2010 severdia
# [#19356] Change CSS and reorder fields on Recent Topics
# [#19356] Cleaned up Profile page, new generic/online buttons, fixed language strings

17-Jan-2010 fxstein
+ [#19244] Ajax/json support class scaffolding; intial autocomplete on moderation page
+ [#19244] Finished initial version of Ajax/json support class; autocomplete on moderation and search
# [#19470] Incorrect user count in stats module - included blocked users

17-Jan-2010 Matias
^ [#19243] Make profile on left/right/top/bottom configurable - move files to their new places
^ [#19448] Move code out of template: showcat - subcategories
# [#19251] Reduce the number of SQL calls in showcat - subcategories

17-Jan-2010 @quila
+ [#19243] Make profile on left/right/top/bottom configurable - Part 2

16-Jan-2010 svens LDA
# [#19339] Incorrect implementation of links in CKunenaLink class
- [#19455] Remove depriciated code in smile.class.php

15-Jan-2010 severdia
# [#19356] Reworked CSS and synced colors and fonts, added palette to CSS header, minor language string fixes

15-Jan-2010 Matias
# [#19447] Deleted messages sometimes showing up in latestx
^ [#19448] Move code out of template: view
# [#19288] Fix regression: cannot view messages if user has been deleted
^ [#19303] Social network icons: Allow values to be put anywhere in URL by using ##VALUE##
^ [#19448] Move code out of template: latestx, showcat

15-Jan-2010 Xillibit
# [#19288] Fix regression after namming changes on move/delete in class.kunena.php
# [#19358] Apply some changes on the polls - fixes regressions detected after last changes on polls
+ [#19235] Add category info to search results
# [#19358] Apply some changes on the polls - fix one another regression on polls
# [#19278] Keep topic icon after editing message

14-Jan-2010 fxstein
^ [#19345] Refactor css class names 'fb' to 'k'
^ [#19437] Update copyright dates to 2010
# [#19397] Preliminary fix for post date issue
# [#19295] Clean up code: Update template chooser
+ [#19064] Add additional common bbcodes to purify
^ [#19438] SVN keywords Id set on all files missing it
+ [#19244] Moderation page scaffolding

14-Jan-2010 Xillibit
+ [#19332] Change Delete behavior - implemented in backend (part 1)
^ [#19332] Change Delete behavior - modfied the delete function in frontend (part 2)

14-Jan-2010 Matias
# [#19288] Fix regression: Undefined fbConfig in kunena.parser.php
# [#19295] Clean up code: Remove forumtools
# [#19295] Clean up code: Remove deprecated plugins/recentposts
^ [#19303] Add social network icons to profile: use layout from profile view
^ [#19295] Clean up code: Use new rank function in view.php

13-Jan-2010 louis
^ [#19380] Added show/hide behavior for statistics and whoisonline blocks.
^ [#19380] Added show/hide behavior for any block based on an a.toggler selector and rel attribute

13-Jan-2010 fxstein
+ [#19244] New moderator tools class added
^ [#19380] Change joomla menu for Kunena to reflect new profile url format
^ [#19425] Security hardening: defined( '_JEXEC' ) or die();
^ [#19345] Modified css class prefix logic
# [#18995] Undefined variables in message.php fixed

13-Jan-2010 Matias
+ [#19380] New profile page: forum/profile. Not yet activated in menu, links
# [#19397] Fix date format in Kunena, make it configurable

13-Jan-2010 Xillibit
# [#19103] Language strings should be escaped in javascript, added in myprofile and tested in write post
+ [#19232] Add option for message numbering

12-Jan-2010 severdia
+ [#19380] Add moderator tab to Profile page, new language strings
^ [#19380] Added JS slider links, needs testing

12-Jan-2010 Xillibit
# [#19288] Fix regression, waring in zend in myprofile_summary.php
^ [#19358] Apply some changes on the polls, allow the user to change her vote
# [#19358] Apply some changes on the polls, regression undefined catid in poll.php
^ [#19377] Allow the maxlength on the personnal text to be modified easily

12-Jan-2010 Matias
# [#19251] Reduce the number of SQL calls when showing frontstats
^ [#19295] Clean up: remove unused code (statsbar) and images
^ [#19295] Clean up: replace module positions by CKunenaTools::showModulePosition()
# [#19313] Minor fix for SVN installer: always run queries
# [#19288] Fix regression: Writing new topic possible without permissions

11-Jan-2010 severdia
# [#19380] Add tabs & code to JS file, profile page
# [#19380] Removed forum section minimizers in prep for MT version, fixed tabs on profile page

11-Jan-2010 Matias
# [#19064] Finalized new bbcodes: fixed preview
# [#19288] Fix regression: warnings in backend after css file moved
- [#19293] Remove deprecated configuration options: poststats, statscolor
# [#19251] Reduce the number of SQL calls in various views
# [#19251] Reduce the number of SQL calls in various views (router in showcat, latestx)
# [#19288] Fix regression: New topic without category not working

11-Jan-2010 fxstein
+ [#19064] Finalized new bbcodes: table, th, tr, td & module (for joomla modules)
^ [#19400] Changed subheader layout, reformated category listings
^ [#19064] Separate bbcode css

10-Jan-2010 svens LDA
# [#19339] Incorrect implementation of links in CKunenaLink class

10-Jan-2010 severdia
# [#19345] Stats page cleanup, Language string cleanup
^ [#19345] Moved smilies from side of new message screen to top, language strings fixed

10-Jan-2010 Matias
# [#19383] Revise Profile Page: remove deprecated functions, minor fixes
+ [#19356] New buttons: added logic to show new buttons
- [#19293] Remove deprecated configuration option: joomlastyle
# [#19032] Moderator moving topic from thread: forum order is wrong
+ [#19298] Add category selection pull down to New Thread
# [#19371] Fix router to accept the new menu items
# [#19288] Fix regression: Fix broken html, remove unused broken code

10-Jan-2010 severdia
^ [#19383] Redesigned profile page

10-Jan-2010 fxstein
# [#19358] Cleanup of polls backend to fix broken configuration
^ [#19371] Change default page behaviour - make it work with new Joomla menus
^ [#19345] Re-style default template: replace <p> with proper <div> in listcat.php
^ [#19369] Proper headers for all views
^ [#19369] Move secondary headers into <body> for proper styling

09-Jan-2010 severdia
# [#19356] Fixed search page accessibility, cleaner CSS
+ [#19356] JS for clickable checkbox fields
+ [#19380] Added Mootools in preparation to replace jQuery

09-Jan-2010 fxstein
+ [#19371] Auto generate joomla menu from control panel and during install
# [#19371] change componentid behaviour for created menus to support sef
^ [#19379] rename faq to help
+ [#19371] Language file strings for new menu creation logic
- [#19371] Remove leagcy menu code including layout.php

08-Jan-2010 810
+ [#19303] Add twitter, facebook to profile
^ [#19303] Add twitter, facebook to profile, edited the images

08-Jan-2010 Xillibit
^# [#19358] Apply some changes on the polls

08-Jan-2010 severdia
^ [#19356] New buttons, rank icons
^ [#19345] Re-style default template

08-Jan-2010 Matias
^ [#19345] Re-style default template: Search Tab
# [#19352] Own favorite star gray when many users have favorited the same topic

08-Jan-2010 fxstein
^ [#19345] Re-style default template
- [#19251] Remove unneeded query for modified posts
# [#19303] Fixed installer regression
^ [#19345] added new column for views in flat.php
+ [#19345] formatLargeNumber(): format numbers >10,000 to 10k >1,000,000 to 1m for various outputs
^ [#19345] proper col span and width for new view column in flat.php

07-Jan-2010 fxstein
+ [#19333] New datamodel table for category subscriptions
+ [#19333] New category subscriptions logic (w/o email notification)
+ [#19333] eMail notifications for New category subscriptions
^ [#19342] Cleanup redirect after post, avoid intermediate page

07-Jan-2010 Xillibit
# [#19029] If moderator edits the post, email address gets replaced

07-Jan-2010 Matias
# [#19316] Fix double SQL calls, add checks for failed queries
# [#18862] New thread is unread after posting it
# [#19288] Fix regression: session expired on every page load
# [#19321] Message text missing from moderator emails if there is no subscriptions
# [#18994] Email to moderators does not send email to global moderators
# [#19323] Flood protection should not block Subscribe and Favorite
# [#18903] Moderator and subscribed to topic: user will receive two emails
# [#19277] Clean up and restructure post.php, part 5: rewrote permissions checks during posting
# [#19029] If moderator edits the post, email address gets replaced (part 2)

06-Jan-2010 Matias
- [#19293] Remove deprecated configuration option: View=flat/thread (leftover code and cookie)

06-Jan-2010 fxstein
+ [#19313] SVN installer option added. Added control panel button to execute installer (only in SVN mode)
# [#19200] Fixed regression in check_dberror that would crash php server due to invalid recusion
# [#19241] A little love for our new polls. Cleaned up install/upgrade, added db checks to all sql
# [#19241] Added missing id and catid parameter definitions

06-Jan-2010 Xillibit
^ [#19241] Add code from kunena.special.upgrade.poll.php to kunena.special.upgrade.1.6.0.php
# [#19304] if Enable Help Page and Show help in Kunena is on no, has not effects on boardcode link
# [#19103] Language strings should be escaped in javascript
# [#19241] Fixes some little bugs in polls (part 2)
# [#19241] Fixes some little bugs in polls
+ [#19241] Add polls feature by applying changes from /branches/1.5-xillibit

05-Jan-2010 fxstein
+ [#19294] New module position: kunena_menu to allow custom Joomla menu to override default tabs
^ [#19236] Changed behaviour of category css suffix logic. Now adds new class to overide only specific features.
^ [#19289] Cleaned up and reformatted kunena.config.class.php
+ [#19289] New config validation function before save and after load to prevent unsupported values

05-Jan-2010 810
# [#19288] Fix some minor bugs on backend part 2
^ [#19295] Clean up and restructure backend

05-Jan-2010 xillibit
# [#19287] Modification for collect_smilies() and collect_ranks() - delete the index.php in display
# [#19287] Modification for collect_smilies() and collect_ranks()
# [#19234] Hide IP addresses from Moderators

05-Jan-2010 Matias
# [#19255] Fix XHTML validation errors while posting a message
# [#19277] Clean up and restructure post.php, part 2
# [#19277] Clean up and restructure post.php, part 3, fix attachments
^ [#16390] Update English language file, trim whitespaces
# [#19277] Clean up and restructure post.php, part 4, more fixes on posting
# [#19290] Bulk delete and move returns to main page
# [#19288] Fix regression: icons and emoticons conflict
# [#19288] Fix regression: PHP5.3 fix broke avatar upload
- [#19293] Remove deprecated configuration option: Word Wrap

05-Jan-2010 @quila
- [#19243] Make profile on left/right configurable - Revert change on message.php

04-Jan-2010 fxstein
^ [#19280] New standard "Registered Users Only" error message
+ [#19236] Updated colors: -green, -red, -orange, -blue, -grey & -pink for category css class suffix

04-Jan-2010 Matias
# [#19031] Quick reply shows > as &gt; in subject (part 2)
# [#19277] Clean up and restructure post.php and fix misc bugs

04-Jan-2010 @quila
+ [#19243] Make profile on left/right configurable

04-Jan-2010 Xillibit
# [#19107] Delete deprecated templates during install (part 2)
+ [#19107] Delete deprecated templates during install

04-Jan-2010 fxstein
# [#19257] Fixed regression: categories work again in backend

03-Jan-2010 severdia
# [#19255] Fixed validation errors. Now valid XHTML.

03-Jan-2010 fxstein
+ [#19236] Add css class suffix support for categories in various views
# [#18995] Undefined variables regression in pdf fixed
^ [#19250] Refactor remaining fb_xxxx files
- [#19254] Remove bottom forumjump dropdown
+ [#19236] Add category css class suffix predefines: -green, -red, -orange, -blue, -grey & -pink

03-Jan-2010 @quila
# [#19037] Add max avatar size into user profiles

03-Jan-2010 Xillibit
# [#18995] Undefined variables
# [#19080] Revert change on myprofile for configuration option "Show join date" has no effect

03-Jan-2010 Matias
# [#19043] Deprecated links to index2.php (part 2)
# [#15946] Fixed regression in: Super Admin in the User List

03-Jan-2010 810
# [#19229] User administration Adding an order + cleaned up
# [#19230] Fix some minor bugs on backend

02-Jan-2010 Matias
# [#19065] Removed many globals, fixed minor bugs
# [#19215] Remove redundant SQL in isModerator() calls

02-Jan-2010 810
+ [#19225] add hide images/files for guests
^ [#19225] add hide images/files for guests

02-Jan-2010 severdia
^ [#18780] Reformatted CSS files
# [#18780] Commented out errors. Both CSS files now validate at W3C

02-Jan-2010 fxstein
- [#19216] Removed Clexus PM integration
# [#19065] More frontend cleanup based on code analysis - fixed various bugs
# [#19065] cleaned up and reformatted myfprofile.php
+ [#19222] New feature: 'No Replies' tab added
# [#19065] final fix for warnings inside flat.php

01-Jan-2010 fxstein
# [#19065] fixed html bugs and warnings and reformatted flat.php
- [#19214] Removed patTemplate globally
# [#19065] Reformatted kunena.php
# [#19065] fixed html bugs and warnings and reformatted fb_write.php, post.php
# [#19065] cleaned up and reformatted views.php
# [#19065] cleaned up and reformatted pathway.php, showcat.php and view.php
# [#19065] cleaned up and reformatted recentposts.php
# [#19065] More frontend cleanup based on code analysis - fixed various bugs

01-Jan-2010 810
^ [#19213] rss image isn't always displayed in config backend
^ [#15946] Fix: Super Admin in the User List

01-Jan-2010 Matias
# [#19065] More frontend cleanup based on code analysis - fixed various bugs
# [#19065] Fixed bugs while posting caused by code cleanup
# [#19065] Remove a lot of unused or deprecated code as part of cleanup
# [#19065] Use JString instead of functions from PHP

01-Jan-2010 Xillibit
^ [#19200] Replace all trigger_dberror() or trigger_dbwarning()

31-Dec-2009 fxstein
# [#19065] More frontend cleanup based on code analysis - fixed various bugs

31-Dec-2009 Xillibit
# [#19201] Fix some php notice or fatal error on the trunk

29-Dec-2009 Matias
# [#19065] More frontend cleanup based on code analysis

28-Dec-2009 fxstein
# [#19065] More frontend cleanup based on code analysis - fixed various bugs

28-Dec-2009 Matias
# [#19065] More frontend cleanup based on code analysis - fixed various bugs

27-Dec-2009 Xillibit
# [#19031] Quick reply shows > as &gt; in subject

26-Dec-2009 fxstein
# [#19065] More frontend cleanup based on code analysis - fixed various bugs

25-Dec-2009 fxstein
# [#19065] More frontend cleanup based on code analysis - fixed various bugs

24-Dec-2009 Xillibit
# [#19030] URLs using HTTPS protocol are not working in img tag

24-Dec-2009 fxstein
+ [#19065] Add definitions of external functions (e.g. CB) to prevent warnings
# [#19065] Cleanup frontend based on code analysis - fixed various bugs

23-Dec-2009 Xillibit
^ [#18975] Backend: Show Avatar on Categories list option misleading
^ [#18902] Replace all remaining deprecated functions in PHP 5.3.x

23-Dec-2009 fxstein
^ [#19065] global rename of various kunena wide variables
^ [#19065] replaced depriciated split() with explode()
^ [#19065] remove depriciated new& construct
# [#19065] Fix regression: Missing backend menu and toolbar
# [#19065] Remove borken Joomla 1.5 dtd from manifest xml

22-Dec-2009 Xillibit
# [#19080] Configuration option "Show join date" has no effect

22-Dec-2009 fxstein
^ [#19090] Combine default and default_ex
# [#19065] Fix regression in uploaded files and images browser

21-Dec-2009 Xillibit
- [#19075] Remove group from userlist / user profile

21-Dec-2009 fxstein
# [#19086] Fix language file regression from 1.5.8
# [#19065] Cleanup backend html based on code analysis - fixed various bugs
# [#19065] Cleanup installer html based on code analysis - fixed various bugs
- [#19065] Removed backend plugin directory tree to remove warnings in unused code
# [#19065] Cleanup frontend based on code analysis - fixed various bugs
- [#19065] Removed old & unused split and merge code
- [#19065] Removed old & unused code in layout.php

20-Dec-2009 Matias
# [#19079] Fix broken layout with too long strings
^ [#18763] Update version info to 1.6.0-DEV

20-Dec-2009 fxstein
+ [#19064] new bbcodes for table, th, tr & td as well as module
# [#19065] fix various warnings and errors identified by zend studio code analysis
- [#19065] remove unsued kunena.pathway.old.php as part of cleanup

19-Dec-2009 Matias
^ [#15886] Merge from /branches/1.5-xillibit:1254-1256,1303-1307,1312-1313

18-Dec-2009 Xillibit
^ [#19033] User list and count shows also disabled users
^ [#19040] Most viewed profiles should use profile integration
# [#19043] Deprecated links to index2.php

17-Dec-2009 Xillibit
^ [#18767] Conflict with sh404sef language strings
# [#19027] Debug does not show MySQL error in trace
# [#19025] Moderators list is always using username, regardless of configuration option
# [#19026] Administration: wrong translations
# [#19022] Moderation: Merge shows extra slashes in topic list
# [#18973] Wrong My profile link in AUP integration

05-Dec-2009 Xillibit
# [#18902] Fixes for all remaining deprecated warning with PHP 5.3.x and remove split() and ereg() functions

04-Dec-2009 Xillibit
# [#18902] Fixes for deprecated warning with PHP 5.3.x and deprecated usage of split() functions
-->
