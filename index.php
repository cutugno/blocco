<?php

	define ('HOME', 'http://bloccostipendi.codacons.it/');
	//define ('HOME', 'http://blocco.pc/');

	$active1=$active2=$active3="";
	$p=isset($_GET['p']) ? $_GET['p'] : "cong";

	switch ($p) {
		case "cong":
			$cont="cong";
			$metat="Blocco Stipendi Statali | campagna promossa da Codacons";
			$metad="Il Codacons avvia una campagna in favore dei dipendenti pubblici contro il blocco degli stipendi per chiedere il rinnovo dei contratti ed il risarcimento";
			break;
		case "home":
			$cont="home";
			$metat="Blocco Stipendi Statali | campagna promossa da Codacons";
			$metad="Il Codacons avvia una campagna in favore dei dipendenti pubblici contro il blocco degli stipendi per chiedere il rinnovo dei contratti ed il risarcimento";
			break;
		case "rif1":
			$cont="rif1";
			$active1="active";
			$metat="Blocco Stipendi Statali | Sentenza della Corte Costituzionale";
			$metad="Sentenza della Corte Costituzionale che ha stabilito che il blocco dei contratti del pubblico impiego è illegittimo e incostituzionale";
			break;
		case "rif2":
			$cont="rif2";
			$active1="active";
			$metat="Blocco Stipendi Statali | Legge su adeguamenti retributivi";
			$metad="Legge che stabilisce gli adeguamenti retributivi in favore dei dipendenti della Pubblica Amministrazione";
			break;
		case "rif3":
			$cont="rif3";
			$active1="active";
			$metat=" Blocco Stipendi Statali | Risarcimento danni da atto lecito";
			$metad="Principio che stabilisce un idennizzo nel caso di atto lecito della Pubblica Amministrazione";
			break;
		case "categorie":
			$cont="categorie";
			$active2="active";
			$metat="Blocco Stipendi Statali | Enti pubblici interessati";
			$metad="Lista di enti pubblici i cui dipendenti sono stati colpiti dal blocco degli aumenti stipendiali e possono partecipare all'iniziativa";
			break;
		case "rassegna":
			$cont="rassegna";
			$active3="active";
			$metat="Blocco Stipendi Statali | Rassegna stampa CODACONS";
			$metad="Rassegna stampa relativa all'iniziativa del Codacons in favore dei dipendenti pubblici contro il blocco degli stipendi";
			break;
		case "aderisci":
			$cont="aderisci";
			$metat="Blocco Stipendi Statali | Modulo di adesione";
			$metad="Modulo di adesione per partecipare all'iniziativa del Codacons in favore dei dipendenti pubblici contro il blocco degli stipendi";
			break;
		case "scarica":
			$cont="scarica";
			$metat="Blocco Stipendi Statali | Modulo per la diffida";
			$metad="Modulo per la diffida da indirizzare alla P.A. e all'ARAN per chiedere il risarcimento del danno subito con il blocco degli adeguamenti retributivi";
			break;
		case "privacy":
			$cont="privacy";
			$metat="Blocco Stipendi Statali | Campagna promossa da Codacons";
			$metad="Il Codacons avvia una campagna in favore dei dipendenti pubblici contro il blocco degli stipendi per chiedere il rinnovo dei contratti ed il risarcimento";
			break;
		case "cookie":
			$cont="cookie";
			$metat="Blocco Stipendi Statali | Campagna promossa da Codacons";
			$metad="Il Codacons avvia una campagna in favore dei dipendenti pubblici contro il blocco degli stipendi per chiedere il rinnovo dei contratti ed il risarcimento";
			break;
		case "segui":
			$cont="segui";
			$metat="Blocco Stipendi Statali | Segui l'iniziativa promossa da Codacons";
			$metad="Il Codacons avvia una campagna in favore dei dipendenti pubblici contro il blocco degli stipendi per chiedere il rinnovo dei contratti ed il risarcimento";
			break;
	}

	require_once('templates/open.php');
	require_once('templates/header.php');
	require_once('pages/'.$cont.'.php');
	require_once('templates/footer.php');
	require_once('templates/close.php');
	
?>
