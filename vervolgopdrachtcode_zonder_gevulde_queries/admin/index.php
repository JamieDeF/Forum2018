<?php
// special page voor admin
session_start();

// db functies
include("models.php");

// check ingelogd
if (!isset($_SESSION["admin"])) {
    // check post van login form
    if ((isset($_POST["gebruikersnaam"])) and (isset($_POST["wachtwoord"]))) {
        // dan de login afhandelen
        include("data_login.php");
    } else {
        // login formulier tonen
        include("pag_login.php");
        die();
    }
}

// als tot hier gekomen, dan is er net goed ingelogd
// of er is een formulier opgestuurd
// check of het formulier is opgestuurd
if (isset($_POST['pag'])) {
    include("data_item.php");
}

// als tot hier gekomen, dan is er goed ingelogd
// het overzicht met items dan tonen
include("pag_start.php");
include("pag_item.php");
include("pag_einde.php");
?>