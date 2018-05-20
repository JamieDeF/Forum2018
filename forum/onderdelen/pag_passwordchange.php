<?php 
$error = "";
if (isset($_GET["error"])) {
	$error = "deze email bestaat niet";
}
if ($error == !"") {
	$output .= "<script type='text/javascript'>alert('$error');</script>";
} 

$output .= "
<form method='POST' action='index.php'>
        <p>Wat is je email?<br><input type='email' name='email' size='40' maxlength='200'><br></p>
        <input type='hidden' name='post' value='data_passwordchange'>
        <p><input type='submit' name='submit' value='Verander!''></p>
</form>
";


