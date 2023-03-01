<?php
$data = $_POST;
$img = $_FILES;
$to_upload_path = "uploads/images/" . $img["img"]["name"];
move_uploaded_file($_FILES["img"]["tmp_name"], $to_upload_path);
?>

<table border="3" class="table" align="center">
  <tr>
    <th align="center">Фамилия</th>
    <th align="center">Имя</th>
    <th align="center">Отчество</th>
    <th align="center">Дата рождения</th>
    <th align="center">Место рождения</th>
  </tr>
  <tr>
    <td align="center"><?php echo $data["firstName"] ?></td>
    <td align="center"><?php echo $data["lastName"] ?></td>
    <td align="center"><?php echo $data["surName"] ?></td>
    <td align="center"><?php echo $data["birthday"] ?></td>
    <td align="center"><?php echo $data["placeOfBirth"] ?></td>
  </tr>
  <tr>
    <th colspan="5" align="center">Дополнительная информация</th>
  </tr>
  <tr>
    <td colspan="1" rowspan="2">
      <img style="object-fit: cover; width: 72px; height: 100%" src="/uploads/images/<?php echo $img["img"]["name"] ?>" alt="Avatar user" />
    </td>
    <td colspan="2" align="center">РОСТ</td>
    <td colspan="2" align="center"><?php echo $data["height"] ?></td>
  </tr>
  <tr>
    <td colspan="2" align="center">ВЕС</td>
    <td colspan="2" align="center"><?php echo $data["weight"] ?></td>
  </tr>
</table>