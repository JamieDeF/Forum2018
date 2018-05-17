<?php
$output = "
<div class='login-register-wrapper'>
    <div class='login-box'>
        <h2>Login</h2>
        <form method='post' name='login' id='login' action='index.php'>
            <input type='text' name='username' id='username' placeholder='Username'><br>
            <input type='password' name='pwd' id='password' placeholder='Password'>
            <input type='hidden' name='post' value='login'>
            <input type='button' name='btnsubmit' id='sbtn' onclick='userloginChecker()' value='Login'>
            
        </form>
        <p><a href='pwd-forgotten.php'><span class='link'>Password forgotten?</span></a></p>
        <p><a href='?pag=register'>Not an account: <span class='link'>Register</span></a></p>
    </div>
</div>";