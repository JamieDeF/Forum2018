<?php

if (!defined('GOOD_CALL')) {
    die();
}

include ("includes/dbh.inc.php");

$topictitle = $_POST['title'];
$topiccontent = $_POST['content'];
$user = $_SESSION['id'];


$query ="INSERT INTO `topics` (`ID`, `datum`, `tijd`, `user_id`, `titel`, `text`, `views`, `thread_id`) VALUES (NULL, 'CURRENT TIMESTAMP', '', '$user', '$topictitle', '$topiccontent', '', '"$_GET['id']"');";
//echo $query;
//$result = mysqli_query($db_link, $query);

if ($result){
    $output.="Topic met succes aangemaakt";
} else {
    $output.="Topic aanmaken mislukt";
}

?>