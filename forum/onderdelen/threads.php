<?php
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
<table>
	<thead>
		<tr><th>Naam</th>
	</thead>
	<tbody>";
		while($row = mysqli_fetch_assoc($result)){
		$output .= '<tr>';
			$output .= '<td>'.$row ['naam'].'</td>';
		$output .= '</tr>';
		}
		
	$output .=" </tbody>
</table>
";
?>