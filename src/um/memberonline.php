<?php
###################################
##   PHPMYLOGON: A LOGIN SYSTEM  ##
##    (c) 2006 Jorik Berkepas    ##
##   Under the GNU GPL license   ##
##     helpdesk90@gmail.com      ##
###################################

// Page for viewing members online in past 5 minutes
// Please include memberonline.php page for use on the place you like
include_once("config.php");
include_once("connect.php");

$sql = "SELECT name,state FROM `".$db_tbl."` WHERE DATE_SUB(NOW(),INTERVAL 5 MINUTE) <= lastactive ORDER BY name ASC";
$query = mysql_query($sql);
$count = mysql_num_rows($query);
$i = 1;
while($row = mysql_fetch_object($query)) {
 $name = htmlspecialchars($row->name);
 $state = htmlspecialchars($row->state);
 if($state == 1) {
  $naam = "<b>".$name."</b>";
 }
 echo $name;
 if($i != $count) {
  echo ", ";
 }
 $i++;
}        
?>