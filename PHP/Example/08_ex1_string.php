<?php

// 문자열 합치기
    $str_1 = "aaa";
    $str_2 = "bbb";
    $str_sum = $str_1 . $str_2;
// echo $str_sum;

//소문자로 변환
    $str_en = "Abcd efgh";

    echo strtolower($str_en), "\n";

//대문자로 변환
    echo strtoupper($str_en), "\n";

// 맨 앞 글자만 대문자로 변환
    echo ucfirst($str_en), "\n";

// 각 단어의 맨 앞글자만 대문자로 변환
    echo ucwords($str_en), "\n";

// URL 관련 함수
$url = "https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=1&ie=utf8&query=%E3%84%B1";
$arr_url = parse_url($url);
// var_dump($arr_url);

parse_str($arr_url["query"], $arr_parse); //url에 있는 query 정렬해서 보여줌
var_dump($arr_parse);
?>