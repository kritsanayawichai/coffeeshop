<?php

	require "connect.php";

	$mysql_input = "INSERT INTO add_order (Add_MenuName,Add_MenuPrice) value ('มัคคิอาโตปั่น',60)";

	mysqli_query($db, $mysql_input);

	echo "<head><meta http-equiv='Refresh'content = '0; URL = orders.php'></head>";

?>
