<?php

// php code to search data in mysql database and set it in input text
error_reporting(-1);
ini_set('display_errors', '1'); // ลองใช้ string '1' แทน 1
if(isset($_POST['search']))
{
    // id to search
    $id = $_POST['id'];

    // connect to mysql
    $connect = mysqli_connect("localhost", "root", "","coffeedb");
    // mysql search query
    $query = "SELECT `Customer_Id`, `Customer_Name`, `Customer_Tel`,`Customer_DateOfBirth` FROM `customerdata` WHERE `Customer_Tel` = $id LIMIT 1";

    $result = mysqli_query($connect, $query);
    // if id exist
    // show data in inputs
    if(mysqli_num_rows($result) > 0){

        while ($row = mysqli_fetch_array($result))
        {
            $Customer_Id = $row['Customer_Id'];
            $Customer_Name = $row['Customer_Name'];
            $Customer_Tel = $row['Customer_Tel'];
            $Customer_DateOfBirth = $row['Customer_DateOfBirth'];
        }
    }

    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
        $Customer_Id = "";
        $Customer_Name = "";
        $Customer_Tel = "";
        $Customer_DateOfBirth = "";
    }

    mysqli_free_result($result);
    mysqli_close($connect);

}

// in the first time inputs are empty
else{
    $Customer_Id = "";
    $Customer_Name = "";
    $Customer_Tel = "";
    $Customer_DateOfBirth = "";
}


?>
<!DOCTYPE html>
<html>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="cff.js" rel="stylesheet" type="text/js">
<body>
<style>
    .buttonm3 {
        background-color:#8B7765 ; /* Green */
        border: none;
        color: white;
        padding: 10px 10px;
        text-align:center;
        text-decoration:none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .buttonme3 {
        background-color:#EEDFCC;
        color:#000000;
        border: 2px solid #8B7765;
        width: 80px;
        height: 50px;
        border-radius: 8px;
        margin-top: 15px;
        margin-left: 5px;
        transition: 0.2s;
        position: absolute;
    }
    .buttonm4 {
        background-color:#8B7765 ; /* Green */
        border: none;
        color: white;
        padding: 10px 10px;
        text-align:center;
        text-decoration:none;
        display: inline-block;
        font-size: 32px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .buttonme4 {
        background-color:#EEDFCC;
        color:#000000;
        border: 2px solid #8B7765;
        width: 500px;
        height: 45px;
        border-radius: 8px;
        margin-top: 0px;
        margin-left: 600px;
        transition: 0.2s;
        position: absolute;
        margin-bottom: 0px;
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
    <br><br>

    <form action="customer.php" method="post">
        <input name="id" type="text" placeholder="(ใส่เบอร์ลูกค้า)"
               style="width:350px;
height:25px;
text-align: center;
font-size: 28px;
border: 2px solid #8B7765;
border-radius: 8px;
margin-left: 50px;">
        <input type="submit" value="ค้นหา" name="search" class="buttonm3 buttonme3">
        <br><br>  &nbsp; &nbsp; &nbsp;

        <img src="peoplepic.png" alt="pp" width="400" height="auto"
             style="margin-left: 950px; position: absolute; margin-top: -100px">

        <h1>รหัสลูกค้า: &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="Customer_Id"style="width:350px;
height:25px;
text-align: center;
font-size: 20px;
border: 2px solid #8B7765;
border-radius: 8px;"value="<?php echo $Customer_Id;?>">
            <br><br>
            ชื่อ-นามสกุล: &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="Customer_Name"style="width:500px;
height:25px;
text-align: center;
font-size: 20px;
border: 2px solid #8B7765;
border-radius: 8px;" value="<?php echo $Customer_Name;?>">
            <br><br>
            วัน/เดือน/ปี เกิด: &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="Customer_DateOfBirth"style="width:350px;
height:25px;
text-align: center;
font-size: 20px;
border: 2px solid #8B7765;
border-radius: 8px;" value="<?php echo $Customer_DateOfBirth;?>">
            <br><br>
            เบอร์โทรศัพท์: &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="Customer_Tel"style="width:350px;
height:25px;
text-align: center;
font-size: 20px;
border: 2px solid #8B7765;
border-radius: 8px;"value="<?php echo $Customer_Tel;?>">
        </h1>
        <a href="customerregis.php" id="button" class="buttonm4 buttonme4" ">สมัครสมาชิก</a>

</form>
</div class="big">
</body>
</html>