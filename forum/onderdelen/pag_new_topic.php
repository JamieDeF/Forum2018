<?php
$token = f_csrf_token();

if (isset($_SESSION['user_login'])) {

    $thread_id = $_GET['id'];
//nieuwe topic aan maken indien je ingelogd bent
    $output .="
        <form id=\"maketopic\" method=\"POST\" action=\"\">
    	    Titel:<br>
    	    <input type=\"text\" id='select' style='width: 50%;' name=\"title\" required><br>
    	    Content:<br>
    	    <input type=\"text\" name=\"content\" required></textarea><br>
    	    <input type=\"hidden\" name=\"post\" id=\"new_topic\" value=\"new_topic\">
    	    <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"$token\">
            <input type=\"hidden\" name=\"thread_id\" id=\"thread_id\" value=\"$thread_id\">
    	    <button type=\"submit\" value=\"submit\" value=\"new_topic\">Plaats</button>
    	</form>  
        ";
        $output .="<script>
  		 $(document).ready( function() {
     	  CKEDITOR.replace('new_topic');
   });
</script>";

} else{
    // niet ingelogd? inloggen om topic aan te maken
    $output .="<h5>log in om een topic aan te maken</h5>";
}
?>

