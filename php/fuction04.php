<?php

//선언만 했어요
function korean(){

    echo "안녕하세요 .";
}
function English(){

    echo "heelo";
}

$lang="ko";
if($lang=="ko"){
     $fff="korean";
     korean();
}
else{
    $fff="English";
    English();
}

$fff();