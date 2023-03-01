<?php
$my_array = array(
  "Обувь" => array(
    "nike" => array("10000руб", "нет в наличии"),
    "col2" => array("value3", "value4")
  ),
  "row2" => array(
    "col1" => array("value5", "value6"),
    "col2" => array("value7", "value8")
  )
);

echo "<table border='2'>";
foreach ($my_array as $row => $columns) {
  echo "<tr>";
  foreach ($columns as $column => $values) {
    echo "<td>";
    foreach ($values as $value) {
      echo "$value ";
    }
    echo "</td>";
  }
  echo "</tr>";
}
echo "</table>";
