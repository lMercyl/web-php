<?php
$data = $_POST;
$type = $_POST["type"];
?>

<!DOCTYPE html>
<html lang="ru">

<!-- head start -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./index.css" />
  <title>Lab2</title>
</head>

<!-- head end -->

<!-- body start -->

<body>
  <div class="wrapper">
    <div class="task-one__info show-column">
      <div class="task-one__show-value">
        <span>Дата создания извещения: <?php echo '<p style="color: red">' . $data['date'] ?></span>
      </div>
      <div class="task-one__show-value">
        <span>Привет <?php echo '<p style="color: red">' . $data['name'] ?>!</span>
      </div>
      <div class="task-one__show-value">
        <span>Ваш email <?php echo  '<p style="color: red">' . $data['email'] ?></span>
      </div>
      <div class="task-one__show-value">
        <div>
          <span>Ваша доставка:</span>
        </div>
        <?php if (array_key_exists('curier', $data)) : ?>
          <div>
            <span><?php echo '<p style="color: red">' . $data['curier'] ?></span>
          </div>
        <?php endif ?>
        <?php if (array_key_exists('airship', $data)) : ?>
          <div>
            <span><?php echo '<p style="color: red">' . $data['airship'] ?></span>
          </div>
        <?php endif ?>
        <?php if (array_key_exists('train', $data)) : ?>
          <div>
            <span><?php echo '<p style="color: red">' . $data['train'] ?></span>
          </div>
        <?php endif ?>
        <?php if (array_key_exists('car', $data)) : ?>
          <div>
            <span><?php echo '<p style="color: red">' . $data['car'] ?></span>
          </div>
        <?php endif ?>
      </div>
      <div class="task-one__show-value">
        <span>Форма поссылки: <?php echo '<p style="color: red">' . $data['form'] . '</p>' ?></span>
      </div>
      <div class="task-one__show-value">
        <span>Количество: <?php echo '<p style="color: red">' . $data['amount'] ?></span>
      </div>
      <div class="task-one__show-value">
        <span>Вес: <?php echo '<p style="color: red">' . $data['weight'] ?></span>
      </div>

      <div class="task-one__show-value">
        <span style="color: <?php echo $data['color'] ?>">Цвет: <?php echo $data['color'] ?></span>
        <div style="width: 50px; height: 25px; background: <?php echo $data['color'] ?>; border: 1px solid black"></div>
      </div>

      <div class="task-one__show-value">
        <span class="red_span">Тара:<br>
          <?php
          foreach ($type as $i => $type) {
            echo '<p style="color: red">' . $type . '</br>';
          }
          ?>
        </span>
      </div>
      <div class="task-one__show-value">
        <span>Комментарий: <?php echo '<p style="color: red">' . $data['comment'] ?></span>
      </div>
    </div>
</body>

<!-- body end -->

</html>