<?php
if (!defined('GOOD_CALL')) {
  die();
}
$token = f_csrf_token();
//aanmeld formulier
 $output = "
<div class='login-register-wrapper'>
    <div class='login-box'>
        <h2>Registreren</h2>
        <form action='index.php' method='POST' id='register' name='register'> 
            <input type='text' name='username' id='uName' placeholder='Username'><br>
            <input type='email' name='email' id='Email' placeholder='E-mail'>
           <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"$token\">
            <input type='password' name='pwd1' id='pwd1' placeholder='Password'>
            <input type='password' name='pwd2' id='pwd2' placeholder='Confirm password'>
            <input type='hidden' name='post' value='data_aanmelden'>
            <input type='button' name='btnsubmit' id='sbtn' onclick='userregisterChecker()' value='Register'>
        </form>
        <p><a onclick=\"ajax_menu('passwordchange')\" onmouseover=\"this.style.cursor='pointer'\"><span class='link left'>Forgot your password?</span></a></p>
        <p><a onclick=\"ajax_menu('login')\" onmouseover=\"this.style.cursor='pointer'\"><span class='link left'>Already have a account, sign in here</span></a></p>
    </div>
</div>  
<script >
enter_register();
</script>
 ";
