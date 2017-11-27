<?php
// 아이디와 비밀번호를 관리하는 DB생성

include 'dbms.php';

$user_id   = $_GET['id'];
$user_pw   = $_GET['pw'];
$user_name = $_GET['name'];

$dbms = new board();

// 아이디 생성

$result = $dbms->log_insert($user_id, $user_name, $user_pw);

// 아이디 중복 유무
if($result){
    echo "1";
}else {
    echo "2";
}


?>

