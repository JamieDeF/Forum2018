<?php
$email = $_POST['email'];

$sql = "SELECT user_email FROM users WHERE user_email = '$email'";

$result = mysqli_query($db_link, $sql);

if (mysqli_num_rows($result) == 1) {
     header('location: ?pag=passwordchange_new&email='.$email);
 } 