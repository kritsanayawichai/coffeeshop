<?php
    session_start();
    require "connect.php";

    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5($password);

    $mysql_check = "SELECT * FROM login WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($db , $mysql_check);

    if(($row = $result->fetch_assoc())>0){
        $_SESSION["username"] = $username;
        $_SESSION["userlevel"] = $row["userlevel"];
        header('location: userpage.php');
    } else {
     echo "login not success";
    }
?>