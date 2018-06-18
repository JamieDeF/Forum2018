<?php
function f_get_data(){
    // return is array met waarden uit de database
    $result = array();

    // connectie maken
    $server_driver = f_db_conn();
    // evt. andere selectie op basis van inhoud van $view
    $query = "SELECT * FROM `leden` ";

    $result_object = mysqli_query($server_driver, $query);
    // sluit connectie
    f_db_close($server_driver);
    // voor gemak omzetten naar array
    if (!$result_object) {
        echo "Fout bij openen tabel";
        die();
    }
    $n = 0;
    while ($row = mysqli_fetch_assoc($result_object)) {
        $result[$n] = $row;
        $n++;
    }

    // en stuur terug
    return $result;
}

function f_db_conn(){
    // TODO: in elk geval naam database aanpassen!
    // localhost is normaal gesproken altijd goed
    // user en password is standaard root en leeg, maar pas evt. aan
    $server_driver = mysqli_connect("localhost", "root", "", "volleybal");
    if (!$server_driver) {
        echo "fout bij maken connectie database";
        die();
    }
    return $server_driver;
}

function f_db_close($server_driver){
    mysqli_close($server_driver);
    return;
}
?>