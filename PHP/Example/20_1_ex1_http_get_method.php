<?php

//1. GET Method
// 1-1. GET Method로 데이터를 넘겨주는 방법
//  - Query String에 키와 값을 셋팅 해줌
//      url을 직접 쳐서 => get method로 서버(PHP?????????)에 데이터 넘겨줌
//          http://localhost/mini_board/src/board_update.php?board_no=21
//          ? 뒷부분 (?board_no=21) : 쿼리스트링, get으로 받아옴

// 1-2. Form Tag를 이용하는 방법
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
    <form method="get" action="20_1_ex2_http_get.php">
        <input type="text" name="test1" value="testValue1">
        <button type="submit">Submit</button>
    </form>
    <!-- form tag 안에 적은 값들을 자동으로url로 바꿔줌
        input을 url로 바꾸면 이렇게 됨(name = key값, value = value 값) 
        http://localhost/20_1_http_get_method.php?test1=testValue1 -->
</body>
</html>

<?php



?>

