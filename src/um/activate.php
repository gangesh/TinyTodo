<?php
###################################
##   PHPMYLOGON: A LOGIN SYSTEM  ##
##    (c) 2006 Jorik Berkepas    ##
##   Under the GNU GPL license   ##
##     helpdesk90@gmail.com      ##
###################################

// Page for account activation after password reset or registration

include_once("config.php");
include_once("lang/lang_".$lang.".php");
$pml_title = $site_name;
include("htmltop.php");
include_once("connect.php");

if(isset($_GET['id'])) {
 if(isset($_GET['code'])) {
  $sql = "SELECT id,actcode,active FROM `".$db_tbl."` WHERE id='".$_GET['id']."'";
  $query = mysql_query($sql);
  $row = mysql_fetch_object($query);
  $dbid = htmlspecialchars($row->id);
  $dbcode = htmlspecialchars($row->actcode);
  $active = htmlspecialchars($row->active);
  if($active == 0) {
   if($dbcode == $_GET['code']) {
    if(isset($_GET['activate'])) {
     // Activate after password reset; remain old password (false password reset)
     $sql = "UPDATE `".$db_tbl."` SET active=1,actcode='' WHERE id='".$_GET['id']."'";
     $query = mysql_query($sql);
     if($query == TRUE) {
      echo $activate_pass;
     }else{
      echo $error;
     }
    }elseif(isset($_GET['registration'])) {
     // Activate after registration
     $sql = "UPDATE `".$db_tbl."` SET active=1,actcode='' WHERE id='".$_GET['id']."'";
     $query = mysql_query($sql);
     if($query == TRUE) {
      echo $activate_reg;
     }else{
      echo $error;
     }
    }else{
     if(isset($_POST['submit'])) {
      // Execute
      if($_POST['pass1'] == $_POST['pass2']) {
       $md5pass = md5($_POST['pass1']);
       $sql = "UPDATE `".$db_tbl."` SET password='".$md5pass."',active=1,actcode='' WHERE id='".$_GET['id']."'";
       $query = mysql_query($sql);
       if($query == TRUE) {
        echo $activate_pass2;
       }else{
        echo $error;
       }
      }else{
       echo $activate_pascheck;
      }
     }else{
      // Form password change
      ?>
      <form method="post" action="activate.php?id=<?= $_GET['id'] ?>&code=<?= $_GET['code'] ?>">
       <table>
        <tr>
         <td><label for="pass1"><?= $activate_newpass ?>:</label></td><td><input id="pass1" type="password" name="pass1" /></td>
        </tr>
        <tr>
         <td><label for="pass2"><?= $activate_repeat ?>:</label></td><td><input id="pass2" type="password" name="pass2" /></td>
        </tr>
        <tr>
         <td></td><td><input type="submit" name="submit" value="<?= $activate_chngpass ?>" /></td>
        </tr>
       </table>
      </form>
      <?
     }
    }
   }else{
    echo $activate_falsecode;
   }
  }else{
   echo $activate_nodeactivate;
  }
 }else{
  header("Location: activate.php?uid=".$_GET['id']."");
 }
}else{
 // Formulier
 ?>
 <form method="get" action="activate.php" >
  <table>
   <tr>
    <td><label for="id"><?= $activate_userid ?>:</label></td><td><input type="text" id="id" name="id" maxlength="5" <? if(isset($_GET['uid'])) { echo "value=\"".$_GET['uid']."\""; } ?>/></td>
   </tr>
   <tr>
    <td><label for="code"><?= $activate_actcode ?>:</label></td><td><input id="code" type="text" name="code" maxlength="15" /></td>
   </tr>
   <tr>
    <td align="right"><input id="activate" type="checkbox" name="activate" value="yes" style="border: 0px" /></td><td><label for="activate"><?= $activate_keepcurrentpas ?></label></td>
   </tr>
   <tr>
    <td></td><td><input type="submit" value="<?= $activate_act ?>" /></td>
   </tr>
  </table>
 </form>
 <?
}


include("htmlbottom.php");
?>