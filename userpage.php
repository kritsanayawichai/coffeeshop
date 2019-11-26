<?php
session_start();
if (!$_SESSION['username']) {
    header("Location: index.php");
} else {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User Page</title>

        <link rel="stylesheet" href="style.css">

    </head>
    <body>

    <div class="img">
        <img src="profile.png" style="width:100%" >
    </div>
    <div id="profile">
        <div class="container">
            <div class="button_next">
                <a href="orders.php" class= "btn_next" style="background: #bfbfbf;">
                    ทำรายการต่อ
                </a>
            </div>

            <div class="btn-in">
                <form action="timein.php">

                    <button class = "btn-in container btn_next " style="
                    margin-top: 150px; background: #bfbfbf;
        margin-left: -600px
        ;
">เข้างาน</button>
                </form>
            </div>


            <div class="btn-out">
                <form action="timeout.php" >
                    <button class = "btn-out container btn_out" style="margin-top: 150px; background: #bfbfbf;">ออกงาน</button>
                </form>

            </div>
        </div>

    </div>

    </body>
    </html>


<?php } ?>