<?php
//เชื่อมต่อฐานข้อมูล
require('config/condb.php');

//รับค่าที่มาจากฟอร์มแก้ไข
$item = $_GET["an"];

// $sql = "UPDATE hos.itemlist SET Name='$Name',descrip1='$des1',descrip2='$des2',descrip3='$des3',descrip4='$des4' where itemcode='$item' ";
$sql1 = "INSERT INTO payslip.chartclaim (idchart,an,datetoclaim,cname)
select a.idchart,a.an,a.datetoclaim,a.cname
from payslip.chartstatus a
where a.an = '$item'";
$result = mysqli_query($conn, $sql1);

if ($result) {
  header("location:chartstatus1.php");
  exit(0);
} else {
  echo "ไม่สามารถเพิ่มข้อมูลได้" . mysqli_error($conn);
}