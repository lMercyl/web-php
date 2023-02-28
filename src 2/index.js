const formDataLeftTask = new FormData();
const formDataRightTask = new FormData();
formDataLeftTask.append('select', '');
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

document.getElementById('task-one__select-input').addEventListener('change', (event) => {
  formDataLeftTask.set('select', event.target.value);
});

document.getElementById('task-one__left-task').addEventListener('submit', (event) => {
  event.preventDefault();
  if (formDataLeftTask.get('select')) {
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

const translation = {
  source: '',
  translate: '',
};

const postTranslation = async (source) => {
  try {
    const response = await fetch('https://libretranslate.de/translate', {
      method: 'POST',
      body: JSON.stringify({
        q: source,
        source: 'ru',
        target: 'en',
      }),
      headers: { "Content-Type": "application/json" }
    });
    const data = await response.json();
    translation.translate = data.translatedText;
    document.getElementById('translation__input').value = translation.translate;
  } catch {
    console.log(err);
  }
};

document.getElementById('translate__input').addEventListener('change', (event) => {
  setTimeout(() => {
    translation.source = event.target.value;
    postTranslation(translation.source);
  }, 1000);
});
