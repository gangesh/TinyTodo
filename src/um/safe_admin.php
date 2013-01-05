<?php
###################################
##   PHPMYLOGON: A LOGIN SYSTEM  ##
##    (c) 2006 Jorik Berkepas    ##
##   Under the GNU GPL license   ##
##     helpdesk90@gmail.com      ##
###################################

// Inlucde this file (safe_admin.php) to let a page only access by admins

include_once("config.php");
include_once("lang/lang_".$lang.".php");
include_once("connect.php");

if(isset($_SESSION['user_id'])) {
 // Login ok, set lastactive
 $sql = "UPDATE `".$db_tbl."` SET lastactive=NOW() WHERE id='".$_SESSION['user_id']."'";
 mysql_query($sql);
 if($_SESSION['user_status'] == 1) {
  // State ok, ready
 }else{
  echo $safeadmin_rights;
  exit();
 }
}else{
 if(isset($_COOKIE['cookie_id'])) {
  $sql = "SELECT cookie_pass,state FROM `".$db_tbl."` WHERE id='".$_COOKIE['cookie_id']."'";
  $query = mysql_query($sql);
  $row = mysql_fetch_object($query);
  $dbpass = htmlspecialchars($row->cookie_pass);
  $dbstatus = htmlspecialchars($row->state);
  if($dbpass == $_COOKIE['cookie_pass']) {
   $_SESSION['user_id'] = $_COOKIE['cookie_id'];
   $_SESSION['user_status'] = $dbstatus;
  }else{
   setcookie("cookie_id", "", time() - 3600);
   setcookie("cookie_pass", "", time() - 3600);
   header("Location: login.php");
  }
 }else{
  header("Location: login.php");
 }
}
?>