<?php
// includes algemene functions en specifieke functions
include("controller/controller.php");
include("model/models.php");

// haal data op
$data = f_get_data();

// stuur output naar scherm
echo f_get_output($data);
?>