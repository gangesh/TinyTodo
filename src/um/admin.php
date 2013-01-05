<?php
###################################
##   PHPMYLOGON: A LOGIN SYSTEM  ##
##    (c) 2006 Jorik Berkepas    ##
##   Under the GNU GPL license   ##
##     helpdesk90@gmail.com      ##
###################################

// Page only for admin viewable, page for editting users

include_once("config.php");
include_once("lang/lang_".$lang.".php");
$pml_title = $site_name;
include("htmltop.php");
include_once("connect.php");
// Only for admins
require("safe_admin.php");

if(isset($_GET['edit'])) {
 // Edit
 if(is_numeric($_GET['edit'])) {
  if(isset($_POST['submit'])) {
   // Editexec
   if($_POST['pass1'] != "") {
    if($_POST['pass1'] == $_POST['pass2']) {
     $newpass = md5($_POST['pass1']);
     $sql = "UPDATE `".$db_tbl."` SET name='".$_POST['naam']."',password='".$newpass."',mail='".$_POST['email']."',active='".$_POST['actief']."',state='".$_POST['status']."' WHERE id='".$_GET['edit']."'";
     $query = mysql_query($sql);
     if($query == TRUE) {
      echo $admin_editok;
     }else{
      echo $error;
     }
    }else{
     echo $admin_pascheck;
    }
   }else{
    // Change without pass
    $sql = "UPDATE `".$db_tbl."` SET name='".$_POST['naam']."',mail='".$_POST['email']."',active='".$_POST['actief']."',state='".$_POST['status']."' WHERE id='".$_GET['edit']."'";
    $query = mysql_query($sql);
    if($query == TRUE) {
     echo $admin_editok;
    }else{
     echo $error;
    }
   } 
  }else{
   // Editform
   $sql = "SELECT * FROM `".$db_tbl."` WHERE id='".$_GET['edit']."'";
   $query = mysql_query($sql);
   $row = mysql_fetch_object($query);
   $naam = htmlspecialchars($row->name);
   $status = htmlspecialchars($row->state);
   $email = htmlspecialchars($row->mail);
   $actief = htmlspecialchars($row->active);
   ?>
   <form method="post" action="admin.php?edit=<?= $_GET['edit'] ?>">
    <table>
     <tr>
      <td><label for="naam"><?= $admin_name ?>:</label></td><td><input type="text" id="naam" name="naam" value="<?= $naam ?>" maxlength="50" /></td>
     </tr>
     <tr>
      <td><label for="pass1"><?= $admin_newpass ?>:</label></td><td><input id="pass1" type="password" name="pass1" /> <small><?= $admin_newpass_note ?></small></td>
     </tr>
     <tr>
      <td><label for="pass2"><?= $admin_repeat ?>:</label></td><td><input id="pass2" type="password" name="pass2" /></td>
     </tr>
     <tr>
      <td><label for="email"><?= $admin_mail ?>:</label></td><td><input id="email" type="text" name="email" value="<?= $email ?>" maxlength="100" /></td>
     </tr>
     <tr>
      <td><label for="actief"><?= $admin_active ?>:</label></td><td><input id="actief" type="text" name="actief" value="<?= $actief ?>" maxlength="1" size="1" /> <small>(<?= $admin_active_note ?>)</small></td>
     </tr>
     <tr>
      <td><label for="status"><?= $admin_state ?>:</label></td><td><input id="status" type="text" name="status" value="<?= $status ?>" maxlength="1" size="1" /> <small>(1 = admin, 0 = user)</small></td>
     </tr>
     <tr>
      <td></td><td><input type="submit" name="submit" value="<?= $admin_save ?>" /></td>
     </tr>
    </table>
   </form>
   <?
  }
 }else{
  // List
  if(isset($_GET['search'])) {
   $search = $_GET['search'];
  }else{ 
   $search = "";
  }
  ?>
  <?= $admin_usesearch ?><br />
  <form name="search" method="get" action="admin.php">
  <input type="hidden" name="edit" value="true" />
  <input type="text" name="search" value="<?= $search ?>" />
  <input type="submit" value="<?= $admin_search ?>" />
  </form><p /> 
  <?= $admin_whichedit ?>
  <form name="select" method="get" action="admin.php">
   <table>
    <tr>
     <td><select name="edit" size="1">
      <?
      if(isset($_GET['search'])) {
       $search = "%".$_GET['search']."%";
      }else{
       $search = "jfsLSdkjdsLD";
      }
      $sql = "SELECT name,id FROM `".$db_tbl."` WHERE name LIKE '".$search."' ORDER BY name ASC";
      $query = mysql_query($sql);
      $count = mysql_num_rows($query);
      if($count > 0) {
       while($row = mysql_fetch_object($query)) {
        $id = htmlspecialchars($row->id);
        $naam = htmlspecialchars($row->name);
        echo "<option value=\"".$id."\">".$naam."</option>\n";
       }
      }else{
       echo "<option value=\"do\">* ".$admin_noresult." *</option>\n";
      }
      ?></select>
     </td>
     <td><input type="submit" value="<?= $admin_edit ?>" /></td>
    </tr>
   </table>
  </form>
  <?
 }
}elseif(isset($_GET['del'])) {
 // Delete
 if(is_numeric($_GET['del'])) {
  // Deleteexec
  $sql = "DELETE FROM `".$db_tbl."` WHERE id='".$_GET['del']."'";
  $query = mysql_query($sql);
  if($query == TRUE) {
   echo $admin_delok;
  }else{
   echo $error;
  }
 }else{
  // List
  if(isset($_GET['search'])) {
   $search = $_GET['search'];
  }else{ 
   $search = "";
  }
  ?>
  <?= $admin_usesearch ?><br />
  <form name="search" method="get" action="admin.php">
  <input type="hidden" name="del" value="true" />
  <input type="text" name="search" value="<?= $search ?>" />
  <input type="submit" value="<?= $admin_search ?>" />
  </form><p /> 
  <?= $admin_whichdel ?>
  <form name="select" method="get" action="admin.php">
   <table>
    <tr>
     <td><select name="del" size="1">
      <?
      if(isset($_GET['search'])) {
       $search = "%".$_GET['search']."%";
      }else{
       $search = "jfsLSdkjdsLD";
      }
      $sql = "SELECT name,id FROM `".$db_tbl."` WHERE name LIKE '".$search."' ORDER BY name ASC";
      $query = mysql_query($sql);
      $count = mysql_num_rows($query);
      if($count > 0) {
       while($row = mysql_fetch_object($query)) {
        $id = htmlspecialchars($row->id);
        $naam = htmlspecialchars($row->name);
        echo "<option value=\"".$id."\">".$naam."</option>\n";
       }
      }else{
       echo "<option value=\"do\">* ".$admin_noresult." *</option>\n";
      }
      ?></select>
     </td>
     <td><input type="submit" value="<?= $admin_del ?>" /></td>
    </tr>
   </table>
  </form>
  <?
 }
}else{
 // Choselist
 ?>
 <?= $admin_whatdo ?><br />
 <ul>
  <li><a href="admin.php?edit=do"><?= $admin_edituser ?></a></li>
  <li><a href="admin.php?del=do"><?= $admin_deluser ?></a></li>
 </ul>
 <?
}
  

include("htmlbottom.php");
?>