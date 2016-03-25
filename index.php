<?php

	define ('HOME', 'http://blocco.pc/');

	$active1=$active2=$active3="";
	$p=isset($_GET['p']) ? $_GET['p'] : "home";

	switch ($p) {
		case "home":
			$cont="home";
			break;
		case "rif1":
			$cont="rif1";
			$active1="active";
			break;
		case "rif2":
			$cont="rif2";
			$active1="active";
			break;
		case "categorie":
			$cont="categorie";
			$active2="active";
			break;
		case "news":
			$cont="news";
			$active3="active";
			break;
		case "aderisci":
			$cont="aderisci";
			break;
		case "privacy":
			$cont="privacy";
			break;
		case "cookie":
			$cont="cookie";
			break;
	}

	require_once('templates/open.php');
	require_once('templates/header.php');
	require_once('pages/'.$cont.'.php');
	require_once('templates/footer.php');
	require_once('templates/close.php');
	
?>