<?php

//1. while + if가 조합된 거
// $i = 0;
// while( $i <= 4)
// {
//     if( $i === 1 )
//     {
//         echo "1입니다.";
//     }
//     else if( $i === 4 )
//     {
//         echo "4입니다.";
//     }
//     ++$i;
// }

// foreach + if 조합
    // $arr_ass = array( "a" => 1, "b" => 2, "c" => 3 );
    
    // foreach ($arr_ass as $key => $val) 
    // {
    //     if( $key === "c" || $val === 2 )
    //     {
    //         echo "if";
    //     }
    // }

// 이중 루프
// for( $i = 2; $i <= 9; $i++ )
// {
//     echo "$i 단\n";
//     for($x = 1; $x <= 9; $x++)
//     {
//         echo "$i * $x = ", $i * $x,"\n"; 
//     }
//     echo "\n";
// }

// 1 ~ 100까지 숫자중 짝수의 합 구하기

$result = 0;
// for ($i=1; $i <= 100; $i++) { 
//     if( $i % 2 === 0 )
//     {
//         $result += $i;
//     }
// }
// echo $result;

//-- 상흠쓰 답
// $sum = 0;
// for ($i=2; $i <= 100; $i+=2) 
//     { 
//         $sum += $i;
//     }

// echo $sum;

// $arr_test = 
//     array(
//         "a" => 1
//         ,"b" =>2
//         ,"info" =>
//                 array(
//                     "info_a" => 3
//                     ,"info_b" => 4
//                     ,"info_arr"=>
//                             array(
//                                 "f_1" => 5
//                                 ,"f_2" => 7
//                             )
//                 )
//         );

// echo $arr_test["info"]["info_b"];
// echo"\n";
// echo $arr_test["info"]["info_arr"]["f_2"];

// $arr_test = 
//     array(
//         1
//         ,2
//         ,array(
//                 "info_a" => 3
//                 ,"info_b" => 4
//                 ,"info_arr"=>
//                         array(
//                             "f_1" => 5
//                             ,"f_2" => 7
//                         )
//             )
//         );

// echo $arr_test[2]["info_arr"]["f_1"];

// 함수
// function fnc_sum( $param_a, $param_b )
// {
//     $sum = $param_a + $param_b;
//     return $sum; 
// }
// echo fnc_sum(1,2);


//-- 가변 파라미터 사용
    // 방법1
    // function fnc_sum( ...$param_numbers )
    // {
    //     $sum = $param_numbers[0] + $param_numbers[1];
    //     return $sum; 
    // }
    // echo fnc_sum(1,2);

    // 방법2
    // function fnc_sum( ...$param_numbers )
    // {
    //     $sum=0;
    //     foreach( $param_numbers as $val )
    //     {
    //         $sum += $val;
    //     }
    //     return $sum; 
    // }

    // 방법3
    // function fnc_sum( ...$param_numbers )
    // {
    //     return array_sum( $param_numbers ); 
    // }

// global : 함수 안,밖에서 사용할수 있는 변수 

    // function fnc_global() 
    // {
    //     global $global_i;
    //     $global_i = 0;
    // }
    // fnc_global();
    // $global_i = 5;

    // echo $global_i;

//static

    // function fnc_static() 
    // {
    //     static $static_i = 0;
    //     echo $static_i;
    //     $static_i++;

    // }

    // fnc_static();
    // fnc_static();

// function fnc_reference( &$param_str )
// {
//     $param_str = "fnc_reference";
// }
// $str = "aaa";
// fnc_reference( $str );
// echo $str;



/*********************** 
파일명 : 
시스템명 : 
이력
    v001    : new - (사번....)
    v002    : fnc_star 수정 - (사번...)
***********************/


// 함수 재사용성 생각해서
    // function fnc_star( $a ) // v002 del
    // function fnc_star( $a, $b ) // v002 add
    function fnc_star( $a, $b = "$" )// 파라미터 지정 안해줬을 때 디폴트 값으로 '$' 출력되게해줌(첫번째 파라미터는 있어야함)
    {
        // $num = $a; // 불필요 변수
        for ($i=0; $i < $a ; $i++) { 
            // echo "*"; // v002 del
            echo $b; // v002 add
        }
        echo "\n";
    }

    // $b = "&";
    // star(1, $b); 
    // star(2, $b);
    // star(3, $b);
    // star(4, $b);
    // star(5, $b);


// //별 말고 다른모양으로 찍히게
//     function star( $a , $b ) 
//     {
//         $num = $a;
//         for ($i=0; $i < $num ; $i++) { 
//             echo $b;
//         }
//         echo "\n";
//     }
//     $b = "&";
//     star(1, $b); // 함수의 재사용성 위해서 여러번 함수를 호출함, 거꾸로 별도 찍을 수 있음 
//     star(2, $b);
//     star(3, $b);
//     star(4, $b);
//     star(5, $b);


// function star_tri( $a ) // 이렇게 하면 거꾸로 별 못찍음, 재사용성 적음
// {
//     for ($i=1; $i <= $a; $i++) { 
//         star($i);
//         echo "\n";
//     }
// }
// echo star_tri(4);


function fnc_reference2( &$param_str )
{
    echo "2번 : $param_str \n";
    $param_str = "fnc_reference2에서 값 변경";
    echo "3번 : $param_str \n";
}
$str = "aaa";
echo "1번 : $str \n";
fnc_reference2( $str );
echo "4번 : $str \n";





?>