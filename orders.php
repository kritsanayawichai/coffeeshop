<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
<title>orders menu</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
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

      <div class="btnmenu">
          <button class="btn-hot">
              ร้อน</button>

          <button class="btn-iced">
              เย็น</button>

          <button class="btn-frappe">
              ปั่น</button>
      </div>

      <div class="Drink">
          <div class="hot">
              <form action="/coffeeshop/hot_cappuccino.php">
                  <input class="drink1" type="submit" value="คาปูชิโน่" > </form>
              <form action="/coffeeshop/hot_latte.php">
                  <input class="drink1" type="submit" value="ลาเต้" > </form>
              <form action="/coffeeshop/hot_mocca.php">
                  <input class="drink1" type="submit" value="มอคค่า" > </form>
              <form action="/coffeeshop/hot_mucci.php">
                  <input class="drink1" type="submit" value="มัคคิอาโต" > </form>
              <form action="/coffeeshop/hot_tea.php">
                  <input class="drink1" type="submit" value="ชา" > </form>
              <form action="/coffeeshop/hot_greenteamilk.php">
                  <input class="drink1" type="submit" value="ชาเขียวนม" > </form>
              <form action="/coffeeshop/hot_blacktea.php">
                  <input class="drink1" type="submit" value="ชาดำ" > </form>
              <form action="/coffeeshop/hot_milk.php">
                  <input class="drink1" type="submit" value="นมสด" > </form>
              <form action="/coffeeshop/hot_chocolate.php">
                  <input class="drink1" type="submit" value="ช็อกโกแลต" > </form></div>


          <div class="iced">
              <form action="/coffeeshop/iced_cappuccino.php">
                  <input class="drink2" type="submit" value="คาปูชิโน" > </form>
              <form action="/coffeeshop/iced_latte.php">
                  <input class="drink2" type="submit" value="ลาเต้" > </form>
              <form action="/coffeeshop/iced_mocca.php">
                  <input class="drink2" type="submit" value="มอคค่า" > </form>
              <form action="/coffeeshop/iced_mucci.php">
                  <input class="drink2" type="submit" value="มัคคิอาโต" > </form>
              <form action="/coffeeshop/iced_tea.php">
                  <input class="drink2" type="submit" value="ชา" > </form>
              <form action="/coffeeshop/iced_greenteamilk.php">
                  <input class="drink2" type="submit" value="ชาเขียวนม" > </form>
              <form action="/coffeeshop/iced_milktea.php">
                  <input class="drink2" type="submit" value="ชานม" > </form>
              <form action="/coffeeshop/iced_blacktea.php">
                  <input class="drink2" type="submit" value="ชาดำ" > </form>
              <form action="coffeeshop/iced_milk.php">
                  <input class="drink2" type="submit" value="นมสด" > </form>
              <form action="/coffeeshop/iced_chocolate.php">
                  <input class="drink2" type="submit" value="ช็อกโกแลต" > </form>
              <form action="/coffeeshop/iced_lemontea.php">
                  <input class="drink2" type="submit" value="ชามะนาว" > </form>
              <form action="/coffeeshop/iced_greenteahoney.php">
                  <input class="drink2" type="submit" value="ชาเขียวน้ำผึ้ง" > </form>
              <form action="/coffeeshop/iced_matchalatte.php">
                  <input class="drink2" type="submit" value="มัทฉะลาเต้" > </form>
              <form action="/coffeeshop/iced_Freshmilktea.php">
                  <input class="drink2" type="submit" value="เฟรชมิลค์ที" > </form>
              <form action="/coffeeshop/iced_Americano.php">
                  <input class="drink2" type="submit" value="อเมริกาโน่" > </form>
              <form action="/coffeeshop/iced_darkchocolate.php">
                  <input class="drink2" type="submit" value="ดาร์คช็อกโกแลต" > </form>
              <form action="/coffeeshop/iced_pinkmilk.php">
                  <input class="drink2" type="submit" value="นมชมพู" > </form>
              <form action="/coffeeshop/iced_Icedtea.php">
                  <input class="drink2" type="submit" value="ชาเย็น" > </form></div>

          <div class="frappe">
              <form action="/coffeeshop/frappe_cappuccino.php">
                  <input class="drink3" type="submit" value="คาปูชิโน่" > </form>
              <form action="/coffeeshop/frappe_latte.php">
                  <input class="drink3" type="submit" value="ลาเต้" > </form>
              <form action="/coffeeshop/frappe_mocca.php">
                  <input class="drink3" type="submit" value="มอคค่า" > </form>
              <form action="/coffeeshop/frappe_mucci.php">
                  <input class="drink3" type="submit" value="มัคคิอาโต" > </form>
              <form action="/coffeeshop/frappe_nesvitatea.php">
                  <input class="drink3" type="submit" value="ชาเนสวีต้า" > </form>
              <form action="/coffeeshop/frappe_greenteamilk.php">
                  <input class="drink3" type="submit" value="ชาเขียวนม" > </form>
              <form action="/coffeeshop/frappe_milktea.php">
                  <input class="drink3" type="submit" value="ชานม" > </form>
              <form action="/coffeeshop/frappe_milk.php">
                  <input class="drink3" type="submit" value="นมสด" > </form>
              <form action="/coffeeshop/frappe_chocolate.php">
                  <input class="drink3" type="submit" value="ช็อกโกแลต" > </form>
              <form action="/coffeeshop/frappe_matcharedbean.php">
                  <input class="drink3" type="submit" value="มัทฉะถั่วแดง" > </form>
              <form action="/coffeeshop/frappe_matchalatte.php">
                  <input class="drink3" type="submit" value="มัทฉะลาเต้" > </form>
              <form action="/coffeeshop/frappe_Freshmilktea.php">
                  <input class="drink3" type="submit" value="เฟรชมิลค์ที" > </form>
              <form action="/coffeeshop/frappe_darkchocolate.php">
                  <input class="drink3" type="submit" value="ดาร์คช็อกโกแลต" > </form>
              <form action="/coffeeshop/frappe_pinkmilk.php">
                  <input class="drink3" type="submit" value="นมชมพู" > </form>
              <form action="/coffeeshop/frappe_Icedtea.php">
                  <input class="drink3" type="submit" value="ชาเย็น" > </form></div>
      </div>

      <div class="orders">
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
                      width: 600px;
                  }
                  th , td  {
                      text-align: left;
                      height: 30px;
                      width:500px;
                  }
              </style>
              <table>
                  <tr>
                      <th>รายการ</th>
                      <th>ราคา</th>
                  </tr>
                  <?php
                  $sum = 0;
                  if($resultmenu -> num_rows > 0){
                      while ($row = $resultmenu -> fetch_assoc()) {
                          echo "<tr><td>". $row["Add_MenuName"] ."</td><td>". $row["Add_MenuPrice"] . "</td></tr>";
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
                      <th><?php echo "$sum"; ?></th>
                      <th>บาท</th>
                      <?php

                      ?>
              </table>
          </div>
<br>
          <div class="confirm">
              <a href="gobill.php" type="button" class="con" style="
              background-color:	#90EE90 ;/* Green */ width: 200px;
    border: 	#32CD32c; float:right;
    color: white;
    padding: 5px 5px;
    text-align:center;
    text-decoration:none;
    display: inline-block;
    font-size: 24px;
    margin: 4px 2px;
    cursor: pointer;
">ยืนยันการสั่งซื้อ</a>
          </div>

      </div>
</body>
</html>