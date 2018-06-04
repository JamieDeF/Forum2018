<?php
// maak connectie met de database via:
$server_driver = mysqli_connect("localhost", "root", "", "forum");
// (alleen 'localhost' kun je laten staan, andere variabelen zelf aanpassen)
// p.s. als nog niet gedaan, denk om aanmaken user en wachtwoord in PhpMyAdmin ('Gebruikersaccounts')
// query uitvoeren:
$query = "SELECT * FROM users;";
// (de query text uiteraard zelf bedenken)
$result = mysqli_query($server_driver, $query);
// resultaat tonen van een SELECT:
$output = "
<form id='data_admin_users_delete' name='data_admin_users_delete' action='index.php' method='post'>
    <table class='admin-table'>
        <thead>
            <tr>
                <th>Selecteer</th>
                <th>Username</th>
                <th>Email</th>
                <th>User role level</th>
            </tr>
        </thead>
        <tbody>";
            while($row = mysqli_fetch_assoc($result)){
                $output .= '<tr>';
                    $output .= '<td> <input type="checkbox" name="user_' . $row['ID'] . '"></td>';
                    $output .= '<td>'.$row['user_name'].'</td>';
                    $output .= '<td>'.$row['user_email'].'</td>';
                    $output .= '<td>'.$row['user_rol_ID'].'</td>';
                $output .= '</tr>';
            }
            
        $output .=" </tbody>
    </table>
    <input type='hidden' name='post' value='data_admin_users_delete'>
    <input type='button' name='btnsubmit' id='sbtn' onclick='users_delete()' value='Wis'>
</form>
";
?>