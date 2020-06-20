<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='utf-8'>
<title>フォームの練習</title>
</head>
<?php
if(isset($_GET['text'])){
    $text=$_GET['text'];
}
if(isset($_GET['muscle'])){
    $muscle=$_GET['muscle'];
}
?>
<body>
    <div>
      <?php 
      echo $text;
      echo $muscle;
      ?>

    </div>
</body>