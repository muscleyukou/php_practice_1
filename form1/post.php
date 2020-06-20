<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='utf-8'>
<title>フォームの練習</title>
</head>
<body>
    <div>
       <?php
       $number=$_GET['text'];
       $numberlist=['林','hayashi','金城'];
       if(in_array($number,$numberlist)==false){
        echo $number.'は当てはまりません';
       }else{
           echo '大正解！！'.$number.'さんです';
       }
       ?>

    </div>
</body>