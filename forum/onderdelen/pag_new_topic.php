<?php
$token = f_csrf_token();

if (isset($_SESSION['user_login'])) {

$output .="
    <form id=\"maketopic\" method=\"POST\" action=\"\">
	    Titel:<br>
	    <input type=\"text\" id='select' style='width: 50%;' name=\"title\" required><br>
	    Content:<br>
	    <input type=\"text\" name=\"content\" required></textarea><br>
	    <input type=\"hidden\" name=\"post\" id=\"new_topic\" value=\"new_topic\">
	    <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"$token\">
	    <button type=\"submit\" value=\"submit\" value=\"new_topic\">Plaats</button>
	</form>  

    ";
    } else{
    $output .="<h5>log in om een topic aan te maken</h5>";
    }
?>

