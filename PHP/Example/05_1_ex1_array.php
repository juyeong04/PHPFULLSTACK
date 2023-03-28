<?php

// -- 배열 : 변수 안에 값을 여러개 넣기 위해 사용
// [] 안에 있는 숫자 : key / array 안에 있는 요소 : 값
    // $week = array("Sun", "Mon", "Tue", "Wed");
    //     print $week[3];

    $mon = "Mon";
    $sun = "Sun";
    $tue = "Tue";
    $wed = "Wed";
    $week1 = array($sun, $mon, $tue, $wed);
    // echo $week1[3];


    //Mon, Wed, Sun, Tue 순서로 $week2를 변경
    //array 함수 안에 변수 들어갈수 있음!

$week2 = array($week1[1], $week1[3], $week1[0], $week1[2]);
// echo $week2[0];

// -- 멀티타입 배열 : 여러개 타입이 올 수 있음
    $arr_mult_type = array("aaa", 1, 3.123);
    // echo $arr_mult_type[3];
    // var_dump($arr_mult_type); //var_dump : 개발자들이 요소 확인할때 사용, 서비스 할땐 사용하면 안됨


// -- !!연상 배열 : key값(문자 숫자 가능 보통은 문자열!! 굳이 숫자로 안가지고옴, 소숫점x, key값 통일)과 value를 정해서 배열함
    // 나중에 데이터베이스에서 값 가져올 떄 : key값 column명, value값 데이터 됨
    $arr_ass = array("key1" => "val1"
                    , 5 => "val2");
    // echo $arr_ass["key1"];


//-- 다차원 배열 : 기본 2차원 배열([행, 첫째 행 0부터 시작][몇번째 있는지])
    $arr_temp = array(
                    array(1, 2, 3, 4)
                    , array(5, 6, 7, 8)
                );
    // echo $arr_temp[1][3]; //8 출력됨

        //3차원 배열
        $arr_temp = array(
            array(1, 2, 3, 4)
            , array(5, 6, 7, 8)
            , array(
                array(9, 10, 11)
            )
        );
        // echo $arr_temp[2][0][1]; //10 출력

        $arr_temp_3 = $arr_temp[2][0]; //9, 10, 11 있는 array를 변수값으로 지정해줌
        // var_dump($arr_temp_3);

        $array_temp_3 = $arr_temp[2];
        $arr_temp_3_c = array(
                                array(9, 10, 11)
                            );
        // var_dump($arr_temp_3_c);

// 배열의 원소 삭제 : unset(); 키값 자체가 사라짐!!
    $arr_week = array("Sun", "Mon", "delete", "Tue", "Wed");
    unset($arr_week[2]);
    // print_r($arr_week);


// 중복되지 않는 원소를 반환 : array_diff(); 배열 값 커질수록 속도 느려짐
    $arr_diff_1 = array("a", "b", "c");
    $arr_diff_2 = array("a", "b", "d");
    $arr_diff = array_diff($arr_diff_1, $arr_diff_2); // $arr_diff_1 기준, 중복되지 않는 값 출력
    // print_r($arr_diff);


// 배열의 정렬 : asort(), arsort(), ksort(), krsort();
    // asort(); : 값 오름차순으로 정렬
    $arr_asort = array("b", "a", "d", "c");
    asort($arr_asort);
    // print_r($arr_asort);

    // arsort(); : 내림차순
    $arr_arsort = array("b", "a", "d", "c");
    arsort($arr_arsort);
    // print_r($arr_arsort);

    // ksort(); : 키값이 오름차순 정렬(연상배열에서 사용될 수 있음)
    $arr_ksort = array("key1" => "val1"
                    , "key3"=> "val3"
                    , "key4"=> "val4"
                    , "key2"=> "val2");
    ksort($arr_ksort);
    // print_r($arr_ksort);

    // krsort(); : 키값이 내림차순 정렬(연상배열에서 사용될 수 있음)
    $arr_krsort = array("key1" => "val1"
                    , "key3"=> "val3"
                    , "key4"=> "val4"
                    , "key2"=> "val2");
    krsort($arr_krsort);
    // print_r($arr_krsort);

// count(); : array의 요소 개수를 반환하는 함수
    // echo count($arr_krsort);


// foreach( $array as $key => $val ){} : 반복문 / 연상배열 썼을 때 유용하게 쓸 수 있음
// foreach( $array as $val ){};
    $arr1 = array("a" => "1"
                , "b"=> "2"
                , "c"=> "3"
                , "d"=> "4"
            );
    // foreach ($arr1 as $i => $j) : 키, value 값
    // {
    //     echo $i." : ".$j."\n";
    // }
    // foreach($arr1 as $val) : value 값 만!
    // {
    //     echo $val."\n";
    // }


?>