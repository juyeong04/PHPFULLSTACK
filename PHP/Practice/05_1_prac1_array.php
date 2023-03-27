<?php

// 음식 종류 5개 이상 배열로 만들어주세요
// 무작위 값을 출력해주세요
$food = array("치킨", "떡볶이", "보쌈", "족발", "탕수육");
$food_rand = rand(0,4);
// print $food[$food_rand];

// -- 연상배열
// 키는 요리명, 값은 주재료 하나 로 이루어진 배열, 배열 길이(요소의 개수)는 4
$arr_ass_food = array("떡볶이" => "떡"
                    , "탕수육" => "돼지고기1"
                    , "치킨" => "닭고기"
                    , "보쌈" => "돼지고기2"
                    );
// echo $arr_ass_food["치킨"];

// -- unset
// 키 : 김치 원소 삭제
$arr_ass_del = array(
                "된장찌개" => "파"
                , "볶음밥" => "양파"
                , "김치" => "마늘"
                , "비빔밥" => "참기름"
            ); 
unset($arr_ass_del["김치"]);
// print_r($arr_ass_del);

// foreach문을 이용해서 키가 "삭제"인 요소를 제거해주세요
$arr_ass_del = array(
    "된장찌개" => "파"
    , "볶음밥" => "양파"
    ,"삭제" => "값값"
    , "김치" => "마늘"
    , "비빔밥" => "참기름"
); 

foreach ($arr_ass_del as $key => $val) {
    if($key === "삭제"){
        unset($arr_ass_del[$key]);
    }
    else{
        echo $key." : ".$val."\n";
    }
    
}
var_dump($arr_ass_del);
?>