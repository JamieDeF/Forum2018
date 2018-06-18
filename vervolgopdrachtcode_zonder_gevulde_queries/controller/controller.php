<?php
function f_get_output($data){
  // bovenste deel pagina
  include("view/a_start.php");

  // middelste deel
  include("view/b_midden.php");

  // sluit html af
  include("view/c_einde.php");
}
?>