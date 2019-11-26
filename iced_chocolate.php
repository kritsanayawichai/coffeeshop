<?php

	require "connect.php";

	$mysql_input = "INSERT INTO add_order (Add_MenuName,Add_MenuPrice) value ('ช็อกโกแลตเย็น',55)";

	mysqli_query($db, $mysql_input);

	echo "<head><meta http-equiv='Refresh'content = '0; URL = orders.php'></head>";

?>
