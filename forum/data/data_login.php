<?php
    $usernaam = $_POST['username'];
    $pwd = $_POST['pwd'];
    $pwd = sha1($pwd);

    $sql = "SELECT * FROM `users` WHERE user_name = '$usernaam' AND user_pwd = '$pwd'";

    $result = mysqli_query($db_link, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['id'] = $row['ID'];
            $_SESSION['usernaam'] = $row['user_name'];
            $_SESSION['user_role'] = $row["user_rol_ID"];
            $_SESSION['user_login'] = "true";
            $user_login = "true";
            header('Location: ?pag=home');
            $user_login = loginChecker();
        }
    } else {
        header('Location: ?pag=login');
        echo "your did not fill in the correct username or password";
    }