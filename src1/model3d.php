<?php
$my_array = array(
  "Обувь" => array(
    "nike" => array("10000руб", "нет в наличии"),
  ),
  "Штаны" => array(
    "nike" => array("10000руб", "нет в наличии"),
  ),
  "Куртка" => array(
    "nike" => array("10000руб", "нет в наличии"),
  ),
  "Кепка" => array(
    "nike" => array("10000руб", "нет в наличии"),
  ),
);

echo "<table align='center' border='2'>";
echo "<tr>";
echo "<td align='center' colspan='4'>";
echo "Низ";
echo "</td>";
echo "<td align='center' colspan='4'>";
echo "Верх";
echo "</td>";
echo "</tr>";
echo "<tr>";
foreach ($my_array as $row => $value) {
  echo "<td align='center' colspan='2'>";
  echo $row;
  echo "</td>";
}
echo "</tr>";
foreach ($my_array as $row => $columns) {
  foreach ($columns as $column => $values) {
    foreach ($values as $value) {
      echo "<td align='center'>";
      echo "$value";
      echo "</td>";
    }
  }
}
echo "</table>";
