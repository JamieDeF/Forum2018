<?php
if (!defined('GOOD_CALL')) {
  die();
}

function f_pag_gekozen(){
	$pag = "";
        if (isset($_GET['pag']))
        {
        $pag= $_GET['pag'];
       }
       return $pag;	
}

function f_pag_gepost(){
	$pag_post = "";
	if(isset($_POST['post'])){
		$pag_post = $_POST['post'];
	}
	return $pag_post;
if ($pag_gepost != ""){
	if(!f_check_token()){
		echo "illegale posting";
		die();	}
}
}

function get_users(){

/*Chats*/
$chat = array();
$chat [0] ["naam"]="klaas";
$chat [0] ["datum"]="18-05-2015";
$chat [0] ["tekst"]="hoi";
$chat [1] ["naam"]="anne";
$chat [1] ["datum"]="18-05-2015";
$chat [1] ["tekst"]="hallo";
$chat [2] ["naam"]="marcus";
$chat [2] ["datum"]="19-05-2015";
$chat [2] ["tekst"]="goedenavond";
}
?>