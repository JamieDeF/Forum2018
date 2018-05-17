<?php
//Veranderen wachtwoord.
/*if (isset($_GET['key'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $wachtwoord = cha1($_POST['wachtwoord']);
        $wachtwoord1 = cha1($_POST['wachtwoord_confirm']);

        if ($wachtwoord == $wachtwoord1) {
            $query = "UPDATE users SET user_pwd = '". $wachtwoord ."' WHERE reset_key = '". $_GET['key'] ."';";
            $result = mysqli_query($db_link, $query);

        } else {
            echo "wachtwoorden zijn niet gelijk.";
        }
    }
}*/
$pwd1 = $_POST['password2'];
$pwd2 = $_POST['password'];

if ($pwd1 === $pwd2) {
    $pwdhash = sha1($pwd1);
    $email = $_POST['email'];

    $query = "UPDATE users SET user_pwd = '". $pwdhash ."' WHERE user_email = '". $email ."';";
    $result = mysqli_query($db_link, $query);
}
