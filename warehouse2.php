<?php
include 'connect.php';
$query = "SELECT Warehouse_Total FROM warehouse";
$result = mysqli_query($db, $query);
$row = array();
while($rows= mysqli_fetch_array($result)){
    $row[] = $rows['Warehouse_Total'];
}

?>
<!DOCTYPE html>
<html>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<style>
    table {
        border-collapse: collapse;
    }

    table, td, th {
        border: 5px solid black;
        padding: 8px;
        text-align: center;
        margin-left: 55px;
        margin-bottom: 70px;
    }
</style>
<div class="all">

    <p style="font-size:30px; margin-left:600px; font-weight:bold;">การเบิก/เพิ่มวัตถุดิบ</p>

    <div class="column">
        <br><br>
        <table>
            <tr>
                <th>ชื่อวัตถุดิบ</th>
                <th>จำนวนคงเหลือ</th>
                <th>จำนวนที่เบิก/เพิ่ม</th>
            </tr>
            <tr>
                <form action="addwarehouse.php" method="post">
                    <td>เมล็ดกาแฟ</td>
                    <td> <?php echo $row[0]; ?> กก.</td>
                    <td><input type="number" name="coffee" value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
            <tr>
                <td>ผงชาเขียว</td>
                <td> <?php echo $row[1]; ?>กก.</td>
                <td><input type="number" name="greentea" value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
            <tr>
                <td>ชา</td>
                <td> <?php echo $row[2]; ?> กก.</td>
                <td><input type="number" name="tea"value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
            <tr>
                <td>ช็อกโกแลต</td>
                <td> <?php echo $row[3]; ?> กก.</td>
                <td><input type="number" name="chocolate" value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
        </table>
        <br><br><br>
        <table>
            <tr>
                <th>ชื่อวัตถุดิบ</th>
                <th>จำนวนคงเหลือ</th>
                <th>จำนวนที่เบิก/เพิ่ม</th>
            </tr>
            <tr>
                <td>นมสด</td>
                <td> <?php echo $row[4]; ?> กก.</td>
                <td><input type="number" name="milk" value="0"style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
            <tr>
                <td>น้ำแดง</td>
                <td> <?php echo $row[5]; ?> ขวด</td>
                <td><input type="number" name="red" value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
            <tr>
                <td>นมข้นหวาน</td>
                <td> <?php echo $row[6]; ?> กระป๋อง</td>
                <td><input type="number" name="sweete_milk" value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
            <tr>
                <td>คอฟฟี่เมท</td>
                <td> <?php echo $row[7]; ?> ถุง</td>
                <td><input type="number" name="coffeemate" value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
            <tr>
                <td>น้ำเชื่อม</td>
                <td> <?php echo $row[8]; ?> ขวด</td>
                <td><input type="number" name="sweete" value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
            <tr>
                <td>เนสวีต้า</td>
                <td> <?php echo $row[9]; ?> ถุง</td>
                <td><input type="number" name="nesvita" value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <th>ชื่อวัตถุดิบ</th>
                <th>จำนวนคงเหลือ</th>
                <th>จำนวนที่เบิก/เพิ่ม</th>
            </tr>
            <tr>
                <td>แก้ว</td>
                <td> <?php echo $row[10]; ?> แถว</td>
                <td><input type="number" name="cup" value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
            <tr>
                <td>ฝา</td>
                <td> <?php echo $row[11]; ?> แถว</td>
                <td><input type="number" name="lid" value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
            <tr>
                <td>หลอด</td>
                <td> <?php echo $row[12]; ?> ห่อ</td>
                <td><input type="number" name="tube" value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
            <tr>
                <td>ทิชชู่</td>
                <td> <?php echo $row[13]; ?> ห่อ</td>
                <td><input type="number" name="tissue" value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
            <tr>
                <td>ถุง</td>
                <td> <?php echo $row[14]; ?> ห่อ</td>
                <td><input type="number" name="bag" value="0" style="width:40px;
    height:20px;
    text-align: center;
    font-size: 15px;
    text-align: center;
    border: 2px solid #8B7765;
    margin-left: 3px;
    border-radius: 5px;"></td>
            </tr>
        </table>

    </div class="column">

    <input type= "submit" value="เพิ่ม/เบิกวัตถุดิบ" style="font-size: 25px; width: 30%;
background-color: #EEDFCC; border:2px solid #8B7765;border-radius: 9px; padding: 15px; margin-left:40%; margin-top:150px;"></form>

</div>
</div class="all">
</body>
</html>
