<?
###################################
##   PHPMYLOGIN: A LOGON SYSTEM  ##
##    (c) 2006 Jorik Berkepas    ##
##   Under the GNU GPL license   ##
##     helpdesk90@gmail.com      ##
###################################

// Language file
// LANG: English / English
// official language-file
// note: if you want to add your own language, please copy the English language-file (lang_en.php)
//       and translate this into your own language.

$error = "There was an error. Please contact the webmaster.";

// activate.php
$activate_reg = "Your account is activated, you are now able to login.<br />\n<a href=\"login.php\">&laquo; To the loginpage</a>";
$activate_pass = "Your account is activated, you can login with your old password now.<br />\n<a href=\"login.php\">&laquo; To the loginpage</a>";
$activate_pass2 = "Your account is activated, en je wachtwoord is gewijzigd.<br />\n<a href=\"login.php\">&laquo; To the loginpage</a>";
$activate_pascheck = "The two entered passwords are not the same.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$activate_newpass = "New password";
$activate_repeat = "Repeat";
$activate_chngpass = "Change password";
$activate_falsecode = "The activation-code is incorrect. If you lost your key, please go to 'forgot password' and try again.<br />\n<a href=\"forgotpass.php\">&laquo; To forgot password</a>";
$activate_nodeactivate = "Your account isn't deactivated. You simply can login. If you lost your password, please click 'forgot password' on the loginpage.<br />\n<a href=\"login.php\">&laquo; To the loginpage</a>";
$activate_userid = "UserID";
$activate_actcode = "Activationcode";
$activate_keepcurrentpas = "Remain current password <small>(just activate)</small>";
$activate_act = "Activate";

$safeadmin_rights = "You don't have the righst to view this page.";

$admin_editok = "The user is changed.<br />\n<a href=\"admin.php\">&laquo; Back to admin</a>";
$admin_pascheck = "The new passwords are not the same.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$admin_name = "Name";
$admin_newpass = "New password";
$admin_newpass_note = "empty for current";
$admin_repeat = "Repeat";
$admin_mail = "E-mailaddress";
$admin_active = "Active";
$admin_active_note = "1 = active, 0 = inactive";
$admin_state = "State";
$admin_save = "Save";
$admin_whichedit = "Which user do you want to change?";
$admin_edit = "Edit";
$admin_delok = "The user is deleted.<br />\n<a href=\"admin.php\">&laquo; Back to admin</a>";
$admin_whichdel = "Which user do you want to delete?";
$admin_del = "Delete";
$admin_whatdo = "Wat do you want to do?";
$admin_edituser = "Edit a user";
$admin_deluser = "Delete a user";
$admin_noresult = "No users found";
$admin_usesearch = "Search for a user by filling in the field and press search. Every user with the searchword in his username will be displayed in the select.";
$admin_search = "Search";

$forgotpass_mail  = "Hello,\nOn the website ".$site_name." you entered you forgot your password.\nTo change your password, go to the link on the bottom of this mail, and change your password.\n";
$forgotpass_mail .= "If you don't want to change your mail, click the second link to reactivate your account, so you can login with your old password.\n\n";
$forgotpass_passforgot = "Forgot password";
$forgotpass_success = "Your account is deactivated. An e-mail is send to your e-mailaddress. In this mail is a link for changing your password.<br /><a href=\"login.php\">&laquo; To the loginpage</a>";
$forgotpass_emailerror = "The given e-mailaddress is not the same as the e-mailaddress stored in the database for this user.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$forgotpass_usererror = "The entered username doesn't exists.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$forgotpass_field = "You forgot a field. All fields are required.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$forgotpass_username = "Username";
$forgotpass_email = "E-mailaddress";
$forgotpass_login = "You are logged in at the moment, so you can't use the 'Forgot password'-function.<br />\n<a href=\"javascript:history.back();\">&laquo; Go back</a>";

$logout_success = "You are logged out.<br />\n<a href=\"login.php\">&laquo; Relogin</a>";

$login_success = "You are logged in.<br />\nPlease wait, when nothing happens <a href=\"".$afterlogin."\">click here</a>.";
$login_cookiefalse = "There is found an incorrect cookie.<br />\nThe cookies are removed.";
$login_noactive = "Your account isn't activated. Activate this, by clicking the link in the forgotpassword-mail.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$login_nopass = "The entered password is incorrect for the given username.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$login_usererr = "The entered username doesn't exists.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$login_username = "Username";
$login_password = "Password";
$login_cookied = "Remember me (cookie)";
$login_login = "Login";
$login_forgotpass = "Forgot password";

$memberlist_username = "Username";
$memberlist_deactusernote = "Deactivated users are displayed <font color=\"gray\">gray</font> in the list.";

$reg_mail = "Hello,\nYou registrated on the site ".$site_name.", this is the activation mail for activating your account.\nTo activate your account, please click on the link on the bottom of this mail.\n\n";
$reg_truemail = "You are registered! Please visit the link in the activation-mail, after that you'll be able to login.<br />\n<a href=\"login.php\">&laquo; To the loginpage</a>";
$reg_nomail = "You are registered! You can login now.<br />\n<a href=\"login.php\">&laquo; To the loginpage</a>";
$reg_pascheck = "The two given passwords are not the same. Please try again.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$reg_mailcheck = "The given e-mailaddress seems to be a false e-mailaddress. An e-mailaddress should be something like name@domain.com.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$reg_userexists = "The given username is already token. Please try another username.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$reg_field = "You forgot one or more fields. Please go back.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$reg_username = "Username";
$reg_password = "Password";
$reg_repeat = "Repeat";
$reg_mail = "E-mailaddress";
$reg_reg = "Registrate";
$reg_mailnote = "After registration there an e-mail will send to your e-mailaddress as activation. Till this time you can't login.";
$reg_loginerror = "You are logged in now, you can't registrate if you are logged in.";

$useropt_passerr = "The two given passwords are not the same. Please try again.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$useropt_nowpasserr = "The given current password is incorrect.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$useropt_mailchange = "Your e-mailaddress is changed.<br />\n<a href=\"useroptions.php\">&laquo; Go back</a>";
$useropt_change = "You're e-mailaddress and password are changed.<br />\n<a href=\"useroptions.php\">&laquo; Go back</a>";
$useropt_mailfalse = "The entered e-mailaddress is incorrect. It should be something like name@domain.com.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";
$useropt_username = "Username";
$useropt_mail = "E-mailaddress";
$useropt_nowpass = "Current password";
$useropt_nowpassnote = "only required at new password";
$useropt_newpass = "New password";
$useropt_newpassnote = "empty to keep current";
$useropt_repeat = "Repeat";
$useropt_save = "Save"; 
$useropt_resetcookies = "If you want to reset your cookies on every computer (when you forgot to logout somewhere, or something like that) you'll need to click the link below. Logging out or changing your password won't take affect.";
$useropt_reset = "Reset cookies";
$useropt_resetok = "You're cookies are resetted on every computer.<br />\n<a href=\"javascript:history.back()\">&laquo; Go back</a>";


?>