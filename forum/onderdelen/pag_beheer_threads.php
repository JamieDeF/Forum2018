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
$query = "SELECT * FROM thread;";
// (de query text uiteraard zelf bedenken)
$result = mysqli_query($server_driver, $query);
// resultaat tonen van een SELECT:
$output = "
<br>
<div class='admincolor'>
<div class='deleteform'>
<form id='data_admin_threads' name='data_admin_threads' action='index.php' method='post'>
    <table class='admin-table'>
        <thead>
            <tr>
                <th>Wissen</th>
                <th>Threads</th>
            </tr>
        </thead>
        <tbody>";
            while($row = mysqli_fetch_assoc($result)){
                    $output .= '<tr>';
                    $output .= '<td> <input type="checkbox" name="delete_thread_id_' . $row['ID'] . '">';
                    $output .= '<td> <input type="text" name="name_thread_id_' . $row['ID'] . '" value="'.$row['naam'].'"></td>';
                $output .= '</tr>';
            }
            
        $output .=" </tbody>
    </table>
    <input type='hidden' name='_token' value='$token'>
    <input type='hidden' name='post' value='data_admin_threads'>
    <input type='button' name='btnsubmit' id='sbtn' onclick='new_thread_delete();' value='Save'>
</form>
</div>

<div class='newuserform'>
<form action='index.php' method='post' name='new_thread_form' id='new_thread_form'>
    <tbody>
        <tr>
            <td><input type='text' name='newthread' id='newthread' placeholder ='New thread'></td>
            <td><input type='hidden' name='_token' value='$token'></td>
        </tr>
    </tbody>
    <input type='hidden' name='post' id='post' value='data_newthread'>
    <input type='button' name='btnsubmit' id='sbtn' onclick='kutjs();' value='Add thread'>
</form>
</div>
</div>
";