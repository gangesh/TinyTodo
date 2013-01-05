<?php
###################################
##   PHPMYLOGON: A LOGON SYSTEM  ##
##    (c) 2006 Jorik Berkepas    ##
##   Under the GNU GPL license   ##
##     helpdesk90@gmail.com      ##
###################################

// Language file
// LANG: Nederlands / Dutch
// official language-file
// note: if you want to add your own language, please copy the English language-file (lang_en.php)
//       and translate this into your own language.

$error = "Er is een error opgetreden. Neem contact op met de webmaster.";

// activate.php
$activate_reg = "Je account is succesvol geactiveerd, je kunt nu inloggen op de site.<br />\n<a href=\"login.php\">&laquo; Naar de inlogpagina</a>";
$activate_pass = "Je account is succesvol geactiveerd, je kunt nu weer inloggen met je oude wachtwoord.<br />\n<a href=\"login.php\">&laquo; Naar de inlogpagina</a>";
$activate_pass2 = "Je account is succesvol geactiveerd, en je wachtwoord is gewijzigd.<br />\n<a href=\"login.php\">&laquo; Naar de inlogpagina</a>";
$activate_pascheck = "De door jou ingevoerd wachtwoorden komen niet overeen.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$activate_newpass = "Nieuw wachtwoord";
$activate_repeat = "Herhaal";
$activate_chngpass = "Wachtwoord wijzigen";
$activate_falsecode = "De activatie code is niet correct. Indien je deze code verloren bent, ga dan nogmaals naar wachtwoord vergeten.<br />\n<a href=\"forgotpass.php\">&laquo; Naar wachtwoord vergeten</a>";
$activate_nodeactivate = "Jouw account is niet gedeactiveerd. Je kunt gewoon inloggen. Indien je je wachtwoord vergeten bent, klik dan op wachtwoord vergeten bij de inlogpagina.<br />\n<a href=\"login.php\">&laquo; Naar de inlogpagina</a>";
$activate_userid = "GebruikerID";
$activate_actcode = "Activatiecode";
$activate_keepcurrentpas = "Huidige wachtwoord behouden <small>(alleen account activeren)</small>";
$activate_act = "Activeren";

$safeadmin_rights = "Je hebt niet de juiste rechten om deze pagina te bekijken.";

$admin_editok = "De gebruiker is succesvol gewijzigd.<br />\n<a href=\"admin.php\">&laquo; Terug naar het beheer</a>";
$admin_pascheck = "De nieuwe wachtwoorden zijn niet hetzelfde.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$admin_name = "Naam";
$admin_newpass = "Nieuw wachtwoord";
$admin_newpass_note = "leeglaten voor huidige";
$admin_repeat = "Herhaal";
$admin_mail = "E-mailadres";
$admin_active = "Actief";
$admin_active_note = "1 = actief, 0 = niet actief";
$admin_state = "Status";
$admin_save = "Opslaan";
$admin_whichedit = "Welke gebruiker wil je bewerken?";
$admin_edit = "Bewerken";
$admin_delok = "De gebruiker is succesvol verwijderd.<br />\n<a href=\"admin.php\">&laquo; Terug naar het beheer</a>";
$admin_whichdel = "Welke gebruiker wil je verwijderen?";
$admin_del = "Verwijderen";
$admin_whatdo = "Wat wil je doen?";
$admin_edituser = "Gebruiker bewerken";
$admin_deluser = "Gebruiker verwijderen";
$admin_noresult = "Geen gebruikers gevonden";
$admin_usesearch = "Zoek naar een gebruiker door het veld in te vullen en op zoeken te drukken. Alle gebruikers met het zoekwoord in hun naam zullen weergegeven worden in het select-veld.";
$admin_search = "Zoeken";

$forgotpass_mail  = "Beste,\nOp de website ".$site_name." heb je aangegeven dat je je wachtwoord bent vergeten.\nOm je wachtwoord te wijzigen, druk je op de link onderaan deze mail, en wijzig je je wachtwoord.\n";
$forgotpass_mail .= "Wanneer je niet je wachtwoord wilt wijzigen, klik je op de 2e link, deze zal je account weer activeren, met je huidige wachtwoord.\n\n";
$forgotpass_passforgot = "Wachtwoord vergeten";
$forgotpass_success = "Je account is succesvol gedeactiveerd, en er is een e-mail gestuurd naar je emailadres. In deze e-mail staat een link, wanneer je hierop klikt kom je op een pagina waar je je wachtwoord kunt wijzigen.<br /><a href=\"login.php\">&laquo; Ga naar de inlogpagina</a>";
$forgotpass_emailerror = "Het gegeven e-mailadres komt niet overeen met het e-mailadres voor de gebruiker in de database.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$forgotpass_usererror = "De gebruikersnaam die jij invoerde bestaat niet.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$forgotpass_field = "Je hebt een veld niet ingevuld. Alle velden zijn verplicht.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$forgotpass_username = "Gebruikersnaam";
$forgotpass_email = "E-mailadres";
$forgotpass_login = "Je bent momenteel ingelogd, je kunt nu geen gebruik maken van de 'Wachtwoord vergeten'-functie.<br />\n<a href=\"javascript:history.back();\">&laquo; Ga terug</a>";

$logout_success = "Je bent succesvol uitgelogd.<br />\n<a href=\"login.php\">&laquo; Opnieuw inloggen</a>";

$login_success = "Je bent succesvol ingelogd.<br />\nJe wordt doorgestuurd, indien er niets gebeurd <a href=\"".$afterlogin."\">klik dan hier</a>.";
$login_cookiefalse = "Je cookie klopt niet met wat er in de database staat of je account is niet geactiveerd. Mogelijk heb je je wachtwoord veranderd waardoor je cookies niet meer kloppen.<br />\nJe oude cookies zijn verwijderd.";
$login_noactive = "Je account is niet geactiveerd. Activeer deze, door op de link in de verzonden e-mail te klikken.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$login_nopass = "Het door jouw ingevoerd wachtwoord klopt niet voor de ingevoerde gebruikersnaam.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$login_usererr = "De opgegeven gebruikersnaam bestaat niet.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$login_username = "Gebruikersnaam";
$login_password = "Wachtwoord";
$login_cookied = "Ingelogd blijven (cookie)";
$login_login = "Inloggen";
$login_forgotpass = "Wachtwoord vergeten";

$memberlist_username = "Gebruikersnaam";
$memberlist_deactusernote = "Gebruikers die <font color=\"gray\">grijs</font> in de lijst staan, zijn momenteel gedeactiveerd.";

$reg_mail = "Beste,\nJe hebt je geregistreerd op de site ".$site_name.", dit is de activatie mail van je registratie.\nOm je account te activeren, druk je op de link onderaan deze mail.\n\n";
$reg_truemail = "Je bent succesvol geregistreerd! Zodra je de link in de mail hebt bezocht kun je inloggen.<br />\n<a href=\"login.php\">&laquo; Naar de inlogpagina</a>";
$reg_nomail = "Je bent succesvol geregistreerd! Je kunt nu inloggen.<br />\n<a href=\"login.php\">&laquo; Naar de inlogpagina</a>";
$reg_pascheck = "De door jou opgegeven wachtwoorden komen niet overeen.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$reg_mailcheck = "Het e-mailadres dat jij opgaf, komt niet overeen met hoe een e-mailadres eruit zou moeten zien (gebruiker@domain.ext).<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$reg_userexists = "De opgegeven gebruikersnaam is reeds in gebruik. Probeer een andere gebruikersnaam.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$reg_field = "Je bent vergeten één of meerdere velden in te vullen.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$reg_username = "Gebruikersnaam";
$reg_password = "Wachtwoord";
$reg_repeat = "Herhaal";
$reg_mail = "E-mailadres";
$reg_reg = "Registreer";
$reg_mailnote = "Na de registratie zal er een e-mail naar je e-mailadres gestuurd worden ter activatie. Tot die tijd kun je nog niet inloggen.";
$reg_loginerror = "Je bent momenteel ingelogd, registreren is niet mogelijk terwijl je bent ingelogd!";

$useropt_passerr = "De twee nieuwe wachtwoorden zijn niet hetzelfde. Probeer het opnieuw.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$useropt_nowpasserr = "Het door jou opgegeven huidige wachtwoord is incorrect.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$useropt_mailchange = "Je e-mailadres is succesvol gewijzigd.<br />\n<a href=\"useroptions.php\">&laquo; Ga terug</a>";
$useropt_change = "Je e-mailadres is succesvol gewijzigd en je wachtwoord is gewijzigd.<br />\n<a href=\"useroptions.php\">&laquo; Ga terug</a>";
$useropt_mailfalse = "Je hebt een niet geldig emailadres opgegeven (lijkt niet op naam@domain.com).<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
$useropt_username = "Gebruikersnaam";
$useropt_mail = "E-mailadres";
$useropt_nowpass = "Huidige wachtwoord";
$useropt_nowpassnote = "alleen bij nieuw wachtwoord nodig";
$useropt_newpass = "Nieuw wachtwoord";
$useropt_newpassnote = "leeglaten om niet te wijzigen";
$useropt_repeat = "Herhaal";
$useropt_save = "Opslaan";
$useropt_resetcookies = "Wanneer je je cookies op iedere computer wilt verwijderen (bv. wanneer je bent jezelf uit te loggen, oid) klik dan op de link hieronder. Uitloggen of je wachtwoord veranderen heeft hier geen invoed op.";
$useropt_reset = "Reset cookies";
$useropt_resetok = "Je cookies zijn succesvol verwijderd op iedere computer.<br />\n<a href=\"javascript:history.back()\">&laquo; Ga terug</a>";
?>