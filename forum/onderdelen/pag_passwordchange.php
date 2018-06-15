<?php 
if (!defined('GOOD_CALL')) {
  die();
}
$error = "";
if (isset($_GET["error"])) {
	$error = "deze email bestaat niet";
}
if ($error == !"") {
	$output .= "<script type='text/javascript'>alert('$error');</script>";
} 

$output .= "
<form>
    <p>Wat is je email?<br><input type='email' id='email' name='email' size='40' maxlength='200'><br></p>
    <input type='hidden' name='post' value='data_passwordchange'>
    <p><span onclick='submit_pwd_form()' class='btn' >Verander</span> </p>
</form>
";
