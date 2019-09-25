<?php

if(function_exists("daelim")){
    echo "함수명이 있어요.";

}else{
    function daelim($name, $num){

        echo "대림대학교<br>";
        $arr =[$name, $num];
    
        return $arr;
    }
    
}
list($name, $num) =daelim("대림이", 201640125);
//$name <- $name[0]
//$num <- $name[1]
//print_r($name);
echo $name.$num;