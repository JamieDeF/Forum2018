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
    // Remove 'post' from users.
    $post_action = array_pop($post_data);

    if ($post_action == 'data_admin_threads'){
        $users = $post_data;
        // Parse user ids.
        $user_ids = [];
        foreach ($users as $key=>$value) {
            array_push($user_ids, str_replace("user_", "", $key));
        }
        // Build query.
        $sql_query = "DELETE FROM thread WHERE ID IN (" . implode(", ", $user_ids) . ");";
        // Perform query.
        mysqli_query($db_link, $sql_query);

while (isset($_POST[$naam])) {
    // ja, is er, vang de waarde op in $user_id
    $thread_id = $_POST[$naam];
    // check of hij gewist moet: een checkbox bestaat alleen als hij aangevinkt is
    $naam = "wis_$n";

     if (isset($_POST[$naam])) {
    } else {
        // check of hij gewijzigd moet
        $naam = "naam_thread_$n";
        $naam_thread = $_POST[$naam];
        // normaal iets als: while($row = mysqli_fetch_assoc($users)){, voor hier ff een for-next lus
        while($row = mysqli_fetch_assoc($result)){
            if ($row["ID"] == $thread_id) {
                // alleen naam mag gewijzigd, dus alleen hierop checken
                if ($naam_thread != $row["naam"]) {
                    // ja, moet overschreven
                    // (normaal query op de database, nu voor demo bewerking van de array)
                    $query = "UPDATE thread SET naam='$naam_thread' WHERE ID in (" . implode(",", $naam_thread) . ");";
                    $result1 = mysqli_query($server_driver, $query);
                    $aantal_gewijzigd++;

                }
                break;
            }
        }
    }
    $n++;
    // zet volgende is in de var $naam
    $naam = "thread_id_$n";
}
        $pag_gekozen = 'beheer_threads';
    } else {
    	$pag_gekozen = 'beheer_threads';
    	$errormessage = 'thread delete error';
    }
