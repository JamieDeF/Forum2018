<?php
if (!defined('GOOD_CALL')) {
  die();
}

$token = f_csrf_token();

// maak connectie met de database via:
$server_driver = mysqli_connect("localhost", "root", "", "forum");
// (alleen 'localhost' kun je laten staan, andere variabelen zelf aanpassen)
// p.s. als nog niet gedaan, denk om aanmaken user en wachtwoord in PhpMyAdmin ('Gebruikersaccounts')
// query uitvoeren:
$query = "SELECT * FROM topics";
// (de query text uiteraard zelf bedenken)
$result = mysqli_query($server_driver, $query);
// resultaat tonen van een SELECT:
$output = "
<br>
<div class='admincolor'>
<div class='deleteform'>
<form id='data_admin_topics' name='data_admin_topics' action='index.php' method='post'>
    <table class='admin-table'>
        <thead>
            <tr>
                <th>Selecteer</th>
                <th>Topics</th>
                <th>Datum</th>
                <th>Tijd</th>
                <th>user_id</th>
                <th>text</th>
                <th>views</th>
                
            </tr>
        </thead>
        <tbody>";
            while($row = mysqli_fetch_assoc($result)){
                $output .= '<tr>';
                $output .= '<td> <input type="checkbox" name="topic_' . $row['ID'] . '"></td>';
                $output .= '<td>'.$row['titel'].'</td>';
                $output .= '<td>'.$row['datum'].'</td>';
                $output .= '<td>'.$row['tijd'].'</td>';
                $output .= '<td>'.$row['user_id'].'</td>';
                $output .= '<td>'.$row['text'].'</td>';
                $output .= '<td>'.$row['views'].'</td>';
                $output .= '</tr>';
            }
            
        $output .=" </tbody>
    </table>
    <input type='hidden' name='_token' value='$token'>
    <input type='hidden' name='post' value='data_admin_topics'>
    <input type='button' name='btnsubmit' id='sbtn' onclick='new_topic_delete()' value='Delete topic'>
</form>
</div>
";