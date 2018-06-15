<?php
if (isset($_POST['newthread'])) {
        	$namethread = $_POST['newthread'];
        	$insert = "INSERT INTO `thread`(`naam`) VALUES ('$namethread')";
        	mysqli_query($db_link, $insert);
        	 $pag_gekozen = 'beheer_threads';
        } else {
        	$errormessage = "newtread Error";
        	$pag_gekozen = 'beheer_threads';
        }