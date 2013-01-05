<?php
###################################
##   PHPMYLOGON: A LOGIN SYSTEM  ##
##    (c) 2006 Jorik Berkepas    ##
##   Under the GNU GPL license   ##
##     helpdesk90@gmail.com      ##
###################################

// Logout-page
include_once("config.php");
include_once("lang/lang_".$lang.".php");
$pml_title = $site_name;
include("htmltop.php");
include_once("connect.php");

session_unset();
session_destroy(); 
if(isset($_COOKIE['user_id'])) {
 setcookie("cookie_id", "", time() - 3600);
 setcookie("cookie_pass", "", time() - 3600);
}
echo $logout_success;

include("htmlbottom.php");
?>