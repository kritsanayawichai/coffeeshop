<?php
    session_start();

    $sum = $_SESSION['sum'];
    $receive = $_POST['receive'];
    $_SESSION['money'] = $receive;

    if($receive >= $sum){
    $change = $receive - $sum;
    }
    else{
      $change = 0;
    }

    $_SESSION['change'] = $change ;
    $_SESSION['receive'] = $receive;

    echo "<head><meta http-equiv='Refresh'content = '0; URL = bill.php'></head>";

 ?>
