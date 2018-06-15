<?php
if (!defined('GOOD_CALL')) {
  die();
} 
$wwkey = $_GET['wwkey'];

$output = "
<form method='POST' action='index.php'>
        <p> je reset key is $wwkey</p><br>
        <input type='password' name='password' size='40' maxlength='200' placeholder='Wachtwoord'><br>
        <input type='password' name='password2' size='40' maxlength='200' placeholder='Bevestig wachtwoord'><br>
        <input type='hidden' name='wwkey' size='40' maxlength='200' value='$wwkey'><br>
        <input type='hidden' name='post' value='data_passwordchange_new'>
        <p><input type='submit' name='submit' value='Verander!''></p>
</form>
";