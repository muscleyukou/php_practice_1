<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset='utf-8'>
<title>フォーム練習</title>
</head>
<body>
<div>
<pre>
<?php
require_once ('utill.php');
$myCode="<h2>テスト１</h2>";
$myArray=["a"=>"<p>赤</p>","b"=>"<script>alert('hello')</script>"];
echo '$myCodeの値', es($myCode);
echo "$myArrayの値";
print_r(es($myArray));
?>
</pre>
</div>
</body>
