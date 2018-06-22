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
		<script src='javascript/jquery_331.js'></script>
		<script src='javascript/ckeditor/ckeditor.js'></script>
	</head>
	<header>
	<img src='styles/copress_logo_forum-av1.jpg'alt='logo' width='100' height='30' position='relative'>
	</header>
	<footer>
	</footer>
	<body>
	

";

include 'onderdelen/navbar.php';
echo "<div id='navbar'>$navbar</div>";
echo "<div id='output'>$output</div>";

include_once 'onderdelen/pag_einde.php';
