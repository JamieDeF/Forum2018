<?php
function f_db_conn(){
  $server_driver = mysqli_connect("localhost", "root", "", "volleybal");
  if(!$server_driver){
    echo "fout bij maken connectie database";
    die();
  }
  return $server_driver;
}

function f_lees_waarden($table){
  // leest alle waarden in van een tabel, evt. met WHERE erin
  $server_driver = f_db_conn();
  // query maken
  $query = "SELECT * FROM 'leden'";
  //: query uitvoeren
  $result_object = mysqli_query($server_driver, $query);
  // sluit connectie
  f_db_close($server_driver);
  // voor gemak omzetten naar array
  if(!$result_object){
    echo "Fout bij openen tabel";
    die();
  }
  $result = array();
  $n = 0;
  while($row = mysqli_fetch_assoc($result_object)){
    $result[$n] = $row;
    $n++;
  }
  return $result;
}

function f_db_close($server_driver){
  mysqli_close($server_driver);
  return;
}
?>