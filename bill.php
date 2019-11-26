<?php
session_start();
include 'connect.php';
$receive = 0;

?>
<!DOCTYPE html>
<html>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<style>
    h6 {
        float:right;
        text-align:right;
        color: #440000;
        font-size: 36px;
        margin-right: 80px;
        margin-left: 500px;
        margin-top: 0px;
        margin-bottom: 0;
        position: relative;
    }

    h7 {
        float:left;
        text-align:left;
        color: #440000;
        font-size: 28px;
        margin-left: 550px;
        margin-top: 0;
        margin-bottom: 0;
    }
    h8 {
        float:left;
        margin-left: 0px;
        margin-top: 50px;
        width: 100px;
    }
    .buttonm {
        border: 2px solid #00CD00;
        background-color: #90EE90;
        text-align: center;
        padding: 10px 20px;
        border-radius: 7px;
        width:300px;
    }
</style>
<div class="big">

    <h8>
        <div class="orders" style="float : left; margin-left: 70%;">
            <?php
            include_once "connect.php";
            $showmenu = "SELECT Add_MenuName,Add_MenuPrice FROM add_order";
            $showprice = "SELECT Add_MenuPrice FROM add_order";
            $resultmenu = $db-> query($showmenu);
            $resultprice = $db-> query($showprice);
            ?>
            <div class="od1">
                <style>
                    table {
                        border-collapse: collapse;
                        width: 100%;
                    }
                    th , td {
                        text-align: left;
                        height: 0px;
                        padding: 10px;
                        width: 50%;
                    }
                </style>
                <table>

                    <th>รายการ</th>
                    <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspราคา</th>

                    <?php
                    $sum = 0;
                    if($resultmenu -> num_rows > 0){
                        while ($row = $resultmenu -> fetch_assoc()) {
                            echo "<tr><td>". $row["Add_MenuName"] ."</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". $row["Add_MenuPrice"] . "</td></tr>";
                            $sum += (int)$row["Add_MenuPrice"];
                        }
                        echo "</table>";
                    }

                    $db-> close();
                    ?>
                </table></div>

            <div class="price">
                <table>
                    <tr>
                        <th>ราคาสุทธิ</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo "$sum"; ?></th>
                        <th>บาท</th>
                        <?php

                        ?>
                </table>
            </div>
        </div></h8>

    <h7>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


        เลขที่ใบสั่งซื้อ<input class="purchasingNumber" type="text" value="<?php echo $_SESSION['purchasingNumber'];?>" style="width:150px;
    height:40px;
    text-align: center;
    font-size: 28px;
    border: 2px solid #8B7765;
    border-radius: 8px;
    margin-left: 30px;">
        <br>
        <form action="TelNumber.php" method="post">
            เบอร์โทรศัพท์<input class="tel" type="text" name="tel" placeholder="(ใส่เบอร์ลูกค้า)" value="<?php echo $_SESSION['tel']; ?>"
                                style="width:350px;
  height:32px;
  text-align: center;
  font-size: 28px;
  border: 2px solid #8B7765;
  border-radius: 8px;
  margin-left: 50px;">
            <input type="submit" style="height: 0px; width: 0px; border: none; padding: 0px;" hidden="true"></form><br>
        ชื่อ-นามสกุล&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo $_SESSION['name'] ?></label><br><br>

        <br><br>
        ราคาสุทธิ<input class="net" type="text" value="<?php echo $sum ?>"
                        style="width:150px;
    height:28px;
    text-align: center;
    font-size: 28px;
    border: 2px solid #8B7765;
    border-radius: 8px;
    margin-left: 120px;">&nbsp;&nbsp; บาท
        <br><br>
        <?php $_SESSION['sum'] = $sum; ?>

        <form action= "calculator.php" method="post">
            จำนวนเงินที่ได้รับ<input class="" type="number" name= "receive" value="<?php echo $_SESSION['money']; ?>" style="width:165px;
    height:45px;
    text-align: center;
    font-size: 28px;
    border: 2px solid #8B7765;
    border-radius: 8px;
    margin-left: 30px;">
            <input type="submit" style="height: 0px; width: 0px; border: none; padding: 0px;" hidden="true">&nbsp;&nbsp; บาท </form>&nbsp;&nbsp;
        <br>
        จำนวนเงินทอน<input class="change" type="text" value="<?php echo $_SESSION['change']; ?>"
                           style="width:150px;
    height:28px;
    text-align: center;
    font-size: 28px;
    border: 2px solid #8B7765;
    border-radius: 8px;
    margin-left: 60px;">&nbsp;&nbsp; บาท
        </form></h7>
    <h6>
        <div class="btn">
            <form action="finishbill.php">
                <input class="buttonm " type="submit"  value="ยืนยันรายการสั่งซื้อ" style="margin-top: 20px";>
            </form>
        </div></h6>
    <hr style ="background-color: #8B7765;
width: 3px;
height: 650px;
margin-top: 0px;
margin-bottom: 0px;
margin-left: 585px;
margin-right: 420px;
position:absolute;">
    <hr style ="background-color: #8B7765;
width: 920px;
height: 2px;
margin-top: 280px;
margin-left: 585px;
margin-right: 420px;
position:absolute;">

</div class="big">
</body>
</html>

