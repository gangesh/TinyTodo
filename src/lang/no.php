<?php

/*
	myTinyTodo language pack
	Language: Norwegian
	Original name: Norsk
	Author: Simen Aas Henriksen
	Author Url: http://www.sweb.no
	Author2: Rune Mathisen
	Author2 Url: http://runemathisen.com
	AppVersion: v1.5.0
	Date: 2012-12-08
*/

class Lang extends DefaultLang
{
	var $js = array
	(
		'confirmDelete' => "Er du sikker på at du vil slette denne oppgaven?",
		'confirmLeave' => "Det kan være ulagrede data, vil du virkelig forlate siden?",
		'actionNoteSave' => "lagre",
		'actionNoteCancel' => "avbryt",
		'error' => "En feil har oppstått (klikk for detaljer)",
		'denied' => "Tilgang nektet!",
		'invalidpass' => "Feil passord",
		'tagfilter' => "Tag:",
		'addList' => "La ny liste",
		'renameList' => "Bytt navn på liste",
		'deleteList' => "Du sletter nå hele listen, og da innholdet i listen.\\nEr du sikker på at du vil gjøre dette?",
		'clearCompleted' => "Du sletter nå alle oppgaver som er markert som ferdig, fra listen.\\nEr du sikker på at du vil gjøre dette?",
		'settingsSaved' => "Innstillinger er lagret. Oppdaterer...",
	);

	var $inc = array
	(
		'htab_newtask' => "Ny oppgave",
		'htab_search' => "Søk",
		'btn_add' => "Legg til",
		'btn_search' => "Søk",
		'advanced_add' => "Avansert",
		'searching' => "Søker etter",
		'tasks' => "Oppgaver",
		'taskdate_inline_created' => "lagt til %s",
		'taskdate_inline_completed' => "Fullført den %s",
		'taskdate_inline_duedate' => "Forfaller %s",
		'taskdate_created' => "Opprettelsesdato",
		'taskdate_completed' => "Dato ferdig",
		'go_back' => "&lt;&lt; Tilbake",
		'edit_task' => "Rediger oppgave",
		'add_task' => "Ny oppgave",
		'priority' => "Prioritet",
		'task' => "Oppgave",
		'note' => "Notat",
		'tags' => "Merkelapper",
		'save' => "Lagre",
		'cancel' => "Avbryt",
		'password' => "Passord",
		'btn_login' => "Logg inn",
		'a_login' => "Logg inn",
		'a_logout' => "Logg ut",
		'public_tasks' => "Offentlige oppgaver",
		'tagcloud' => "Merkelapper",
		'tagfilter_cancel' => "avbryt filter",
		'sortByHand' => "Sorter manuelt",
		'sortByPriority' => "Sorter etter prioritering",
		'sortByDueDate' => "Sorter etter dato",
		'sortByDateCreated' => "Sorter etter opprettelsesdato",
		'sortByDateModified' => "Sorter etter modifiseringsdato",
		'due' => "Forfallsdato",
		'daysago' => "%d dager siden",
		'indays' => "om %d dager",
		'months_short' => array("Jan","Feb","Mar","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Des"),
		'months_long' => array("Januar","Februar","Mars","April","Mai","Juni","July","August","September","Oktober","November","Desember"),
		'days_min' => array("Søn","Man","Tir","Ons","Tor","Fre","Lør"),
		'days_long' => array("Søndag","Mandag","Tirsdag","Onsdag","Torsdag","Fredag","Lørdag"),
		'today' => "idag",
		'yesterday' => "igår",
		'tomorrow' => "imorgen",
		'f_past' => "Forfalt",
		'f_today' => "Idag og imorgen",
		'f_soon' => "Snart",
		'action_edit' => "Rediger",
		'action_note' => "Rediger notat",
		'action_delete' => "Slett",
		'action_priority' => "Prioritet",
		'action_move' => "Flytt til",
		'notes' => "Notater:",
		'notes_show' => "Vis",
		'notes_hide' => "Skjul",
		'list_new' => "Ny liste",
		'list_rename' => "Bytt navn på liste",
		'list_delete' => "Slett liste",
		'list_publish' => "Offentliggjør list",
		'list_showcompleted' => "Vis ferdigstilte oppgaver",
		'list_clearcompleted' => "Slett ferdigstilte oppgaver",
		'list_select' => "Velg liste",
		'list_export' => "Eksporter",
		'list_export_csv' => "CSV",
		'list_export_ical' => "iCalendar",
		'list_rssfeed' => "RSS Feed",
		'alltags' => "Alle merkelapper:",
		'alltags_show' => "Vise alle",
		'alltags_hide' => "Skjul alle",
		'a_settings' => "Innstillinger",
		'rss_feed' => "RSS Feed",
		'feed_title' => "%s",
		'feed_completed_tasks' => "Ferdigstilte oppgaver",
		'feed_modified_tasks' => "Endrede oppgaver",
		'feed_description' => "Nye oppgaver i %s",
		'alltasks' => "Alle oppgaver",

		/* Settings */
		'set_header' => "Innstillinger",
		'set_title' => "Tittel",
		'set_title_descr' => "(endre om du vil redigere originaltittelen)",
		'set_language' => "Språk",
		'set_protection' => "Passordsbeskyttelse",
		'set_enabled' => "Aktivert",
		'set_disabled' => "Deaktivert",
		'set_newpass' => "Nytt passord",
		'set_newpass_descr' => "(la stå om du ikke vil endre passord)",
		'set_smartsyntax' => "Smart syntax",
		'set_smartsyntax_descr' => "(/prioritet/oppgaver/tags/)",
		'set_timezone' => "Tidssone",
		'set_autotag' => "Autotagging",
		'set_autotag_descr' => "(Legger automatisk til tags fra nåværende tag filter på nyopprettede oppgaver)",
		'set_sessions' => "Session handling mechanism",
		'set_sessions_php' => "PHP",
		'set_sessions_files' => "Filer",
		'set_firstdayofweek' => "Første dagen i uken",
		'set_custom' => "Tilpasset",
		'set_date' => "Datoformat",
		'set_date2' => "Kort datoformat",
		'set_shortdate' => "Kort dato (inneværende år)",
		'set_clock' => "Klokkeformat",
		'set_12hour' => "12-timer",
		'set_24hour' => "24-timer",
		'set_submit' => "Godta endringer",
		'set_cancel' => "Avbryt",
		'set_showdate' => "Vis oppgavedato i listen",
	);
}

?>