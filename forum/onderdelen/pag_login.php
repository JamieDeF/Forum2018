<?php
$output = "
<div class='login-register-wrapper'>
    <div class='login-box'>
        <h2>Login</h2>
        <form method='post' name='login' id='login' action='index.php'>
            <input type='text' name='username' id='username' placeholder='Username'><br>
            <input type='password' name='pwd' id='password' placeholder='Password'>
            <input type='hidden' name='post' value='data_login'>
            <input type='button' name='btnsubmit' id='sbtn' onclick='userloginChecker()' value='Login'>
        </form>
        <p><a onclick=\"ajax_menu('passwordchange')\" onmouseover=\"this.style.cursor='pointer'\"><span class='link left'>Wachtwoord vergeten?</span></a></p>
        <p><a onclick=\"ajax_menu('aanmelden')\" onmouseover=\"this.style.cursor='pointer'\">Nog geen account: <span class='link right'>Registreren</span></a></p>
    </div>
</div>";