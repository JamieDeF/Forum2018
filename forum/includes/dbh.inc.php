<?php
if (!defined('GOOD_CALL')) {
  die();
}

$servernaam = "localhost";
$usernaam = "school_forum";
$password = 'test';
$dbname = "forum";

// Create connection
$db_link = mysqli_connect($servernaam, $usernaam, $password, $dbname);

// Check connection
if ($db_link->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}