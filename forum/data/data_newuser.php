 <?php
if (!defined('GOOD_CALL')) {
  die();
}
$server_driver = mysqli_connect("localhost", "root", "", "forum");
$errormessage = "";
if (isset($_POST['new_user'])) {
	$username = htmlspecialchars($_POST['new_user']);
	$U_Email = $_POST['add_U_Email'];
	$role = $_POST['User_role'];
	$pw1 = $_POST['pw1'];
	$pw2 = $_POST['pw2'];

	if ($pw1 === $pw2) {
		$hashpw = sha1($pw1);
	} else {
		$errormessage = "Passwords are not the same!"; 
	}
	
	$sql = 'SELECT * FROM users WHERE user_email = "$U_Email"';
	$result = mysqli_query($server_driver, $sql);
	if ($result) {
		$errormessage = "Email already exists.";
	}

	if ($errormessage === "") {
		$insert = "INSERT INTO `users`(`user_name`, `user_pwd`, `user_email`, `user_rol_ID` ,`reg_confirmed`) VALUES ('$username','$hashpw', '$U_Email', $role, 'yes')";
		mysqli_query($server_driver, $insert);
	} else {
		// There is an error, don't do anything.
	}
} else {
	$errormessage = "something went wrong";
}

$pag_gekozen = "admin";