<?php
// This config-file is created by the setup-script from PhpMyLogon
// (c) 2006 Jorik Berkepas; under the GNU GPL license

session_start();
ob_start();

// MySQL settings
$db_user    = "root"; // MySQL username
$db_pass    = ""; // MySQL password
$db_host    = "localhost"; // MySQL host, mostly localhost
$db_db      = "tinytodo"; // MySQL database
$db_tbl     = "um"; // MySQL table

// Settings
$site_url   = "http://localhost/ttd/um/"; // URL to PhpMyLogon, / at end
$site_mail  = "gangeshmatta@gmail.com"; // Mail address website
$site_name  = "TinyToDo"; // Website name
$activate   = "FALSE"; // E-mail validation at registration, TRUE or FALSE
$afterlogin = "http://localhost/ttd/"; // Page to go to after login
$lang       = "en"; // Language of PhpMyLogon
?>
