<?php

// 1. Post Method
//  html body 안에 들어가있음
//  - request 할 때의 데이터를 get과 다르게 외부에서 볼 수 없음, 쿼리 스트링이 없음
// 

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form Tag로 request -->
    <form method="post" action="20_2_ex2_http_post_method.php">
        <input type="text" name="p_test1">
        <br>
        <input type="hidden" name="p_hidden1" value="aaa">
        <!-- type="hidden" 은 화면에 input 안나옴 // input에 지정해놓은 값은 서버에 넘어옴 -->
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
?>