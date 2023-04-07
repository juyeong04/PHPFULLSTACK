<?php

// // min, max, floor, rand, round, ceil
// echo floor(4.9), "\n";
// echo round(4.5), "\n";
// echo ceil(4.1), "\n";
// echo min(array(3, 4, 5, 6, 1, 9)), "\n";
// echo max(array(3, 4, 5, 6, 1, 9)), "\n";
// echo rand(0,2),"\n";

// //날짜 관련 함수
// echo date('Y-M-D H:i:s a'), "\n"; // Y : 2023, y: 23 / M : Mar, m: 03 / H : 24시간 기준, h : 12시간 기준
// echo date('y-m-d h:i:s l');

// //난수 함수 mt_rand : rand 보다 수의 범위가 더 큼, 실행속도도 빠름
// echo mt_rand(0, 3);

//
// var_dump($GLOBALS);

// 상수 선언 
//(명명 규칙 : 상수명은 모든 글자 대문자로!!!!!!!!) , 실수 줄이기 위해서 사용
// 전역변수처럼 함수, 클래스에서 global없이 자유롭게 사용가능
// 한번 설정되면 변형, 삭제 불가능
define("INT_ONE", 1);

echo INT_ONE;

?>