<?php

// 1. 배열의 길이를 반환하는 my_len()함수를 작성하시오

$arr_base = array(1, 2, 3, 4, 5);
// echo my_len();

// function my_len($a)
// {
//     $count = 0; 
//     foreach ($a as $val) 
//     {
//         $count++;
//     }
//     return $count;
// }
// echo my_len($arr_base);

//==================================================

// 별찍기를 함수로 만들기
// $num = 6;
// for ($i=1; $i < $num; $i++) { 
//         for ($p=0; $p < $i; $p++) { 
//             echo "*";
//         }
//         echo "\n";
//     }


function star($a)
{
    for ($i=0; $i < $a; $i++) { 
        echo "*";
    }
    echo "\n";
}

function print_star_rect($c)
{
    for ($i=0; $i < $c; $i++) { 
        star($c);
    }
}


// print_star_rect(3);




// function print_star_tri($d)
// {
//     for ($i=1; $i <= $d; $i++){
//         star($i);
//     }
// }
// print_star_tri(4);

//==================================
// 뭐적어 놓은거지...?
// $arr = array(5, 10, 7, 3, 1);

// foreach ($arr as $key => $val) 
// {
//     echo $key. " > ". $val."\n";
// }

// for ($i=0; $i < count($arr); $i++) 
// { 
//     echo $i." > ".$arr[$i]."\n";
// }
//==========


// Swap

$arr = array(5, 10, 7, 3, 1);
// $temp = $arr[0]; ==> $temp = 5;
// $arr[0] = $arr[1]; ==> $arr[0] = 10;
// $arr[1] = $temp; ==> $arr[1] = 5;



// 버블정렬

// if($arr[1] < $arr[2])
// {
//     print_r ($arr);
// }
// else {
//     $temp = $arr[1];
//     $arr[1] = $arr[2];
//     $arr[2] = $temp;
//     print_r ($arr);
// }

$arr = array(5, 10, 7, 3, 1);
// for ($a=0; $a < count($arr)-1; $a++) { 
//     for ($i=0; $i < count($arr)-1; $i++) //4번 반복
//     {
//         if ($arr[$i] > $arr[$i+1]) 
//         {
//             $temp = $arr[$i];
//             $arr[$i] = $arr[$i+1];
//             $arr[$i+1] = $temp;
//         }
        
//     }
// }

//======================쌤 소스코드 비교하기!!!!!!!!!!!!!!===============
    
// print_r($arr);

// 배열 안에 최대값, 최소값을 출력해주는 함수를 각각 구현해주세요
// 함수명은 "my_max", "my_min"
$arr = array(5, 10, 7, 3, 1);

// for문으로 max값
// function print_max($a)
// {
//     $max = $a[0]; //: for문 안에 있으면 max값이 치환이 안되고 계속 초기화됨
//     for ($i=1; $i < count($a); $i++) //1<5
//     { 
//         if ($max < $a[$i]) 
//         {
//             $max = $a[$i];
//         }
    
//     }
//     return $max;
// }
// echo print_max($arr)."\n";

// function print_min($a)
// {
//     $min = $a[0];
//     for ($i=1; $i < count($a); $i++) 
//     { 
//         if ($min > $a[$i]) 
//         {
//             $min = $a[$i];
//         }
//     }
//     return $min;
// }

echo print_min($arr);

// $max = $arr[0]
// foreach ($arr as $val) {
//     if ($max < $val) 
//     {
//         $max = $val;
//     }
// }

//foreach 써서 min값 : 자기자신 값도 중복 비교함
// function print_min($a)
// {
//     $min = $a[0];
//     foreach ($a as $val) 
//     {
//         if ($min > $val) 
//         {
//             $min = $val;
//         }
//     }
//     return $min;
// }
// echo print_min($arr);




?>