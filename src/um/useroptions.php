<?php
###################################
##   PHPMYLOGON: A LOGIN SYSTEM  ##
##    (c) 2006 Jorik Berkepas    ##
##   Under the GNU GPL license   ##
##     helpdesk90@gmail.com      ##
###################################

// Page for changing options by user (own options from user)

include_once("config.php");
include_once("lang/lang_".$lang.".php");
$pml_title = $site_name;
include("htmltop.php");
include_once("connect.php");

// Login required
require("safe.php");

if(isset($_POST['submit'])) {
 if(preg_match("/^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,6}$/i", $_POST['email'])) {
  if($_POST['pass1'] != "") {
   // Changepassword
   $sql = "SELECT password FROM `".$db_tbl."` WHERE id='".$_SESSION['user_id']."'";
   $query = mysql_query($sql);
   $row = mysql_fetch_object($query);
   $dbpass = htmlspecialchars($row->password);
   if($dbpass == md5($_POST['pasnow'])) {
    if($_POST['pass1'] == $_POST['pass2']) {
     $newpass = md5($_POST['pass1']);
     $sql = "UPDATE `".$db_tbl."` SET mail='".$_POST['email']."',password='".$newpass."' WHERE id='".$_SESSION['user_id']."'";
     $query = mysql_query($sql);
     if($query == TRUE) {
      echo $useropt_change;
      if(isset($_COOKIE['user_password'])) {
       setcookie("user_password", $newpass, time() + 365 * 86400);
      }
     }else{
      echo $error;
     }
    }else{
     echo $useropt_passerr;
    }
   }else{
    echo $useropt_nowpasserr;
   }
  }else{
   // Just change mail
   $sql = "UPDATE `".$db_tbl."` SET mail='".$_POST['email']."' WHERE id='".$_SESSION['user_id']."'";
   $query = mysql_query($sql);
   if($query == TRUE) {
    echo $useropt_mailchange;
   }else{
    echo $error;
   }
  }
 }else{
  echo $useropt_mailfalse;
 }
}elseif(isset($_GET['resetcookies'])){
 // Reset cookie code
 $sql = "UPDATE `".$db_tbl."` SET cookie_pass = '' WHERE id = '".$_SESSION['user_id']."'";
 $query = mysql_query($sql);
 if($query == TRUE) {
  echo $useropt_resetok;
 }else{
  echo $error;
 }
}else{
 // Form
 $sql = "SELECT name,mail FROM `".$db_tbl."` WHERE id='".$_SESSION['user_id']."'";
 $query = mysql_query($sql);
 $row = mysql_fetch_object($query);
 $naam = htmlspecialchars($row->name);
 $email = htmlspecialchars($row->mail);
 ?>
 <form method="post" action="useroptions.php">
  <table>
   <tr>
    <td><?= $useropt_username ?>:</td><td><b><?= $naam ?></b></td>
   </tr>
   <tr>
    <td><?= $useropt_mail ?>:</td><td><input type="text" name="email" value="<?= $email ?>" /></td>
   </tr>
   <tr>
    <td><?= $useropt_nowpass ?>:</td><td><input type="password" name="pasnow" /> <small>(<?= $useropt_nowpassnote ?>)</small></td>
   </tr>
   <tr>
    <td><?= $useropt_newpass ?>:</td><td><input type="password" name="pass1" /> <small>(<?= $useropt_newpassnote ?>)</small></td>
   </tr>
   <tr>
    <td><?= $useropt_repeat ?>:</td><td><input type="password" name="pass2" /></td>
   </tr>
   <tr>
    <td></td><td><input type="submit" name="submit" value="<?= $useropt_save ?>" /></td>
   </tr>
  </table>
 </form>
 
 <?= $useropt_resetcookies ?><br />
 <a href="useroptions.php?resetcookies=true"><?= $useropt_reset ?></a>
 <?
}

include("htmlbottom.php");
?>