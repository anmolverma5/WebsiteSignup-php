<?php
session_start();
$conn =  mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'unknownbook');
// Check connection
$username = $_POST['userid'];
$password = $_POST['password'];

$s = "select * from usertable where name =  '$username' && password = '$password'";
$result = musqli_query($con, $s);
$num =mysqli_num_rows($result);

add word for github