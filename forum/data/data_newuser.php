 <?php
if (!defined('GOOD_CALL')) {
  die();
}
 $server_driver = mysqli_connect("localhost", "root", "", "forum");
if (isset($_POST['new_user'])) {
	$username = htmlspecialchars($_POST['new_user']);
	$U_Email = $_POST['add_U_Email'];
	$role = $_POST['User_role'];
	$pw1 = $_POST['pw1'];
	$pw2 = $_POST['pw2'];
	if ($pw1 === $pw2) {
		$hashpw = sha1($pw1);
		$insert = "INSERT INTO `users`(`user_name`, `user_pwd`, `user_email`, `user_rol_ID` ,`reg_confirmed`) VALUES ('$username','$hashpw', '$U_Email', $role, 'yes')";
		mysqli_query($server_driver, $insert);
		$pag_gekozen = "admin";
	} else {
		$errormessage = "Passwords are not the same!";
		$pag_gekozen = "admin";
	}
} else {
	$errormessage = "something went wrong";
	$pag_gekozen = "admin";
}