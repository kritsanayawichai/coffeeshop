<?php
session_start();

// initializing variables
$username = "";
$userlevel    = "";
$Employee_Name    = "";
$Employee_Age    = "";
$Employee_Tel    = "";
$Employee_Address    = "";
$Employee_JobPosition    = "";
$Employee_Salary    = "";
$Employee_DateOfBirth    = "";
$errors = array();

// connect to the database
$db = mysqli_connect("localhost", "root", "", "coffeedb");

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $userlevel = mysqli_real_escape_string($db, $_POST['userlevel']);
    $Employee_Name = mysqli_real_escape_string($db, $_POST['Employee_Name']);
    $Employee_Age = mysqli_real_escape_string($db, $_POST['Employee_Age']);
    $Employee_Tel = mysqli_real_escape_string($db, $_POST['Employee_Tel']);
    $Employee_Address = mysqli_real_escape_string($db, $_POST['Employee_Address']);
    $Employee_JobPosition = mysqli_real_escape_string($db, $_POST['Employee_JobPosition']);
    $Employee_Salary = mysqli_real_escape_string($db, $_POST['Employee_Salary']);
    $Employee_DateOfBirth = mysqli_real_escape_string($db, $_POST['Employee_DateOfBirth']);


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    if (empty($userlevel)) { array_push($errors, "userlevel is required"); }
    if (empty($Employee_Name)) { array_push($errors, "Employee Name is required"); }
    if (empty($Employee_Age)) { array_push($errors, "Employee Age is required"); }
    if (empty($Employee_Tel)) { array_push($errors, "Employee Tel is required"); }
    if (empty($Employee_Address)) { array_push($errors, "Employee Address is required"); }
    if (empty($Employee_JobPosition)) { array_push($errors, "Employee JobPosition is required"); }
    if (empty($Employee_DateOfBirth)) { array_push($errors, "Employee DateOfBirth is required"); }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM login WHERE username='$username'LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO login (username, password,userlevel,Employee_Name,Employee_Age,Employee_Tel,Employee_Address,Employee_JobPosition,Employee_Salary,Employee_DateOfBirth) 
  			  VALUES('$username', '$password','$userlevel','$Employee_Name','$Employee_Age','$Employee_Tel','$Employee_Address','$Employee_JobPosition','$Employee_Salary','$Employee_DateOfBirth')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "คุณยังไม่ได้ใส่ ชื่อผู้ใช้");
    }
    if (empty($password)) {
        array_push($errors, "คุณยังไม่ได้ใส่ รหัสผ่าน");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM login WHERE username='$username' OR password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: home.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>

