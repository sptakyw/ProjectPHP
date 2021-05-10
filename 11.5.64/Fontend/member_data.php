<?php session_start();?>
<?php include('showname.php');?>
<body>
 
  <div class="container">
    <?php include('navbar2.php');?>
    <img src="image1/sale.gif" class="img-fluid" alt="Responsive image">
    <?php include('navbar.php');?>
    <div class="row">
<?php
      include('h.php');
                //1. เชื่อมต่อ database:
                include('backend/condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM tbl_member WHERE m_name ='$m_name' ";
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                echo ' <table class="table table-hover">';
                  //หัวข้อตาราง 
                    echo "
                      <tr>
                      <td>id</td>
                      <td>m_user</td>
                      <td>m_pass</td>
                      <td>m_name</td>
                      <td>m_email</td>
                      <td>m_tel</td>
                      <td>m_address</td>
                      <td></td>
                      <td></td>                 
                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["member_id"] .  "</td> ";
                    echo "<td>" .$row["m_user"] .  "</td> ";
                    echo "<td>" .$row["m_pass"] .  "</td> ";
                    echo "<td>" .$row["m_name"] .  "</td> ";
                     echo "<td>" .$row["m_email"] .  "</td> ";
                     echo "<td>" .$row["m_tel"] .  "</td> ";
                      echo "<td>" .$row["m_address"] .  "</td> ";
                    //แก้ไขข้อมูล
                    echo "<td><a href='member.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";  
                    
                  echo "</tr>";
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>
                