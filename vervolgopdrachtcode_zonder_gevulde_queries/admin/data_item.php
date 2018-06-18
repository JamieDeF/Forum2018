<?php
// slaat gewijzigde, gewiste en toegevoegde items op

$server_driver = f_db_conn();

$query = "SELECT * FROM `leden`";
// query uitvoeren:
$items = mysqli_query($server_driver, $query);

$n = 0;
$naam = "item_id_$n";
while (isset($_POST[$naam])) {
    $item_id = $_POST[$naam];
    // check of hij gewist moet
    $naam = "item_wis_$n";
    if (isset($_POST[$naam])) {
        // ja, moet gewist
        $query = "DELETE FROM leden WHERE ID='$item_id'";
        $result = mysqli_query($server_driver, $query);
    } else {
        // check of hij gewijzigd moet
        //  evt. meer kolommen uit het overzicht halen
        // (hieronder wordt dus 1 kolom, datum, eruit gehaald)
        $naam = "positie_$n";
        $datum = $_POST[$naam];
        while ($row = mysqli_fetch_assoc($items)) {
            if ($row["positie"] == $item_id) {
                if ($datum != $row["positie"]) {
                    // vul $query, gebruik $item_id bij wissen juiste rij
                    $query = "DELETE FROM leden WHERE ID='$item_id'";
                    $result = mysqli_query($server_driver, $query);
                }
                break;
            }
        }
    }
    $n++;
    $naam = "item_id_$n";
}
// check of er een nieuwe bij moet
if ($_POST["nieuw_positie"] != "") {
    // : pas naam aan en evt. meer kolommen uit formulier halen
    $nieuw_positie = $_POST["nieuw_positie"];
    // : vul $query
    $query = "UPDATE 'leden' SET positie='$nieuw_positie' WHERE ID='$nieuw_positie'";
    $result = mysqli_query($server_driver, $query);
}
f_db_close($server_driver);
