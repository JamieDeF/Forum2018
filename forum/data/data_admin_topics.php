 <?php
if (!defined('GOOD_CALL')) {
  die();
}
    $post_data = $_POST;
    // Remove 'post' from users.
    $post_action = $post_data['post'];

    if ($post_action == 'data_admin_topics'){
        $topics = $post_data;
        // Parse user ids.
        $topic_ids = [];
        foreach ($topics as $key=>$value) {
            if ($key !== '_token' && $key !== 'post'){
                array_push($topic_ids, str_replace("topic_", "", $key));
            }
        }
        // Build query.0
        $sql_query = "DELETE FROM topics WHERE ID in (" . implode(", ", $topic_ids) . ");";
        
        // Perform query.
        mysqli_query($db_link, $sql_query);

        $pag_gekozen = 'admin_topics';
    } else {
    	$pag_gekozen = 'admin_topics';
    	$errormessage = 'topics delete error';
    }
