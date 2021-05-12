<?php
if (isset($_POST['submit'])) {

    if (isset($_POST['username']) & !empty($_POST['username'])) {
        setcookie('username', $_POST['username']);
    }
}

$username = "";
$emailid = "";
$password = "";
$checkbox = "";

if (isset($_POST['submit'])) {
    $ok = true;
    if (!isset($_POST['username']) || $_POST['username'] === '') {
        $ok === false;
    } else {
        $username = $_POST['username'];
    };
    if (!isset($_POST['emailid']) || $_POST['emailid'] === '') {
        $ok === false;
    } else {
        $emailid = $_POST['emailid'];
    };
    if (!isset($_POST['password']) || $_POST['password'] === '') {
        $ok === false;
    } else {
        $password = $_POST['password'];
    };
    if (!isset($_POST['checkbox']) || $_POST['checkbox'] === '') {
        $ok === false;
    } else {
        $checkbox = $_POST['checkbox'];
    };
    if ($ok) {
        // data code is here
        $db = new mysqli(
            'localhost',
            'root',
            '',
            'unknownbook'
        );
        $sql = sprintf(
            "INSERT INTO users (userid, emailid, password, checkbox)  VALUES ( 
                           '%s','%s', '%s','%s')",
            $db->real_escape_string($username),
            $db->real_escape_string($emailid),
            $db->real_escape_string($password),
            $db->real_escape_string($checkbox)
        );
        $db->query($sql);
        echo '<p>Register Completed</p>';
        $db->close();
    }
}
