<?php

  session_start();
  date_default_timezone_set("Asia/Bangkok");
	require "connect.php";
  $number = $_SESSION['purchasingNumber'];
  $date = date('d/m/Y');
  $Receive = $_SESSION['receive'];
  $Change = $_SESSION['change'];
  $SUM = $_SESSION['sum'];
  $name = $_SESSION['name'];

  $runNum = "INSERT INTO orders (Orders_PurchasingNumber,Order_CustomerName,Orders_Date,Orders_MoneyReceived,Orders_Change,Orders_TotalNet) values ('$number','$name','$date','$Receive','$Change','$SUM')";

  mysqli_query($db, $runNum);

	$mysql_input = "DELETE FROM add_order";

	mysqli_query($db, $mysql_input);


	echo "<head><meta http-equiv='Refresh'content = '0; URL = orders.php'></head>";

?>
