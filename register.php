<!DOCTYPE html>
<html>
<body>
<style>
    body{
        background-color:#E8E8E8;
    }
    .big{
        position: absolute;
        width: 1520px;
        height: 707px;
        top: 51%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 0px;
        box-sizing: border-box;
        background-color:#E8E8E8;
    }
    .box1
    {
        margin-left: 0px;
        width:350px;
        height: 20px;
        padding:10px;
        margin-top:15px;
        border:3px solid #8B7765;
        border-radius: 8px;
        padding-left:3px;
        font-size:20px;
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
        width: 300px;
        height: 55px;
        border-radius: 8px;
        margin-top: 100px;
        margin-left: 600px;
        transition: 0.2s;
        position: absolute;
        margin-bottom: 0px;
    }
</style>
<div class="big">
    <div class="header">
        <h2 style="font-size:30px; text-align: center;">สมัครสมาชิก(สำหรับพนักงาน)</h2>
    </div>

    <form method="post" action="registertest.php">
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label style="font-size:25px;">Username:</label>
        <input type="text" name="username" class="box1">

        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label style="font-size:25px;">Password</label>
        <input type="password" name="password_1" class="box1">

        <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label style="font-size:25px;">Confirm password:</label>
        <input type="password" name="password_2"class="box1">

        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label style="font-size:25px;">userlevel:</label>
        <select name="userlevel" id="userlevel"style="
                margin-left: 0px;
                width:350px;
                height: 50px;
                padding:10px;
                margin-top:15px;
                border:3px solid #8B7765;
                border-radius: 8px;
                padding-left:3px;
                font-size:20px;">
            <option value="ADMIN">ADMIN</option>
            <option value="USER">USER</option>
        </select>

        <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label style="font-size:25px;">Employee Name:</label>
        <input type="text" name="Employee_Name"class="box1">

        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label style="font-size:25px;">Employee Age:</label>
        <input type="text" name="Employee_Age"class="box1">

        <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label style="font-size:25px;">Employee Tel:</label>
        <input type="text" name="Employee_Tel"class="box1">

        &nbsp&nbsp
        <label style="font-size:25px;">Employee Address:</label>
        <input type="text" name="Employee_Address"class="box1">
        <br>&nbsp
        <label style="font-size:25px;">Employee JobPosition:</label>
        <input type="text" name="Employee_JobPosition"class="box1">

        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label style="font-size:25px;">Employee Salary:</label>
        <input type="text" name="Employee_Salary"class="box1">
        <br>
        <label style="font-size:25px;">Employee DateOfBirth:</label>
        <input type="date" name="Employee_DateOfBirth"class="box1">
        <br><br><br>
        <input type="submit" class="buttonm4 buttonme4" name="reg_user" value="สมัคร">
        <p>
        </p>
    </form>
</div class="big">
</body>

