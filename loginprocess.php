<?php
    $username = $_GET['username'];
    $pwd = $_GET['pwd'];
    if (empty($username) || empty($password)){
        $message = "wrong answer";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            if (!preg_match('/^[a-zA-Z0-9]+$/',$username)){
                echo "Tên chỉ được chứa kí tự a-z, A-Z, 0-9.";
            } else {
                if ($password == "123"){
                    setcookie('username', $username, time()+600);
                    header("Location: index.php");
                    exit;
                } else {
                    echo "Mật khẩu không đúng.";
                }
            }
        }
?>