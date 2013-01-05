<?php
###################################
##   PHPMYLOGON: A LOGIN SYSTEM  ##
##    (c) 2006 Jorik Berkepas    ##
##   Under the GNU GPL license   ##
##     helpdesk90@gmail.com      ##
###################################

// Page for editing password

include_once("config.php");
include_once("lang/lang_".$lang.".php");
$pml_title = $site_name;
include("htmltop.php");
include_once("connect.php");

if(!isset($_SESSION['user_id'])) {
 if(isset($_POST['submit'])) {
  // Exec
  if($_POST['user'] != "" AND $_POST['email'] != "") {
   $sql = "SELECT id,name,mail FROM `".$db_tbl."` WHERE name='".$_POST['user']."'";
   $query = mysql_query($sql);
   $tellen = mysql_num_rows($query);
   if($tellen == 1) {
    // Emailcheck
    $row = mysql_fetch_object($query);
    $dbemail = htmlspecialchars($row->mail);
    $dbid = htmlspecialchars($row->id);
    if($dbemail == $_POST['email']) {
     // Changepass, sendmail
     $actcode = mt_srand((double)microtime()*100000);
     while(strlen($actcode) <= 10) {
      $i = chr(mt_rand (0,255));
      if(eregi("^[a-z0-9]$", $i)) {
       $actcode = $actcode.$i;
      }
     }
     $sql = "UPDATE `".$db_tbl."` SET active=0,actcode='".$actcode."' WHERE id='".$dbid."'";
     $query = mysql_query($sql);
     if($query == TRUE) {
      $bericht = $forgotpass_mail;
      $bericht .= "CHANGE: ".$site_url."activeren.php?id=".$dbid."&code=".$actcode." \n\n";
      $bericht .= "_NO_ CHANGE: ".$site_url."activeren.php?id=".$dbid."&code=".$actcode."&activeer=true \n\n";
      $mail = mail($dbemail,$forgotpass_passforgot." ".$site_name,$bericht,"From: ".$site_name." <".$site_mail.">");
      if($mail == TRUE) {
       echo $forgotpass_success;
      }else{
       echo $error;
      }
     }else{
      echo $error;
     }
    }else{
     echo $forgotpass_emailerror;
    }
   }else{
    echo $forgotpass_usererror;
   }
  }else{
   echo $forgotpass_field;
  }
 }else{
  // Formulier
  ?>
  <form method="post" action="forgotpass.php">
   <table>
    <tr>
     <td><label for="user"><?= $forgotpass_username ?>:</label></td><td><input id="user" type="text" name="user" /></td>
    </tr>
    <tr>
     <td><label for="email"><?= $forgotpass_email ?>:</label></td><td><input id="email" type="text" name="email" /></td>
    </tr>
    <tr>
     <td></td><td><input type="submit" name="submit" value="<?= $forgotpass_passforgot ?>" /></td>
    </tr>
   </table>
  </form>
  <?
 }
}else{
 echo $forgotpass_login;
}

include("htmlbottom.php");
?>