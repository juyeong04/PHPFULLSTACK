<?php

// 1. DB 접속
// $conn = new PDO( dns 정보, 유저, 비밀번호, [옵션] );
$db_option = [
    PDO::ATTR_EMULATE_PREPARES  => false // DB의 prepared statement 기능을 사용하도록 설정함
    ,PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION // error가 난 시점에서 멈추는게 아니라 throws 해서 뒤로 넘겨줌
    ,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // DB에서 값 가져올 때 fetch 할때 연상배열로 가져오도록 설정
]; // array() 또는 [] 사용가능!
$conn = new PDO( "mysql:host=localhost;dbname=board;charset=utf8mb4", "root", "root506", $db_option );

// $sql = " SELECT * FROM board_info ";

// // 해당 SQL로 DB요청, statement 객체를 받아옴
// $stmt = $conn->query($sql);
// // statement 객체 정보를 fetch해서 연상배열로 가져옴
// $result = $stmt->fetchAll();

// print_r($result);



// $sql = " SELECT * FROM board_info WHERE board_no = :board_no ";
// $arr_prepare = array(
//     ":board_no" => 1
// );

// $stmt = $conn->prepare($sql); // 해당 쿼리를 세팅해서 statement 객체를 반환
// $stmt->execute($arr_prepare); // 해당 prepared statement 데이터를 이용해서 DB에 요청
// $result = $stmt->fetchAll();
// print_r($result);



// prepare 하나씩 세팅하는 방법
// $title = "PDO Class";
// $no = 1;
// $sql = " UPDATE board_info SET board_title = :board_title WHERE board_no = :board_no ";
// $conn->beginTransaction(); // Transaction 시작
// $stmt = $conn->prepare($sql);
// $stmt->bindParam( ":board_title", $title, PDO::PARAM_STR ); // (prepared, 바꿀 값, 타입)
// $stmt->bindParam( ":board_no", $no, PDO::PARAM_INT ); 
// $stmt->execute();
// $conn->commit(); //commit : Transaction 종료

$sql = "INSERT INTO board_info(board_no, board_title, board_contents, board_write_date, board_del_flg, board_del_date) 
        VALUES(:board_no, :board_title, :board_contents ,NOW(), 0, null)";
$arr_prepare = array(
    ":board_no" => 30
    ,":board_title" => "test"
    ,":board_contents" => "test"
);

$conn->beginTransaction();
$stmt = $conn->prepare($sql);
$stmt->execute($arr_prepare);
$conn->commit();





// DB 파기
$conn = null;





?>
