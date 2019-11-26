
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="cff.js" rel="stylesheet" type="text/js">
<body>
<style>

    .buttonm4 {
        background-color:#8B7765 ; /* Green */
        border: none;
        color: white;
        padding: 10px 10px;
        text-align:center;
        text-decoration:none;
        display: inline-block;
        font-size: 32px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .buttonme4 {
        background-color:#EEDFCC;
        color:#000000;
        border: 2px solid #8B7765;
        width: 500px;
        height: 65px;
        border-radius: 8px;
        margin-top: 200px;
        margin-left: 550px;
        transition: 0.2s;
        position: absolute;
        margin-bottom: 0px;
    }
</style>
<div class="big">
    <p style="font-size:30px; margin-left:600px; font-weight:bold;">สมัครสมาชิก(สำหรับลูกค้า)</p>
    <form action="customerregis.php" method="post">
        <h1>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
            ชื่อ-นามสกุล: &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="Customer_Name"style="width:500px;
height:25px;
text-align: center;
font-size: 20px;
border: 2px solid #8B7765;
border-radius: 8px;">
            <br><br>
            &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
            วัน/เดือน/ปี เกิด: &nbsp;
            <input type="date" name="Customer_DateOfBirth"style="width:480px;
height:45px;
text-align: center;
font-size: 20px;
border: 2px solid #8B7765;
border-radius: 8px;">
            <br><br>
            &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
            เบอร์โทรศัพท์: &nbsp;
            <input type="number" name="Customer_Tel"style="width:485px;
height:45px;
text-align: center;
font-size: 20px;
border: 2px solid #8B7765;
border-radius: 8px;">
        </h1>
       <input  class="buttonme4 buttonm4" type="submit" name="submit" value="สมัครสมาชิก" >
</form>
</div class="big">
</body>
</html>
<?php
ini_set('display_errors', 1);
error_reporting(~0);

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "coffeedb";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$sql = "INSERT INTO customerdata (Customer_Name, Customer_DateOfBirth, Customer_Tel) 
		VALUES ('".$_POST["Customer_Name"]."','".$_POST["Customer_DateOfBirth"]."','".$_POST["Customer_Tel"]."')";
$query = mysqli_query($conn,$sql);

mysqli_close($conn);
?>