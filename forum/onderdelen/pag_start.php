<?php
if (!defined('GOOD_CALL')) {
  die();
}
echo "
<!DOCTYPE html>
<html>
	<head>
		<title>Forum</title>
		<script src='js/function.js'></script>
		<link rel='stylesheet' type='text/css' href='styles/style.css'>
	</head>
	<body>
";

include 'onderdelen/navbar.php';
echo "<div id='navbar'>$navbar</div>";
echo "<div id='output'>$output</div>";

include_once 'onderdelen/pag_einde.php';