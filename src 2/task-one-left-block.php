<?php
$data = $_POST;
$sum = 0;
$data_translate = array(
  'car' => 'машина',
  'house' => 'дом',
  'book' => 'книга',
  'computer' => 'компьютер',
  'tree' => 'дерево',
  'pen' => 'ручка',
  'phone' => 'телефон',
  'table' => 'стол',
  'chair' => 'стул',
  'cat' => 'кот'
);
?>

<?php if ($data["select"] == "mul") : ?>
  <table border="3">
    <?php for ($i = 1; $i <= 10; $i++) : ?>
      <tr>
        <?php for ($j = 1; $j <= 10; $j++) : ?>
          <td align="center"><?php echo ($i * $j) ?></td>
        <?php endfor ?>
      </tr>
    <?php endfor ?>
  </table>
<?php endif ?>
<?php if ($data["select"] == "sum") : ?>
  <div>
    <?php for ($i = 1; $i <= 100; $i++) : ?>
      <?php if ($i % 2 != 0) : ?>
        <?php $sum = $sum + $i ?>
        <span><?php echo $sum ?></span>
      <?php endif ?>
    <?php endfor ?>
  </div>
<?php endif ?>
<?php if ($data["select"] == "translate") : ?>
  <?php if (array_key_exists($_POST["currentWord"], $data_translate)) :
    echo $data_translate[$_POST["currentWord"]];
  endif ?>
<?php endif ?>