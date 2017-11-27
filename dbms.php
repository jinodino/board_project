<?php
/**
 * Created by PhpStorm.
 * User: JINHO
 * Date: 2017-11-26
 * Time: 오전 10:18
 */
class dbms {
    const USER_HOST   = "localhost";     // DB 호스트
    const USER_NAME   = "root";          // DB 계정
    const USER_PW     = "autoset";       // DB 비밀번호
    const USER_DB     = "board_pj";      // DB 이름
    const USER_TABLE  = "son_board";     // 테이블 이름
    const LOGIN_TALBE = "login";         // 로그인 테이블 이름
}

class board extends dbms{
    private $query_result;              // mysqli_connect의 반환값

    function __construct()
    {
        $this->query_result = mysqli_connect(board::USER_HOST, board::USER_NAME, board::USER_PW, board::USER_DB);
    }



    // list 출력
    function select() {
        $query = "select * from dbms::USER_TABLE";

        $result = mysqli_query($this->query_result, $query);

        return $result;
    }

    // 아이디 유효성 검사
    function id_select($argid) {
        $query   = "select * from " . board::LOGIN_TALBE . " where id= '$argid'";

        $result = mysqli_query($this->query_result, $query);

        return $result;
    }

    // 비밀번호 유효성 검사
    function pw_select($argpw){
        $query   = "select * from " . board::LOGIN_TALBE . " where pw= '$argpw'";

        $result = mysqli_query($this->query_result, $query);

        return $result;
    }

    // 글 쓰기
    function insert($arguserid, $argusername, $argsubject, $argcontents) {
        $reg_date = date('Y-m-d H:i:s');
        $query  = "INSERT INTO " . dbms::USER_TABLE . " (user_id, user_name, subject, contents, reg_date)";
        $query .= " values ('$arguserid', '$argusername', '$argsubject', '$argcontents', '$reg_date')";

        mysqli_query($this->query_result, $query);
    }

    // 로그인
    function log_insert($arguserid, $argusername, $arguserpw){
        $query  = "INSERT INTO " .  dbms::LOGIN_TALBE . " (id, name, pw)";
        $query .= " values ('$arguserid', '$argusername', '$arguserpw')";

        $result = mysqli_query($this->query_result, $query);

        if($result){
            return true;
        }else {
            return false;
        }
    }
}

?>