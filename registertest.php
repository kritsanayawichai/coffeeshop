<?php
    require "connect.php";

    $username = $_POST["username"];
    $password1 = $_POST["password_1"];
    $password2 = $_POST["password_2"];
    $password = md5($password1);
    $level = $_POST["userlevel"];
    $name = $_POST["Employee_Name"];
    $age = $_POST["Employee_Age"];
    $tel = $_POST["Employee_Tel"];
    $address = $_POST["Employee_Address"];
    $position = $_POST["Employee_JobPosition"];
    $salary = $_POST["Employee_Salary"];
    $birth = $_POST["Employee_DateOfBirth"];

    $mysql_checkusername = "SELECT * FROM login WHERE username = '$username' ";
    $result = mysqli_query($db,$mysql_checkusername);

    if($password1 == $password2){
    if($result != null){
    if(($row = $result->fetch_assoc())>0){
        echo "insert not success";
    } else {
        $mysql_insert = "INSERT INTO login (username,password,userlevel,Employee_Name,Employee_Age,Employee_Tel,Employee_Address,Employee_JobPosition,Employee_Salary,Employee_DateOfBirth) VALUES ('$username','$password','$level','$name','$age','$tel','$address','$position','$salary','$birth')";
        mysqli_query($db,$mysql_insert);
        header('location: index.php');
    }
    }
}else{
        echo "password ไม่ตรงกัน";
    }
?>
