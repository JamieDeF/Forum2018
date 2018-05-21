<?php
$email = $_POST['email'];

$sql = "SELECT user_email FROM users WHERE user_email = '$email'";
$result = mysqli_query($db_link, $sql);

if (mysqli_num_rows($result) == 1) {
	$wacht_key = uniqid();
	$sql_ww = "UPDATE `users` SET `reset_key`= '". $wacht_key ."' WHERE user_email = '". $email ."'";
	mysqli_query($db_link, $sql_ww);
	header('Content-type: application/json');
	// geef json terug
	echo json_encode(array("wacht_key" => $wacht_key));
    // header('location: ?pag=passwordchange_new&wwkey='.$wacht_key);
 } else {
 	header('location: ?pag=passwordchange&error=email');
 }
