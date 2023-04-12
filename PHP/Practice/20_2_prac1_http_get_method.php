<?php

// 1. Get Method로 사용자가 입력한 데이터를 http request를 함
// 2. 입력한 데이터의 상세내역은 아래와 같습니다.
//  2-1. key : id, pw, name, birth_date
// 3. echo를 이용해서 각각의 데이터를 출력해 주세요

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
    <form method="get" action="">
        <input type="text" name="id" value="id">
        <br>
        <input type="password" name="pw" value="pw">
        <br>
        <input type="text" name="name" value="name">
        <br>
        <input type="date" name="birth_date">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

// ----- 방법1
$result_get = $_GET;
// if( $result_get != null ) // 그냥 echo로만 출력하려면 if문 있어야됨!! 아니면 에러뜸.. 값이 없기 때문에
// {
//     echo $_GET["id"];
//     echo $_GET["pw"];
//     echo $_GET["name"];
//     echo $_GET["birth_date"];
// }

// ------ 방법2
// if(array_key_exists("id", $_GET)) // key값은 하나만 넣을 수 있음!! 여러개 불가 
// {
//     echo $_GET["id"];
//     echo $_GET["pw"];
//     echo $_GET["name"];
//     echo $_GET["birth_date"];
// }


// ------- 방법3 // foreach는 $_GET값 있기 전까지 안돌기 때문에 에러 안나서 if문 굳이 써줄필요 없음!!!!
    foreach ($result_get as $key => $val) {
        echo $key." : ".$val;?>
        <br>
        ?>
    <?php
    }
?>
