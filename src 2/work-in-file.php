<?php
$action = $_POST['action'];

switch ($action) {
  case 'create': {
      $file = fopen("file.txt", "w");
      $text = "Hello Word! I'am web developer.";
      fwrite($file, $text);
      fclose($file);
      break;
    }
  case 'edit': {
      $file = fopen("file.txt", "a");
      $text = " My name Artem Ivanov";
      fwrite($file, $text);
      fclose($file);
      break;
    }
  case 'show': {
      $file = fopen("file.txt", "r");
      echo fread($file, filesize("file.txt"));
      fclose($file);
      break;
    }
}
