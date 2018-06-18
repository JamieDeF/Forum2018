<?php
// gewoon even een hard coded gebruikersnaam en wachtwoord
if(($_POST["gebruikersnaam"] == "admin") and ($_POST["wachtwoord"] == "geheim")){
  $_SESSION["admin"] = "ja";
}else{
  echo "Fout!";
  die();
}