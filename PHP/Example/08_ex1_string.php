<?php

// // 문자열 합치기
//     $str_1 = "aaa";
//     $str_2 = "bbb";
//     $str_sum = $str_1 . $str_2;
// // echo $str_sum;

// //소문자로 변환
//     $str_en = "Abcd efgh";

//     echo strtolower($str_en), "\n";

// //대문자로 변환
//     echo strtoupper($str_en), "\n";

// // 맨 앞 글자만 대문자로 변환
//     echo ucfirst($str_en), "\n";

// // 각 단어의 맨 앞글자만 대문자로 변환
//     echo ucwords($str_en), "\n";

// // URL 관련 함수
    // $url = "https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=1&ie=utf8&query=%E3%84%B1";
    // $arr_url = parse_url($url);
    // // var_dump($arr_url);

    // parse_str($arr_url["query"], $arr_parse); //url에 있는 query 정렬해서 보여줌
    // var_dump($arr_parse);


// 역순의 문자열 (한글 안됨)
    $str_abcd = "abcd";
    // echo strrev($str_abcd);


// 문자열 자르기 (byte 만큼 자르기, 한글은 3byte)
    $str_1 = "가나다라마";
    // echo substr($str_1, 2); // : byte 만큼 자르기
    // echo mb_substr($str_1, 2); // : 글자수 만큼 자르고, 남은 글자 보여주기
    // echo mb_substr($str_1, 2, 1); // : (시작점, 시작점 포함X 뒤부터 글자 몇개 남길건지)
    // echo mb_substr($str_1, -1); // : 음수 => 뒤에서 시작, 글자 몇개 남길건지

        // 문자열 자르기 "PHP입니다."만 출력해주세요
        $str_tng = "안녕하세요. PHP입니다.";
        // echo mb_substr($str_tng, 7);
        // echo mb_substr($str_tng, -7);

        //"세요. P"만 출력
        // echo mb_substr($str_tng, 3, 5);
        // echo mb_substr($str_tng, -11, 5);


// 문자열 빈공간 지우기 : trim / rtrim / ltrim (스페이스, 탭, 개행) but, 문자 사이에 빈공간은 삭제X
    $str_trim = "       ab   cd       \n";

    // echo trim($str_trim);
    // echo "aaa";


// 문자열의 길이 구하는 함수
    // $str_len = "abcd";
    $str_len = "가나다라";

    // echo strlen($str_len); // : byte 단위
    // echo mb_strlen($str_len);


// 문자열 포맷에 따라 출력하는 함수 : 에러메세지 같은거 보낼 때 많이 사용
    // printf("안녕하세요. %s입니다. %d", "PHP", 1234);

    define("WELCOME", "안녕하세요. %s님.");
    // printf(WELCOME, "홍길동");

        // 기본 포맷 : ERROR(숫자) : XXX ERROR가 발생했습니다.
        // 에러 번호 : 에러 종류
        // 1 : 시스템  
        // 2 : 로그인
        // 3 : 접속

        // define("ERROR_MSG", "ERROR(%d) : %s ERROR가 발생했습니다");
        // printf(ERROR_MSG, 1, "시스템");
        // echo "\n";
        // printf(ERROR_MSG, 2, "로그인");
        // echo "\n";
        // printf(ERROR_MSG, 3, "접속");


// 문자열을 분리하는 함수 (잘 안씀)
    // $str_sscanf = "가나다라 50 abcd";
    // sscanf($str_sscanf, "%s %d %s", $str_ko, $int_d, $str_en);
    // echo $str_ko, "\n", $int_d, "\n", $str_en, "\n";


// 문자열을 반복해서 찍어주는 함수 
    // echo str_repeat("어?!", 20);


// 문자열을 특정문자열로 분리하는 함수 : explode() 데이터를 받는 특정 양식이 정해져 있을 때
    $str_expl = "홍길동,27세,남자,의적,조선 ";
    $arr_expl = explode(",", $str_expl);

    print_r($arr_expl);


// 배열을 특정 문자열로 합치는 함수 : implode()
    $str_impl = implode("yo", $arr_expl);
    echo $str_impl;





?>