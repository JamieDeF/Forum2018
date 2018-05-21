<?php
	session_start();
	include 'includes/dbh.inc.php';
	include 'includes/function.php';
	$output = "";
	$user_login = "false";
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
		case 'data_passwordchange':
			// laat php json echo
			include 'data/data_passwordchange.php';
			// stop de rest van de code.
			die();
			break;
		case 'data_passwordchange_new':
			include 'data/data_passwordchange_new.php';
			break;	
	}
	switch ($pag_gekozen){
		case 'aanmelden':
			# code...
			include ("onderdelen/pag_aanmelden.php");
			break;
		case 'login':
			include ("onderdelen/pag_login.php");
			break;
		case 'threads':
			include ('onderdelen/threads.php');
			break;
		case 'mijn':
			include ('onderdelen/mijn.php');
			break;
		case 'logout':
			include ('onderdelen/pag_logout.php');
			break;	
		case 'passwordchange':
			include ('onderdelen/pag_passwordchange.php');
			break;
		case 'passwordchange_succes':
			include ('onderdelen/pag_passwordchange_succes.php');
			break;	
		case 'passwordchange_new':
			include ('onderdelen/pag_passwordchange_new.php');
			break;	
		default:
			include ('onderdelen/opening.php');
			break;
	}

	include 'onderdelen/pag_start.php';
	include 'onderdelen/navbar.php';
	echo $output;
	//echo $_SESSION[user];
	include 'onderdelen/pag_einde.php';
		?>
