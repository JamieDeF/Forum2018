<?php
$user_login = "false";
session_destroy();

$_SESSION = array();

include 'onderdelen/navbar.php';
$pag_gekozen = 'login';
//HELP// 