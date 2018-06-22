<?php

if (!defined('GOOD_CALL')) {
    die();
}

include ("includes/dbh.inc.php");

$topictitle = $_POST['title'];
$topiccontent = $_POST['editor'];
$user = $_SESSION['id'];
$thread_id = $_POST['thread_id'];

$query ="INSERT INTO `topics` (`ID`, `datum`, `tijd`, `user_id`, `titel`, `text`, `views`, `thread_id`) VALUES (NULL, 'CURRENT TIMESTAMP', '', '$user', '$topictitle', '$topiccontent', '', '$thread_id');";
$result = mysqli_query($db_link, $query);

if ($result){
    $output.="Topic met succes aangemaakt";
} else {
    $output.="Topic aanmaken mislukt";
}

$pag_gekozen = 'pag_topic';
?>