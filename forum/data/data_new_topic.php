<?php

if (!defined('GOOD_CALL')) {
    die();
}

include ("includes/dbh.inc.php");

$topictitle = $_POST['title'];
$topiccontent = $_POST['content'];
$user = $_SESSION['id'];


$query = "INSERT INTO `topics` (`id`, `datum`, `tijd`, `user_id`, `titel`, `text`, `thread_id`) VALUES (NULL, CURRENT_TIMESTAMP, '', '$user', '$topictitle', '$topiccontent', '".$_GET['id']."')";
$result = mysqli_query($db_link, $query);

if ($result){
    $output.="<div class='succes'>Topic met succes aangemaakt</div>";
} else {
    $output.="<div class='error'>Topic aanmaken mislukt</div>";
}

?>