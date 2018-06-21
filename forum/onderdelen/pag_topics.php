<?php
if (!defined('GOOD_CALL')) {
  die();
}
// maak connectie met de database via:
$server_driver = mysqli_connect("localhost", "root", "", "forum");
// (alleen 'localhost' kun je laten staan, andere variabelen zelf aanpassen)
// p.s. als nog niet gedaan, denk om aanmaken user en wachtwoord in PhpMyAdmin ('Gebruikersaccounts')
// query uitvoeren:
$id = $_GET['id'];

$query = "SELECT * FROM topics WHERE id = $id;";
// (de query text uiteraard zelf bedenken)
$result = mysqli_query($server_driver, $query);
// resultaat tonen van een SELECT:
		while($row = mysqli_fetch_assoc($result)){
		$output .= "<h1>" . $row['titel'] . "</h1>";
		$output .= "<p>" . $row['datum'] . "</p>"; 
		$output .= "<p>" . $row['tijd'] . "</p>"; 
		$output .= "<p>" . $row['text'] . "</p>"; 
	

		}
?>