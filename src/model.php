<?php
$shop = [
  ["name" => "Big Ocean shop", "address" => "Saint Petersburg, Big Ocean 68", "time" => "08:00 - 13:00", "phone" => "+79214456758"],
  ["name" => "Gastello shop", "address" => "Saint Petersburg, Gastello", "time" => "07:30 - 18:00", "phone" => "+79214456758"],
  ["name" => "Lenca shop", "address" => "Saint Petersburg, Lencsovet", "time" => "07:30 - 21:00", "phone" => "+79214456758"]
]
?>

<table border="1" align="center">
  <tr>
    <td align="center">Название</td>
    <td align="center">Адресс</td>
    <td align="center">Время работы</td>
    <td align="center">Телефон</td>
  </tr>
  <?php foreach ($shop as $item) : ?>
    <tr>
      <?php foreach ($item as $key => $value) : ?>
        <td align="center">
          <?php echo $value ?>
        </td>
      <?php endforeach ?>
    </tr>
  <?php endforeach ?>
</table>