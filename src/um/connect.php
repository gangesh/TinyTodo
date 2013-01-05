<?php
###################################
##   PHPMYLOGON: A LOGIN SYSTEM  ##
##    (c) 2006 Jorik Berkepas    ##
##   Under the GNU GPL license   ##
##     helpdesk90@gmail.com      ##
###################################

// Database connection

$connect = mysql_connect($db_host,$db_user,$db_pass);
if($connect == TRUE) {
 if(mysql_select_db($db_db) != TRUE) {
  exit("<span style='color: red'>Can't connect to the MySQL database. Please contact the webmaster.</body></html>");
 }
}else{
 exit("<span style='color: red'>Can't connect to the MySQL server. Please contact the webmaster.</body></html>");
}
?>