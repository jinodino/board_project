<?php
/**
 * Created by PhpStorm.
 * User: wdj
 * Date: 2017-09-12
 * Time: 오후 3:40
 */
include 'dbms.php';

    // 아이디 값과 비밀번호 값
    $id = $_GET['id'];
    $pw = $_GET['pw'];

    // 디비 연결
    $dbms = new board();
    // 아이디 유효성 확인

    // 로그인 체크
    $login_check = false;
    if($result = $dbms->id_select($id)){
        $sql_num_rows = mysqli_num_rows($result);
        // DB에 아이디가 없을 경우
        if($sql_num_rows == 0){
            echo "<script>alert('아이디와 비밀번호를 확인해주세요')</script>";
            echo "<script>location.assign('login.html');</script>";
        }
        // 아이디가 있는 경우 비밀번호로 유효성 확인
        else {
            if($result = $dbms->pw_select($pw)){
                $sql_num_rows = mysqli_num_rows($result);

                // 비밀번호가 틀린 경우
                if($sql_num_rows == 0) {
                    echo "<script>alert('비밀번호가 맞지 않습니다.')</script>";
                    echo "<script>location.assign('login.html');</script>";
                }
                // 비밀번호가 맞는 경우
                else {
                    // 세션 시작
                    @session_start();
                    $row = mysqli_fetch_array($result);
                    // 로그인 체크 true
                    $login_check = true;
                    $_SESSION['id']   = $id;
                    $_SESSION['pw']   = $pw;
                    $_SESSION['check'] = true;
                    $_SESSION['name'] = $row['name'];
                    echo "<script>alert('로그인 되었습니다.')</script>";
                    echo "<script>location.assign('login_board.php')</script>";
                    }
                }
            }
        }

?>

