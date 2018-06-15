<?php
	define ("GOOD_CALL", "yes");

	session_start();
	include 'includes/dbh.inc.php';
	include 'includes/function.php';
	include 'onderdelen/functions_safe.php';

	$output = "";
	$navbar = "";
	$js = "";
	$errormessage = "";
	$user_login = "false";
	$pag_gekozen = f_pag_gekozen();
	$pag_gepost = f_pag_gepost();
	$debug = "";
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
			include 'data/data_passwordchange.php';
			break;
		case 'data_passwordchange_new':
			include 'data/data_passwordchange_new.php';
			break;	
		case 'data_admin_users_delete':
			include 'data/data_admin_users_delete.php';
		break;
		case 'data_newuser':
			include 'data/data_newuser.php';
		break;
		case 'data_admin_threads':
			include 'data/data_admin_threads.php';
		break;
		case 'data_newthread':
			include 'data/data_newthread.php';
		break;
		case 'data_admin_topics':
			include 'data/data_admin_topics.php';
		break;
	}
	switch ($pag_gekozen){
		case 'aanmelden':
			include ("onderdelen/pag_aanmelden.php");
			break;
		case 'aanmelden_succes':
			include ('onderdelen/pag_aanmelden_succes.php');
			break;
		case 'admin':
			include ('onderdelen/pag_admin.php');
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
		case 'beheer_threads':
			include ('onderdelen/pag_beheer_threads.php');
			break;	
		case 'admin_topics':
			include ('onderdelen/pag_admin_topics.php');
			break;
		case 'passwordchange_new':
			include ('onderdelen/pag_passwordchange_new.php');
			break;	
		default:
			include ('onderdelen/opening.php');
			break;
	}

	if ($pag_gekozen ==! '' || $pag_gepost ==! '') {
		echo json_encode(array("navbar" => $navbar, "output" => $output, "error" => $errormessage, "javascript" => $js, "debug" => $debug));
	} else {
		include 'onderdelen/pag_start.php';
	}