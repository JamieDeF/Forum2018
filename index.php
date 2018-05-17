<?php
	include 'includes/dbh.inc.php';
	include 'includes/function.php';
	$output = "";
	$pag_gekozen=f_pag_gekozen();
	$pag_gepost=f_pag_gepost();
	switch ($pag_gepost){
		case 'data_mijn':
			include ("data/data_mijn.php");
		break;
		case 'data_login': 
			include ("data/data_login.php");
		break;
		case 'data_aanmelden':
			include 'data/data_aanmelden.php';
		break;
	}
	switch ($pag_gekozen){
		case 'aanmelding':
			# code...
			include ("onderdelen/aanmelding.php");
			break;
		case 'login':
			include ("onderdelen/inloggen.php");
			break;
		case 'threads':
			include ('onderdelen/threads.php');
			break;
		case 'mijn':
			include ('onderdelen/mijn.php');
			break;
		default:
			include ('onderdelen/opening.php');
			break;
	}

	include 'onderdelen/pag_start.php';
	include 'onderdelen/navbar.php';
	echo $output;
	include 'onderdelen/pag_einde.php';
		?>
