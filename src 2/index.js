const formDataLeftTask = new FormData();
const formDataRightTask = new FormData();
formDataLeftTask.append('select', '');
formDataLeftTask.append('currentWord', '');
formDataRightTask.append('action', '');

const loadComponentInLayout = (selector, layout) => {
  document.querySelector(selector).innerHTML += `${layout}`;
};

const postFormDataAndLoadLayout = async (path, data, selector) => {
  try {
    const response = await fetch(path, {
      method: 'POST',
      body: data,
    });
    const layout = await response.text();
    loadComponentInLayout(selector, layout);
  } catch (err) {
    console.log(err);
  }
};

const postFormDataAndLoadInput = async (path, data, input) => {
  try {
    const response = await fetch(path, {
      method: 'POST',
      body: data,
    });
    const text = await response.text();
    input.value = text;
  } catch (err) {
    console.log(err);
  }
}

document.getElementById('task-one__select-input').addEventListener('change', (event) => {
  formDataLeftTask.set('select', event.target.value);
});

document.getElementById('translate__input').addEventListener('change', (event) => {
  const translationInput = document.querySelector('.translation__input');
  setTimeout(() => {
    formDataLeftTask.set('currentWord', event.target.value);
    postFormDataAndLoadInput('task-one-left-block.php', formDataLeftTask, translationInput)
  }, 0);
});

document.getElementById('task-one__left-task').addEventListener('submit', (event) => {
  event.preventDefault();
  if (formDataLeftTask.get('select') === 'translate') {
    document.querySelector('.translate-controller').style.display = "block";
  } else {
    postFormDataAndLoadLayout('task-one-left-block.php', formDataLeftTask, '.task-one-show__left-block');
  }
});

const postCreateFile = async () => {
  try {
    const response = await fetch('work-in-file.php', {
      method: 'POST',
      body: formDataRightTask,
    });
  } catch (err) {
    console.log(err);
  }
};

const postEditFile = async () => {
  try {
    const response = await fetch('work-in-file.php', {
      method: 'POST',
      body: formDataRightTask,
    });
  } catch (err) {
    console.log(err);
  }
};

const postShowFile = async () => {
  try {
    const response = await fetch('work-in-file.php', {
      method: 'POST',
      body: formDataRightTask,
    });
    const layout = await response.text();
    loadComponentInLayout('.task-one-show__right-block', layout);
  } catch (err) {
    console.log(err);
  }
};

document.getElementById('create').addEventListener('change', (event) => {
  if (event.target.value === 'on') {
    formDataRightTask.set('action', 'create');
    postCreateFile();
  }
});

document.getElementById('add').addEventListener('change', (event) => {
  if (event.target.value === 'on') {
    formDataRightTask.set('action', 'edit');
    postEditFile();
  }
});

document.getElementById('show').addEventListener('change', (event) => {
  if (event.target.value === 'on') {
    formDataRightTask.set('action', 'show');
    postShowFile();
  }
});

