<?php
$randSelect = rand(1, 3);
?>

<p class="text" align="center">
  <?php
  switch ($randSelect) {
    case 1:
      echo "1. Встал утром <br />Позавтракал <br />Собрался в вуз<br />Приехал домой и лег спать";
      break;
    case 2:
      echo "2. Привет как дела<br />Как погода ха-ха <br />Вышел на улицу<br />Поджарил курицу";
      break;
    case 3:
      echo "3. Теорема пифагоsа<br />Сумма квадратов катетов<br />Равна квадработу гипотенузы<br />Доказано";
      break;
  }
  ?>
</p>