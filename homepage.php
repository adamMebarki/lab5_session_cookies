<?php
//session_start();
$accesslevel = $_SESSION['access_level_session'];
displayAccessLevelInformation($accesslevel);

//$_SESSION = array();
//session_destroy();
function displayAccessLevelInformation($accesslevel)
{
    if($accesslevel == "standarduser")
    {
        echo "<p style = \"background-color: lightgreen\">You are currently logged in as a standard user</p>";
    }
    elseif($accesslevel == "root")
    {
        echo "<p style = \"background-color: red\">You are currently logged in as a root user</p>";
        echo "<p style = \"background-color: red\">You now have access to additional administrative features</p>";

    }


}

?>