<?php
$pwd1 = $_POST['password2'];
$pwd2 = $_POST['password'];
$wwkey = $_POST['wwkey'];
if ($pwd1 === $pwd2) {
    $pwdhash = sha1($pwd1);
    
    $query = "UPDATE users SET user_pwd = '". $pwdhash ."' WHERE reset_key = '". $wwkey ."'";
    mysqli_query($db_link, $query);
    header('location: ?pag=home&succes');
}
