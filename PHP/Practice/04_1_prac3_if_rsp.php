<!-- if에 0,1,2제외 값 넣으면 에러 메세지 조건 넣기!!!!!!!!!!!! -->

<?php

    // rand : 숫자 무작위로 출력 가능 함수
    $game1 = 1;
    $game2 = rand(0, 2);
    
    // 0은 가위 1은 바위 2는 보

    // === 방법 1

    // if($game1 === $game2){
    //     if($game1 === 0 && $game2 === 0){
    //         echo "game1과 game2는 가위로 비겼습니다";
    //     }
    //     else if($game1 === 1 && $game2 === 1){
    //         echo "game1과 game2는 바위로 비겼습니다";
    //     }
    //     else{
    //         echo "game1과 game2는 보로 비겼습니다";
    //     }
    // }
    // else{
    //     if($game1 === 0 && $game2 === 1){
    //         echo "game1은 가위, game2는 바위를 내서 game2가 이겼습니다";
    //     }
    //     else if($game1 === 0 && $game2 === 2){
    //         echo "game1은 가위, game2는 보를 내서 game1가 이겼습니다";
    //     }
    //     else if($game1 ===1 && $game2 ===0){
    //         echo "game1은 바위, game2는 가위를 내서 game1가 이겼습니다";
    //     }
    //     else if($game1 ===1 && $game2 ===2){
    //         echo "game1은 바위, game2는 보를 내서 game2가 이겼습니다";
    //     }
    //     else if($game1 ===2 && $game2 ===0){
    //         echo "game1은 보, game2는 가위를 내서 game2가 이겼습니다";
    //     }
    //     else {
    //         echo "game1은 보, game2는 바위를 내서 game1가 이겼습니다";
    //     }
    // }
        

    // === 방법 2
    
    $grade = "";
    if($game1 === 0){
        if($game2 === 0){
            $grade = "game1은 가위, game2는 가위를 내서 비겼습니다";
        }
        else if($game2 === 1){
            $grade = "game1은 가위, game2는 바위를 내서 game2가 이겼습니다";
        }
        else{
            $grade = "game1은 가위, game2는 보를 내서 game1가 이겼습니다";
        }
        echo $grade;
    }
    else if($game1 === 1){
        if($game2 === 0){
            $grade = "game1은 바위, game2는 가위를 내서 game2가 이겼습니다";
        }
        else if($game2 === 1){
            $grade = "game1은 바위, game2는 바위를 내서 비겼습니다";
        }
        else{
            $grade = "game1은 바위, game2는 보를 내서 game2가 이겼습니다";
        }
        echo $grade;
    }
    else{
        if($game2 === 0){
            $grade = "game1은 보, game2는 가위를 내서 game2가 이겼습니다";
        }
        else if($game2 === 1){
            $grade = "game1은 보, game2는 바위를 내서 game1가 이겼습니다";
        }
        else{
            $grade = "game1은 보, game2는 보를 내서 비겼습니다";
        }
        echo $grade;
    }

?>

