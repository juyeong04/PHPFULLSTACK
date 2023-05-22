<?php

// cookie 작성(string 형태로 저장, string으로 자동 변환, 길이 제한 있음)
    setcookie("name", "Kim Mihyeon", time() + 30);
    setcookie("age", "26", time() + 300);

// cookie 삭제하기
    // setcookie("age", "", 0); 
?>