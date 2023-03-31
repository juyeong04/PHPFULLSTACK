<?php

/* 파일명 : gugudan.txt
파일 위치 : sam
내용은 아래와 같음
2단
2 * 1 = 2
2 * 2 = 4
...
2 * 9 = 18 */

// $f_gugudan = fopen("../Example/sam/gugudan.txt", "a");

// for ($j=2; $j <=9 ; $j++) { 
//     // echo $j."단"."\n";
//     fputs($f_gugudan, $j."단"."\n");
//     for ($i=1; $i <= 9; $i++) { 
    
//         $result = $j *  $i;
//         // echo $j." * ".$i." = ".$result."\n";
//         fputs($f_gugudan, $j." * ".$i." = ".$result."\n");
//     }
// }


// fputs 1번만 써서 파일에 추가하기 

//     $a = 0;
//     $print_gugudan = "2단\n";
//     while ($a < 9) {
//         $a++;
//         $result = "2"." * ".$a." = ".(2*$a)."\n";
//         $print_gugudan .= $result;
// }

    // fputs($f_gugudan, $print_gugudan);



//함수로 만들기

    // function func_gugudan($num)
    // {
    //     $a = 1;
    //     $print_gugudan = $num."단\n";
    //     while ($a < 9) {
    //         $result = $num." * ".$a." = ".$num*$a."\n";
    //         $a++; // 위치 중요!!!! 앞문장으로 가면 2부터 시작함
    //         $print_gugudan .= $result;
    //     }
    //     return $print_gugudan;
    // }

    // fputs($f_gugudan, func_gugudan(2));

// fclose($f_gugudan);

/*

김밥
샌드위치
백반
국밥
크림우동
연어초밥
탕수육
돈까스

'국밥'과 '크림우동' 사이에 '스테이크'를 추가해주세요
*/

$f_food2 = file("../Example/sam/food.txt"); // array로 변환
$print_food = "";
foreach ($f_food2 as $val) 
{
    if (trim($val) === "국밥") 
    {
        $print_food .= $val."스테이크\n";
    }
    else 
    {
        $print_food .= $val;
    }
}
print $print_food;
$f_food = fopen("../Example/sam/food2", "w");
fputs($f_food, $print_food);
fclose($f_food);


?>