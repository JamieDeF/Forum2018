 <?php
if (!defined('GOOD_CALL')) {
  die();
}
    $post_data = $_POST;
    // Remove 'post' from users.
    $post_action = array_pop($post_data);

    if ($post_action == 'data_admin_topics'){
        $users = $post_data;
        // Parse user ids.
        $user_ids = [];
        foreach ($users as $key=>$value) {
            array_push($user_ids, str_replace("user_", "", $key));
        }
        // Build query.0
        $sql_query = "DELETE FROM topics WHERE ID in (" . implode(", ", $user_ids) . ");";
        
        // Perform query.
        mysqli_query($db_link, $sql_query);

        $pag_gekozen = 'admin_topics';
    } else {
    	$pag_gekozen = 'admin_topics';
    	$errormessage = 'topics delete error';
    }