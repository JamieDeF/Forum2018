
<!DOCTYPE html>
<html>
	<body>
		<!-- Hyperlinks -->
		<a href="http://localhost/Jamiedefockert1CC.php?pag=1"> Mijn </a><br>
		<a href="http://localhost/Jamiedefockert1CC.php?pag=2"> Chats </a><br>
		<a href="http://localhost/Jamiedefockert1CC.php?pag=2"> Pagina 3</a>
		<?php
		$pag = "";
		if (isset($_GET['pag']))
		{
		echo $_GET['pag'];
		}
		echo "<br>";
		if (
		isset($_GET['pag'])){
		if( $_GET['pag']==1) {
			/* Zend formulier voor mijn */
		echo "<form method='post'>";
						echo "<br> Voornaam <input type='text' name='voornaam'>
						<br> Achternaam <input type='text' name='achternaam'>
						<br> Postcode <input type ='text' name= 'postcode'>
		  				<br> <input type='button' onclick='submit()' value='send' name='verzenden'>"					;
		echo "</form>";
		}
		
		}
		if(isset($_POST['achternaam'])){
		$achternaam = $_POST['achternaam'];
		$voornaam = $_POST['voornaam'];
		$postcode = strtoupper($_POST ['postcode']);
		echo "jouw naam en postcode zijn: $voornaam $achternaam $postcode";
			}
				if (isset($_GET["pag"])){
				if ($_GET['pag']==2){
		?>
		<table>
			<thead>
				<tr><th>Naam</th><th>Datum</th><th>Tekst</th></tr>
			</thead>
			<tbody>
				<?php
					foreach ($chat as $row){
						echo '<tr>';
						echo '<td>'.$row ['naam'].'</td>';
						echo '<td>'.$row ['datum'].'</td>';
						echo '<td>'.$row ['tekst'].'</td>';
						echo '</tr>';
				}
				?>
			</tbody>
		</table>
		<?php
	}
}
?>
	</body>
</html>