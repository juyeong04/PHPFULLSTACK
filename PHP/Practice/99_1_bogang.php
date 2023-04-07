<?php

// 콘솔에 출력
    // print ""; // : 에코보다 속도 살짝 느림

    // echo ""; // : api 넘겨줄때 출력해서 넘겨줘야 되기 때문에 쓸 때도 있음

    // print_r(array(1,2,3));

    // var_dump(array(1,2,3));


// 변수 : 정보를 저장하는 장소
    // 한글 사용 금지!!!!! 3byte차지함 시스템마다 한글 처리하는 방식이 달라서 버그 생길 위험!
    // $int_i = 1;
    // echo $int_1;

    // $sum = $int_i + 5;
    
    // 변수는 항상 소문자!! 상수는 대문자


    // [practice]
    // 숫자 10을 변수 $i_ten에 저장, 숫자 5, 8, 3도 변수에 저장
    // 10 - 5 + 8 하고, 3으로 나눈 나머지 구하기

        $i_ten = 10;
        $i_five = 5;
        $i_eight = 8;
        $i_three = 3;

        $result = ($i_ten - $i_five + $i_eight) % $i_three;
        // echo $result;


// 증가, 감소 연산자
    $i_increase = 0;
    $i_decrease = 0;
    
    ++$i_increase; // 전위 증가 연산자
    $i_increase++; // 후위 증가 연산자
    // echo $i_increase;
    
    $i_increase = 0;
    // echo ++$i_increase;
    // echo $i_increase++;
    
    $i_decrease = 0;
    --$i_decrease; // 전위 감소 연산자
    $i_decrease--; // 후위 감소 연산자


// 산술대입 연산자

    // 문자열 산술 대입
        $str = "aa";
        $str = $str . "bb";
        $str .= "bb";
        // echo $str;


// 비교 연산자 : 데이터 비교할 때 데이터 형식까지 비교하기!!
    // $a != $b; //: a와 b가 값이 다르다
    // $a !== $b; //: a와 b가 값과 데이터 형식이 다르다

    $a = 1;
    $b = "1";
    // var_dump( $a != $b ); // false
    // var_dump( $a !== $b ); // true

    // var_dump( false == 0);


// 삼항 연산자를 이용해서 짝수일때는 '짝수'를 출력, 홀수일때는 '홀수'를 출력
    $i = 60;
    $str = "";
    $i % 2 === 0 ? $str = "짝수" : $str = "홀수";
    // echo $str;



//============= 조건문


// if문
    // $i = 1;
    // if ($i % 2 === 0 ) 
    // {
    //     echo "짝수";
    // }
    // else
    // {
    //     echo "홀수";
    // }

    // if ( $i === "1") 
    // {
    //     echo "문자열 1입니다.";
    // }
    // else if ( $i === 1 ) {
    //     echo "숫자 1입니다.";
    // }
    // else
    // {
    //     echo "1이 아닙니다.";
    // }


    // [practice]
    // 과목의 종류는 국어, 영어, 수학, 과학
    // 평균점수가 60점 이상이고, 각 과목별 점수가 40점 이상일 때 "합격"을 출력
    // 그 외는 "불합격" 출력

        $korean = 40;
        $english = 50;
        $math = 100;
        $science = 100;

        $avg_result = ($korean + $english + $math + $science) / 4;


        // if (
        //     $avg_result >= 60 
        //     && $korean >= 40 
        //     && $english >= 40 
        //     && $math >= 40 
        //     && $science >= 40 ) 
        // {
        //     echo $avg_result." "."합격";
        // }
        // else
        // {
        //     echo $avg_result." "."불합격";
        // }


        // function score($a, $b, $c, $d)
        // {
        //     $korean = $a;
        //     $english = $b;
        //     $math = $c;
        //     $science = $d;
        //     $avg_result = ($a + $b + $c + $d) / 4;

        //     if ($avg_result >= 60 && $a >= 40 && $b >= 40 && $c >= 40 && $d >= 40 ) 
        //     {
        //         echo $avg_result." "."합격";
        //     }
        //     else
        //     {
        //         echo $avg_result." "."불합격";
        //     }
        // }
        // score(40,50,100,100);



// switch 문
    // [practice]
    // $str_loc 에 지역명을 저장하고 
    // 서울은 "서울사람", 대구는 "대구사람", 부산은 "부산사람" 그외는 "타 지역사람"을 출력
        

//         $str_loc = "대구";
//         switch ($str_loc) {
//             case "서울":
//                 echo "서울사람";
//                 break;

//             case "대구":
//                 echo "대구사람";
//                 break;

//             case "부산":
//                 echo "부산사람";
//                 break;

//             default:
//                 echo "타지역 사람";
//                 break;
// }


// ========= 반복문 : while, for, do_while, foreaach

    // while문 : 조건을 먼저 체크하고 연산을 실행하는 루프
        // $i = 1;
        // while( $i === 1 )
        // {
        //     echo $i;
        //     break;
        // }

    //do-while : 연산을 먼저 실행하고 조건을 체크해서 루프
        // do{
        //     echo $i;
        // } while ( $i !== 1 );
    


    // for문 : 시작과 끝을 우리가 지정해주는 루프(루프의 횟수 지정가능)
        
        //[practice]
        // 1 ~ 50까지, 반복문을 이용해서 더하는 프로그램을 만들어주세요

        // $num = 50;
        // $result = 0;
        // for ($i=1; $i <= $num ; $i++) { 
        //     $result += $i;
        // }
        // echo $result;


        // function plus($a)
        // {
        //     $result = 0;
        //     for ($i=0; $i <= $a ; $i++) { 
        //         $result = $result + $i;
        //     }
        //     return $result;
        // }
        // echo plus(3);


// ================== 배열

// array
    $arr_i = array(1, 2, 3);
    // echo $arr_i[1];

    // 연상배열 : 콤마 빼먹지 말기!!!!!!!!!!!!!
    
        //[practice]
        // 키값 : std_no, std_name, std_age, std_gender
            $arr_acc = array(
                "std_no" => 7
                , "std_name" => "김주영"
                , "std_age" => 27
                , "std_gender" => "F"
            );
            // echo $arr_acc["std_name"];
    

    // 다차원 배열
        // 2차원 배열
        // $arr_acc = array(
        //     "std_no" => 7
        //     , "std_name" => "김주영"
        //     , "std_age" => 27
        //     , "std_gender" => "F"
        //     , "std_secret_info"
        //         => array (
        //             "std_city_no" => 0716
        //             , "std_addr" => "경북 경산시"
        //         )
        // );
        $arr_acc = array(
            "std_no" => 7
            , "std_name" => "김주영"
            , "std_age" => 27
            , "std_gender" => "F"
        );
        // echo $arr_acc["std_secret_info"]["std_addr"];
        // echo $arr_acc["std_age"];



    // foreach문 : 배열을 루프해서 연산하고 싶을 때
        // foreach ($arr_acc as $key => $val) 
        // {
        //     echo $key." : ".$val."\n";
        // }
        
        //[practice]
        // foreach돌려서 나이만 출력
            // foreach($arr_acc as $key => $val)
            // {
            //     if($key === "std_age")
            //     {
            //         echo $val;
            //     }
            // }

        // 나이 +10 하기

            // foreach($arr_acc as $key => $val)
            // {
            //     if($key === "std_age")
            //     {
            //         $result = $val + 10;
            //         $arr_acc["std_age"] = $result;
            //     }
            // }

            // 효율적인 방법으로,,
            foreach($arr_acc as $key => $val)
            {
                if($key === "std_age")
                {
                    $arr_acc[$key]+= 10; // key값 이미 뽑아 놨으니까 
                    
                }
            }
            // print_r($arr_acc);


//================= 함수 : 재사용성 증가, 가독성 증가


    //---------------------------------
    // 함수명 : clean_class_room
    // 기능 : 이름과 구역을 받아 청소지정 문자열을 반환
    // 파라미터 : $param_name string
    //           $param_loc string
    // 리턴 : $ $result_str string
    //----------------------------------
    function clean_class_room($param_name, $param_loc)
    {
        $result_str = $param_name."씨, ".$param_loc."을/를 청소해주세요. \n";
        return $result_str;
    }
    $result = clean_class_room("봉정", "책상");
    // echo $result;


    //[practice]
    //---------------------------------
    // 함수명 : my_sum_all
    // 기능 : 1부터 지정숫자까지의 합을 구해서 리턴
    // 파라미터 : $param_int  int
    // 리턴 : $result_int int
    //----------------------------------

        function my_sum_all($param_int)
        {
            $a = 1;
            $sum = 0;
            while ($a <= $param_int) 
            {
                $result_int += $a;
                ++$a;
            }
            return $result_int;
        }
        $result_sum = my_sum_all(10);
        echo $result_sum;
?>