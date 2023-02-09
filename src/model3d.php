<?php
$db = [
  "boots" =>
  [
    "name" => "nike",
    "price" => "16000"
  ],
  "worker" =>
  [
    "name" => "artem",
    "pay" => "30000"
  ]
]
?>

<table border="1" align="center">
  <tr>
    <td colspan="2" align="center">shop</td>
    <td colspan="2" align="center">personal</td>
  </tr>
  <tr>
    <?php foreach ($db as $item) : ?>
      <td colspan="2" align="center"><?php echo key($item) ?></td>
    <?php endforeach ?>
  </tr>
  <tr>
    <?php foreach ($db as $item) : ?>
      <?php foreach ($item as $value) : ?>
        <td align="center"><?php echo $value ?></td>
      <?php endforeach ?>
    <?php endforeach ?>
  </tr>
</table>