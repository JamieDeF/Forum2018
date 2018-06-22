<?php
if (!defined('GOOD_CALL')) {
  die();
}
//wachtwoord veranderen is gelukt, redirect naar login pagina.

$output= "Het is gelukt! Klik <a onclick=\"ajax_menu('login')onmouseover=\"this.style.cursor='pointer'\">hier</a> om opnieuw in te loggen."; 
