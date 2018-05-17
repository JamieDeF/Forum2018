<?php

    $password1 = sha1($_POST['pwd1']);
    $password2 = sha1($_POST['pwd2']);
    $usernaam_form = $_POST['username'];
    $email_post = $_POST['email'];

    $sql = "SELECT user_name FROM `users` WHERE user_name = '$usernaam_form'";
    $sql2 = "SELECT user_email FROM `users` WHERE user_email = '$email_post'";

    $result1 = mysqli_query($db_link, $sql);
    $result2 = mysqli_query($db_link, $sql2);


    if (mysqli_num_rows($result2) == 0) {
        if (mysqli_num_rows($result1) == 0) {
            if ($password1 === $password2) {
                $reg_rey = uniqid();
                $insert = "INSERT INTO users (user_name, user_pwd, user_email, reg_key) VALUES ('".$usernaam_form."', '".$password1."', '".$email_post."', '".$reg_rey."')";
                mysqli_query($db_link, $insert);
            } else {
                $error_pwd = "Je wachtwoorden zijn niet hetzelfde!";
                //header('location: ?pag=register');
            }
        } else {
            $error_username = "gebruikersnaam is al in gebruik";
            //header('location: ?pag=register');
        }
    }else {
        $error_email = "dit email adres is al in gebruik!";
        //header('location: ?pag=register');
    }
    //error displayen ? pwd/username/email TODO. 