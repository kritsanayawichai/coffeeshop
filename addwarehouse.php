<?php

require "connect.php";

$coffee = $_POST['coffee'];
$greentea = $_POST['greentea'];
$tea = $_POST['tea'];
$chocolate = $_POST['chocolate'];
$milk = $_POST['milk'];
$red = $_POST['red'];
$sweete_milk = $_POST['sweete_milk'];
$coffeemate = $_POST['coffeemate'];
$sweete = $_POST['sweete'];
$nesvita = $_POST['nesvita'];
$cup = $_POST['cup'];
$lid = $_POST['lid'];
$tube = $_POST['tube'];
$tissue = $_POST['tissue'];
$bag = $_POST['bag'];

$addcoffee_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $coffee where Warehouse_MaterialName = 'เมล็ดกาแฟ'";
$addgreentea_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $greentea where Warehouse_MaterialName = 'ชาเขียว'";
$addtea_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $tea where Warehouse_MaterialName = 'ชา'";
$addchocolate_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $chocolate where Warehouse_MaterialName = 'ช็อกโกแลต'";
$addmilk_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $milk where Warehouse_MaterialName = 'นมสด'";
$addred_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $red where Warehouse_MaterialName = 'น้ำแดง'";
$addsweete_milk_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $sweete_milk where Warehouse_MaterialName = 'นมข้นหวาน'";
$addcoffeemate_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $coffeemate where Warehouse_MaterialName = 'คอฟฟี่เมท'";
$addsweete_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $sweete where Warehouse_MaterialName = 'น้ำเชื่อม'";
$addnesvita_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $nesvita where Warehouse_MaterialName = 'Nesvita'";
$addcup_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $cup where Warehouse_MaterialName = 'แก้ว'";
$addlid_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $lid where Warehouse_MaterialName = 'ฝา'";
$addtube_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $tube where Warehouse_MaterialName = 'หลอด'";
$addtissue_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $tissue where Warehouse_MaterialName = 'ทิชชู่'";
$addbag_mysql= "update warehouse set Warehouse_Total = Warehouse_Total + $bag where Warehouse_MaterialName = 'ถุง'";

mysqli_query($db, $addcoffee_mysql);
mysqli_query($db, $addgreentea_mysql);
mysqli_query($db, $addtea_mysql);
mysqli_query($db, $addchocolate_mysql);
mysqli_query($db, $addmilk_mysql);
mysqli_query($db, $addred_mysql);
mysqli_query($db, $addsweete_milk_mysql);
mysqli_query($db, $addcoffeemate_mysql);
mysqli_query($db, $addsweete_mysql);
mysqli_query($db, $addnesvita_mysql);
mysqli_query($db, $addcup_mysql);
mysqli_query($db, $addlid_mysql);
mysqli_query($db, $addtube_mysql);
mysqli_query($db, $addtissue_mysql);
mysqli_query($db, $addbag_mysql);



echo "<head><meta http-equiv='Refresh'content = '0; URL = warehouse.php'></head>";

?>
