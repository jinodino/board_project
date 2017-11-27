<?php
if(!isset($_SESSION))
{
    session_start();
}

?>
<!--로그인 후 메인 페이지-->
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<script>
    function logout() {
        alert('로그아웃 되었습니다.');
        location.assign('list.php');
    }

</script>
<style>
    body {
        width: 800px;
        margin: auto;
    }
</style>
<body>
<div><center><h2>진호 게시판</h2></center></div>
<center>
    <div>
        <form>
            <?php
            /**
             * Created by PhpStorm.
             * User: wdj
             * Date: 2017-09-18
             * Time: 오전 5:43
             */
            echo "<a href = '#'>".$_SESSION['name']."</a>".'님이 로그인 되었습니다.';
            ?>
        </form>

        <input class="btn btn-warning" type='button' value='로그아웃' onclick='logout()'>

    </div>
</center>
<div class="row">
    <div align="right">
        <form action = 'write.php' method='GET'>
            <input class="btn btn-info" type='submit' value='글 쓰기'>
        </form>
</div>

<!--글 쓰기 목록-->
<table class="table table-hover">
    <tr align="center">
        <td><strong>번호</strong></td>
        <td><strong>제목</strong></td>
        <td><strong>작성자</strong></td>
        <td><strong>조회수</strong></td>
        <td><strong>작성일</strong></td>
    </tr>
    <?php

    ?>
</table>

    <!--페이지네이션-->
    <div class="row">
        <center>
            <button type='button' class='btn btn-info btn-sm' onclick='page_down()'><</button>
            <?php

            ?>
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

