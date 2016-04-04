<?php

	define ('HOME', 'http://192.168.28.8/blocco/');

	$active1=$active2=$active3="";
	$p=isset($_GET['p']) ? $_GET['p'] : "home";

	switch ($p) {
		case "home":
			$cont="home";
			$metat="";
			$metad="";
			break;
		case "rif1":
			$cont="rif1";
			$active1="active";
			$metat="";
			$metad="";
			break;
		case "rif2":
			$cont="rif2";
			$active1="active";
			$metat="";
			$metad="";
			break;
		case "rif3":
			$cont="rif3";
			$active1="active";
			$metat="";
			$metad="";
			break;
		case "categorie":
			$cont="categorie";
			$active2="active";
			$metat="";
			$metad="";
			break;
		case "rassegna":
			$cont="rassegna";
			$active3="active";
			$metat="";
			$metad="";
			break;
		case "aderisci":
			$cont="aderisci";
			$metat="";
			$metad="";
			break;
		case "privacy":
			$cont="privacy";
			$metat="";
			$metad="";
			break;
		case "cookie":
			$cont="cookie";
			$metat="";
			$metad="";
			break;
	}

	require_once('templates/open.php');
	require_once('templates/header.php');
	require_once('pages/'.$cont.'.php');
	require_once('templates/footer.php');
	require_once('templates/close.php');
	
?>
