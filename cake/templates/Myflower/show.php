<table>
  <tr>
      <th>Flower</th>
      <th>Occasion</th>
      <th>Description</th>
  </tr>


<?php
foreach ($query as $row) {
    echo "<tr>";
    echo "<td>" . $row->name . "</td>";
    echo "<td>" . $row->Occasions['name'] . "</td>";
    echo "<td>" . $row->Occasions['description'] . "</td>";
    echo "</tr>";
}

?>
</table>
