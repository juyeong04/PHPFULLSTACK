<?php

// === 범위 지정 하고, 경계에 있는 값 test해서 꼭 확인하기!! ===

// 성적
// 범위 : 
//     100점 A+
//     90~100점 A
//     80~90 : B
//     70~80 : C
//     60~70 : D
//     60미만 : F
// 출력문구 : "당신의 점수는 00점 입니다. <등급>"

// $num = 120;

// if($num === 100) {
//     echo "당신의 점수는 ".$num."점 입니다. <A+>";
// }
// else if( $num >= 90 && $num < 100 ) {
//     echo "당신의 점수는 ".$num."점 입니다. <A>";
// }
// else if( $num >= 80 && $num < 90 ) {
//     echo "당신의 점수는 ".$num."점 입니다. <B>";
// }
// else if( $num >= 70 && $num < 80 ) {
//     echo "당신의 점수는 ".$num."점 입니다. <C>";
// }
// else if( $num >= 60 && $num < 70 ) {
//     echo "당신의 점수는 ".$num."점 입니다. <D>";
// }
// else if( $num < 60 && $num >= 0 ) {
//     echo "당신의 점수는 ".$num."점 입니다. <F>";
// }
// else{
//     echo "잘못된 값을 입력했습니다";
// }


// echo 한번만 쓰는 방법!

// $num = 85;
// $grade = "";
// if($num === 100) {
//     $grade = "A+";
// }
// else if( $num >= 90 && $num < 100 ) {
//     $grade = "A";
// }
// else if( $num >= 80 && $num < 90 ) {
//     $grade = "B";
// }
// else if( $num >= 70 && $num < 80 ) {
//     $grade = "C";
// }
// else if( $num >= 60 && $num < 70 ) {
//     $grade = "D";
// }
// else if( $num < 60 && $num > 0 ) {
//     $grade = "F";
// }
// else {
//     $grade = "F";
// }

// echo "당신의 점수는 ".$num."점 입니다.<".$grade.">";
// 


//처음에 잘못된 값 걸러내는 방법!!
$num = 90;
$grade = "";

if($num > 100 || $num < 0){
    echo "잘못된 값을 입력했습니다";
}
else{
    if($num === 100) {
        $grade = "A+";
    }
    else if($num >= 90 ) {
        $grade = "A";
    }
    else if( $num >= 80 ) {
        $grade = "B";
    }
    else if( $num >= 70 ) {
        $grade = "C";
    }
    else if( $num >= 60 ) {
        $grade = "D";
    }
    else{
        $grade = "F";
    }
echo "당신의 점수는 ".$num."점 입니다.<".$grade.">";
}


?>

