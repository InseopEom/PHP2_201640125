<?php

const NAME= "대숙이";

echo NAME ;

$conf =define("NAME");

if($conf){
    echo "상수 중복";
}else{
    define("NAME", "대림대학교");
    echo NAME."좋아요";
}

//print_r(get_defined_constants()); //모든 상수가 나온다