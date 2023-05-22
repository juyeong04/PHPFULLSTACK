<?php

$user_id = "php506";
$user_pw = "506";

// session명 지정, 지정하지 않으면 "PHPSESSID"로 지정됨
// 무조건 name 지정 다음!! session start!!!!!!!!!! (아니면 디폴트 값으로 지정됨)
    session_name("Kim");

// session 시작
    session_start();

// --------------------
// 유저 인증작업 필요(허용하고 있는 범위 내 id, pw인지 판별 -> db 비교), 지금은 생략
// ---------------------

// session 에 데이터 저장( 보통 id저장, pw 저장 XXXXXXXXXXXXX!!
//(보안상의 이유, 유저 인증 절차 거쳤고 고유한 session id값 부여하기 때문에 id값만 저장해도 괜찮음!))
    $_SESSION["id"] = $user_id;
    $_SESSION["del"] = "delete";




?>