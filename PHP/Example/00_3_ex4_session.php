<?php


session_start(); // session id 값 "kim"으로 지정해줬는데
                //지금은 session id 지정 안해줘서 "phpsessid" 값을 찾음 ==> 없어서 empty값이 나옴

var_dump($_SESSION);
var_dump($_COOKIE); // 쿠키에 세션아이디 값 자동 저장됨(브라우저 닫기 전까지 session id 여러개 저장함/ 닫으면 다 날아감)
var_dump("세션ID : ".session_id());// session id를 반환
?>