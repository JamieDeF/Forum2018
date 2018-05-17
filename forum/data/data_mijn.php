<?php

$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$postcode = $_POST["postcode"];

$server_driver = mysqli_connect("localhost", "root", "", "forum");
// query uitvoeren:
$query = "UPDATE user SET voornaam='$voornaam', achternaam='$achternaam', postcode='$postcode' WHERE ID = '1';";
// (de query text uiteraard zelf bedenken)
$result = mysqli_query($server_driver, $query);

?>	