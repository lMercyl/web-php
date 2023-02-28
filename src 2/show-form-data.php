<?php
$data = $_POST;
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
        <span>Дата создания извещения: <?php echo $data['date'] ?></span>
      </div>
      <div class="task-one__show-value">
        <span>Привет <?php echo $data['name'] ?>!</span>
      </div>
      <div class="task-one__show-value">
        <span>Ваш email <?php echo $data['email'] ?></span>
      </div>
      <div class="task-one__show-value">
        <div>
          <span>Ваша доставка:</span>
        </div>
        <?php if (array_key_exists('curier', $data)) : ?>
          <div>
            <span><?php echo $data['curier'] ?></span>
          </div>
        <?php endif ?>
        <?php if (array_key_exists('airship', $data)) : ?>
          <div>
            <span><?php echo $data['airship'] ?></span>
          </div>
        <?php endif ?>
        <?php if (array_key_exists('train', $data)) : ?>
          <div>
            <span><?php echo $data['train'] ?></span>
          </div>
        <?php endif ?>
        <?php if (array_key_exists('car', $data)) : ?>
          <div>
            <span><?php echo $data['car'] ?></span>
          </div>
        <?php endif ?>
      </div>
      <div class="task-one__show-value">
        <span>Форма поссылки: <?php echo $data['form'] ?></span>
      </div>
      <div class="task-one__show-value">
        <span>Количество: <?php echo $data['amount'] ?></span>
      </div>
      <div class="task-one__show-value">
        <span>Вес: <?php echo $data['weight'] ?></span>
      </div>
      <div class="task-one__show-value">
        <span>Цвет: <?php echo $data['color'] ?></span>
      </div>
      <div class="task-one__show-value">
        <span>Тара: <?php echo $data['type'] ?></span>
      </div>
      <div class="task-one__show-value">
        <span>Комментарий: <?php echo $data['comment'] ?></span>
      </div>
    </div>
</body>

<!-- body end -->

</html>