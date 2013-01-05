<?php
###################################
##   PHPMYLOGON: A LOGIN SYSTEM  ##
##    (c) 2006 Jorik Berkepas    ##
##   Under the GNU GPL license   ##
##     helpdesk90@gmail.com      ##
###################################

// Page for viewing all members

include_once("config.php");
include_once("lang/lang_".$lang.".php");
$pml_title = $site_name;
include("htmltop.php");
include_once("connect.php");

?>
<table>
 <tr>
  <d><b><?= $memberlist_username ?></b></td>
 </tr>
 <?
 $sql = "SELECT name,active FROM `".$db_tbl."` ORDER BY name ASC";
 $query = mysql_query($sql);
 while($row = mysql_fetch_object($query)) {
  $name = htmlspecialchars($row->name);
  $active = htmlspecialchars($row->active);
  if($active == 0) {
   echo "<tr>\n";
   echo "<td><font color=\"gray\">".$name."</font></td>\n";
   echo "</tr>\n";
  }else{
   echo "<tr>\n";
   echo "<td>".$name."</td>\n";
   echo "</tr>\n";
  }
 }
 ?>
</table>
<p />
<small><?= $memberlist_deactusernote ?></small>
<?

include("htmlbottom.php");
?>