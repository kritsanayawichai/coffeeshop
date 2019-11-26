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
    $query = "SELECT * FROM login WHERE id = $id LIMIT 1";

    $result = mysqli_query($connect, $query);
    // if id exist
    // show data in inputs
    if(mysqli_num_rows($result) > 0){

        while ($row = mysqli_fetch_array($result))
        {
            $in = $row['id'];
            $Employee_Name = $row['Employee_Name'];
            $Employee_Age = $row['Employee_Age'];
            $Employee_Tel = $row['Employee_Tel'];
            $Employee_Address = $row['Employee_Address'];
            $Employee_JobPosition = $row['Employee_JobPosition'];
            $Employee_Salary = $row['Employee_Salary'];
            $Employee_DateOfBirth = $row['Employee_DateOfBirth'];
            $Employee_Time_in = $row['Employee_Time_in'];
            $Employee_Time_out = $row['Employee_Time_out'];
        }
    }

    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
        $in = "";
        $Employee_Name = "";
        $Employee_Age = "";
        $Employee_Tel = "";
        $Employee_Address = "";
        $Employee_JobPosition = "";
        $Employee_Salary = "";
        $Employee_DateOfBirth = "";
        $Employee_Time_in = "";
        $Employee_Time_out = "";
    }

    mysqli_free_result($result);
    mysqli_close($connect);

}

// in the first time inputs are empty
else{
    $in = "";
    $Employee_Name = "";
    $Employee_Age = "";
    $Employee_Tel = "";
    $Employee_Address = "";
    $Employee_JobPosition = "";
    $Employee_Salary = "";
    $Employee_Time_in_out = "";
    $Employee_DateOfBirth = "";
    $Employee_Time_in = "";
    $Employee_Time_out = "";
}


?>

<!DOCTYPE html>
<html>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<style>
    .buttonm2 {
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

    .buttonme2 {
        background-color: #EEDFCC;
        color: #000000;
        border: 2px solid #8B7765;
        width: 180px;
        height: 30px;
        border-radius: 8px;
        margin-top: 15px;
        margin-left: 850px;
        transition: 0.2s;
        position: absolute;
    }
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


    <form action="employee.php" method="post">
        <input type="text" name="id" placeholder="(ค้นหารหัสพนักงาน)"
               style="width:350px;
height:25px;
text-align: center;
font-size: 25px;
border: 2px solid #8B7765;
border-radius: 8px;
margin-left: 50px;">
        <a href="register.php" class="buttonm2 buttonme2">เพิ่มพนักงาน</a>
        <input type="submit" name="search" class="buttonm3 buttonme3" value="ค้นหา">

        <br><br>
        <h1>รหัสพนักงาน:
            <input type="text" name="ID"style="width:300px;
height:25px;
text-align: center;
font-size: 20px;
margin-left: 5px;
border: 2px solid #8B7765;
border-radius: 8px;"value="<?php echo $in;?>">

            &nbsp; &nbsp; &nbsp; &nbsp; ชื่อ-นามสกุล:
            <input type="text" name="Employee_Name"style="width:500px;
height:25px;
text-align: center;
font-size: 20px;
margin-left: 20px;
border: 2px solid #8B7765;
border-radius: 8px;"value="<?php echo $Employee_Name;?>">
            <br><br>
            เบอร์โทรศัพท์:
            <input type="text" name="Employee_Tel"style="width:250px;
height:25px;
text-align: center;
font-size: 20px;
margin-left: 20px;
border: 2px solid #8B7765;
border-radius: 8px;"value="<?php echo $Employee_Tel;?>">
            &nbsp; &nbsp; &nbsp; &nbsp; วัน/เดือน/ปี เกิด:&nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="Employee_DateOfBirth"style="width:250px;
height:25px;
text-align: center;
font-size: 20px;
border: 2px solid #8B7765;
border-radius: 8px;"value="<?php echo $Employee_DateOfBirth;?>">
            &nbsp; &nbsp; &nbsp; &nbsp; อายุ:&nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="Employee_Age"style="width:100px;
height:25px;
text-align: center;
font-size: 20px;
border: 2px solid #8B7765;
border-radius: 8px;"value="<?php echo $Employee_Age;?>">
            <br><br>
            ที่อยู่:
            <input type="text" name="Employee_Address"style="width:1200px;
height:25px;
text-align: center;
font-size: 20px;
margin-left: 10px;
border: 2px solid #8B7765;
border-radius: 8px;"value="<?php echo $Employee_Address;?>">
            <br><br>
            ตำแหน่ง:
            <input type="text" name="Employee_JobPosition"style="width:500px;
height:25px;
text-align: center;
font-size: 20px;
margin-left: 5px;
border: 2px solid #8B7765;
border-radius: 8px;"value="<?php echo $Employee_JobPosition;?>"> &nbsp; &nbsp;
            เงินเดือน:&nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="Employee_Salary"style="width:300px;
height:25px;
text-align: center;
font-size: 20px;
border: 2px solid #8B7765;
border-radius: 8px;" value="<?php echo $Employee_Salary;?>">
            บาท
            <br><br>
            เวลาเข้า&nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="Employee_Time_in"style="width:500px;height:25px;text-align: center;font-size: 20px;border: 2px solid #8B7765;border-radius: 8px;"value="<?php echo $Employee_Time_in;?>">

            เวลาออก&nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="Employee_Time_out"style="width:500px;height:25px;text-align: center;font-size: 20px;border: 2px solid #8B7765;border-radius: 8px;"value="<?php echo $Employee_Time_out;?>">


    </form>
</div class="big">
</body>
</html>
