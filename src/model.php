<?php
$shop = ["Title" => ["Guap shop", "Gastello shop"], "Address" => ["Saint Petersburt, Big Ocean 68", "Saint Petersburt, Gastello"], "Time" => ["08:00 - 20:00", "07:30 - 20:00"]]
?>

<table border="1" align="center">
  <tr>
    <?php foreach ($shop as $key => $arr) : ?>
      <td><?php echo $key ?></td>
    <?php endforeach ?>
  </tr>
</table>