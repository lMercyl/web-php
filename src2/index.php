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
              <option value="mul">Таблица умножения</option>
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
                  <input id="create" name="contact" type="radio" value="create" />Создание файла
                </label>
              </li>
              <li>
                <label for="add">
                  <input id="add" name="contact" type="radio" value="add" />Добавление в файл
                </label>
              </li>
              <li>
                <label for="show">
                  <input id="show" name="contact" type="radio" value="show" />Вывод из файла
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
      <div id="task-one-show__left-block" class="task-one-show__left-block"></div>
      <div id="task-one-show__right-block" class="task-one-show__right-block"></div>
    </div>
  </div>

  <!-- javacript start -->

  <script type="text/javascript">
    const formDataLeftTask = new FormData();
    const formDataRightTask = new FormData();
    formDataLeftTask.append("select", "");
    formDataRightTask.append("choose", "");

    const loadComponentInLayout = (selector, layout) => {
      document.querySelector(selector).innerHTML += `${layout}`;
    }

    const postFormDataAndLoadLayout = async (path, data, selector) => {
      try {
        const response = await fetch(path, {
          method: 'POST',
          body: data
        })
        const layout = await response.text();
        loadComponentInLayout(selector, layout);
      } catch (err) {
        console.log(err);
      }
    }

    document.getElementById('task-one__select-input').addEventListener('change', (event) => {
      formDataLeftTask.set('select', event.target.value);
    });

    document.getElementById('create').addEventListener('click', (event) => {
      formDataRightTask.set('choose', event.target.value);
    });

    document.getElementById('add').addEventListener('click', (event) => {
      formDataRightTask.set('choose', event.target.value);
    });

    document.getElementById('show').addEventListener('click', (event) => {
      formDataRightTask.set('choose', event.target.value);
    });

    document.getElementById('task-one__left-task').addEventListener('submit', (event) => {
      event.preventDefault();
      if (formDataLeftTask.get('select')) {
        postFormDataAndLoadLayout('task-one-left-block.php', formDataLeftTask, '.task-one-show__left-block');
      }
    })

    document.getElementById('task-one__right-task').addEventListener('submit', (event) => {
      event.preventDefault();
      if (formDataRightTask.get('choose')) {
        postFormDataAndLoadLayout('task-one-right-block.php', formDataRightTask, '.task-one-show__right-block');
      }
    })
  </script>

  <!-- javacript start -->

</body>

<!-- body end -->

</html>