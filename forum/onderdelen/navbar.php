<?php 
    $navbar .= "
    <section class='navbar'>
        <div class='nav-container'>
    ";
    if (isset($_SESSION['user_login'])) {
        if ($pag_gekozen == 'home' || '') {
            $navbar .= "<a class=\"active\" onclick=\"ajax_menu('home')onmouseover=\"this.style.cursor='pointer'\">Home</a>";
        } else {
            $navbar .= "<a onclick=\"ajax_menu('home')\"  onmouseover=\"this.style.cursor='pointer'\">Home</a>";
        };

        if ($pag_gekozen == 'threads') {
            $navbar .= "<a class=\"active\" onclick=\"ajax_menu('threads')\"  onmouseover=\"this.style.cursor='pointer'\">Threads</a>";
        } else {
            $navbar .= "<a onclick=\"ajax_menu('threads')\"  onmouseover=\"this.style.cursor='pointer'\">Threads</a>";
        };

        // Check user role for admin page.
        if ($_SESSION['user_role'] == 3) {
            if ($pag_gekozen == 'admin') {
                $navbar .= "<a class=\"active\" onclick=\"ajax_menu('admin')\"  onmouseover=\"this.style.cursor='pointer'\">Admin</a>";
            } else {
                $navbar .= "<a onclick=\"ajax_menu('admin')\"  onmouseover=\"this.style.cursor='pointer'\">Admin</a>";
            };
        };
     

        $navbar .= "<a class='navbar-right logout' onclick=\"ajax_menu('logout')\"  onmouseover=\"this.style.cursor='pointer'\">Logout <i class=\"fas fa-sign-out-alt\"></i></a>";

        if ($pag_gekozen == 'user') {
            $navbar .= "<a class='active navbar-right nbm' onclick='user_info()'>$_SESSION[usernaam]</a><span class='navbar-right nav-margin'>Welcome:</span>";
        } else {
            $navbar .= "<a class='navbar-right nbm' onclick='user_info()'>$_SESSION[usernaam]</a><span class='navbar-right nav-margin'>Welcome:</span>";
        };

    } else {
        if ($pag_gekozen == 'home' || '') {
            $navbar .= "<a class=\"active\" onclick=\"ajax_menu('home')\"  onmouseover=\"this.style.cursor='pointer'\">Home</a>";
        } else {
            $navbar .= "<a onclick=\"ajax_menu('home')\"  onmouseover=\"this.style.cursor='pointer'\">Home</a>";
        };

        if ($pag_gekozen == 'threads') {
            $navbar .= "<a class=\"active\" onclick=\"ajax_menu('threads')\"  onmouseover=\"this.style.cursor='pointer'\">Threads</a>";
        } else {
            $navbar .= "<a onclick=\"ajax_menu('threads')\"  onmouseover=\"this.style.cursor='pointer'\">Threads</a>";
        };

        if ($pag_gekozen == 'aanmelden') {
            $navbar .= "<a class=\"active\" onclick=\"ajax_menu('aanmelden')\"  onmouseover=\"this.style.cursor='pointer'\">Registreren</a>";
        } else {
            $navbar .= "<a onclick=\"ajax_menu('aanmelden')\"  onmouseover=\"this.style.cursor='pointer'\">Registreren</a>";
        };
        
        if ($pag_gekozen == 'login') {
            $navbar .= "<a class=\"active\" onclick=\"ajax_menu('login')\"  onmouseover=\"this.style.cursor='pointer'\">Login</a>";
        } else {
            $navbar .= "<a onclick=\"ajax_menu('login')\"  onmouseover=\"this.style.cursor='pointer'\">Login</a>";
        };
    }
 $navbar .= "</div></section>";