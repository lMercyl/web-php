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
    <div class="task-one__info">

      <!-- task-one-left-block start -->

      <div class="task-one__left">
        <form id="task-one__left-task">
          <div class="task-one__title">
            <span>Работа с циклическими структурами</span>
          </div>
          <div class="task-one__select">
            <select id="task-one__select-input">
              <option value="mul" selected>Таблица умножения</option>
              <option value="sum">Подсчет суммы нечетных чисел</option>
              <option value="translate">Переводчик</option>
            </select>
          </div>
          <div class="task-one__left-button">
            <button id="task_one__left-button" type="submit">ok</button>
          </div>
        </form>
      </div>

      <!-- task-one-left-block end -->

      <!-- task-one-right-block start -->

      <div class="task-one__right">
        <form id="task-one__right-task">
          <div class="task-one__title">
            <span>Работа с файлами</span>
          </div>
          <div class="task-one__choose-list">
            <ul>
              <li>
                <label for="create">
                  <input id="create" name="file" type="radio" />Создание файла
                </label>
              </li>
              <li>
                <label for="add">
                  <input id="add" name="file" type="radio" />Добавление в файл
                </label>
              </li>
              <li>
                <label for="show">
                  <input id="show" name="file" type="radio" />Вывод из файла
                </label>
              </li>
            </ul>
          </div>
          <div class="task-one__right-button">
            <button type="submit">ok</button>
          </div>
        </form>
      </div>

      <!-- task-one-right-block end -->

    </div>
    <div class="task-one__show">
      <div id="task-one-show__left-block" class="task-one-show__left-block">
        <div class="translate-controller" style="display: none">
          <label style="display: block">
            Ваше слово
            <input id="translate__input" />
          </label>
          <label class="translation-block" style="margin-top: 0.5rem">
            Перевод
            <input class="translation__input" />
          </label>
        </div>
      </div>
      <div id="task-one-show__right-block" class="task-one-show__right-block"></div>
    </div>
  </div>

  <!-- javacript start -->

  <script src="./index.js"></script>

  <!-- javacript start -->

</body>

<!-- body end -->

</html>