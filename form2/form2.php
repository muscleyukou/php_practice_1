<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset='utf-8'>
<title>フォーム練習</title>
</head>
<body>
<div>
<?php
$data='<h1>GOOD</h1><br>Bye</h1>';
$data=rawurlencode($data);
$url='post.php';
echo "<a href={$url}?data={$data}>","送信する","</a>";
?>
</div>
</body>
