<?php
//เชื่อมต่อฐานข้อมูล
require('config/condb.php');

//รับค่าที่มาจากฟอร์มแก้ไข
$des6 = $_POST["des"];
$des1 = $_POST["descrip1"];


$sql = "UPDATE payslip.ipdstatus SET adminname ='$des6', admindate = date(now()) where an ='$des1'";

$result = mysqli_query($conn, $sql);

if ($result) {
  header("location:datachartipd.php");
  exit(0);
} else {
  echo "ไม่สามารถแก้ไขข้อมูลได้" . mysqli_error($conn);
}
