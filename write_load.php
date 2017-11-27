<?php
/**
 * Created by PhpStorm.
 * User: JINHO
 * Date: 2017-11-26
 * Time: 오후 7:37
 */
session_start();
include 'dbms.php';

$dbms = new board();

$subject  = $_GET['title'];
$contents = $_GET['contents'];

$dbms->insert();


?>
