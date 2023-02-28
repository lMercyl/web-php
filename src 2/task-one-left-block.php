<?php
$data = $_POST;
$sum = 0;
$data_translate = file_get_contents("data_translate.json");
?>

<div class="show-task-one__left-block">
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
    <?php http_response_code(200) ?>
  <?php endif ?>
</div>