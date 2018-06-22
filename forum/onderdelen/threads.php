<?php
if (!defined('GOOD_CALL')) {
  die();
}
//hier zijn de threads

// maak connectie met de database via:
$server_driver = mysqli_connect("localhost", "root", "", "forum");
// (alleen 'localhost' kun je laten staan, andere variabelen zelf aanpassen)
// p.s. als nog niet gedaan, denk om aanmaken user en wachtwoord in PhpMyAdmin ('Gebruikersaccounts')
// query uitvoeren:

if(isset($_GET['id'])){
$id = $_GET['id'];
//laat topics zien.
$query = "SELECT * FROM topics WHERE thread_id = $id;";
// (de query text uiteraard zelf bedenken)
$result = mysqli_query($server_driver, $query);
// resultaat tonen van een SELECT:
$output = "
<table>
	<thead>
		<tr><th>Topics</th>
	</thead>
	<tbody>";
		while($row = mysqli_fetch_assoc($result)){
		$output .= '<tr>';
		$output .= "<td><a onclick=\"ajax_menu('pag_topics&id=" . $row['ID'] . "')\" onmouseover=\"this.style.cursor='pointer'\" class=''>".$row['titel']."</a></td>";
		$output .= '</tr>';
		}
		
	$output .=" </tbody>
</table>
";
include ("pag_new_topic.php");

}else{
//laden van threads
$query = "SELECT * FROM `thread` ORDER BY ID DESC";
// (de query text uiteraard zelf bedenken)
$result = mysqli_query($server_driver, $query);
// resultaat tonen van een SELECT:
$output = "
<table>
	<thead>
		<tr><th>Threads</th></tr>
	</thead>
	<tbody>";
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '<tr>';
            $output .= "<td><a onclick=\"ajax_menu('threads&id=" . $row['ID'] . "')\" onmouseover=\"this.style.cursor='pointer'\" class=''>".$row['naam']."</a></td>";
            
            $output .= "</tr>";
        }
    }
		
	$output .=" </tbody>
</table>
";
}
?>