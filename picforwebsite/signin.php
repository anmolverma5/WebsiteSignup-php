<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'unknownbook');
$name = $_POST['username'];
$password = $_POST['password'];

$s = "select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if ($num == 1) {
    echo "Username Already Taken";
} else {
    $reg = "insert into usertable(username,password) values( '$username','$password)'";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}
