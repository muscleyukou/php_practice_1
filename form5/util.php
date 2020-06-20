<?php
function es($data){
    if(is_array($data)){
        return array_map(__METHOD__,$data);
    }else{
        return htmlspecialchars($data,ENT_QUOTES,'utf-8');
    }
}

function cken(array $data){
    $result=true;
    foreach($data as $key=>$value){
        //foreach文で配列から値を順に取り出す
 if(is_array($value)){
     //引数が配列のとき
     $value=implode("",value);
      //配列を連結させる
 }
 if(!mb_check_encoding($value)){
     //文字エンコードをチェックしたときに違う値だったという条件
     $result=false;
 break;
 }
 }
 return $result;
}