<?php

// I am always Hello  Hello를 Happy로 바꾸어 출력

    // $str_expl = "I,am,always,Hello,.";
    // $arr_expl = explode(",", $str_expl);
    // $arr_expl[3] = "Happy.";
    // $str_impl = implode(" ", $arr_expl);
    // echo $str_impl;

    // $str_all = "I am always Hello.";
    // $arr_expl = explode("Hello", $str_all);
    // $str_impl = implode("Happy", $arr_expl);
    // echo $str_impl;

// 함수명 : my_str_replace / 리턴값 : String $result_str

    $str_all = "I am always Hello.";

    // function my_str_replace($a)
    // {
    //     $arr_expl = explode("Hello", $a);
    //     $str_impl = implode("Happy", $arr_expl);
    //     $a = $str_impl; // 필요 없는 변수 안쓰기!
    //     $result_str = $a;
    //     return $result_str;
    // }

    // function my_str_replace($a)
    // {
    //     $arr_expl = explode("Hello", $a);
    //     $result_str = implode("Happy", $arr_expl);
    //     return $result_str;
    // }

    // 재사용성 개선
        function my_str_replace($param_str, $param_separator, $param_ch)
        {
            $arr_expl = explode($param_separator, $param_str);
            $result_str = implode($param_ch, $arr_expl);
            return $result_str;
        }

        // echo my_str_replace($str_all, "Hello", "Happy"). "\n";
        // var_dump (my_str_replace($str_all));


    // replace 사용
        echo str_replace("Hello", "Happy", $str_all);
//
?>