<?php
  session_start();

  $_SESSION['name'] = "";
  $_SESSION['tel'] = "";
  $_SESSION['change'] = "";
  $_SESSION['money'] = "";

  require "connect.php";

  $number = 0;

  $query = "SELECT Orders_PurchasingNumber FROM orders";
  $result = mysqli_query($db, $query);
  $row = array();
while($rows= mysqli_fetch_array($result)){
    $row[] = $rows['Orders_PurchasingNumber'];
  }
  $i = count($row);
  $number = $i + 1;

  $_SESSION['purchasingNumber'] = $number;
  echo "<head><meta http-equiv='Refresh'content = '0; URL = bill.php'></head>";
 ?>
