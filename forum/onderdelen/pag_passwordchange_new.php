<?php 
$email = $_GET['email'];

$output = "
<form method='POST' action='index.php'>
        <p> je email is $email </p><br>
        <input type='password' name='password' size='40' maxlength='200' placeholder='Wachtwoord'><br>
        <input type='password' name='password2' size='40' maxlength='200' placeholder='Bevestig wachtwoord'><br>
        <input type='hidden' name='email' size='40' maxlength='200' value='$email'><br>
        <input type='hidden' name='post' value='data_passwordchange_new'>
        <p><input type='submit' name='submit' value='Verander!''></p>
</form>
";