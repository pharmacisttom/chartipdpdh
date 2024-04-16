<?php
//เชื่อมต่อฐานข้อมูล
require('config/condb.php');

//รับค่าที่มาจากฟอร์มแก้ไข
$des1 = $_POST["ant"];
$des2 = $_POST["des"];
$des3 = $_POST["d1"];
$des4 = $_POST["d2"];
$des5 = $_POST["d3"];
$des6 = $_POST["re"];
$des7 = $_POST["d4"];
$sql2 = "UPDATE payslip.chartclaim a SET a.cname='$des2',a.datetoclaim='$des3',a.remark1='$des7',a.datetoward= '$des4',a.datereturnfromward='$des5',a.charttoward='$des6',a.datestampedit1 = now() where a.an ='$des1'";

$result2 = mysqli_query($conn, $sql2);
if ($result2) {
  header("location:chartstatus3.php");
  exit(0);
} else {
  echo "ไม่สามารถแก้ไขข้อมูลได้" . mysqli_error($conn);
}
?>