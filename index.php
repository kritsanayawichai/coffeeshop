<?php
    session_start();
    session_unset();
?>
<!DOCTYPE html>
<html style="background-color: black;">
<head>
    <title>Employee Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="big">
    <div id="Coffeeindexpic">
        <img src="coffeeindex.jpg"width="100%" height="auto">
        <form method="post" action="check_login.php">
            <div id="login">
                <input type="text" name="username"  placeholder="username">
                <input type="password" name="password" placeholder="password">
                <br><br>

                <input class="loginbtn" name="login_user" type="submit" value=" Submit">

            </div>
        </form>
    </div>
</div>
</body>
</html>
