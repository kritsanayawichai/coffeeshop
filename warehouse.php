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
<style>/* warehouse page */
    .big{
        position: absolute;
        width: 100%;
        margin-left: 5px;
        padding: 0px;
        box-sizing: border-box;
        background-color:#E8E8E8;
    }

    .column {
        /* Old Chrome, Safari and Opera */
        -webkit-column-count: 3;
        -webkit-column-gap: 40px;
        -webkit-column-rule-style: solid;

        /* Old Firefox */
        -moz-column-count: 3;
        -moz-column-gap: 40px;
        -moz-column-rule-style: solid;

        /* Standard syntax */
        column-count: 3;
        column-gap: 40px;
        column-rule-style: solid;
    }
    table {
        border-collapse: collapse;
    }

    table, td, th {
        border: 5px solid black;
        padding: 8px;
        text-align: center;
        margin-left: 150px;
        margin-bottom: 70px;
    }

</style>
<div class="big">
    <div class="btn">
        <a href="orders.php" class="button">
            ใบสั่งซื้อ
        </a>
        <a href="warehouse.php" class="button">
            คลังวัตถุดิบ
        </a>
        <a href="customer.php" class="button">
            ข้อมูลลูกค้า
        </a>
        <form action="check_level.php">
            <input class="button" type="submit" value="ข้อมูลพนักงาน" > </form>
        <a href="index.php" class="button">
            2AM COFFEE SHOP. &nbsp;
            <img src="logopic.png" width="20px">
        </a>
    </div class="btn">
    <br><br><br>
    <div class="column">
        <br><br>
        <table>
            <tr>
                <th>ชื่อวัตถุดิบ</th>
                <th>จำนวนคงเหลือ</th>
            </tr>
            <tr>
                <form action="addwarehouse.php" method="post">
                    <td>เมล็ดกาแฟ</td>
                    <td> <?php echo $row[0]; ?> กก.</td>
            </tr>
            <tr>
                <td>ผงชาเขียว</td>
                <td> <?php echo $row[1]; ?>กก.</td>

            </tr>
            <tr>
                <td>ชา</td>
                <td> <?php echo $row[2]; ?> กก.</td>

            </tr>
            <tr>
                <td>ช็อกโกแลต</td>
                <td> <?php echo $row[3]; ?> กก.</td>

            </tr>
        </table>
        <br><br><br>
        <table>
            <tr>
                <th>ชื่อวัตถุดิบ</th>
                <th>จำนวนคงเหลือ</th>

            </tr>
            <tr>
                <td>นมสด</td>
                <td> <?php echo $row[4]; ?> กก.</td>

            </tr>
            <tr>
                <td>น้ำแดง</td>
                <td> <?php echo $row[5]; ?> ขวด</td>

            </tr>
            <tr>
                <td>นมข้นหวาน</td>
                <td> <?php echo $row[6]; ?> กระป๋อง</td>

            </tr>
            <tr>
                <td>คอฟฟี่เมท</td>
                <td> <?php echo $row[7]; ?> ถุง</td>

            </tr>
            <tr>
                <td>น้ำเชื่อม</td>
                <td> <?php echo $row[8]; ?> ขวด</td>

            </tr>
            <tr>
                <td>เนสวีต้า</td>
                <td> <?php echo $row[9]; ?> ถุง</td>

            </tr>
        </table>
        <br>
        <table>
            <tr>
                <th>ชื่อวัตถุดิบ</th>
                <th>จำนวนคงเหลือ</th>

            </tr>
            <tr>
                <td>แก้ว</td>
                <td> <?php echo $row[10]; ?> แถว</td>

            </tr>
            <tr>
                <td>ฝา</td>
                <td> <?php echo $row[11]; ?> แถว</td>

            </tr>
            <tr>
                <td>หลอด</td>
                <td> <?php echo $row[12]; ?> ห่อ</td>

            </tr>
            <tr>
                <td>ทิชชู่</td>
                <td> <?php echo $row[13]; ?> ห่อ</td>

            </tr>
            <tr>
                <td>ถุง</td>
                <td> <?php echo $row[14]; ?> ห่อ</td>

            </tr>
        </table>

    </div class="column">
    <div class="btn">
        <a href="warehouse2.php" class="buttonm buttonme" style="margin-top: 100px ;
margin-left: 510px;"
        >เบิก/ถอน วัตถุดิบ</a>

    </div class="colum">
</div class="big">
</body>
</html>
