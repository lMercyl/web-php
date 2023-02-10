<?php
$data = $_POST;
$sum = 0;
$translate = "";
?>

<div class="show-task-one__left-block">
  <?php if ($data["select"] == "mul") : ?>
    <table border="3">
      <?php for ($i = 1; $i <= 10; $i++) : ?>
        <tr>
          <?php for ($j = 1; $j <= 10; $j++) : ?>
            <td align="center"><?php echo ($i * $j) ?></td>
          <?php endfor ?>
        </tr>
      <?php endfor ?>
    </table>
  <?php endif ?>
  <?php if ($data["select"] == "sum") : ?>
    <div>
      <?php for ($i = 1; $i <= 100; $i++) : ?>
        <?php if ($i % 2 != 0) : ?>
          <?php $sum = $sum + $i ?>
          <span><?php echo $sum ?></span>
        <?php endif ?>
      <?php endfor ?>
    </div>
  <?php endif ?>
  <?php if ($data["select"] == "translate") : ?>
    <form id="translate">
      <label>
        Ваше слово
        <input id="translate__input" type="text" />
      </label>
    </form>
    <div>
      <span id="traslate__text"><?php echo $translate ?></span>
    </div>
  <?php endif ?>
</div>

<script type="text/javascript">
  const translation = {
    source: "",
    translate: ""
  };

  let handler;

  const postTranslation = async (source) => {
    try {
      const response = await fetch('https://libretranslate.de/translate', {
        method: 'POST',
        body: JSON.stringify({
          q: source,
          source: "ru",
          target: "en"
        })
      })
    } catch {
      console.log(err);
    }
  }
</script>