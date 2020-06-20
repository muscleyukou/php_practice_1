<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset='utf-8'>
<title>フォーム練習</title>
</head>
<body>
<div>
<?php
$data=$_GET['data'];
$data=rawurldecode($data);
$data=htmlspecialchars($data,ENT_QUOTES,'UTF-8');
echo "{$data}を受け取りました";
?>
</div>
</body>
