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
    for ($b=0; $b < $a; $b++) { 
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

function print_star_tri($d)
{
    for ($i=1; $i <= $d; $i++){
        star($i);
    }
}


print_star_tri(4);



?>





