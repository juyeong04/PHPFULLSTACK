<?php
// 성적
// 범위 : 
//     100점 A+
//     90~100점 A
//     80~90 : B
//     70~80 : C
//     60~70 : D
//     60미만 : F
// 출력문구 : "당신의 점수는 00점 입니다. <등급>"

$num = 50;
$front = "당신의 점수는 ";
$end = "점 입니다.";


switch ($num) {
    case $num == 100:
        echo $front.$num.$end."<A+>";
        break;
    case $num == 90:
        echo $front.$num.$end."<A>";
        break;
    case $num == 80:
        echo $front.$num.$end."<B>";
        break;
    case $num == 70:
        echo $front.$num.$end."<C>";
        break;
    case $num == 60:
        echo $front.$num.$end."<D>";
        break;
    default:
        echo $front.$num.$end."<F>";;
        break;
}

// case에 범위값 지정하면 값 제대로 적용 안됨,,,,,
// switch ($num) {
//     case ($num == 100):
//         echo $front.$num.$end."<A+>";
//         break;
//     case ($num >= 90 && $num < 100):
//         echo $front.$num.$end."<A>";
//         break;
//     case ($num >= 80 && $num < 90):
//         echo $front.$num.$end."<B>";
//         break;
//     case ($num >= 70 && $num < 80):
//         echo $front.$num.$end."<C>";
//         break;
//     case ($num >= 60 && $num < 70):
//         echo $front.$num.$end."<D>";
//         break;
//     default:
//         echo $front.$num.$end."<F>";;
//         break;
//     }
?>