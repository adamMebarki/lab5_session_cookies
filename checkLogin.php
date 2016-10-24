<?php
    //$username = $_POST["name"];
    //$password = $_POST["password"];
    $_SESSION['username'] = $_POST["name"];
    $_SESSION['password'] = $_POST["password"];
    if ($_SESSION['username'] == "username" && $_SESSION['password'] == "password"){
        //setcookie('access_level_cookie','standarduser');
        $_SESSION['access_level_session'] = "standarduser";
    }
    elseif($_SESSION['username'] == "root" && $_SESSION['password']== "root")
    {
        //setcookie('access_level_cookie','root');
        $_SESSION['access_level_session'] = "root";
    }
header('Location: homepage.php');
?>
