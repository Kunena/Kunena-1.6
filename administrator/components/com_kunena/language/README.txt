Introduction
============

This file contains all the languages which are available for Kunena Forum @kunenaversion@ for Joomla! 1.5 and 1.7.

Installing language packs is only needed if it is NOT included in the Kunena package or if you install a new language after installing/upgrading Kunena.

You can find included languages for the latest version from here:
http://www.kunena.org/download (find LANGUAGES INCLUDED)

NOTE! We recommend that you install these language packs after you install Kunena.

Installing language packs
=========================

For each language, there are two files that you need to install. For example, the files for the English language packs are:

    com_kunena_v@kunenaversion@_en_GB.admin_@kunenaversiondate@.zip
    com_kunena_v@kunenaversion@_en_GB.site_@kunenaversiondate@.zip 

Using the standard Joomla installation procedure:

    Install the "admin" (backend) file
    Install the "site" (frontend) file

The first file contains the language strings for the administrator (backend) and the second file contains the language strings for the frontend.

Incomplete languages
====================

WARNING: Please do not use these files in production sites. They are missing translations, which means that instead of text your users will see nothing!

If you cannot find your language files from the root folder, please take a look into incomplete/ directory.

These files are put here to motivate people to finish the work (please see More Information how to do that).

The filenames of incomplete translations are similar to the filenames of complete translations but with the difference that there is a number in brackets, for example:

    com_kunena_v1.7.1_vi_VN.site_(89)_2011-11-17.zip

This filename "translates" to mean, K 1.7.1, Vietnamese, frontent language, 89% complete as of 17-Nov-2011.
Therefore the number in brackets is an estimate of how much of the language has been translated from the original English.

More Information
================

For more information, please read:
http://docs.kunena.org/index.php/K_1.7_Language_Support
