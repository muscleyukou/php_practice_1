<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>フォーム入力</title>

</head>
<body>
    <div>
   <?php
   require_once('util.php');
   if(!cken($_POST)){
       $encoding=mb_internal_encoding();
       $err="ENcoding error the expected encoding is".$encoding;
       exit($err);
   }
   $_POST=es($_POST);
   ?>
   <?php
   $errors=[];
   ?>
   <?php
   if(isset($_POST['goukei'])){
$goukei=$_POST['goukei'];
if(!ctype_digit($goukei)){
    $errors[]="合計金額を整数で入力してください";
}}
else{
    $errors[]="合計金額が未設定";
}
   ?>
<?php
if(isset($_POST['ninzu'])){
   $ninzu=$_POST['ninzu'];
if(!ctype_digit($ninzu)){
    $errors[]="人数を整数値で入力してください";
}
elseif($ninzu==0){
    $errors[]="0では割り切れません";
}
}
else{
    $errors[]="人数が未設定";
}
?>
 <?php
 if(count($errors)>0){
echo '<ol class="errror">';
foreach($errors as $value){
    echo "<li>","$value","</li>";
}
echo "</ol>";
?>
<form action="nameCheck.php" method="post">
<ul>
<li><input type="submit"value="戻る"></li>
</ul>
</form>
<?php
}else{
    $amari=$goukei%$ninzu;
    $price=($goukei-$amari)/$ninzu;
    $goukei_fmt=number_format($goukei);
    $price_fmt=number_format($price);
    echo "{$goukei_fmt}を{$ninzu}で割ります","<br>";
    echo "1にん当たり{$price_fmt}円を払えば、{$amari}円です";
}

  ?>
  
    </div>
</body>