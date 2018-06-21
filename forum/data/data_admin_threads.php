 <?php
if (!defined('GOOD_CALL')) {
  die();
}
$aantal_gewijzigd = 0;
$posting_gedaan = "ja";
$aantal_toegevoegd = 0;
$n = 0;
$naam = "thread_id_$n";

$post_data = $_POST;
$post_action = $post_data['post'];
$debug = $post_data;

if ($post_action == 'data_admin_threads'){
    // Update.
    $sql_query = 'SELECT * FROM thread';
    $all_threads = mysqli_query($db_link, $sql_query);

    while($row = mysqli_fetch_assoc($all_threads)){
        $name = $post_data['name_thread_id_' . $row['ID']];
        if($name != $row['naam']){
            $query = "UPDATE thread SET naam='".$name."' WHERE ID = ".$row['ID'].";";
            mysqli_query($db_link, $query);
        }
    }         

    // Delete.
    $delete_threads = $post_data;
    // Parse user ids.
    $thread_ids = [];
    foreach ($delete_threads as $key=>$value) {
        if ($key !== '_token' && $key !== 'post' && strpos($key, 'name_thread') === false){
            array_push($thread_ids, str_replace("delete_thread_id_", "", $key));
        }
    }
    
    // Build query.
    $sql_query = "DELETE FROM thread WHERE ID IN (" . implode(", ", $thread_ids) . ");";
    // Perform query.
    mysqli_query($db_link, $sql_query);


    $pag_gekozen = 'beheer_threads';
} else {
	$pag_gekozen = 'beheer_threads';
	$errormessage = 'thread delete error';
}
