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
    <div class="task-two__info">

      <!-- task-two start -->

      <form id="task-two__form" action="show-form-data.php" method="post">
        <div class="task-form__name">
          <span>Извещение о посылке</span>
        </div>
        <div class="task-form__controller">
          <label>
            Дата создания: <input name="date" type="date" />
          </label>
        </div>
        <fieldset>
          <legend>Персональная информация</legend>
          <div class="task-form__contain">
            <div class="task-form__controller">
              <label>
                Введите имя: <input name="name" type="text" />
              </label>
            </div>
            <div class="task-form__controller">
              <label>
                Введите email: <input name="email" type="email" />
              </label>
            </div>
            <div class="task-form__controller">
              <label>
                Комментарий: <textarea name="comment" type="text"></textarea>
              </label>
            </div>
        </fieldset>
        <fieldset>
          <legend>Дополнительная информация</legend>
          <div class="task-form__contain">
            <div class="task-form__controller">
              <div class="task-form__list-title">
                <span>Доставка:</span>
              </div>
              <ul>
                <li>
                  <label>
                    <input name="curier" type="checkbox" value="Курьер" />Курьер
                  </label>
                </li>
                <li>
                  <label>
                    <input name="airship" type="checkbox" value="Самолет" />Самолет
                  </label>
                </li>
                <li>
                  <label>
                    <input name="train" type="checkbox" value="Поезд" />Поезд
                  </label>
                </li>
                <li>
                  <label>
                    <input name="car" type="checkbox" value="Автотранспорт" />Автотранспорт
                  </label>
                </li>
              </ul>
            </div>
            <div class="task-form__controller">
              <label>Форма поссылки:</label>
              <select name="form" form="task-two__form">
                <option value="Круглая" selected>Круглая</option>
                <option value="Квадратная">Квадратная</option>
              </select>
            </div>
            <div class="task-form__controller">
              <label>Цвет поссылки:</label>
              <input name="color" type="color" />
            </div>
            <div class="task-form__controller">
              <label>
                Количество: <input name="amount" type="number" />
              </label>
            </div>
            <div class="task-form__controller">
              <div class="task-form__title-select">
                <span>Тара:</span>
              </div>
              <select name="type" form="task-two__form" multiple>
                <option value="Бьющаяся" selected>Бьющаяся</option>
                <option value="Хрупкая">Хрупкая</option>
                <option value="Водонепроницаемая">Водонепроницаемая</option>
                <option value="Пожароопасная">Пожароопасная</option>
              </select>
            </div>
            <div class="task-form__controller">
              <div class="task-form__list-title">
                <span>Вес:</span>
              </div>
              <label>
                <input name="weight" type="radio" value="до" />до 50 кг
              </label>
              <label>
                <input name="weight" type="radio" value="больше" />больше 50 кг
              </label>
            </div>
          </div>
          <div class="task-form__controller">
            <button type="submit">Отправить</button>
          </div>
          <div class="task-form__controller">
            <button type="reset">Сбросить</button>
          </div>
        </fieldset>
      </form>
      <!-- task-two end -->
    </div>
</body>

<!-- body end -->

</html>