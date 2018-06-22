<?php
if (!defined('GOOD_CALL')) {
  die();
}

$servernaam = "localhost";
$usernaam = "root";
$password = '';
$dbname = "forum";

// Create connection
$db_link = mysqli_connect($servernaam, $usernaam, $password, $dbname);

// Check connection
if ($db_link->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}