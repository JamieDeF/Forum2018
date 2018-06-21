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
$query = "SELECT * FROM users;";
// (de query text uiteraard zelf bedenken)
$result = mysqli_query($server_driver, $query);
// resultaat tonen van een SELECT:
$output = "
<br>
<div class='admincolor'>
<div class='deleteform'>
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
                if ($row['user_rol_ID'] !='3') {
                $output .= '<tr>';
                    $output .= '<td> <input type="checkbox" name="user_' . $row['ID'] . '"></td>';
                    $output .= '<td>'.$row['user_name'].'</td>';
                    $output .= '<td>'.$row['user_email'].'</td>';
                    $output .= '<td>'.$row['user_rol_ID'].'</td>';
                $output .= '</tr>';
            }
        }
            
        $output .=" </tbody>
    </table> 
    <input type='hidden' name='_token' value='$token'>
    <input type='hidden' name='post' value='data_admin_users_delete'>
    <input type='button' name='btnsubmit' id='sbtn' onclick='users_delete()' value='Delete user'>
</form>
</div>

<div class='newuserform'>
<form action='index.php' method='post' name='data_newuser' id='data_newuser'>
    <tbody>
        <tr>
            <td><input type='text' name='new_user' id='new_user' placeholder ='New user'></td>
            <td><input type='email' name='add_U_Email' id='add_U_Email' placeholder ='E-mail'></td>
            <td>
                <select name='User_role' id='User_role'>
                    <option value='2'>User</option>
                    <option value='3'>Admin</option>
                </select>
            </td>
            <td><input type='hidden' name='_token' value='$token'></td>
            <td><input type='Password' name='pw1' id='pw1' placeholder='Password'></td>
            <td><input type='password' name='pw2' id='pw2' placeholder='Confirm Password'></td>
        </tr>
    </tbody>
    <input type='hidden' name='post' id='post' value='data_newuser'>
    <input type='button' name='btnsubmit' id='sbtn' onclick='users_new();' value='Add user'>
</form>
</div>
</div>
";