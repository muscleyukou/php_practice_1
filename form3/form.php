<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='utf-8'>
<title>フォームの練習</title>
</head>
<body>
<?php
$data=$_GET['text'];
$muscle=$_GET['muscle'];
?>
    <div>
        <form action="post.php" method="get">
             <ul>
                 <li><label>名前：<input type="text" name="text" id=""></label></li>
                 <li><label>好きな筋肉<input type="text" name="muscle" id=""></label></li>
                 <li><input type="submit" value="送信する"></li>
             </ul>
        </form>
    </div>
</body>