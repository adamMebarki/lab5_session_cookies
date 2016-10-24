<?php
    $username = $_POST["name"];
    $password = $_POST["password"];

    if ($username == "username" && $password == "password"){
        setcookie('access_level_cookie','standarduser');
    }
    elseif($username == "root" && $password == "root")
    {
        setcookie('access_level_cookie','root');

    }
header('Location: homepage.php');
?>
