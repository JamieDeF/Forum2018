<?php
if (!defined('GOOD_CALL')) {
    die();
}
$topic_id = $_GET['id'];

// maak connectie met de database via:
$server_driver = mysqli_connect("localhost", "root", "", "forum");
// (alleen 'localhost' kun je laten staan, andere variabelen zelf aanpassen)
// p.s. als nog niet gedaan, denk om aanmaken user en wachtwoord in PhpMyAdmin ('Gebruikersaccounts')
$query = "SELECT * FROM topics WHERE ID = ".$topic_id.";";
// (de query text uiteraard zelf bedenken)
$result = mysqli_query($server_driver, $query);
// resultaat tonen van een SELECT:
while ($row = mysqli_fetch_assoc($result)) {
    $output .= "<h1>Topic: ".$row['titel']."</h1>";
    $output .= "".$row['tekst']."";
}


// query uitvoeren:
$query = "SELECT reactie.ID,reactie.tekst,reactie.datum,users.voornaam FROM reactie INNER JOIN users ON users.id = reactie.users_id WHERE topic_id=$topic_id";
// (de query text uiteraard zelf bedenken)
$result = mysqli_query($server_driver, $query);
// resultaat tonen van een SELECT:

$output .= "
            <table class='tabel-threads'>
            <thead>
            <h2>Reactions</h2>
            <tr><th>Date</th>
            <th>user</th>
            <th>Comment</th>
            </thead>
            <tbody>";
        while($row = mysqli_fetch_assoc($result)){
            $output .= '<tr>';
            $output .= '<td> '.$row ['datum'] .'</td>';
            $output .= '<td>'.$row ['voornaam'] .'</td>';
            $output .= '<td>'.$row ['tekst'] .'</td>';

            $output .= '</tr>';
        }
$output .=" </tbody>
        </table>
        ";
if (isset($_SESSION['Users_ID'] )){
    $output .="<form method='post' id='pag_reactie' name='pag_reactie' action='index.php'>";
    $output .="<input type='hidden' name='pag_id' value='data_reactie'>";
    $output .="<textarea id='new_reactie' name='new_reactie' placeholder='Typ hier je Reactie....'></textarea>";
    $output .="<input type='button' onclick='send_reactie()' value='Reactie toevoegen' name='verzenden'>";
    $output .= "</form>";
}

$output .="<script>
   $(document).ready( function() {
       CKEDITOR.replace('new_reactie');
   });
</script>"

?>