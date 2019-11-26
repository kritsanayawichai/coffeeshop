<?php
ini_set('display_errors', 1);

  session_start();
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "coffeedb";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);


$datein = date('d/m/Y h:i:s');
$dateout = date('d/m/Y h:i:s');


error_reporting(~0);$sql = "INSERT INTO timeinout (EmployeeName, TimeIn, TimeOut)
		VALUES ('".$_POST["EmployeeName"]."',,'$datein','$dateout')";
$query = mysqli_query($conn,$sql);



mysqli_close($conn);
?>
