<?php
$username = "";
$password = "";
$checkbox = "";

if (isset($_POST['submit'])) {
    $ok = true;
    if (!isset($_POST['username']) || $_POST['username'] === '') {
        $ok === false;
    } else {
        $username = $_POST['username'];
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
            "INSERT INTO signin (userid, password, checkbox)  VALUES ( 
                           '%s','%s', '%s')",
            $db->real_escape_string($username),
            $db->real_escape_string($password),
            $db->real_escape_string($checkbox)
        );
        var_dump($sql);
        $db->query($sql);
        echo '<p>User Added</p>';
        $db->close();
    }
}
