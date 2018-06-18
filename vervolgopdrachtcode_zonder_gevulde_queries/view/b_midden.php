<?php
// geeft middelste deel pagina terug
echo "<table>\n";
echo "<tr>\n";

echo "<td>ID</td>\n";
echo "<td>voornaam</td>\n";
echo "<td>achternaam</td>\n";
echo "<td>nationaliteit</td>\n";
echo "<td>geboortejaar</td>\n";
echo "<td>lengte</td>\n";
echo "<td>positie</td>\n";
echo "<td>team_id</td>\n";
echo "</tr>\n";
for($r = 0; $r < count($data); $r++){
  echo "<tr>\n";

  echo "<td>" . $data[$r]["ID"] . "</td>\n";
  echo "<td>" . $data[$r]["voornaam"] . "</td>\n";
  echo "<td>" . $data[$r]["achternaam"] . "</td>\n";
  echo "<td>" . $data[$r]["nationaliteit"] . "</td>\n";
  echo "<td>" . $data[$r]["Geboortejaar"] . "</td>\n";
  echo "<td>" . $data[$r]["lengte"] . "</td>\n";
  echo "<td>" . $data[$r]["positie"] . "</td>\n";
  echo "<td>" . $data[$r]["team_id"] . "</td>\n";
  echo "</tr>\n";
}
echo "</table>\n";
?>
