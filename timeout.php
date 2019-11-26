<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
require "connect.php";
$username = $_SESSION["username"];
$date = date('d/m/Y h:i:s');

if($username != null) {
    $mysql_timein = "UPDATE login SET Employee_Time_out = '$date' WHERE username = '$username'";
    mysqli_query($db, $mysql_timein);
    header("location: index.php");
}
else {
    header("location: index.php");
}


?>
