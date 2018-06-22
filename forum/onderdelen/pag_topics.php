<?php
if (!defined('GOOD_CALL')) {
  die();
}
//hier haal je de topics op

// maak connectie met de database via:
$server_driver = mysqli_connect("localhost", "root", "", "forum");

$id = $_GET['id'];

$query = "SELECT * FROM topics WHERE id = $id;";
// (de query text uiteraard zelf bedenken)
$result = mysqli_query($server_driver, $query);

		while($row = mysqli_fetch_assoc($result)){
		$output .= "<h1>" . $row['titel'] . "</h1>";
		$output .= "<p>" . $row['datum'] . "</p>"; 
		$output .= "<p>" . $row['tijd'] . "</p>"; 
		$output .= "<p>" . $row['user_id'] . "</p>"; 
		$output .= "<p>" . $row['text'] . "</p>"; 
	

		}
?>