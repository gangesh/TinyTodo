		###################################
		##   PHPMYLOGON: A LOGIN SYSTEM  ##
		##    (c) 2006 Jorik Berkepas    ##
		##   Under the GNU GPL license   ##
		##     helpdesk90@gmail.com      ##
		###################################
PhpMyLogon version 1.1 release readme file

Thanks for using PhpMyLogon!
INDEX
 - Changes in PhpMyLogon 1.1
 - Reqruiments
 - Includes
 - Installation
 - Bugs/questions/support
 - Secure pages

CHANGES IN PHPMYLOGON 1.1
 - Fixed a few bugs
   > For more information see phpmylogon.sf.net then Bugs in v1-beta1
 - Admin no longer a select list; but a search function
 - Label field added by most forms
 - gpl.txt viewable in Windows Notepad
 - View changes to setup.php:
   > When error writing config.php; the config.php data will be showed
   > MySQL errortest added
 - Connect
   > View error if selecting database fails
 - Changed cookies
   > Cookie names changed
   > The user password in a cookie is replaced by a code which is stored in the database
     this is for security reasons. If a hacker would steel your cookie, and brute-force your
     password-cookie, he could get your password. Now it isn't anymore your password :).


REQRUIMENTS for the use of PhpMyLogon
 - Webserver with PHP
 - a MySQL-database for saving the users
 - mail() function
   > needed for forgot password (can't be turned of, you'll need to remove the future *)
   > needed for registration (can be turned of at installation or in config.php)
 - a little PHP-knowledge
   > For the installation, and securing pages and maybe a little more

* If your remove this future; then don't forget to remove also the link to forgot password
  in the login.php-file!


PHPMYLOGON INCLUDES
 - Forgot passwords/Password recovery
 - Account activation
 - Registration
 - Admin
 - a Setupfile for installing the system
 - Login page
 - Logout page
 - Memberlist
 - Members online
 - User options
 - A file for securing pages
 - A file for securing pages so they can only viewed by admins

To get more information about the pages, please read pages.txt.


INSTALLATION
1) To install PhpMyLogon, first upload all files to your webserver (.txt files excluded).
    note: place files with the lang_ prefix in the /lang/ directory!
2) When you have uploaded all files, go to setup.php on your webserver (in your browser).
   fill in the fields and click start installation.
3) The MySQL-user/password/host will be check by trying to login at MySQL-db; when this fails,
   you'll need to change it to something what will work.
4) A configuration file will be created, and the MySL table will be created too.
    note: If you get the error the config.php can't be created, than please copy the
          config.php data in the text field, and create manually config.php, paste the data
          and upload the file.
5) The MySQL-table will be created, if you get an error, please create the table manually in for
   example PhpMyAdmin (phpmyadmin.net).

SQL-data: (please change **TABLENAMEHERE** to a table name your prefer)

CREATE TABLE `**TABLENAMEHERE**` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `password` varchar(50) NOT NULL default '',
  `cookie_pass` varchar(50) NOT NULL default '',
  `state` char(1) NOT NULL default '0',
  `mail` varchar(100) NOT NULL default '',
  `active` char(1) NOT NULL default '0',
  `actcode` varchar(15) NOT NULL default '',
  `lastactive` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;	

Also create an admin user, create a new item into the table, and
set state to 1.

When you want to change anything later, open the created config.php file in your text-editor and
change it there.

There are two official languages included, the English and Dutch language. Both are placed in the
/lang/ dir, with the prefix lang_. If you want to create your own language, please translate
the English-file to your prefered language.
When your translation is complete, please mail it to me so others can use it to. For more information
see the bottom of this page. 


SECURE PAGES
To secure a page, you simply include the safe.php file on the page (please use require).
You'll need to rename the page to a PHP-page (.php) instead of HTML-page (.htm(l)).
When you have done this, you include on the top of your page (before anything else)
<?
require("safe.php");
?>
For an admin-page, use safe_admin.php in stead of safe.php.
Why don't use include? Check out phpmylogon.sf.net and look at securing pages

When you now go to the page, you'll have to login to view it.


BUGS/QUESTIONS/SUPPORT
If you find a (small) bug, please let me know by sending an e-mail to
	HELPDESK90@GMAIL.COM
in English, Dutch or German.

If you still have questions about PhpMyLogon, feel free to contact me in English, Dutch or German
at helpdesk90@gmail.com.

If you have a translation, please mail it to helpdesk90@gmail.com so others can use it too.
Please include in the mail the language-file, your name, the language name in own language
and the language name in English.
Please send this mail in English, Dutch or German.

For more information please visit phpmylogon.sf.net

PhpMyLogon: A login system
http://phpmylogon.sf.net
helpdesk90@gmail.com
Licensed under the GNU General Public License; see gpl.txt