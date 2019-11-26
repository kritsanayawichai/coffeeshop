<?php
    session_start();

    if($_SESSION["userlevel"] == "ADMIN"){
        header('location: employee.php');
    } else {
        echo "You are not ADMIN!!!";
    }
?>
