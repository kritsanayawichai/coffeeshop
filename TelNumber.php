<?php
  session_start();
	require "connect.php";

  $tel = $_POST['tel'];

	$mysql_input = "SELECT Customer_Name FROM customerdata WHERE Customer_Tel = '$tel'";

	$result = mysqli_query($db, $mysql_input);

  if($row=mysqli_fetch_array($result)){
    $_SESSION['name'] = $row['Customer_Name'];
    $_SESSION['tel'] = $tel;
    echo "<head><meta http-equiv='Refresh'content = '0; URL = bill.php'></head>";
  } else {
    echo "<script>alert(ไม่พบข้อมูล);window.location=bill.php;</script>";
  }




?>
