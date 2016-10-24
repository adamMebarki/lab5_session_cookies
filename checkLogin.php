<?php
    //$username = $_POST["name"];
    //$password = $_POST["password"];
    $username = $_POST["name"];
    $password = $_POST["password"];
    if ($username == "username" && $password == "password"){
        //setcookie('access_level_cookie','standarduser');
        session_start();
        $_SESSION['access_level_session'] = "standarduser";
    }
    elseif($username == "root" && $password == "root")
    {
        session_start();
        //setcookie('access_level_cookie','root');
        $_SESSION['access_level_session'] = "root";
    }
header('Location: homepage.php');
?>
