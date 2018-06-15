<?php
if (!defined('GOOD_CALL')) {
  die();
}
$output = "
	<form method='post' id ='mijn' name='mijn'>
	<br> Voornaam <input type='text' name='voornaam'>
	<br> Achternaam <input type='text' name='achternaam'>
	<br> Postcode <input type ='text' name= 'postcode'>
	<br> <input type='button' onclick='send_mijn()' value='send' name='verzenden'>
	<input type = 'hidden' name = 'pag_id' value = 'data_mijn'>
	</form>
	";