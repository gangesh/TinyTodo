<?php
###################################
##   PHPMYLOGON: A LOGIN SYSTEM  ##
##    (c) 2006 Jorik Berkepas    ##
##   Under the GNU GPL license   ##
##     helpdesk90@gmail.com      ##
###################################

// Page for log-in

include_once("config.php");
include_once("lang/lang_".$lang.".php");
$pml_title = $site_name;
include("htmltop.php");
include_once("connect.php");

if(isset($_SESSION['user_id'])) {
 header("Location: ".$afterlogin);
}else{
 if(isset($_COOKIE['user_id'])) {
  // Read cookie, make session
  $sql = "SELECT id,state,password,active FROM `".$db_tbl."` WHERE id='".$_COOKIE['user_id']."'";
  $query = mysql_query($sql);
  $row = mysql_fetch_object($query);
  $id = htmlspecialchars($row->id);
  $status = htmlspecialchars($row->state);
  $dbpass = htmlspecialchars($row->password);
  $actief = htmlspecialchars($row->active);
  if($dbpass == $_COOKIE['user_password'] AND $actief == 1) {
   $_SESSION['user_id'] = $id;
   $_SESSION['user_status'] = $status;
   ?>
   <script language="Javascript" type="text/javascript">
    location.href='<?= $afterlogin ?>';
   </script>
   <?
  }else{
   echo $login_cookiefalse;
   setcookie("user_id", "", time() - 3600);
   setcookie("user_password", "", time() - 3600);
  }
 }else{
  if(isset($_POST['submit'])) {
   // Login
   $sql = "SELECT id,name,password,state,active,cookie_pass FROM `".$db_tbl."` WHERE name='".$_POST['user']."'";
   $query = mysql_query($sql);
   $count = mysql_num_rows($query);
   if($count == 1) {
    $row = mysql_fetch_object($query);
    $dbpass = htmlspecialchars($row->password);
    $userpass = md5($_POST['pass']);
    $cookiepass = htmlspecialchars($row->cookie_pass);
    $userid = htmlspecialchars($row->id);
    $userstatus = htmlspecialchars($row->state);
    $useractief = htmlspecialchars($row->active);
    if($dbpass == $userpass) {
     if($useractief == 1) {
      $_SESSION['user_id'] = $userid;
      $_SESSION['user_status'] = $userstatus;
      if($_POST['cookie'] == "do") {
       if($cookiepass == "") {
        $cookiecode = mt_srand((double)microtime()*100000);
        while(strlen($cookiecode) <= 10) {
         $i = chr(mt_rand (0,255));
         if(eregi("^[a-z0-9]$", $i)) {
         $cookiecode = $cookiecode.$i;
         }
        }
        $sql = "UPDATE `".$db_tbl."` SET cookie_pass = '".$cookiecode."' WHERE name = '".$_POST['user']."' LIMIT 1";
        mysql_query($sql);
        $cookiepass = $cookiecode;
       }
       setcookie("cookie_id", $userid, time() + 365 * 86400);
       setcookie("cookie_pass", $cookiepass, time() + 365 * 86400);
      }
      echo $loginsucces;
      ?>     
      <script language="Javascript" type="text/javascript">
       location.href='<?= $afterlogin ?>';
      </script>
      <?
     }else{
      echo $login_noactive;
     }  
    }else{
     echo $login_nopass;
    }
   }else{
    echo $login_usererr;
   }
  }else{
   // Loginform
   ?>
   <form method="post" action="login.php">
    <table>
     <tr>
      <td><label for="user"><?= $login_username ?>:</label></td><td><input id="user" type="text" name="user" /></td>
     </tr>
     <tr>
      <td><label for="pass"><?= $login_password ?>:</label></td><td><input id="pass" type="password" name="pass" /></td>
     </tr>
     <tr>
      <td align="right"><input id="cookie" type="checkbox" name="cookie" value="do" style="border: 0px;" /></td><td><label for="cookie"><small><?= $login_cookied ?></small></label></td>
     </tr>
     <tr>
      <td></td><td><input type="submit" name="submit" value="<?= $login_login ?>" /></td>
     </tr>
    </table>
    <small><a href="forgotpass.php" title="<?= $login_forgotpass ?>"><?= $login_forgotpass ?></a></small>
   </form>
   <?
  }
 }
}
include("htmlbottom.php");
?>