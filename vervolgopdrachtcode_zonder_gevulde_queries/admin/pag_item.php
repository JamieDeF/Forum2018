<?php
// toont het overzicht
// : voer de naam in van je eigen tabel
$data = f_lees_waarden("leden");

// ivm gelijk echo, eerst in een var $output, is keuze, net wat je wil
$output = "";
// het formulier
$output .= "<form id=\"admin_items\" name=\"admin_items\" action=\"index.php\" method=\"post\">";
// table openen
$output .= "<table border='1'>";
// kopje
// rij
$output .= "<tr>";
$output .= "<td>Wis/Nieuw</td>";
// : evt. meer kolommen en andere titel
$output .= "<td>ID</td>";
$output .= "<td>voornaam</td>";
$output .= "<td>achternaam</td>";
$output .= "<td>nationaliteit</td>";
$output .= "<td>geboortejaar</td>";
$output .= "<td>lengte</td>";
$output .= "<td>positie</td>";
$output .= "<td>team_id</td>";
$output .= "</tr>";
// cijfer voor id
$n = 0;
// lus per rij, normaal iets als while($row = mysqli_fetch_assoc($result)){
for ($i = 0; $i < count($data); $i++) {
    $row = $data[$i];
    // rij
    $output .= "<tr>";
    // wis vink
    $output .= "<td>";
    $output .= "<input type=\"checkbox\" id=\"item_wis_$n\" name=\"item_wis_$n\">";
    // hier id bij td instoppen, nodig voor verwerking
    $output .= "<input type=\"hidden\" id=\"item_id_$n\" name=\"item_id_$n\" value=\"" . $row["ID"] . "\">";
    $output .= "</td>";

    // print een kolom uit de tabel
    $output .= "<td>";
    // : pas de id en name aan, gelijk aan de naam van de kolom
    // : pas de kolomnaam in $row["datum"] aan
    $output .= "<input type=\"text\" id=\"voornaam_$n\" name=\"voornaam_$n\" value=\"" . $row["voornaam"] . "\"><br>";
    $output .= "</td>";
    // : evt. meer kolommen tonen

    // rij afsluiten
    $output .= "</tr>";

    // nr ophogen
    $n++;
}

// rij voor toevoegen nieuwe item
$output .= "<tr>";

//  hoeft geen wis checkbox in
$output .= "<td>&nbsp;</td>";

// print item naam en emailadres in td
// (normaal mag een admin natuurlijk geen item gegevens wijzigen, maar voor voorbeeld wel optie tot naam wijzigen)
$output .= "<td>";
$output .= "<input type=\"text\" id=\"nieuw_datum\" name=\"nieuw_datum\"><br>";
$output .= "</td>";

// rij afsluiten
$output .= "</tr>";

// table afsluiten
$output .= "</table>";
// voor gemak bij posting opvragen een hidden var opnemen
$output .= "<input type=\"hidden\" id=\"pag\" name=\"pag\" value=\"admin_items\">";
// de verzendbutton, voor demo een gewone submit
$output .= "<input type=\"submit\" value=\"SEND\">";

// gelijk de $output versturen
echo $output;
?>
