<?php
$randSelect = rand(1, 3);

$shop = [
  ["name" => "Big Ocean shop", "address" => "Saint Petersburg, Big Ocean 68", "time" => "08:00 - 13:00", "phone" => "+79214456758"],
  ["name" => "Gastello shop", "address" => "Saint Petersburg, Gastello", "time" => "07:30 - 18:00", "phone" => "+79214456758"],
  ["name" => "Lenca shop", "address" => "Saint Petersburg, Lencsovet", "time" => "07:30 - 21:00", "phone" => "+79214456758"]
];

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
?>

<!DOCTYPE html>
<html lang="ru">

<!-- head start -->

<head>
  <meta charset="utf-8" />
  <title>Lab1</title>
</head>

<!-- head end -->

<!-- body start -->

<body>

  <!-- main wrapper start -->

  <div class="wrapper">
    <div class="table-container">
      <table border="3" class="table" align="center">
        <tr>
          <th align="center">Фамилия</th>
          <th align="center">Имя</th>
          <th align="center">Отчество</th>
          <th align="center">Дата рождения</th>
          <th align="center">Место рождения</th>
        </tr>
        <tr>
          <td class="lastName" align="center"></td>
          <td class="firstName" align="center"></td>
          <td class="surName" align="center"></td>
          <td class="birthday" align="center"></td>
          <td class="placeOfBirth" align="center"></td>
        </tr>
        <tr>
          <th colspan="5" align="center">Дополнительная информация</th>
        </tr>
        <tr>
          <td colspan="1" rowspan="2">
            <img style="object-fit: cover; width: 72px; height: 100%" src="/uploads/images/avatar.jpeg" alt="Avatar user" />
          </td>
          <td colspan="2" align="center">РОСТ</td>
          <td class="height" colspan="2" align="center">
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">ВЕС</td>
          <td class="weight" colspan="2" align="center"></td>
        </tr>
      </table>
    </div>
    <div style="margin-top: 20px" class="list-container">
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
    </div>
    <div style="margin-top: 20px" class="table-model-container">
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
    </div>
    <div style="margin-top: 20px" class="table-model3d-container">
      <?php
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
      echo "</table>"; ?>
    </div>
  </div>

  <!-- main wrapper end -->

  <!-- script start -->

  <script type="text/javascript">
    const loadTextInLayout = (selector, value) => {
      document.querySelector(selector).innerHTML += value;
    }

    const user = {};

    user.firstName = prompt('Ваше имя:');
    user.lastName = prompt('Ваша фамилия:');
    user.surName = prompt('Ваше отчество:');
    user.birthday = prompt('Дата рождения:');
    user.placeOfBirth = prompt('Место рождения:');
    user.height = prompt('Рост:');
    user.weight = prompt('Вес:');

    loadTextInLayout('.firstName', user.firstName);
    loadTextInLayout('.lastName', user.lastName);
    loadTextInLayout('.surName', user.surName);
    loadTextInLayout('.birthday', user.birthday);
    loadTextInLayout('.placeOfBirth', user.placeOfBirth);
    loadTextInLayout('.height', user.height);
    loadTextInLayout('.weight', user.weight);
  </script>

  <!-- script end -->

</body>

<!-- body end -->

</html>