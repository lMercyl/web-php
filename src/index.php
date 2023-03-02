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
    <div style="display: none; margin-top: 20px" class="list-container">
      <?php include("list.php") ?>
    </div>
    <div style="display: none; margin-top: 20px" class="table-model-container">
      <?php include("model.php") ?>
    </div>
    <div style="display: none; margin-top: 20px" class="table-model3d-container">
      <?php include("model3d.php") ?>
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