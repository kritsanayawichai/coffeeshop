<?php
include'connect.php';
$query = "SELECT * FROM login ORDER BY Employee_Time_in and Employee_Time_out asc"; //ตารางที่ใช้กับแอดทริบิ้วที่เรียกค่ามา
$result = mysqli_query($db, $query);
?>
<!DOCTYPE html>
<html>
<link href="style.css" rel="stylesheet" type="text/css">
<body>

<br>
<h5>
    <head>
        <style>

            table, th, td {

                border: 1px solid #8B7765;
                border-radius: 7px;
                background-color:#EEDFCC;
            }
            table{
                padding: 5px 2px;

            }
            th, td {
                padding: 5px;
                text-align: center;
            }
            th {
                text-align: center;
            }
        </style>
    </head>
    <h5>
        <form action="/action_page.php">
            <h3>ประวัติเวลาเข้า/ออกงาน</h3>
            <table style="width:1200px">
                <?php
                echo "<tr><td>เวลาเข้างาน</td><td>เวลาออกงาน</td></tr>";
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" .$row["t_in"] .  "</td> ";
                    echo "<td>" .$row["t_out"] .  "</td> ";
                    echo "</tr>";

                }
                ?>


            </table>

        </form>
        <div class="btn">
            <button class="buttonm buttonclose">close</button>
        </div>

</body>
</html>
