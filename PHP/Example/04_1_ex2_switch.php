<?php

// Switch : break 필수!!!!!
// 정해진 값으로 값 구할때 사용


    $val = 1;

    switch ( $val ) {
        case $val === 1:
            echo "숫자 0입니다.";
            break;
        case 1:
            echo "숫자 1입니다.";
            break;
        default:
            echo "디폴트입니다.";
            break;
    }

?>