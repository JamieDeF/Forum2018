<?php 
 echo "
 <section class='navbar'>
    <div class='nav-container'>
 ";
 if (isset($_SESSION['user_login'])) {
     if ($pag_gekozen == 'home' || '') {
         echo "<a class=\"active\" href=\"?pag=home\">Home</a>";
     } else {
         echo "<a href=\"?pag=home\">Home</a>";
     }
     if ($pag_gekozen == 'threads') {
         echo "<a class=\"active\" href=\"?pag=threads\">Threads</a>";
     } else {
         echo "<a href=\"?pag=threads\">Threads</a>";
     }
     

     echo "<a class='navbar-right logout' href=\"?pag=logout\">Logout <i class=\"fas fa-sign-out-alt\"></i></a>";

     if ($pag_gekozen == 'user') {
         echo "<a class='active navbar-right nbm' onclick='user_info()'>$_SESSION[usernaam]</a><span class='navbar-right nav-margin'>Welcome:</span>";
     } else {
         echo "<a class='navbar-right nbm' onclick='user_info()'>$_SESSION[usernaam]</a><span class='navbar-right nav-margin'>Welcome:</span>";
     }

  }else {
     if ($pag_gekozen == 'home' || '') {
         echo "<a class=\"active\" href=\"?pag=home\">Home</a>";
     } else {
         echo "<a href=\"?pag=home\">Home</a>";
     }
     if ($pag_gekozen == 'threads') {
         echo "<a class=\"active\" href=\"?pag=threads\">Threads</a>";
     } else {
         echo "<a href=\"?pag=threads\">Threads</a>";
     }
     if ($pag_gekozen == 'aanmelden') {
         echo "<a class=\"active\" href=\"?pag=aanmelden\">Registreren</a>";
     } else {
         echo "<a href=\"?pag=aanmelden\">Registreren</a>";
     }
     if ($pag_gekozen == 'login') {
         echo "<a class=\"active\" href=\"?pag=login\">Login</a>";
     } else {
         echo "<a href=\"?pag=login\">Login</a>";
     }
 }
 echo "</div></section>";