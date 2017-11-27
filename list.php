<?php
/**
 * Created by PhpStorm.
 * User: JINHO
 * Date: 2017-11-26
 * Time: 오후 7:20
 */

?>
<html>
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        width : 800px;
        margin : auto;
    }
</style>
<body>
<div><center><h2>진호 게시판</h2></center></div>
<center>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        <div class="col-md-1">
            <form action = 'login.html' method='GET'>
                <input class="btn btn-default" type='submit' value='로그인'>
            </form>
        </div>
        <div class="col-md-1">
            <form action = 'join.html' method='GET'>
                <input class="btn btn-default" type='submit' value='회원가입'>
            </form>
        </div>

    </div>
    <!--글 목록-->
    <!--글 쓰기 목록-->
    <table class="table table-hover">
        <tr align="center">
            <td><strong>번호</strong></td>
            <td><strong>제목</strong></td>
            <td><strong>작성자</strong></td>
            <td><strong>조회수</strong></td>
            <td><strong>작성일</strong></td>
        </tr>
    </table>
</center>
<!--페이지네이션-->
<div class="row">
    <center>
        <button type='button' class='btn btn-info btn-sm' onclick='page_down()'><</button>
        <button type='button' class='btn btn-info btn-sm' onclick='page_up()'>></button>
    </center>
</div>
<br>
<!--페이지네이션-->

<!--검색 기능-->
<form action = 'kakunin.php' method="GET">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3" align="right">
            <select class="form-control" cols="3px" name = 'select'>
                <option>선택해주세요</option>
                <option>제목</option>
                <option>내용</option>
                <option>제목+내용</option>
            </select>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" placeholder="입력하세요" name = 'text'>
        </div>
        <div class="col-md-1">
            <button type="submit" class="btn btn-default">확인</button>
        </div>
    </div>
</form>
</body>
</html>
