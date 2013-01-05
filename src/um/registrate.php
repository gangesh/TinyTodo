<?php
###################################
##   PHPMYLOGON: A LOGIN SYSTEM  ##
##    (c) 2006 Jorik Berkepas    ##
##   Under the GNU GPL license   ##
##     helpdesk90@gmail.com      ##
###################################

// Page for registrate new users

include_once("config.php");
include_once("lang/lang_".$lang.".php");
$pml_title = $site_name;
include("htmltop.php");
include_once("connect.php");

if(!isset($_SESSION['user_id'])) {
 if(isset($_POST['submit'])) {
  // Exec
  // Check fields
  if($_POST['user'] != "" AND $_POST['pass1'] != "" AND $_POST['pass2'] != "" AND $_POST['email'] != "") {
   // Username-check
   $sql = "SELECT id FROM `".$db_tbl."` WHERE name='".$_POST['user']."'";
   $query = mysql_query($sql);
   $count = mysql_num_rows($query);
   if($count == 0) {
    // E-mailcheck
    if(preg_match("/^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,6}$/i", $_POST['email'])) {
     // Email passed check
     if($_POST['pass1'] == $_POST['pass2']) {
      $actcode = mt_srand((double)microtime()*100000);
      while(strlen($actcode) <= 10) {
       $i = chr(mt_rand (0,255));
       if(eregi("^[a-z0-9]$", $i)) {
        $actcode = $actcode.$i;
       }
      }
      $md5pass = md5($_POST['pass1']);
      if($activate == TRUE) {
       $sql = "INSERT INTO `".$db_tbl."` (name,password,state,mail,active,actcode) VALUES ('".$_POST['user']."','".$md5pass."',0,'".$_POST['email']."',0,'".$actcode."')";
      }else{
       $sql = "INSERT INTO `".$db_tbl."` (name,password,state,mail,active,actcode) VALUES ('".$_POST['user']."','".$md5pass."',0,'".$_POST['email']."',1,'')";
      }
      $query = mysql_query($sql);
      if($query == TRUE) {
       $sql = "SELECT id FROM `".$db_tbl."` WHERE name='".$_POST['user']."'";
       $query = mysql_query($sql);
       $rij = mysql_fetch_object($query);
       $dbid = htmlspecialchars($rij->id);
       $bericht  = $reg_mail;
       $bericht .= "CONFIRM: ".$site_url."activate.php?id=".$dbid."&code=".$actcode."&registration=true \n\n";
       $bericht .= "Username/Gebruikersnaam: ".$_POST['user']."\n";
       $bericht .= "Password/Wachtwoord: ".$_POST['pass1']."\n";
       $mail = mail($_POST['email'],"Registratie ".$sitenaam,$bericht,"From: ".$sitenaam." <".$sitemail.">");
       if($activate == TRUE) {
        if($mail == TRUE) {
         echo $reg_truemail;
        }else{
         echo $error;
        }
       }else{
        echo $reg_nomail;
       }
      }else{
       echo $error;
      }
     }else{
      echo $reg_pascheck;
     }
    }else{
     echo $reg_mailcheck;
    }
   }else{
    echo $reg_userexists;
   }
  }else{
   echo $reg_field;
  }
 }else{
  // Form
  ?>
  <form method="post" action="registrate.php">
   <table>
    <tr>
     <td><label for="user"><?= $reg_username ?>:</label></td><td><input id="user" type="text" name="user" maxlength="50" /></td>
    </tr>
    <tr>
     <td><label for="pass1"><?= $reg_password ?>:</label></td><td><input id="pass1" type="password" name="pass1" /></td>
    </tr>
    <tr>
     <td><label for="pass2"><?= $reg_repeat ?>:</label></td><td><input id="pass2" type="password" name="pass2" /></td>
    </tr>
    <tr>
     <td><label for="mail"><?= $reg_mail ?>:</label></td><td><input id="mail" type="text" name="email" maxlength="100" /></td>
    </tr>
    <tr>
     <td></td><td><input type="submit" name="submit" value="<?= $reg_reg ?>" /></td>
    </tr>
   </table>
  </form>
  <?
  if($activate == TRUE) {
   echo "<small>".$reg_mailnote."</small>";
  }
 }
}else{
 echo $reg_loginerror;
}

include("htmlbottom.php");
?>