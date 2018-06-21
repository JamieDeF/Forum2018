 <?php
if (!defined('GOOD_CALL')) {
  die();
}
    $post_data = $_POST;
    $post_action = $post_data['post'];

    if ($post_action == 'data_admin_users_delete'){
        $users = $post_data;
        // Parse user ids.
        $user_ids = [];
        foreach ($users as $key=>$value) {
            if ($key !== '_token' && $key !== 'post'){
                array_push($user_ids, str_replace("user_", "", $key));
            } 
        }

        // Build query.
        $sql_query = "DELETE FROM users WHERE ID in (" . implode(", ", $user_ids) . ");";
        
        // Perform query.
        mysqli_query($db_link, $sql_query);

        $pag_gekozen = 'admin';
    }
?>
