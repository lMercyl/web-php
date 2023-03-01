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
    <div class="button-file">
      <input class="button-file__input" type="file" accept="image" />
    </div>
    <div class="table-container"></div>
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
    const loadUserTableInLayout = (selector, layout) => {
      document.querySelector(selector).innerHTML += `${layout}`;
    }

    const postUserData = async (user) => {
      const formData = new FormData();
      formData.append('firstName', user.firstName);
      formData.append('lastName', user.lastName);
      formData.append('surName', user.surName);
      formData.append('birthday', user.birthday);
      formData.append('placeOfBirth', user.placeOfBirth);
      formData.append('height', user.height);
      formData.append('weight', user.weight);
      formData.append('img', user.img);
      console.log(formData);

      try {
        const response = await fetch('table.php', {
          method: 'POST',
          body: formData,
        })
        const layout = await response.text();
        loadUserTableInLayout('.table-container', layout);
        document.querySelector('.list-container').style.display = "block";
        document.querySelector('.table-model-container').style.display = "block";
        document.querySelector('.table-model3d-container').style.display = "block";
      } catch (err) {
        alert(err);
      }
    }

    const user = {};
    const fileInput = document.querySelector('.button-file__input');

    user.firstName = prompt('Ваше имя:');
    user.lastName = prompt('Ваша фамилия:');
    user.surName = prompt('Ваше отчество:');
    user.birthday = prompt('Дата рождения:');
    user.placeOfBirth = prompt('Место рождения:');
    user.height = prompt('Рост:');
    user.weight = prompt('Вес:');

    fileInput.addEventListener('change', (event) => {
      user.img = fileInput.files[0];
      postUserData(user);
      console.log(user);
      document.querySelector('.button-file').remove();
    })
  </script>

  <!-- script end -->

</body>

<!-- body end -->

</html>